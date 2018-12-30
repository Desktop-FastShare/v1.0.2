@echo off
echo Switching Directory to the bin Directory Server location...
cd /d "./apache2.0/bin"
echo Initilizing Browser tools...
start http://localhost:8345/
echo Browser initilized successfully on port 8345 over 127.0.0.1:8345/
echo Server starting at port 8345
echo Server started Successfully - Running on port 8345, over local address http://127.0.0.1:8345/
cmd /c "httpd.exe"
pause