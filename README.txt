Instructions for use 
***********To view file open link 
localhost/test/NewApplication.php

In any empty or team databases:
run 
source os_team05.txt

to populate databases with tables required for .ZIP file to work. 

(have been checked for errors and included drop scripts) 


7 Required PHP files:
1. NewApplication.php - works
2. PersonalInformation.php - works with a "dummy" race value
3. ApplicationInformation.php - works
4. ConfirmationPage.php - work 1/3 
5. login.php (new) - works?
6. NewAccount.php (new) - almost working?
7. MyApplications.php (new) - not working

There are also changes to os_team05 databases:
1. New tables: USERS
2. New relations: MULTI_RACES (Races and Applications), MULTI_APPS (Users and Applications)
3. Yes/No type are changed to ENUM
4. Needed primary keys are changed to AUTO_INCREMENT
5. Readjusting length of varchar to include all characters of long major names in MAJORS table
6. Changed all table names to Pluralized versions (see .txt file for explanation). 



Also, most mistakes from M2 are changed. Changed in databases are combined in file os_team05.txt




--------------------------------------------------------------
1. Download Cisco VPN https://www.seattleu.edu/its/network/vpn/ and log in using vpn.seattleu.edu + username/password

Note: Run Setup from .ZIP file without extracting .ZIP file will result in fail installation. 

2. Open AMMPS, make sure PHP and MySQL is running


3. Copy all files from .ZIP file into /test folder in AMMPS (the one from ICE 11)
 
4. Open web browser and use the link localhost/test/login.php

Create new account or log in if you have already have an account. 

If the login page doesn't work, go to localhost/test/NewApplication.php and submit a regular application. Form inputs can be seen in databases

DB name: os_team05
Possible user name and password: os_nguye468 n53cyxam
Server: cssql.seattleu.edu

You only need to use the link localhost/test/NewApplication.php to access the entirety of Milestone4. The next button will take you to appropriate page(s). The other .php files are helper files and should not be accessed using the link method. 

Linh Nguyen 2018 Version 1.0

