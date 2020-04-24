
- NOTE 1: SETTING UP PHP SERVER
+, To set up for a php server page, watch the video down below from 0:00 to 
20:00
+, Feel free to skip forward the video to save time
+, https://www.youtube.com/watch?v=OK_JCtrrv-c&t=1238s

- NOTE 1.5: SUMMARIZE HOW TO SET UP PHP
+, download .zip thread safe version on php.net. Extract all the files. Ignore these files
EXTRACTED, STORED IN C:\php
+, Set environment variable: setting the environment variable PATH to the pathway of your
php file that you just extracted (5:00 in video)
SET TO C:\php
+, Open command prompt, echo %PATH% to make sure the path of PHP file is in that variable
+, type php -v, if the version poped up, you're good
+, configuring server: 
--> on command prompt type this command to create web server:
 php -S localhost:4000
--> leave it for it to listen to the action of the server
--> Which path to choose to see result: watch this video from 14:30 - 20:00

SHOULD BE SOMETHING LIKE: http://localhost:4000/Desktop/
THE localhost:4000 START READING FILES FROM (C:\Users\trung)

- NOTE 2: FILES AND CONTENTS
+, site.php: first file, cover: basic syntaxs (variables, functions, arrays, loops
, conditional statements, part of predefined variables)
+, when click submit site.php, first.php will pop up
+, first.php: second file, cover: part of predifined variables, file manipulation
and object oriented

- NOTE 3: TO RUN THE CODE OF THIS FOLDER: 
+, Open command prompt, type: php -S localhost:4000
+, On web browser, on url row, type: http://localhost:4000/Desktop/Code/PHP_learn/site.php