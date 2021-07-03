import cv2
import numpy as np
import sys
import mysql.connector
import os
import face_recognition
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="crimerecord"
)
match=0
mycursor = mydb.cursor()
mycursor.execute("SELECT Crmid,Photo FROM tbl_criminaldetails")
myresult = mycursor.fetchall()
result =""
for x in myresult:
    id=x[0]
    orgi=x[1]
    original = cv2.imread(orgi)
    image_to_compare = cv2.imread(result)
    sift = cv2.xfeatures2d.SIFT_create()
    kp_1, desc_1 = sift.detectAndCompute(original, None)
    kp_2, desc_2 = sift.detectAndCompute(image_to_compare, None)
    index_params = dict(algorithm=0, trees=10)
    search_params = dict()
    flann = cv2.FlannBasedMatcher(index_params, search_params)
    matches = flann.knnMatch(desc_1, desc_2, k=2)
    good_points = []
    for m, n in matches:
        if m.distance < 0.6*n.distance:
            good_points.append(m)
# Define how similar they are
    number_keypoints = 0
    if len(kp_1) <= len(kp_2):
        number_keypoints = len(kp_1)
    else:
        number_keypoints = len(kp_2)
    match=len(good_points) / number_keypoints * 100
    if match > 50 :
        print(match, id, sep=",")
        break 
    elif len(good_points) > 1:
        print(match, id, sep=",")
        break 
cv2.waitKey(0)
cv2.destroyAllWindows()
