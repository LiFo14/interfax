#!/usr/bin/env python
# -*- coding: utf-8 -*-
from __future__ import print_function
import io
import sys

def searchWord(sword):
    word = u'Москва'
    with io.open('posts/post1.php', encoding='utf-8') as file:
        for line in file:
            if sword in line:
                print("ye")
                return True

if __name__ == "__main__":
    searchWord(sys.argv[1:])
