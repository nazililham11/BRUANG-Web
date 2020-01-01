@echo off
mode con: cols=60 lines=20
title BRUANG - Running...

php artisan serve --host 127.0.0.1 --port 80
