::	windows 10 alias script
::	add file to %USERPROFILE%\cmdd 
::	run Ctrl+R cmdd

@echo off
TITLE Alias cmd script
IF EXIST laravel\ (cd laravel)

doskey gs=git status
::doskey gc=git commit $*

cmd /k