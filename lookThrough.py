#!/usr/bin/env python3
import sys

def searchWord():
    path = str(sys.argv[1])
    sword = str(sys.argv[2])
    sword = sword.decode("utf-8").lower()
    sword = sword.split(" ")
    state = False
    i = 0
    file = open(path, 'r')
    for line in file:
        line = line.decode("utf-8").lower()
        for word in sword:
            if word.lower() in line.lower():
                state = True
            i+=1
    if (state):
        print("1")
    else:
        print("0")

if __name__ == "__main__":
    searchWord()
