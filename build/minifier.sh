#!/bin/bash
# minifies js and css files
if [ -f $1 ]
then
    file=`echo $1 | sed 's/.src//'`
    java -jar yuicompressor-2.4.7.jar $1 -o $file --charset utf-8 --nomunge
fi