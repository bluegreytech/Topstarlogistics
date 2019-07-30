<?php
    error_reporting(0);
    error_reporting( ~E_DEPRECATED & ~E_NOTICE );
    session_start();

    $webstatus="developement";  //production, developement,local
    //$webstatus="local";  //production, developement,local
   


   if($webstatus=="developement"){
    define('DBHOST', 'localhost');
        define('DBUSER', 'topstarl_topstar');
          define('BASE_URL', 'www.topstarlogistics.com');
        define('DBPASS', '123@Topstarlogistics');
        define('DBNAME', 'topstarl_topstar');
        define('FROMNAME', 'Topstar Logistics');
        // define('USERNAME', 'bluegreyindia@gmail.com');
        // define('USERPASSWORD', 'Test@123');
        define('USERNAME', '_mainaccount@topstarlogistics.com');
        define('USERPASSWORD', 'r0Q{Qw\oT.s`)/zwpvK(');
        define('SETFROM', 'info@topstarlogistics.com');
        define('SETTO', 'info@topstarlogistics.com');
       // define('SETTO', 'mitnp16@gmail.com');        
    }else if($webstatus=="local"){
        define('DBHOST', '50.62.209.3:3306');
        define('DBUSER', 'userBluegreytech');
        define('DBPASS', 'Bluegreytech@123');
        define('DBNAME', 'bluegreytech');
        define('FROMNAME', 'BlurGrey');
        define('USERNAME', '');
        define('USERPASSWORD', '');
        define('SETFROM', '');
        define('SETTO', '');
        
      
    }

   
  
    $con = mysqli_connect(DBHOST,DBUSER,DBPASS)or die('server not connected'. mysqli_error());
    mysqli_select_db($con,DBNAME)or die('database not connected'. mysqli_error());

   
?>