#!/usr/bin/env python
import sys

def searchWord():
    path = str(sys.argv[1])
    sword = str(sys.argv[2])
    state = False
    file = open(path, 'r')
    for line in file:
        if sword in line:
            state = True
    if (state):
        print(state)
    else:
        print(state)

if __name__ == "__main__":
    searchWord()
