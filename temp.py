import math
import os
import random
import re
import sys


def diagonalDifference(arr):
    ld = []
    rd = []
    j = len(arr[0])
    k = j - 1
    for i in range(j):
        ld.append(arr[i][i])
        rd.append(arr[i][k-i])
    if sum(ld) > sum(rd) :
        return sum(ld) - sum(rd)
    else:
        return sum(rd) - sum(ld)ld = []
    rd = []
    j = len(arr[0])
    k = j - 1
    for i in range(j):
        ld.append(arr[i][i])
        rd.append(arr[i][k-i])
    if sum(ld) > sum(rd) :
        return sum(ld) - sum(rd)
    else:
        return sum(rd) - sum(ld)
    

n = int(input().strip())
arr = []


for i in range(n):
    arr.append(list(map(int, input().rstrip().split())))

result = diagonalDifference(arr)
fptr.write(str(result) + '\n')
fptr.close()
