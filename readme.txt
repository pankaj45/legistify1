To setup on localhost,

1) copy this folder in www(in wamp) or htdocs(in xampp)
2) go to application/config/config.php
   set $config['base_url'] = 'http://localhost/legistify1/'; // legistify1 is the name of folder
 
3) go to application/config/database.php
   set database parameters.


For signup, url is /signup

You have to post following keys
firstname,lastname,username,email,password,optradio   //optradio of user_type

You will get response as 1 if signup is successful otherwise 0(when username is not unique).


For login, url is /login

You have to post following keys
username1,password1  

You will get response as 1 if login is successful otherwise 0.