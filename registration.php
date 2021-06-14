<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LOGIN | SIGNUP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>  
 .myButton {
	box-shadow:inset 3px 2px 3px 0px #bd2121;
	background:linear-gradient(to bottom, #c12700 5%, #a72100 100%);
	background-color:#c1001a;
	border-radius:11px;
	border:1px solid #771212;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:16px;
	padding:15px 24px;
	text-decoration:none;
	text-shadow:0px -1px 0px #154682;
}
.myButton:hover {
	background:linear-gradient(to bottom, #a71300 5%, #c12700f1 100%);
	background-color:#a72700;
}
.myButton:active {
	position:relative;
	top:1px;
}




    *
       {
           padding: 0;
           margin: 0;
           box-sizing: border-box;
       }
       body
       {
           background-image: url("images/back.jpg");
           background-size: cover;
           background-position: center;
           font-family: 'Oswald', sans-serif;
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-size: 100% 100%;
           color: #fff;
       }
       
       .menu-bar
       {
           background:darkred;
           text-align: center;
           font-size: 15px;
       }
       .menu-bar ul
       {
           display: inline-flex;
           list-style: none;
           color: #fff;
       }
       .menu-bar ul li
       {
           width:120px;
           margin:15px;
           padding: 15px;
       }
       .menu-bar ul li a
       {
           text-decoration: none;
           color: #fff;
       }
       .active , .menu-ar ul li:hover
       {
           background: #000;
           border-radius: 2px;

       }
       .menu-bar fa
       {
           margin-left: 20px;
           float: left;
           padding-right: 5px;
       }
       .sub-menu-1
       {
           display:none;

       }
       .menu-bar ul li:hover  .sub-menu-1
       {
           display: block;
           position: absolute;
           background-color:darkred;
           margin-top: 15px;
           margin-left:-15px;
           z-index: 1000;
           
       }
       .menu-bar ul li:hover  .sub-menu-1 ul
       {
           display: block;
           margin:10px;
           
       }
       .menu-bar ul li:hover  .sub-menu-1 ul li
       {
           width:150px;
           padding:10px;
           border-bottom: 1px dotted #fff;
           background:transparent;
           border-radius: 0;
           text-align: left;
           color: white;
       }
       
       .menu-bar ul li:hover  .sub-menu-1 ul li:last-child
       {
           border-bottom: none;
       }
       .menu-bar ul li:hover  .sub-menu-1 ul a:hover
       {
           color: white;
       }
       .sub-menu-2
       {
           display: none;
       }
       .hover-me:hover .sub-menu-2
       {
           position: absolute;
           display: block;
           margin-top: -40px;
           margin-left:140px;
           background: darkred;
       }
       .header
       {
           padding-top: 0%;
       }
       .headings
       {
           font-size: xx-large;
           color: #fff;
       }
       .description
       {
           font-size: large;
           color: #fff;
       }
</style>  
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
  <?php require '_nav.php' ?>



 <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>

