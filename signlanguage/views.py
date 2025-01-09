from django.http import HttpResponse
from django.shortcuts import render
from .models import *
from django.shortcuts import redirect
# FILE UPLOAD AND VIEW
from  django.core.files.storage import FileSystemStorage
# SESSION
from django.conf import settings
from ML.classify import classify_image
from ML.classify_webcam import predict
import os

def first(request):
    return render(request,'index.html')

def index(request):
    return render(request,'index.html')

def register(request):
    if request.method=="POST":
        name=request.POST.get('name')
        email=request.POST.get('email')
        password=request.POST.get('password')
        cus=userregg(name=name,email=email,password=password)
        cus.save()
        return render(request,'register.html')
    else:
        return render(request,'register.html')


def login(request):
    return render(request,'login.html')

def addlogin(request):
    email = request.POST.get('email')
    password = request.POST.get('password')
    if email == 'admin@gmail.com' and password =='admin':
        request.session['logintdetail'] = email
        request.session['admin'] = 'admin'
        return redirect(index)

    elif userregg.objects.filter(email=email,password=password).exists():
        userdetails=userregg.objects.get(email=request.POST['email'], password=password)
        if userdetails.password == request.POST['password']:
            request.session['cuid'] = userdetails.id
     

            return redirect(index)
        

   
    else:
        return render(request, 'login.html', {'message':'Invalid Email or Password'})

def logout(request):
    session_keys = list(request.session.keys())
    for key in session_keys:
        del request.session[key]
    return redirect(first)

def upload(request):
    if request.method == "POST":
        if 'file' in request.FILES:
            image = request.FILES['file']
            save_path = os.path.join('ML', 'input', 'input.jpg')

            if os.path.exists(save_path):
                os.remove(save_path)

            with open(save_path, 'wb+') as destination:
                for chunk in image.chunks():
                    destination.write(chunk)

            predicted_sign = classify_image(save_path)

            return render(request, 'upload.html', {'predicted_sign': predicted_sign})
        else:

            return HttpResponse("No file uploaded.", status=400)
    else:
        return render(request, 'upload.html')


def web_cam(request):
    if request.method == "POST":
        result = predict()
        return render(request, 'web_cam.html')
    else:
        return render(request, 'web_cam.html')

def users(request):
    user=userregg.objects.all()
    return render(request,'userss.html',{'user':user})