import cv2
import numpy as np
import tensorflow as tf

def predict():
    # Disable tensorflow compilation warnings
    import os
    os.environ['TF_CPP_MIN_LOG_LEVEL'] = '2'

    def predict(image_data):
        predictions = sess.run(softmax_tensor, {'DecodeJpeg/contents:0': image_data})

        # Sort to show labels of first prediction in order of confidence
        top_k = predictions[0].argsort()[-len(predictions[0]):][::-1]

        max_score = 0.0
        res = ''
        for node_id in top_k:
            human_string = label_lines[node_id]
            score = predictions[0][node_id]
            if score > max_score:
                max_score = score
                res = human_string
        return res, max_score

    # Loads label file, strips off carriage return
    label_lines = [line.rstrip() for line in tf.gfile.GFile("ML/logs/output_labels.txt")]

    # Unpersists graph from file
    with tf.gfile.FastGFile("ML/logs/output_graph.pb", 'rb') as f:
        graph_def = tf.GraphDef()
        graph_def.ParseFromString(f.read())
        _ = tf.import_graph_def(graph_def, name='')

    with tf.Session() as sess:
        # Feed the image_data as input to the graph and get first prediction
        softmax_tensor = sess.graph.get_tensor_by_name('final_result:0')

        cap = cv2.VideoCapture(0)
        while True:
            ret, img = cap.read()
            img = cv2.flip(img, 1)

            if ret:
                image_data = cv2.imencode('.jpg', img)[1].tostring()
                res_tmp, score = predict(image_data)
                res = res_tmp

                cv2.putText(img, '%s' % (res.upper()), (100, 400), cv2.FONT_HERSHEY_SIMPLEX, 4, (255, 255, 255), 4)
                cv2.putText(img, '(score = %.5f)' % (float(score)), (100, 450), cv2.FONT_HERSHEY_SIMPLEX, 1,
                            (255, 255, 255))
                cv2.imshow("img", img)

                if cv2.waitKey(1) & 0xFF == ord('q'):
                    break

        cap.release()
        cv2.destroyAllWindows()

if __name__ == "__main__":
    predict()
