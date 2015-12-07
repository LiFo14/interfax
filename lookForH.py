#!/usr/bin/env python3

import re
import sys

def lookFor():
    path = str(sys.argv[1])
    word = "<h1>"
    file = open(path, 'r')
    for line in file:
        if word in line:
            pullWord(line)

def pullWord(line):
    print(line[9:-6])

if __name__ == "__main__":
    lookFor()
