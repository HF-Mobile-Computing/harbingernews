#!/usr/bin/python
from os import *

path =  raw_input("What is the path to the earliest file? '.' for current directory (Where this file is.)  ")

print 'If you want the old or new name to be the name of the folder, enter "folder" in the respective field.'

old = raw_input("What are the old names of the files? (Case Sensitive!) ")

new = raw_input("What will the new names be?  ")

rename(old,new)

for root, dirs, files in walk(path):
	for folder in dirs:
		if new == "folder":
			chdir(folder)
			rename(old, folder + ".php")
			chdir("../")
		elif old == "folder":
			chdir(folder)
			rename(folder, new)
			chdir("../")
		else:
			chdir(folder)
			rename(old, new)
			chdir("../")
