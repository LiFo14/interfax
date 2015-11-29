import mmap

def search():
	f = open('example.txt')
	s = mmap.mmap(f.fileno(), 0, access=mmap.ACCESS_READ)
	if s.find('blabla') != -1:
	    print 'true'