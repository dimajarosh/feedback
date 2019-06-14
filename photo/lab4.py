import sys
from mpi4py import MPI
import numpy as np
import math
import time

N=10.0
a=N
b=N*2
k=(N/2)
z=N**2
h=N/k

comm = MPI.COMM_WORLD
size = comm.Get_size()
rank = comm.Get_rank()

# print(size)
# print(rank)

for x in range(1, 4):
    print("Count of division: ", N);
    num_threads=1;
    while(num_threads<=size):
        comm.Barrier()
        if (rank==0):
            t1 = time.time()
        x=1.0
        while(x<=N+1):
            if (((x-a)//h)%num_threads==rank):
                y = (1+math.sin(math.sqrt(x+1)))/math.cos(12*z-4) 
            x=x+h
        comm.Barrier()
        if (rank==0):
            t2 = time.time()
            print("Number of threads: ", num_threads)
            print("Time: ",t2-t1)
            # print(y)
        num_threads=num_threads*2
        comm.Barrier()
    N = N * 100
