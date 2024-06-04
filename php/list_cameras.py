import cv2
import time

def list_cameras(timeout=2):
    index = 0
    arr = []
    while True:
        cap = cv2.VideoCapture(index)
        start_time = time.time()
        if not cap.isOpened():
            break
        while True:
            ret, frame = cap.read()
            if ret or (time.time() - start_time) > timeout:
                break
        if ret:
            arr.append(index)
        cap.release()
        index += 1
    return arr

if __name__ == "__main__":
    print("Available camera indexes: ", list_cameras())
