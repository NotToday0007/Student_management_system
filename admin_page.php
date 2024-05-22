<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
    <style>
        body{
background-image:url(images/bg01.jpg);
background-position: center;
            background-size: cover;
            height: 590px;
        }
        ul{
    float: right;
    list-style: none;
    padding-top: 30px;
    padding-right: 30px;
    font-size: 18px;
    font-weight: bolder;
}
ul li{
    display: inline-block;
    padding: 8px;
}
ul li a{
    text-decoration: none;
    color: yellow;
    padding: 7px 15px;
border: radius 3px;
    border: 1px solid transparent;
    transition-delay: 0.9s ease ;
    background-color: purple;
    color: white;
}
a:hover{
    background-color: black;
    color: yellowgreen;
    
}
       #sport{
        float:left;
        padding-left: 30px;
        font-size: 46px;
        padding-top:0px;
        font-weight: bolder;
        color:White;
    
}
#user{
    color:yellowgreen;
   
   padding-top: 126px;
   margin-left: 31px;
}
#sport:hover{
    color: yellow;
}
       #coach{

        text-decoration:none;
       }
    </style>
</head>

   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Login</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="menu">
            <ul>
                <li><a id="coach" href="clubmember.php">Club Member</a></li>
                <li><a id="coach" href="homeplayer.php">Player</a></li>
                <li> <a id="coach" href="homecoach.php">Coach</a></li>
                <li><a id="coach" href="homeevent.php">Event</a></li>
                <li><a id="coach" href="homefund.php">Fund</a></li>
                <li><a id="coach" href="logout.php">Logout</a></li>
            </ul>
            <p id="sport">Sports Club</p>

            </header>
            <div class="container"> 

<div id ="user"  class="content">

   <h2 >Hi, <?php echo $_SESSION['admin_name'] ?></h2>
   <h2>Welcome to admin page</h2>
   
</div>
      
       
               
</body>
</html>