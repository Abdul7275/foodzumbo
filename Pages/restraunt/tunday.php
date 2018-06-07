<!DOCTYPE html>
<html lang="en">

<head>

  <title>TUNDAY KABABI...!!</title>
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
      height: 900px;
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
        <li class="active"><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <br><br><br><br><br><br><br><br><br><br>
      <h3><b>CATEGORIES</b></h3>
      <p><a href="#kabab">KABAB AND ROLLS</a></p>
      <p><a href="#mutton">MUTTON ITEMS</a></p>
      <p><a href="#biryani">BIRYANI</a></p>
      <p><a href="#chicken">CHICKEN ITEMSS</a></p>
      <p><a href="#others">OTHER ITEMS</a></p>
      <p><a href="#roti">ROTI AND PARATHA</a></p>
    </div>
    <div class="col-sm-7 text-left">
      <br><br>
      <a name="kabab"></a>
      <div style="text-align:center; position=fixed;">
        <a name="veg_items"></a>
        <h2 style="color:#A3190F;"><b>TUNDAY KABABI</b></h2>
        <h4 style="color:blue;"><b>Menu</b></h4>
      </div><form  action="tundaycheck.php" method="POST">
        <table width=100% class="menu" >
          <tr style="background-image:url(../../Images/tun_kabab.jpg); height:100px">
            <td>
            <h3 style="color:white"><b><center>KABAB AND ROLL</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
           </br>Tunday Galawati kabab
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_tunday_galawati_kabab" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_tunday_galawati_kabab" style="height:20px; width:40px"/>
              </span>
              </br></br><hr>Shami Kabab
              <span style="float:right">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.120.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_shami_kabab" style="height:20px; width:40px"/>
              </span>
              </br><hr>Boti Kabab
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.150.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_boti_kabab" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
              Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.300.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_boti_kabab" style="height:20px; width:40px"/>
              </span>
            </br><hr>Galawati Roll(2pc Kabab & 1pc paratha)
              <span style="float:right">
                Rs.65&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="galawati_roll_2kabab_1paratha" style="height:20px; width:40px"/>
              </span>
            </br></br><hr>Galawati Roll(1pc Kabab & 1pc paratha)
              <span style="float:right">
                Rs.40&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="galawati_roll_1kabab_1paratha" style="height:20px; width:40px"/>
              </span>
            </br></br><hr>Shami Kabab Roll(2pc Kabab & 1pc paratha)
              <a name="nutton"></a>
              <span style="float:right">
                Rs.75&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="shami_kabab_roll_2kabab_1paratha" style="height:20px; width:40px"/>
              </span>
            </br></br><hr>Shami Kabab Roll(1pc Kabab & 1pc paratha)
              <span style="float:right">
                Rs.45&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="shami_kabab_roll_1kabab_1paratha" style="height:20px; width:40px"/>
              </span>
            </td></tr>
         <br><tr style="background-image:url(../../Images/tun_mutton.jpg); height:100px"><br>
            <td>
            <h3 style="color:white"><b><center>MUTTON ITEMS</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
              </br>Mutton Stoo
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.150.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mutton_stoo" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.300.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mutton_stoo" style="height:20px; width:40px"/>
              </span></br><hr>
              Mutton Korma
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mutton_korma" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.250.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mutton_korma" style="height:20px; width:40px"/>
              </span>
              <a name="biryani"></a>
              </br><hr>Half Gravy
              <span style="float:right">
                Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_gravy" style="height:20px; width:40px"/>
              </span> 
            </td></tr>
            <tr style="background-image:url(../../Images/tun_biryani.jpg); height:100px"><br>
            <td>
            <h3 style="color:white"><b><center>BIRYANI</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
              </br>Mutton Biryani
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mutton_biryani" style="height:20px; width:40px"/>
              </span></br>
              <span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.250.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mutton_biryani" style="height:20px; width:40px"/>
              </span>
              </br><hr>Chicken Biryani
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.110.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_biryani" style="height:20px; width:40px"/>
              </span></br>
              <span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.220.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_biryani" style="height:20px; width:40px"/>
              </span></br> 
              <hr>Birayani Rice
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_biryani_rice" style="height:20px; width:40px"/>
              </span>
              <a name="chicken"></a> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_biryani_rice" style="height:20px; width:40px"/>
              </span></td></tr>
              <tr style="background-image:url(../../Images/tun_chicken.jpg); height:100px"><br>
            <td>
            <h3 style="color:white"><b><center>CHICKEN</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
              </br>Rosted Chicken
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_rosted_chicken" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.250.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_rosted_chicken" style="height:20px; width:40px"/>
              </span> 
              </br>
              <hr>Chicken Tangri
              <span style="float:right">
                  Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="chicken_tangri" style="height:20px; width:40px"/>
              </span>
              </br><hr>Chicken Tikka
              <span style="float:right">
                Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="chicken_tikka" style="height:20px; width:40px"/>
              </span>
              </br><hr>Chicken Kali Mirch
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_kali_mirch" style="height:20px; width:40px"/>
              </span>
              </br>
              <span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.390.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_kali_mirch" style="height:20px; width:40px"/>
              </span>
              </br><br>                
              <hr>Butter Chicken
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_butter_chicken" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.390.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_butter_chicken" style="height:20px; width:40px"/>
              </span></br>
              <hr>Chicken Masala
              <span style="float:right">
                Quarter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="quarter_chicken_masala" style="height:20px; width:40px"/>
              </span>
              </br>
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.200.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chicken_masala" style="height:20px; width:40px"/>
              </span>
              <a name="others"></a>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.390.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chicken_masala" style="height:20px; width:40px"/>
              </span>
              </td></tr>
               <tr style="background-image:url(../../Images/tun_others.jpg); height:100px"><br>
            <td>
            <h3 style="color:white"><b><center>OTHERS</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
              </br>Malai Tikka
              <span style="float:right">
                Rs.220.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="malai_tikka" style="height:20px; width:40px"/>
              </span>
              <hr>Fish Tikka
              <span style="float:right">
                Rs.250.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="fish_tikka" style="height:20px; width:40px"/>
              </span></br>                
              <hr>Extra Boti
              <span style="float:right">
                Rs.25.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="extra_boti" style="height:20px; width:40px"/>
              </span> 
              <hr>Extra Raita
              <span style="float:right">
                Rs.05.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="extra_raita" style="height:20px; width:40px"/>
              </span> <a name="roti"></a>
              <hr>Salad
              <span style="float:right">
                Rs.10.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="salad" style="height:20px; width:40px"/>
              </span></span></br>
            </td></tr>
            <tr style="background-image:url(../../Images/rotis.jpg); height:100px">
            <td>
            <h3 style="color:white"><b><center>ROTI AND PARATHA</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
              Mughlai Paratha
              <span style="float:right">
                Rs.15.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="mughlai_paratha" style="height:20px; width:40px"/>
              </span>
              <hr>Rumali Roti
              <span style="float:right">
                Rs.05.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="rumali_roti" style="height:20px; width:40px"/>
              </span>
              <br><br>                        
              <a name="about"></a> 
              <div align="center"><a name="order"><input class="btn btn-primary" type="submit" name="submit" value="Place order" /></a></div> 
              </br></b></br> </td></tr>
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
  <a href="www.facebook.com/foodzumbo"> <img src="../../Images/facebook_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
  <a href="#"> <img src="../../Images/twitter_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
  <a href="#"> <img src="../../Images/instagram_sq.png"></a>
</center>
</table>
  </div><hr>
  <div>
    <center>
      <h3><b>Takeaway</b></h3> <h4>Order with us online and pick up at your convenience</h4></center>

  Is the restaurant on your way to work or perhaps just down the street? Feel like having a walk?<br>
  You can place an order online with <b>FoodZumbo</b> and pick it up from your restaurant of choice.<br>
  We have many restaurants that have Takeaway feature so you can grab your favorite meal at <br>a go.
    </center>
  </div><hr>
  <div>
    <center>
      <b><h3>Contact Us.</h3></b>
      Feel free to contact with us at our Helpline no. <b>7068987538,&nbsp;8574925398,&nbsp;8273176768</b><br>
      For any Suggestions/Queries kindly mail us at <b>FoodZumbo@gmail.com</b>
    </center>
  </div>
</div>
</footer>

</body>
</html>