#!/usr/bin/env python
import sys

def searchWord():
    path = str(sys.argv[1])
    sword = str(sys.argv[2])
    sword = sword.split(" ")
    state = False
    i = 0
    file = open(path, 'r')
    for line in file:
        for word in sword:
            if word in line:
                state = True
            i+=1
    if (state):
        print(state)
    """else:
        print(state) """

if __name__ == "__main__":
    searchWord()
