import subprocess

import time
import cv2
import pycurl
import StringIO


i=0

cam=cv2.VideoCapture(0)
ret_val, img= cam.read()
if not ret_val:
	while not ret_val:
		cam=cv2.VideoCapture(0)
		ret_val, img= cam.read()
	print('camera fixed!')

if True:
	
	        ret_val, img= cam.read()
		print(ret_val)
		cv2.imshow('image', img)  
		img_name = 'image_'+str(i)+'.png'
		cv2.imwrite(img_name, img)
		print('PIC CAPTURED')
		time.sleep(0.5)
		cv2.destroyAllWindows()
		
		response = StringIO.StringIO()
                c = pycurl.Curl()
                c.setopt(c.URL, 'https://gateway-a.watsonplatform.net/visual-recognition/api/v3/detect_faces?api_key=544f8cc7816a714aef3d2ecc23e5e8e0cca8b6db&version=2018-03-19')
                c.setopt(c.WRITEFUNCTION, response.write)
                c.setopt(c.POST, 1)
                c.setopt(c.HTTPPOST, [("images_file", (c.FORM_FILE, "image_"+str(i)+".png"))])
                c.setopt(pycurl.HTTPHEADER, ['Accept-Language: en'])
                c.perform()
                c.close()
                print response.getvalue()
                response.close()
                
                i=i+1

  

												

