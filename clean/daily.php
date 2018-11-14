<?php include 'config.php'?>
<?php
    
    /*
    
    if day is passed via GET, show $day's coffee
    
    if it's today, shows $today's coffee
    
    place a link to show today's coffee (if on another day)
    
    */
    

if(isset($_GET['day']))
{//if day is passed via GET, show $day's coffee
    $today = $_GET['day'];
}else{//if it's today, shows $today's coffee
    $today = date('l');
}
    
//$today = date('l');  
    
//echo $today;
//die;
    
?>
<?php include 'header.php'?>

<p> <?=$today?>'s special is Pumpkin Spice!</p>

<p>Click below to find out what awesome flavors we have for each day of the week!</p>
<p><a href="daily.php?day=Sunday">Sunday</a></p>

<?php include 'footer.php'?>