@echo off
set givenfile=%1
set file=%givenfile:.src=%
java -jar yuicompressor-2.4.7.jar %1 -o %file% --charset utf-8 --nomunge