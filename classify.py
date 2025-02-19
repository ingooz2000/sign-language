import os
import tensorflow as tf
import pyttsx3

def classify_image(image_path):
    # Disable tensorflow compilation warnings
    os.environ['TF_CPP_MIN_LOG_LEVEL'] = '2'

    # Read the image_data
    image_data = tf.io.gfile.GFile(image_path, 'rb').read()

    # Loads label file, strips off carriage return
    label_lines = [line.rstrip() for line in tf.io.gfile.GFile("ML/logs_fin/output_labels.txt")]

    # Unpersists graph from file
    with tf.io.gfile.GFile("ML/logs_fin/output_graph.pb", 'rb') as f:
        graph_def = tf.compat.v1.GraphDef()
        graph_def.ParseFromString(f.read())
        _ = tf.import_graph_def(graph_def, name='')

    max_score = 0
    output_label = ""

    with tf.compat.v1.Session() as sess:
        # Feed the image_data as input to the graph and get first prediction
        softmax_tensor = sess.graph.get_tensor_by_name('final_result:0')
        predictions = sess.run(softmax_tensor, {'DecodeJpeg/contents:0': image_data})

        # Sort to show labels of first prediction in order of confidence
        top_k = predictions[0].argsort()[-len(predictions[0]):][::-1]

        for node_id in top_k:
            human_string = label_lines[node_id]
            score = predictions[0][node_id]
            print('%s (score = %.5f)' % (human_string, score))
            if score > max_score:
                max_score = score
                output_label = human_string

    print("score:", max_score)
    print("output:", output_label)

    engine = pyttsx3.init()
    engine.say("The predicted sign is " + output_label)
    engine.save_to_file("The predicted sign is " + output_label, 'test.mp3')
    engine.runAndWait()
    engine.stop()

    with open("out.txt", "w") as file:
        file.write(output_label)

    return output_label
