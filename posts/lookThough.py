#!/usr/bin/env python
# -*- coding: utf-8 -*-
from __future__ import print_function
import io
import sys
import os

def searchWord(sword):
    sword = str(sword[-1])
    #word = u'Москва'
    posts = scanDir()
    #print("nuber of posts: ", len(posts))
    flist = "/"
    for name in posts:
        if str(name)=='lookThough.py':
            continue
        with io.open(name, encoding='utf-8') as file:
            for line in file:
                if sword in line:
                    print('found in ' + name, '\n.......appended')
                    flist+=str(name+"/")
    return flist

def scanDir():
    i = 0
    for f in os.walk('/var/www/interfax.ru/posts/'):
        #print(f[2])
        i+=1
    return f[2]

if __name__ == "__main__":
    searchWord(sys.argv[1:])
