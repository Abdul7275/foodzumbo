<!DOCTYPE html>
<html lang="en">

<head>

  <title>SUNDAE...!!</title>
  <meta charset="utf-8">
<meta name="description" content="Foodzumbo order food with Foodzumbo">
  <meta name="keywords" content="Foodzumbo order food with Foodzumbo">
  <meta name="author" content="Foodzumbo order food with Foodzumbo">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../CSS/restraunt.css">
  <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../CSS/normalise.css" />
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    .foot{
      padding-left: 12%;
      padding-right: 12%;
     }
  
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../../index.html">FoodZumbo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#about">About</a></li>
        <li class="active"><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <br><br><br><br><br><br>
       <p><a href="#snacks">SNACKS</a></p>
      <p><a href="#franky_and_pavbhaji">FRANKY AND PAVBHAJI</a></p>
      <p><a href="#chinese">CHINESE</a></p>
      <p><a href="#noodles">NOODLES</a></p>
      <p><a href="#rolls_pasta">ROLLS,PASTA</a></p>
      <p><a href="#fried_rice">FRIED RICE</a></p>
      <p><a href="#burgers">BURGERS</a></p>
      <p><a href="#pizzas">PIZZAS</a></p>
	  <p><a href="#parathas">PARATHAS</a></p>
	  <p><a href="#soups">SOUPS</a></p>
	  <p><a href="#south_indian">SOUTH INDIAN</a></p>
    </div>
    <div class="col-sm-7 text-left">
      <br><br>
      <div style="text-align:center; position=fixed;">
        <a name="veg_items"></a>
        <h2 style="color:#A3190F;"><b>SUNDAE</b></h2>
        <h4 style="color:blue;"><b>Menu</b></h4>
      </div><form  action="sundaecheckout.php" method="POST">
        <table width=100% class="menu" >
          <tr style="background-image:url(../../Images/vegitems.jpg); height:100px">
            <td>
            <h3 style="color:white"><b><center>SNACKS</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
           </br>                
              &nbsp;&nbsp;Veg Cutlet
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_cutlet" style="height:20px; width:40px"/>
              </span> </br>
			  <hr>&nbsp;&nbsp;Paneer Cutlet
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.75.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_cutlet" style="height:20px; width:40px"/>
              </span> </br>
			  <hr>&nbsp;&nbsp;Onion Pakoda
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="onion_pakoda" style="height:20px; width:40px"/>
              </span> </br>
			  <hr>&nbsp;&nbsp;Paneer Pakoda
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.75.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_pakoda" style="height:20px; width:40px"/>
              </span> </br>
			  <hr>&nbsp;&nbsp;French Fries
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="french_fries" style="height:20px; width:40px"/>
              </span> </br>
			  <hr>&nbsp;&nbsp;Paneer Fingers
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_fingers" style="height:20px; width:40px"/>
              </span> </br>
			  <hr>&nbsp;&nbsp;Veg Sandwich
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_sandwich" style="height:20px; width:40px"/>
              </span> </br>
			  <hr>&nbsp;&nbsp;Cheese Sandwich
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="cheese_sandwich" style="height:20px; width:40px"/>
              </span> </br>
			  <hr>&nbsp;&nbsp;Paneer Tikka
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_tikka" style="height:20px; width:40px"/>
              </span> </br>
			  
              
              </td></tr>
          <tr style="background-image:url(../../Images/mutton.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>FRANKY AND PAVBHAJI</center></b></h3>
             
            </td>
          </tr>
          <tr >
            <td style="line-height:2";><b>
              </br>&nbsp;&nbsp;Veg Franky
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_franky" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Paneer Franky
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.75.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_franky" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Cheese Franky
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.75.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="cheese_franky" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Doublemaska Pavbhaji
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="double_maska_pavbhaji" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Teekha Pavbhaji
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="teekha_pavbhaji" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Paneer Pavbhaji
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_pavbhaji" style="height:20px; width:40px"/>
              </span>
              </br>
			  </td></tr>
              
          <tr style="background-image:url(../../Images/chicken.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>CHINESE</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
          </br>             
           &nbsp;&nbsp;Chilly Paneer Gravy
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="chilly_paneer_gravy" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Chilly Paneer Dry
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="chilly_paneer_dry" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Veg Manchurian Gravy
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_manchurian_gravy" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Veg Manchurian Dry
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_manchurian_dry" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Paneer Manchurian
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_manchurian" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Cheese Manchurian
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="cheese_manchurian" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;American Chopsuey
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="american_chopsuey" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Hakka Noodles Gravy
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="hakka_noodles_gravy" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Hakka Noodles Dry
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="hakka_noodles_dry" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Paneer Schezwan
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_schezwan" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Crispy Baby Corns
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.155.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="crispy_baby_corns" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Crispy Chilly Potato(Hot)
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.145.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="crispy_chilly_potato_hot" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Crispy Chilly Potato(Sweet)
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.145.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="crispy_chilly_potato_sweet" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Paneer 75
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.155.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_75" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Ching Pong Crispeez
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.155.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="ching_pong_crispeez" style="height:20px; width:40px"/>
              </span>
              </br><hr>
              </td></tr>
              
          <tr style="background-image:url(../../Images/riceandbiryani.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>NOODLES</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
              </br>             
              &nbsp;&nbsp;Veg Chowmien
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_chowmien" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Paneer Chowmien
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_chowmien" style="height:20px; width:40px"/>
              </span>  
              </br><hr>&nbsp;&nbsp;Cheese Chowmien
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="cheese_chowmien" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;American Chowmien
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="american_chowmien" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;ALl In One Chowmien
              <span style="float:right">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="all_in_one_chowmien" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Chowmien Soup Style
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="chowmien_soup_style" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Chilli Garlic
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="chilli_garlic" style="height:20px; width:40px"/>
              </span> 
              </br>
			  </td></tr>
              
          <tr style="background-image:url(../../Images/chicken.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>ROLLS,PASTA</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
              </br>             &nbsp;&nbsp;Bread Roll
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="bread_roll" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Veg Spring Roll
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_spring_roll" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Noodles Spring Roll
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="noodles_spring_roll" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Paneer Spring Roll
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_spring_roll" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Mushroom Spring Roll
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="mushroom_spring_roll" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Chakkar Kachuri
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="chakkar_kachauri" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Cheese Balls
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="cheese_balls" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Italian Cream Pasta
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="italian_cream_pasta" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Tom Chi Pasta
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="tom_chi_pasta" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Fusili Bucati Pasta
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="fusili_bucati_pasta" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Veg Kathi Roll
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_kathi_roll" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Veg Kabab Roll
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_kabab_roll" style="height:20px; width:40px"/>
              </span> 
              </br>
              </td></tr>
          <tr style="background-image:url(../../Images/eggitems.jpg); height:100px">
            <td>
              
            <h3 ><b><center>FRIED RICE</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
         </br>                   
              &nbsp;&nbsp;Veg Fried Rice
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_fried_rice" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Paneer Fried Rice
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_fried_rice" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Cheese Fried Rice
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="cheese_fried_rice" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Mushroom Babycorn
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="mushroom_babycorn" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;All In One
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="all_in_one" style="height:20px; width:40px"/>
              </span> 
               
              </br><hr>&nbsp;&nbsp;Spicy Paneer Tit Bit
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="spicy_paneer_tit_bit" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Veg Biryani
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_biryani" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Paneer Biryani
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_biryani" style="height:20px; width:40px"/>
              </span> 
              </br><hr>         
              </td></tr>
          <tr style="background-image:url(../../Images/rotiandrolls.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>BURGERS</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
            </br>
              &nbsp;&nbsp;Veg Burger
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_burger" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Paneer Burger
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_burger" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Veg Cheese Burger
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_cheese_burger" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Cheese Pond
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="cheese_pond" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Veg Pond
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_pond" style="height:20px; width:40px"/>
              </span> 
              </br></td></tr>
              
          <tr style="background-image:url(../../Images/saladandcolddrink.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>PIZZAS</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>

 </br>                             
             &nbsp;&nbsp;Tomato Tango
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="tomato_tango" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Super Cheeese Bits
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.220.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="super_cheese_bits" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Exotic Veg
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.260.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="exotic_veg" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Veg Pizza
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_pizza" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Paneer Pizza
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.150.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_pizza" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Mushroom Pizza
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.160.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="mushroom_pizza" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;King Cheese Pizza
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.160.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="king_cheese_pizza" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Onion Capsicum Classic
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="onion_capsicum_classic" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Tripple C Pizza
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.150.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="triple_c_pizza" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Mushroom Babycorn Pizza
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.160.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="mushroom_babycorn_pizza" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Red Chilli Bijli
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.160.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="red_chilli_bijli" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Cheesy Macroni
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.160.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="cheesy_macroni" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Paneer Tikka Pizza
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.180.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_tikka_pizza" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Green Olive Vegetable
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="green_olive_vegetable" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Sundae Spl Pizza
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.300.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="sundae_spl_pizza" style="height:20px; width:40px"/>
              </span> 
              </br><hr> </td>

          </tr>
		       
          <tr style="background-image:url(../../Images/saladandcolddrink.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>PARATHAS</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>

 </br>                             
             &nbsp;&nbsp;Paneer Paratha
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_paratha" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Cheese Paratha
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="cheese_paratha" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Seasonal Paratha
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="seasonal_paratha" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Makke Di Roti Sarso da saag
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="makke_di_roti" style="height:20px; width:40px"/>
              </span> 
              </br></td></tr>
     
          <tr style="background-image:url(../../Images/saladandcolddrink.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>SOUPS</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>

 </br>                             
             &nbsp;&nbsp;Tomato Soup
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="tomato_soup" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Sweet Corn Soup
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="sweet_corn_soup" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Hot N Sour Vegetable
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="hot_n_sour_vegetable_soup" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Peking Soup
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="peking_soup" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Veg Soup
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_soup" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Mushroom Soup
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="mushroom_soup" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Masala Balls
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="masala_balls_soup" style="height:20px; width:40px"/>
              </span> 
              </br><hr> &nbsp;&nbsp;Manchow Soup
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="manchow_soup" style="height:20px; width:40px"/>
              </span> 
              </br><hr></td></tr>
			  
          <tr style="background-image:url(../../Images/saladandcolddrink.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>SOUTH NDIAN</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>

 </br>                             
             &nbsp;&nbsp;Paper Dosa
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paper_dosa" style="height:20px; width:40px"/>
              </span> 
              </br><hr> 
			  &nbsp;&nbsp;Masala Dosa
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="masala_dosa" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Onion Dosa
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="onion_dosa" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Paneer Masala Dosa
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_masala_dosa" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Shahi Paneer Dosa
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="shahi_paneer_dosa" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Butter Masala Dosa
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="butter_masala_dosa" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Sundae Spl Dosa
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="sundae_spl_dosa" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Chilly Paneer Dosa
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="chilly_paneer_dosa" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Idli Sambhar
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="idli_sambhar" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Idli Fry
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="idli_fry" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Onion Uttapam
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="onion_uttapam" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Mix Veg Uttapam
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="mix_veg_uttapam" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Paneer Uttapam
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.110.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_uttapam" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Fusion Dosa
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.110.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="fusion_dosa" style="height:20px; width:40px"/>
              </span> 
              </br><hr>&nbsp;&nbsp;Paneer Tikka Dosa
              <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_tikka_dosa" style="height:20px; width:40px"/>
              </span> 
              </br></br><a name="about"></a>

           <div align="center"><a name="order"><input class="btn btn-primary" type="submit" name="submit" value="Place order" /></a></div></br></br> 
        </td>
        </tr></table> </form>             
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <div class="foot">
  <div><center><h3>About us.</h3></center>
  <center><table>
  FoodZumbo is most convenient online food ordering site for all the colleges ,universities<br>
  and all the people of sultanpur.It connects people with the best restaurants around them. <br>
  Delivering only in sultanpur, FoodZumbo is the only site for delivering the best of foods<br>
  from the restaurants around you of your choice.<br>
  We believe food is a pleasure and food ordering should be fast and definitely a fun experience.<br>
  Ordering with foodzumbo is as easy as a 5-step recipe: enjoy n share ur experience with us!!!!!
  </table></center><hr></div>
  <div>
<table>
<center><h3><b>Get in Touch</b></h3></center>
<center>
  <a href="#"> <img src="../../Images/facebook_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
  <a href="#"> <img src="../../Images/twitter_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
  <a href="#"> <img src="../../Images/instagram_sq.png"></a>
</center>
</table>
  </div><hr>
  <div>
    <center><a name="contact"></a>
      <h3><b>Takeaway</b></h3> <h4>Order with us online and pick up at your convenience</h4></center>

  Is the restaurant on your way to work or perhaps just down the street? Feel like having a walk?<br>
  You can place an order online with <b>FoodZumbo</b> and pick it up from your restaurant of choice.<br>
  We have many restaurants that have Takeaway feature so you can grab your favorite meal at <br>a go.
    </center>
  </div><hr>
  <div>
    <center>
      <b><h3>Contact Us.</h3></b>
      Feel free to contact with us at our Helpline no. <b>7068987538,&nbsp;8273176768,&nbsp;8574925398</b><br>
      For any Suggestions/Queries kindly mail us at <b>FoodZumbo@gmail.com</b>
    </center>
  </div>
</div>
</footer>

</body>
</html>