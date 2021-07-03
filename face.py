import face_recognition
import sys
unkn = sys.argv[1]
kno = sys.argv[2]
known_image = face_recognition.load_image_file(kno)
unknown_image = face_recognition.load_image_file(unkn)
biden_encoding = face_recognition.face_encodings(known_image)[0]
unknown_encoding = face_recognition.face_encodings(unknown_image)[0]
results = face_recognition.compare_faces([biden_encoding], unknown_encoding)
if results[0] == True:
    a=1
    print(a)
else:
    b=0
    print (b)