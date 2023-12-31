import socket
import threading

HEADER = 64
PORT = 5050
SERVER = "192.168.43.203"
ADDR = (SERVER, PORT)
FORMAT = "utf-8"
DISCONNECTED_MESSAGE = "!DISCONNECTED"

client = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
client.connect(ADDR)


def send_message(msg):
    message = msg.encode(FORMAT)
    msg_length = len(message)
    send_length = str(msg_length).encode(FORMAT)
    send_length += b" " * (HEADER - len(send_length))
    client.send(send_length)
    client.send(message)


connected = True
while connected:
    message = input("Message: ")
    if message == DISCONNECTED_MESSAGE:
        connected = False
    send_message(message)

client.close()
