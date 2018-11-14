<?php
/*
    config.php
    
    Stores configuration data for our app
    
*/

ob_start();//prevents header errors

define('DEBUG',TRUE); #we want to see all errors

include 'credentials.php';//database credentials
define('THIS_PAGE',basename($_SERVER['PHP_SELF']) );

//echo 'the constant is storing: ' . THIS_PAGE;

//die;

//default page values
$title= THIS_PAGE;
$siteName= 'Site Name';
$slogan= 'Whatever it is you do, we do it better';
$pageHeader= 'The developer forgot to put a pageHeader';
$subHeader= 'The developer forgot to put a subHeader';

switch(THIS_PAGE){
    case 'template.php':
        $title= 'Put PageID here';
        $pageHeader= 'My template page';
        $subHeader= 'Put more info about page here';
    break;
        
    case 'customer_list.php':
        $title= 'A list of our customers';
        $pageHeader= 'Our customers';
        $subHeader= 'Don\'t sue us, because we\'re using celebrity photos!';
    break;
        
    case 'db-test.php':
        $title= 'A database test page';
        $pageHeader= 'Database Test Page';
        $subHeader= 'Check this page to see if your credentials are good';
    break;
        
    case 'daily.php':
        $title= 'My Daily page';
        $pageHeader= 'Daily Coffee Specials';
        $subHeader= 'All our coffee specials';
    break;
        
    case 'contact.php':
        $title= 'My contact page';
        $pageHeader= 'Please contact us';
        $subHeader= 'We appreciate your feedback';
    break;   
}






function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}
