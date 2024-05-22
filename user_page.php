<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">  -->
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
    padding-top: 60px;
    padding-right: 30px;
    font-size: 17px;
    font-weight: bolder;
}
ul li{
    display: inline-block;
    padding: 15px;
}
ul li a{
    text-decoration: none;
    color: yellow;
    padding: 6px 13px;
   
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
        padding-left: 50px;
        font-size: 46px;
        padding-top:40px;
        font-weight: bolder;
        color:White;
        margin-bottom:none;}

        #join{
        float:left;
        padding-left: 23px;
        margin-top: 15px;
        font-size: 32px;
        font-weight: bolder;
        color:yellow;
        text-decoration: none;
        border: radius 3px;
    border: 1px solid transparent;
    transition-delay: 0.9s ease ;
    background-color: purple;
    color: white;
    
}

#join:hover{
    color: yellow;}
#user{
    color:yellowgreen;
   
   padding-top: 126px;
   margin-left: 0%;
 
   padding-left: 0px;
}
#sport:hover{
    color: yellow;
}
       #coach{

        text-decoration:none;
       }

       #clubjoin{
        padding-left: 0%;
        padding-right: 20px;
        
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
            <ul><li><a id="coach" href="userclubmember.php">club Member</a></li>
                <li><a id="coach" href="userplayer.php">Player</a></li>
                <li> <a id="coach" href="usercoach.php">Coach</a></li>
                <li><a id="coach" href="userevent.php">Event</a></li>
                <li><a id="coach" href="userfund.php">Fund</a></li>
                <li><a id="coach" href="logout.php">Logout</a></li>
            </ul>
            <p id="sport">Sports Club</p>
            <div class="container">

<div id ="user"  class="content">

   <h2 >Hi, <?php echo $_SESSION['user_name'] ?></h2>
   <h3>Welcome to user page</h3>
   <h3><a id="join" href="clubmember.php"><span id="clubjoin">Join Our Club</span></a></h3>
  
   
</div>
      
</header>
          
   
</div>
      
       
               
</body>
</html>