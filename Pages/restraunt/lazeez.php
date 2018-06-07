<!DOCTYPE html>
<html lang="en">

<head>

  <title>M.A. LAZEEZ HOTEL...!!</title>
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
       <p><a href="#veg_items">VEG ITEMS</a></p>
      <p><a href="#mutton">MUTTON</a></p>
      <p><a href="#chicken">CHICKEN</a></p>
      <p><a href="#rice_and_biryani">RICE AND BIRYANI</a></p>
      <p><a href="#dry_chicken">DRY CHICKEN</a></p>
      <p><a href="#egg">EGG</a></p>
      <p><a href="#roti_and_rolls">ROTI AND ROLLS</a></p>
      <p><a href="#salad">SALAD</a></p>
    </div>
    <div class="col-sm-7 text-left">
      <br><br>
      <div style="text-align:center; position=fixed;">
        <a name="veg_items"></a>
        <h2 style="color:#A3190F;"><b>M.A. LAZEEZ HOTEL</b></h2>
        <h4 style="color:blue;"><b>Menu</b></h4>
      </div><form  action="lazeezcheck.php" method="POST">
        <table width=100% class="menu" >
          <tr style="background-image:url(../../Images/vegitems.jpg); height:100px">
            <td>
            <h3 style="color:white"><b><center>VEG ITEMS</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
           </br>                
              &nbsp;&nbsp;Paneer Kadhai
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.65.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_kadhai" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_kadhai" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Paneer Butter Masala
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.65.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_butter_masala" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_butter_masala" style="height:20px; width:40px"/>
              </span></br>  </br>              
              <hr>&nbsp;&nbsp;Paneer Do Pyaza
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.65.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_do_pyaza" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_do_pyaza" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Dal Butter Fry
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.45.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_dal_butter_fry" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_dal_butter_fry" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Paneer Bhujiya
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_bhujiya" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_bhujiya" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Matar Paneer
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_matar_paneer" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_matar_paneer" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Aloo Jeera
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_aloo_jeera" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_aloo_jeera" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Aloo Matar
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_aloo_matar" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_aloo_matar" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Paneer Chilli
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_chilli" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_chilli" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Mushroom Masala
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mushroom_masala" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mushroom_masala" style="height:20px; width:40px"/>
              </span></br></br>                
              <hr>&nbsp;&nbsp;Mushroom Matar
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mushroom_matar" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
              <a name="mutton"></a>
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mushroom_matar" style="height:20px; width:40px"/>
              </span></br></br>
              </td></tr>
          <tr style="background-image:url(../../Images/mutton.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>MUTTON</center></b></h3>
             
            </td>
          </tr>
          <tr >
            <td style="line-height:2";><b>
              </br>&nbsp;&nbsp;Mutton Korma
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mutton_korma" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mutton_korma" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Shahi Mutton Korma
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.110.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_shahi_mutton_korma" style="height:20px; width:40px"/>
              </span></br>
              <span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.220.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_shahi_mutton_korma" style="height:20px; width:40px"/>
              </span><br></br>
               <hr>&nbsp;&nbsp;Mutton Masala 
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mutton_masala" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mutton_masala" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Extra Gravy
              <span style="float:right">
                Quarter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.15.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="quarter_mutton_gravy" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mutton_gravy" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
              <a name="chicken"></a>
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mutton_gravy" style="height:20px; width:40px"/>
              </span></br></br></td></tr>
              
          <tr style="background-image:url(../../Images/chicken.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>CHICKEN</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
          </br>             
           &nbsp;&nbsp;Chicken Masala
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_masala" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.180.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_masala" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Chicken Korma
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_korma" style="height:20px; width:40px"/>
              </span></br>
              <span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_korma" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Chicken Tikka Masala Boneless
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_tikka_masala_boneless" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_tikka_masala_boneless" style="height:20px; width:40px"/>
              </span></br></br>
              <hr>&nbsp;&nbsp;Kadhai Chicken
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_kadhai_chicken" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_kadhai_chicken" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Butter Chicken
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_butter_chicken" style="height:20px; width:40px"/>
              </span></br>
              <span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_butter_chicken" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Tawa Chicken
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_tawa_chicken" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
              Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.240.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_tawa_chicken" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Shahi Chicken Masala
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.105.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_shahi_chicken" style="height:20px; width:40px"/>
              </span>
              </br>
              <span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.210.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_shahi_chicken" style="height:20px; width:40px"/>
              </span></br>
              <br><hr>&nbsp;&nbsp;Chicken Curry
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_curry" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.180.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_curry" style="height:20px; width:40px"/>
              </span>
              </br>                
              <hr>&nbsp;&nbsp;Extra Gravy
              <span style="float:right">
                Quarter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.15.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="quarter_chicken_gravy" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_gravy" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
              <a name="rice_and_biryani"></a>
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_gravy" style="height:20px; width:40px"/>
              </span></br></br>
              </td></tr>
              
          <tr style="background-image:url(../../Images/riceandbiryani.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>RICE AND BIRYANI</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
              </br>             
              &nbsp;&nbsp;Plain Rice
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_plain_rice" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_plain_rice" style="height:20px; width:40px"/>
              </span>
              </br>                
              <hr>&nbsp;&nbsp;Jeera Rice
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.45.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_jeera_rice" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_jeera_rice" style="height:20px; width:40px"/>
              </span>
              </br>                
              <hr>&nbsp;&nbsp;Biryani Rice
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_biryani_rice" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_biryani_rice" style="height:20px; width:40px"/>
              </span>
              </br>                
              <hr>&nbsp;&nbsp;Egg Biryani
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_egg_biryani" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_egg_biryani" style="height:20px; width:40px"/>
              </span>
              </br>                
              <hr>&nbsp;&nbsp;Mutton Biryani
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mutton_biryani" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.180.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mutton_biryani" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Chicken Biryani
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_biryani" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_biryani" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Veg Fried Rice
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_veg_fried_rice" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_veg_fried_rice" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Chicken Fried Rice
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_fried_rice" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
              <a name="dry_chicken"></a>
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_fried_rice" style="height:20px; width:40px"/>
              </span></br></br></td></tr>
              
          <tr style="background-image:url(../../Images/chicken.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>CHICKEN DRY</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
              </br>             
              &nbsp;&nbsp;Egg Chilli
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.45.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_egg_chilli" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_egg_chilli" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Rosted
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_rosted" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.240.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_rosted" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Chicken Tikka
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_tikka" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
              <a name="kawab"></a>
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.180.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_tikka" style="height:20px; width:40px"/>
              </span></br><hr>              
              &nbsp;&nbsp;Shaami Kabab
              <span style="float:right">
                <a name="egg"></a>
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.30.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_shami_kabab" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_shami_kabab" style="height:20px; width:40px"/>
              </span></br></br>
              </td></tr>
          <tr style="background-image:url(../../Images/eggitems.jpg); height:100px">
            <td>
              
            <h3 ><b><center>EGG ITEMS</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
         </br>                   
              &nbsp;&nbsp;Egg Curry
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_egg_curry" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_egg_curry" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Egg Bhurji Masala
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_egg_bhurji_masala" style="height:20px; width:40px"/>
              </span>  <a name="roti_and_rolls"></a>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_egg_bhurji_masala" style="height:20px; width:40px"/>
              </span></br></br>                
              </td></tr>
          <tr style="background-image:url(../../Images/rotiandrolls.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>ROTI AND ROLLS</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
            </br>
              &nbsp;&nbsp;Roti
              <span style="float:right">
               Rs.5.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="roti" style="height:20px; width:40px"/>
              </span>                
              <hr>Paratha
              <span style="float:right">
                Rs.10.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paratha" style="height:20px; width:40px"/>
              </span>                
              <hr>&nbsp;&nbsp;Egg Role
              <span style="float:right">
                Rs.25.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="egg_roll" style="height:20px; width:40px"/>
              </span>                
              <hr>&nbsp;&nbsp;Kabab Role
              <a name="salad"></a>
              <span style="float:right">
                Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="kabab_roll" style="height:20px; width:40px"/>
              </span><br><br></td></tr>
              
          <tr style="background-image:url(../../Images/saladandcolddrink.jpg); height:100px">
            <td>
              
            <h3 style="color:white"><b><center>COLD DRINK AND SALAD</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>

 </br>                             
              &nbsp;&nbsp;Cold Drink
              <span style="float:right">
                Rs.14.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="cold_drink" style="height:20px; width:40px"/>
              </span><hr>
                            
              &nbsp;&nbsp;Onion Salad
              <span style="float:right">
                Rs.5.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="onion_salad" style="height:20px; width:40px"/>
              </span>       
          
              <hr>&nbsp;&nbsp;Green Salad
              <span style="float:right">
                Rs.20.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="green_salad" style="height:20px; width:40px"/>
              </span></br></br></br>                           
              <a name="about"></a> 
              <div align="center"><a name="order"><input class="btn btn-primary" type="submit" name="submit" value="Place order" /></a></div> 
              </br></b></br> </td>

          </tr>

        </table> </form>             
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