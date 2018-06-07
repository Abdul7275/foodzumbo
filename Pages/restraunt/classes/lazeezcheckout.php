<?php 
include '../../Core/connection.php';
include '../../Core/Functions/general.php';
include '../../Core/Functions/user.php';

	$totalqty=0;
 	$Half_mutton_korma = secure($_POST['Half_mutton_korma']) ;
 	$Full_mutton_korma = secure($_POST['Full_mutton_korma']) ;
 	$Half_shahi_mutton_korma = secure($_POST['Half_shahi_mutton_korma']) ;
 	$Full_shahi_mutton_korma = secure($_POST['Full_shahi_mutton_korma']) ;
 	$quarter_mutton_gravy = secure($_POST['quarter_mutton_gravy']) ;
 	$Half_mutton_gravy = secure($_POST['Half_mutton_gravy']) ;
 	$Full_mutton_gravy = secure($_POST['Full_mutton_gravy']) ;
 	$Half_chicken_masala = secure($_POST['Half_chicken_masala']) ;
 	$Full_chicken_masala = secure($_POST['Full_chicken_masala']) ;
//  Half_chicken_chilli = secure($_POST['Half_chicken_chilli']) ;
 //	$Full_chicken_chilli = secure($_POST['Full_chicken_chilli']) ;
 	$Half_chicken_korma = secure($_POST['Half_chicken_korma']) ;
 	$Full_chicken_korma = secure($_POST['Full_chicken_korma']) ;
 	$Half_chicken_tikka_masala_boneless = secure($_POST['Half_chicken_tikka_masala_boneless']) ;
 	$Full_chicken_tikka_masala_boneless = secure($_POST['Full_chicken_tikka_masala_boneless']) ;
 	$Half_kadhai_chicken = secure($_POST['Half_kadhai_chicken']) ;
 	$Full_kadhai_chicken = secure($_POST['Full_kadhai_chicken']) ;
 	$Half_butter_chicken = secure($_POST['Half_butter_chicken']) ;
 	$Full_butter_chicken = secure($_POST['Full_butter_chicken']) ;
 	$Half_tawa_chicken = secure($_POST['Half_tawa_chicken']) ;
 	$Full_tawa_chicken = secure($_POST['Full_tawa_chicken']) ;
 	$Half_shahi_chicken = secure($_POST['Half_shahi_chicken']) ;
 	$Full_shahi_chicken = secure($_POST['Full_shahi_chicken']) ;
 	$quarter_chicken_gravy = secure($_POST['quarter_chicken_gravy']) ;
 	$Half_chicken_gravy = secure($_POST['Half_chicken_gravy']) ;
 	$Full_chicken_gravy = secure($_POST['Full_chicken_gravy']) ;
 	$Half_plain_rice = secure($_POST['Half_plain_rice']) ;
 	$Full_plain_rice = secure($_POST['Full_plain_rice']) ;
 	$Half_jeera_rice = secure($_POST['Half_jeera_rice']) ;
 	$Full_jeera_rice = secure($_POST['Full_jeera_rice']) ;
 	$Half_biryani_rice = secure($_POST['Half_biryani_rice']) ;
 	$Full_biryani_rice = secure($_POST['Full_biryani_rice']) ;
 	$Half_egg_biryani = secure($_POST['Half_egg_biryani']) ;
 	$Full_egg_biryani = secure($_POST['Full_egg_biryani']) ;
 	$Half_mutton_biryani = secure($_POST['Half_mutton_biryani']) ;
 	$Full_mutton_biryani = secure($_POST['Full_mutton_biryani']) ;
 	$Half_chicken_biryani = secure($_POST['Half_chicken_biryani']) ;
 	$Full_chicken_biryani = secure($_POST['Full_chicken_biryani']) ;
 	$Half_veg_fried_rice = secure($_POST['Half_veg_fried_rice']) ;
 	$Full_veg_fried_rice = secure($_POST['Full_veg_fried_rice']) ;
 	$Half_chicken_fried_rice = secure($_POST['Half_chicken_fried_rice']) ;
 	$Full_chicken_fried_rice = secure($_POST['Full_chicken_fried_rice']) ;
 	$Half_egg_chilli = secure($_POST['Half_egg_chilli']) ;
 	$Full_egg_chilli = secure($_POST['Full_egg_chilli']) ;
 	$Half_rosted = secure($_POST['Half_rosted']) ;
 	$Full_rosted = secure($_POST['Full_rosted']) ;
 	$Half_chicken_tikka = secure($_POST['Half_chicken_tikka']) ;
 	$Full_chicken_tikka = secure($_POST['Full_chicken_tikka']) ;
 	$Half_shami_kabab = secure($_POST['Half_shami_kabab']) ;
 	$Full_shami_kabab = secure($_POST['Full_shami_kabab']) ;
 	$Half_paneer_kadhai = secure($_POST['Half_paneer_kadhai']) ;
 	$Full_paneer_kadhai = secure($_POST['Full_paneer_kadhai']) ;
 	$Half_paneer_butter_masala = secure($_POST['Half_paneer_butter_masala']) ;
 	$Full_paneer_butter_masala = secure($_POST['Full_paneer_butter_masala']) ;
 	$Half_paneer_do_pyaza = secure($_POST['Half_paneer_do_pyaza']) ;
 	$Full_paneer_do_pyaza = secure($_POST['Full_paneer_do_pyaza']) ;
 	$Half_dal_butter_fry = secure($_POST['Half_dal_butter_fry']) ;
 	$Full_dal_butter_fry = secure($_POST['Full_dal_butter_fry']) ;
 	$Half_paneer_bhujiya = secure($_POST['Half_paneer_bhujiya']) ;
 	$Full_paneer_bhujiya = secure($_POST['Full_paneer_bhujiya']) ;
 	$Half_matar_paneer = secure($_POST['Half_matar_paneer']) ;
 	$Full_matar_paneer = secure($_POST['Full_matar_paneer']) ;
 	$Half_aloo_jeera = secure($_POST['Half_aloo_jeera']) ;
 	$Full_aloo_jeera = secure($_POST['Full_aloo_jeera']) ;
 	$Half_aloo_matar = secure($_POST['Half_aloo_matar']) ;
 	$Full_aloo_matar = secure($_POST['Full_aloo_matar']) ;
 	$Half_paneer_chilli = secure($_POST['Half_paneer_chilli']) ;
 	$Full_paneer_chilli = secure($_POST['Full_paneer_chilli']) ;
 	$Half_mushroom_masala = secure($_POST['Half_mushroom_masala']) ;
 	$Full_mushroom_masala = secure($_POST['Full_mushroom_masala']) ;
 	$Half_mushroom_matar = secure($_POST['Half_mushroom_matar']) ;
 	$Full_mushroom_matar = secure($_POST['Full_mushroom_matar']) ;
 	$Half_egg_curry = secure($_POST['Half_egg_curry']) ;
 	$Full_egg_curry = secure($_POST['Full_egg_curry']) ;
 	$Half_egg_bhurji_masala = secure($_POST['Half_egg_bhurji_masala']) ;
 	$Full_egg_bhurji_masala = secure($_POST['Full_egg_bhurji_masala']) ;
 	$cold_drink = secure($_POST['cold_drink']) ;
 	$onion_salad = secure($_POST['onion_salad']) ;
 	$green_salad = secure($_POST['green_salad']) ;
 	$roti = secure($_POST['roti']) ;
 	$paratha = secure($_POST['paratha']) ;
 	$egg_roll = secure($_POST['egg_roll']) ;
 	$kabab_roll = secure($_POST['kabab_roll']) ;
 	$Half_mutton_masala = secure($_POST['Half_mutton_masala']) ;
 	$Full_mutton_masala = secure($_POST['Full_mutton_masala']) ;
 	$Half_chicken_curry = secure($_POST['Half_chicken_curry']) ;
 	$Full_chicken_curry = secure($_POST['Full_chicken_curry']) ;
 	$totalqty=($Half_mutton_korma + $Full_mutton_korma + $Half_shahi_mutton_korma + $Full_shahi_mutton_korma + $quarter_mutton_gravy + $Half_mutton_gravy + $Full_mutton_gravy + $Half_chicken_masala + $Full_chicken_masala + $Half_chicken_korma + $Full_chicken_korma + $Half_chicken_tikka_masala_boneless + $Full_chicken_tikka_masala_boneless + $Half_kadhai_chicken + $Full_kadhai_chicken + $Half_butter_chicken + $Full_butter_chicken + $Half_tawa_chicken + $Full_tawa_chicken + $Half_shahi_chicken + $Full_shahi_chicken + $quarter_chicken_gravy + $Half_chicken_gravy + $Full_chicken_gravy + $Half_plain_rice + $Full_plain_rice + $Half_jeera_rice + $Full_jeera_rice + $Half_biryani_rice + $Full_biryani_rice + $Half_egg_biryani + $Full_egg_biryani + $Half_mutton_biryani + $Full_mutton_biryani + $Half_chicken_biryani + $Full_chicken_biryani + $Half_veg_fried_rice + $Full_veg_fried_rice + $Half_chicken_fried_rice + $Full_chicken_fried_rice + $Half_egg_chilli + $Full_egg_chilli + $Half_rosted + $Full_rosted + $Half_chicken_tikka + $Full_chicken_tikka + $Half_shami_kabab + $Full_shami_kabab + $Half_paneer_kadhai + $Full_paneer_kadhai + $Half_paneer_butter_masala + $Full_paneer_butter_masala + $Half_paneer_do_pyaza + $Full_paneer_do_pyaza + $Half_dal_butter_fry + $Full_dal_butter_fry + $Half_paneer_bhujiya +$Full_paneer_bhujiya +$Half_matar_paneer +$Full_matar_paneer + $Half_aloo_jeera + $Full_aloo_jeera + $Half_aloo_matar +$Full_aloo_matar + $Half_paneer_chilli + $Full_paneer_chilli + $Half_mushroom_masala + $Full_mushroom_masala +$Half_mushroom_matar + $Full_mushroom_matar +$Half_egg_curry +$Full_egg_curry + $Half_egg_bhurji_masala +$Full_egg_bhurji_masala +$cold_drink +$onion_salad +$green_salad +$roti +$paratha +$egg_roll +$kabab_roll +$Half_mutton_masala +$Full_mutton_masala +$Half_chicken_curry +$Full_chicken_curry); 
 	$totalamt=(($Half_mutton_korma*100) + ($Full_mutton_korma*200) + ($Half_shahi_mutton_korma*110) + ($Full_shahi_mutton_korma*220) + ($quarter_mutton_gravy*15) + ($Half_mutton_gravy*40) + ($Full_mutton_gravy*80) + ($Half_chicken_masala*90) + ($Full_chicken_masala*180) + ($Half_chicken_korma*100) + ($Full_chicken_korma*200) + ($Half_chicken_tikka_masala_boneless*100) + ($Full_chicken_tikka_masala_boneless*200) + ($Half_kadhai_chicken*100) + ($Full_kadhai_chicken*200) + ($Half_butter_chicken*100) + ($Full_butter_chicken*200) + ($Half_tawa_chicken*120) + ($Full_tawa_chicken*240) + ($Half_shahi_chicken*105) + ($Full_shahi_chicken*210) + ($quarter_chicken_gravy*15) + ($Half_chicken_gravy*40) + ($Full_chicken_gravy*80) + ($Half_plain_rice*40) + ($Full_plain_rice*80) + ($Half_jeera_rice*45) + ($Full_jeera_rice*90) + ($Half_biryani_rice*50) + ($Full_biryani_rice*100) + ($Half_egg_biryani*60) + ($Full_egg_biryani*120) + ($Half_mutton_biryani*90) + ($Full_mutton_biryani*180) + ($Half_chicken_biryani*70) + ($Full_chicken_biryani*140) + ($Half_veg_fried_rice*50) + ($Full_veg_fried_rice*100) + ($Half_chicken_fried_rice*70) + ($Full_chicken_fried_rice*140) + ($Half_egg_chilli*45) + ($Full_egg_chilli*90) + ($Half_rosted*120) + ($Full_rosted*240) + ($Half_chicken_tikka*90) + ($Full_chicken_tikka*180) + ($Half_shami_kabab*45) + ($Full_shami_kabab*90) + ($Half_paneer_kadhai*65) + ($Full_paneer_kadhai*130) + ($Half_paneer_butter_masala*65) + ($Full_paneer_butter_masala*130) + ($Half_paneer_do_pyaza*65) + ($Full_paneer_do_pyaza*130) + ($Half_dal_butter_fry*45) + ($Full_dal_butter_fry*90) + ($Half_paneer_bhujiya*60) +($Full_paneer_bhujiya*120) +($Half_matar_paneer*70) +($Full_matar_paneer*140) + ($Half_aloo_jeera*40) + ($Full_aloo_jeera*80) + ($Half_aloo_matar*50) +($Full_aloo_matar*100) + ($Half_paneer_chilli*60) + ($Full_paneer_chilli*120) + ($Half_mushroom_masala*60) + ($Full_mushroom_masala*120) +($Half_mushroom_matar*70) + ($Full_mushroom_matar*140) +($Half_egg_curry*50) +($Full_egg_curry*100) + ($Half_egg_bhurji_masala*40) +($Full_egg_bhurji_masala*80) +($cold_drink*14) +($onion_salad*5) +($green_salad*20) +($roti*5) +($paratha*10) +($egg_roll*25) +($kabab_roll*40) +($Half_mutton_masala*100) +($Full_mutton_masala*200) +($Half_chicken_curry*90) +($Full_chicken_curry*180)); 
 	
?>
<html>

<body>

		<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lazeez Checkout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel='stylesheet prefetch' href='../../fonts/fonts.otf'>
    <link rel='stylesheet prefetch' href='../../CSS/login.css'>
    <link rel="stylesheet" href="../../CSS/Login/style.css">
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 528px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #ffffff;
      
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 14px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 14px;
      }
      .row.content {height: auto;} 
    }
    .tab{
    	border-color: #000000;
    	border-width: 2px;
    }
    hr{
    	border-color: #33b5e5;
    	margin-top: 10px;
    	margin-bottom: 10px;
    }
table {
    border-collapse: collapse;
    width: 100%;

}

th, td {
    text-align: left;
    padding: 8px;
      padding-left: 20px;
       padding-right: 20px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
.foot{
  padding-left: 20%;
  padding-right: 20%;
  border-color: #33b5e5;
}
hr{
  margin-top: 0px;
  margin-bottom: 0px;
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
      <a class="navbar-brand" href="#">FoodZumbo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#about">About</a></li>
        <li class="active"><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav><br><br><br><br>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-9 sidenav">
<h4>Please Review your Order</h4>
	<center>
	
<table>
<tr><th><b><h4>Item</h4></b></th>
	<th><b><h4>Qty.</h4></b></th>
	<th><b><h4>Amount</h4></b></th></tr>
<tr>
	<td width=70% id=name>
		<?php
	if($Half_mutton_korma>"0")
 		echo '<font size=  2px>Half mutton korma</font><hr>' ;
 	if($Full_mutton_korma>"0")
 		echo '<font size=  2px>Full mutton korma</font><hr> ' ;
 	if($Half_shahi_mutton_korma>"0")
 		echo '<font size=  2px>Half shahi mutton korma</font><hr> ' ;
 	if($Half_shahi_mutton_korma>"0")
 		echo '<font size=  2px>Half shahi mutton korma</font><hr> ' ;
 	if($quarter_mutton_gravy>"0")
 		echo '<font size=  2px>quarter mutton gravy</font><hr> ' ;
    if($Half_mutton_gravy>"0")
 		echo '<font size=  2px>Half mutton gravy</font><hr> ' ;
 	if($Full_mutton_gravy>"0")
 		echo '<font size=  2px>Full mutton gravy</font><hr> ' ;
 	if($Half_chicken_masala>"0")
 		echo '<font size=  2px>Half chicken masala</font><hr> ' ;
 	if($Full_chicken_masala>"0")
 		echo '<font size=  2px>Full chicken masala</font><hr> ' ;
 //	if($Half_chicken_chilli>"0"||$Half_chicken_chilli!="")
 	//	echo '<font size=  2px>Half chicken chilli: '.$Half_chicken_chilli.'</br>' ;
 //	if($Full_chicken_chilli>"0"||$Full_chicken_chilli!="")
 	//	echo '<font size=  2px>Full chicken chilli: '.$Full_chicken_chilli.'</br>' ;
  	if($Half_chicken_korma>"0")
 		echo '<font size=  2px>Half chicken korma</font><hr> ' ;
 	if($Full_chicken_korma>"0")
 		echo '<font size=  2px>Full chicken korma</font><hr> ' ; 
 	if($Half_chicken_tikka_masala_boneless>"0")
 		echo '<font size=  2px>Half chicken tikka masala boneless</font><hr> ' ;
 	if($Full_chicken_tikka_masala_boneless>"0")
 		echo '<font size=  2px>Full chicken tikka masala boneless</font><hr> ' ;
 	if($Half_kadhai_chicken>"0")
 		echo '<font size=  2px>Half kadhai chicken</font><hr> ' ;
 	if($Full_kadhai_chicken>"0")
 		echo '<font size=  2px>Full kadhai chicken</font><hr> ' ;
 	if($Half_butter_chicken>"0")
 		echo '<font size=  2px>Half butter chicken</font><hr> ' ;
 	if($Full_butter_chicken>"0")
 		echo '<font size=  2px>Full butter chicken</font><hr> ' ;
 	if($Half_tawa_chicken>"0")
 		echo '<font size=  2px>Half tawa chicken</font><hr> ' ;
 	if($Full_tawa_chicken>"0")
 		echo '<font size=  2px>Full tawa chicken</font><hr> ' ;	
 	if($Half_shahi_chicken>"0")
 		echo '<font size=  2px>Half shahi chicken</font><hr> ' ;
 	if($Full_shahi_chicken>"0")
 		echo '<font size=  2px>Full shahi chicken</font><hr> ' ;
 	if($quarter_chicken_gravy>"0")
 		echo '<font size=  2px>quarter chicken gravy</font><hr> ' ;
    if($Half_chicken_gravy>"0")
 		echo '<font size=  2px>Half chicken gravy</font><hr> ' ;
 	if($Full_chicken_gravy>"0")
 		echo '<font size=  2px>Full chicken gravy</font><hr> ' ;	
 	if($Half_plain_rice>"0")
 		echo '<font size=  2px>Half plain rice</font><hr> ' ;
 	if($Full_plain_rice>"0")
 		echo '<font size=  2px>Full plain rice</font><hr> ' ;	
 	if($Half_jeera_rice>"0")
 		echo '<font size=  2px>Half jeera rice</font><hr> ' ;
 	if($Full_jeera_rice>"0")
 		echo '<font size=  2px>Full jeera rice</font><hr> ' ;
 	if($Half_biryani_rice>"0")
 		echo '<font size=  2px>Half biryani rice</font><hr> ' ;
 	if($Full_biryani_rice>"0")
 		echo '<font size=  2px>Full biryani rice</font><hr> ' ;
 	if($Half_egg_biryani>"0")
 		echo '<font size=  2px>Half egg biryani</font><hr> ' ;
 	if($Full_egg_biryani>"0")
 		echo '<font size=  2px>Full egg biryani</font><hr> ' ;
 	if($Half_mutton_biryani>"0")
 		echo '<font size=  2px>Half mutton biryani</font><hr> ' ;
 	if($Full_mutton_biryani>"0")
 		echo '<font size=  2px>Full mutton biryani</font><hr> ' ;
 	if($Half_chicken_biryani>"0")
 		echo '<font size=  2px>Half chicken biryani</font><hr> ' ;
 	if($Full_chicken_biryani>"0")
 		echo '<font size=  2px>Full chicken biryani</font><hr> ' ;
 	if($Half_veg_fried_rice>"0")
 		echo '<font size=  2px>Half veg fried rice</font><hr> ' ;
 	if($Full_veg_fried_rice>"0")
 		echo '<font size=  2px>Full veg fried rice</font><hr> ' ;
 	if($Half_chicken_fried_rice>"0")
 		echo '<font size=  2px>Half chicken fried rice</font><hr> ' ;
 	if($Full_chicken_fried_rice>"0")
 		echo '<font size=  2px>Full chicken fried rice</font><hr> ' ;
 	if($Half_egg_chilli>"0")
 		echo '<font size=  2px>Half egg chilli</font><hr> ' ;
 	if($Full_egg_chilli>"0")
 		echo '<font size=  2px>Full egg chilli</font><hr> ' ;
 	if($Half_rosted>"0")
 		echo '<font size=  2px>Half rosted</font><hr> ' ;
 	if($Full_rosted>"0")
 		echo '<font size=  2px>Full rosted</font><hr> ' ;
 	if($Half_chicken_tikka>"0")
 		echo '<font size=  2px>Half chicken tikka</font><hr> ' ;
 	if($Full_chicken_tikka>"0")
 		echo '<font size=  2px>Full chicken tikka</font><hr> ' ;
 	if($Half_shami_kabab>"0")
 		echo '<font size=  2px>Half shami kabab</font><hr> ' ;
 	if($Full_shami_kabab>"0")
 		echo '<font size=  2px>Full shami kabab</font><hr> ' ; 	
 	if($Half_paneer_kadhai>"0")
 		echo '<font size=  2px>Half paneer kadhai</font><hr> ' ;
 	if($Full_paneer_kadhai>"0")
 		echo '<font size=  2px>Full paneer kadhai</font><hr> ' ; 	
 	if($Half_paneer_butter_masala>"0")
 		echo '<font size=  2px>Half paneer butter masala</font><hr> ' ;
 	if($Full_paneer_butter_masala>"0")
 		echo '<font size=  2px>Full paneer butter masala</font><hr> ' ;
 	if($Half_paneer_do_pyaza>"0")
 		echo '<font size=  2px>Half paneer do pyaza</font><hr> ' ;
 	if($Full_paneer_do_pyaza>"0")
 		echo '<font size=  2px>Full paneer do pyaza</font><hr> ' ;
 	if($Half_dal_butter_fry>"0")
 		echo '<font size=  2px>Half dal butter fry</font><hr> ' ;
 	if($Full_dal_butter_fry>"0")
 		echo '<font size=  2px>Full dal butter fry</font><hr> ' ;
 	if($Half_paneer_bhujiya>"0")
 		echo '<font size=  2px>Half paneer bhujiya</font><hr> ' ;
 	if($Full_paneer_bhujiya>"0")
 		echo '<font size=  2px>Full paneer bhujiya</font><hr> ' ; 	
 	if($Half_matar_paneer>"0")
 		echo '<font size=  2px>Half matar paneer</font><hr> ' ;
 	if($Full_matar_paneer>"0")
 		echo '<font size=  2px>Full matar paneer</font><hr> ' ; 
 	if($Half_aloo_jeera>"0")
 		echo '<font size=  2px>Half aloo jeera</font><hr> ' ;
 	if($Full_aloo_jeera>"0")
 		echo '<font size=  2px>Full aloo jeera</font><hr> ' ; 		 		 	
 	if($Half_aloo_matar>"0")
 		echo '<font size=  2px>Half aloo matar</font><hr> ' ;
 	if($Full_aloo_matar>"0")
 		echo '<font size=  2px>Full aloo matar</font><hr> ' ; 
 	if($Half_paneer_chilli>"0")
 		echo '<font size=  2px>Half paneer chilli</font><hr> ' ;
 	if($Full_paneer_chilli>"0")
 		echo '<font size=  2px>Full paneer chilli</font><hr> ' ; 	
 	if($Half_mushroom_masala>"0")
 		echo '<font size=  2px>Half mushroom masala</font><hr> ' ;
 	if($Full_mushroom_masala>"0")
 		echo '<font size=  2px>Full mushroom masala</font><hr> ' ;
 	if($Half_mushroom_matar>"0")
 		echo '<font size=  2px>Half mushroom matar</font><hr> ' ;
 	if($Full_mushroom_matar>"0")
 		echo '<font size=  2px>Full mushroom matar</font><hr> ' ;
 	if($Half_egg_curry>"0")
 		echo '<font size=  2px>Half egg curry</font><hr> ' ;
 	if($Full_egg_curry>"0")
 		echo '<font size=  2px>Full egg curry</font><hr> ' ;
 	if($Half_egg_bhurji_masala>"0")
 		echo '<font size=  2px>Half egg bhurji masala</font><hr> ' ;
 	if($Full_egg_bhurji_masala>"0")
 		echo '<font size=  2px>Full egg bhurji masala</font><hr> ' ;
 	if($cold_drink>"0")
 		echo '<font size=  2px>Cold Drink</font><hr> ' ;
 	if($onion_salad>"0")
 		echo '<font size=  2px>onion salad</font><hr> ' ;
 	if($green_salad>"0")
 		echo '<font size=  2px>green salad</font><hr> ' ;
 	if($roti>"0")
 		echo '<font size=  2px>roti</font><hr> ' ;
 	if($paratha>"0")
 		echo '<font size=  2px>paratha</font><hr> ' ;
 	if($egg_roll>"0")
 		echo '<font size=  2px>Egg roll</font><hr> ' ;
 	if($kabab_roll>"0")
 		echo '<font size=  2px>Kabab roll</font><hr> ' ;
 	if($Half_mutton_masala>"0")
 		echo '<font size=  2px>Half mutton masala</font><hr> ' ;
 	if($Full_mutton_masala>"0")
 		echo '<font size=  2px>Full mutton masala</font><hr> ' ;
 	if($Half_chicken_curry>"0")
 		echo '<font size=  2px>Half chicken curry</font><hr> ' ;
 	if($Full_chicken_curry>"0")
 		echo '<font size=  2px>Full chicken curry</font><hr> ' ;

		?>
	</td>

	<td width=15% >
    <?php  
  if($Half_mutton_korma>"0")
 		echo '<font size=  2px>'.$Half_mutton_korma.'</font><hr>' ;
 	if($Full_mutton_korma>"0")
 		echo '<font size=  2px>'.$Full_mutton_korma.'</font><hr>' ;
 	if($Half_shahi_mutton_korma>"0")
 		echo '<font size=  2px> '.$Half_shahi_mutton_korma.'</font><hr>' ;
 	if($Half_shahi_mutton_korma>"0")
 		echo '<font size=  2px> '.$Half_shahi_mutton_korma.'</font><hr>' ;
 	if($quarter_mutton_gravy>"0")
 		echo '<font size=  2px>'.$quarter_mutton_gravy.'</font><hr>' ;
    if($Half_mutton_gravy>"0")
 		echo '<font size=  2px>'.$Half_mutton_gravy.'</font><hr>' ;
 	if($Full_mutton_gravy>"0")
 		echo '<font size=  2px> '.$Full_mutton_gravy.'</font><hr>' ;
 	if($Half_chicken_masala>"0")
 		echo '<font size=  2px> '.$Half_chicken_masala.'</font><hr>' ;
 	if($Full_chicken_masala>"0")
 		echo '<font size=  2px> '.$Full_chicken_masala.'</font><hr>' ;
 //	if($Half_chicken_chilli>"0")
 	//	echo '<font size=  2px> '.$Half_chicken_chilli.'</br>' ;
 //	if($Full_chicken_chilli>"0")
 	//	echo '<font size=  2px> '.$Full_chicken_chilli.'</br>' ;
  	if($Half_chicken_korma>"0")
 		echo '<font size=  2px>'.$Half_chicken_korma.'</font><hr>' ;
 	if($Full_chicken_korma>"0")
 		echo '<font size=  2px>'.$Full_chicken_korma.'</font><hr>' ;
 	if($Half_chicken_tikka_masala_boneless>"0")
 		echo '<font size=  2px> '.$Half_chicken_tikka_masala_boneless.'</font><hr>' ;
 	if($Full_chicken_tikka_masala_boneless>"0")
 		echo '<font size=  2px> '.$Full_chicken_tikka_masala_boneless.'</font><hr>' ;
 	if($Half_kadhai_chicken>"0")
 		echo '<font size=  2px> '.$Half_kadhai_chicken.'</font><hr>' ;
 	if($Full_kadhai_chicken>"0")
 		echo '<font size=  2px> '.$Full_kadhai_chicken.'</font><hr>' ;
 	if($Half_butter_chicken>"0")
 		echo '<font size=  2px> '.$Half_butter_chicken.'</font><hr>' ;
 	if($Full_butter_chicken>"0")
 		echo '<font size=  2px> '.$Full_butter_chicken.'</font><hr>' ;
 	if($Half_tawa_chicken>"0")
 		echo '<font size=  2px> '.$Half_tawa_chicken.'</font><hr>' ;
 	if($Full_tawa_chicken>"0")
 		echo '<font size=  2px> '.$Full_tawa_chicken.'</font><hr>' ;
 	if($Half_shahi_chicken>"0")
 		echo '<font size=  2px> '.$Half_shahi_chicken.'</font><hr>' ;
 	if($Full_shahi_chicken>"0")
 		echo '<font size=  2px> '.$Full_shahi_chicken.'</font><hr>' ;
 	if($quarter_chicken_gravy>"0")
 		echo '<font size=  2px> '.$quarter_chicken_gravy.'</font><hr>' ;
    if($Half_chicken_gravy>"0")
 		echo '<font size=  2px> '.$Half_chicken_gravy.'</font><hr>' ;
 	if($Full_chicken_gravy>"0")
 		echo '<font size=  2px> '.$Full_chicken_gravy.'</font><hr>' ;
 	if($Half_plain_rice>"0")
 		echo '<font size=  2px> '.$Half_plain_rice.'</font><hr>' ;
 	if($Full_plain_rice>"0")
 		echo '<font size=  2px> '.$Full_plain_rice.'</font><hr>' ;
 	if($Half_jeera_rice>"0")
 		echo '<font size=  2px> '.$Half_jeera_rice.'</font><hr>' ;
 	if($Full_jeera_rice>"0")
 		echo '<font size=  2px>'.$Full_jeera_rice.'</font><hr>' ;
 	if($Half_biryani_rice>"0")
 		echo '<font size=  2px>'.$Half_biryani_rice.'</font><hr>' ;
 	if($Full_biryani_rice>"0")
 		echo '<font size=  2px>'.$Full_biryani_rice.'</font><hr>' ;
 	if($Half_egg_biryani>"0")
 		echo '<font size=  2px> '.$Half_egg_biryani.'</font><hr>' ;
 	if($Full_egg_biryani>"0")
 		echo '<font size=  2px>'.$Full_egg_biryani.'</font><hr>' ;
 	if($Half_mutton_biryani>"0")
 		echo '<font size=  2px> '.$Half_mutton_biryani.'</font><hr>' ;
 	if($Full_mutton_biryani>"0")
 		echo '<font size=  2px>'.$Full_mutton_biryani.'</font><hr>' ;
 	if($Half_chicken_biryani>"0")
 		echo '<font size=  2px>'.$Half_chicken_biryani.'</font><hr>' ;
 	if($Full_chicken_biryani>"0")
 		echo '<font size=  2px> '.$Full_chicken_biryani.'</font><hr>' ;
 	if($Half_veg_fried_rice>"0")
 		echo '<font size=  2px> '.$Half_veg_fried_rice.'</font><hr>' ;
 	if($Full_veg_fried_rice>"0")
 		echo '<font size=  2px>'.$Full_veg_fried_rice.'</font><hr>' ;
 	if($Half_chicken_fried_rice>"0")
 		echo '<font size=  2px>'.$Half_chicken_fried_rice.'</font><hr>' ;
 	if($Full_chicken_fried_rice>"0")
 		echo '<font size=  2px>'.$Full_chicken_fried_rice.'</font><hr>' ;
 	if($Half_egg_chilli>"0")
 		echo '<font size=  2px>'.$Half_egg_chilli.'</font><hr>' ;
 	if($Full_egg_chilli>"0")
 		echo '<font size=  2px> '.$Full_egg_chilli.'</font><hr>' ;
 	if($Half_rosted>"0")
 		echo '<font size=  2px>'.$Half_rosted.'</font><hr>' ;
 	if($Full_rosted>"0")
 		echo '<font size=  2px>'.$Full_rosted.'</font><hr>' ;
 	if($Half_chicken_tikka>"0")
 		echo '<font size=  2px> '.$Half_chicken_tikka.'</font><hr>' ;
 	if($Full_chicken_tikka>"0")
 		echo 'Full chicken tikka: '.$Full_chicken_tikka.'</font><hr>' ;
 	if($Half_shami_kabab>"0")
 		echo '<font size=  2px>'.$Half_shami_kabab.'</font><hr>' ;
 	if($Full_shami_kabab>"0")
 		echo '<font size=  2px>'.$Full_shami_kabab.'</font><hr>' ;
 	if($Half_paneer_kadhai>"0")
 		echo '<font size=  2px>'.$Half_paneer_kadhai.'</font><hr>' ;
 	if($Full_paneer_kadhai>"0")
 		echo '<font size=  2px>'.$Full_paneer_kadhai.'</font><hr>' ;
 	if($Half_paneer_butter_masala>"0")
 		echo '<font size=  2px>'.$Half_paneer_butter_masala.'</font><hr>' ;
 	if($Full_paneer_butter_masala>"0")
 		echo '<font size=  2px>'.$Full_paneer_butter_masala.'</font><hr>' ;
 	if($Half_paneer_do_pyaza>"0")
 		echo '<font size=  2px>'.$Half_paneer_do_pyaza.'</font><hr>' ;
 	if($Full_paneer_do_pyaza>"0")
 		echo '<font size=  2px>'.$Full_paneer_do_pyaza.'</font><hr>' ;
 	if($Half_dal_butter_fry>"0")
 		echo '<font size=  2px> '.$Half_dal_butter_fry.'</font><hr>' ;
 	if($Full_dal_butter_fry>"0")
 		echo '<font size=  2px>'.$Full_dal_butter_fry.'</font><hr>' ;
 	if($Half_paneer_bhujiya>"0")
 		echo '<font size=  2px>'.$Half_paneer_bhujiya.'</font><hr>' ;
 	if($Full_paneer_bhujiya>"0")
 		echo '<font size=  2px>'.$Full_paneer_bhujiya.'</font><hr>' ;
 	if($Half_matar_paneer>"0")
 		echo '<font size=  2px>'.$Half_matar_paneer.'</font><hr>' ;
 	if($Full_matar_paneer>"0")
 		echo '<font size=  2px>'.$Full_matar_paneer.'</font><hr>' ;
 	if($Half_aloo_jeera>"0")
 		echo '<font size=  2px>'.$Half_aloo_jeera.'</font><hr>' ;
 	if($Full_aloo_jeera>"0")
 		echo '<font size=  2px>'.$Full_aloo_jeera.'</font><hr>' ;	 		 	
 	if($Half_aloo_matar>"0")
 		echo '<font size=  2px>'.$Half_aloo_matar.'</font><hr>' ;
 	if($Full_aloo_matar>"0")
 		echo '<font size=  2px>'.$Full_aloo_matar.'</font><hr>' ;
 	if($Half_paneer_chilli>"0")
 		echo '<font size=  2px>'.$Half_paneer_chilli.'</font><hr>' ;
 	if($Full_paneer_chilli>"0")
 		echo '<font size=  2px>'.$Full_paneer_chilli.'</font><hr>' ;
 	if($Half_mushroom_masala>"0")
 		echo '<font size=  2px>'.$Half_mushroom_masala.'</font><hr>' ;
 	if($Full_mushroom_masala>"0")
 		echo '<font size=  2px>'.$Full_mushroom_masala.'</font><hr>' ;
 	if($Half_mushroom_matar>"0")
 		echo '<font size=  2px>'.$Half_mushroom_matar.'</font><hr>' ;
 	if($Full_mushroom_matar>"0")
 		echo '<font size=  2px>'.$Full_mushroom_matar.'</font><hr>' ;
 	if($Half_egg_curry>"0")
 		echo '<font size=  2px>'.$Half_egg_curry.'</font><hr>' ;
 	if($Full_egg_curry>"0")
 		echo '<font size=  2px>'.$Full_egg_curry.'</font><hr>' ;
 	if($Half_egg_bhurji_masala>"0")
 		echo '<font size=  2px>'.$Half_egg_bhurji_masala.'</font><hr>' ;
 	if($Full_egg_bhurji_masala>"0")
 		echo '<font size=  2px>'.$Full_egg_bhurji_masala.'</font><hr>' ;
 	if($cold_drink>"0")
 		echo '<font size=  2px>'.$cold_drink.'</font><hr>' ;
 	if($onion_salad>"0")
 		echo '<font size=  2px> '.$onion_salad.'</font><hr>' ;
 	if($green_salad>"0")
 		echo '<font size=  2px>'.$green_salad.'</font><hr>' ;
 	if($roti>"0")
 		echo '<font size=  2px>'.$roti.'</font><hr>' ;
 	if($paratha>"0")
 		echo '<font size=  2px>'.$paratha.'</font><hr>' ;
 	if($egg_roll>"0")
 		echo '<font size=  2px>'.$egg_roll.'</font><hr>' ;
 	if($kabab_roll>"0")
 		echo '<font size=  2px>'.$kabab_roll.'</font><hr>' ;
 	if($Half_mutton_masala>"0")
 		echo '<font size=  2px>'.$Half_mutton_masala.'</font><hr>' ;
 	if($Full_mutton_masala>"0")
 		echo '<font size=  2px>'.$Full_mutton_masala.'</font><hr>' ;
 	if($Half_chicken_curry>"0")
 		echo '<font size=  2px>'.$Half_chicken_curry.'</font><hr>' ;
 	if($Full_chicken_curry>"0")
 		echo '<font size=  2px>'.$Full_chicken_curry.'</font><hr>' ;
 

		?>
	</td>
	<td width=15%>

			<?php
      
	if($Half_mutton_korma>"0")
 		echo '<font size=  2px>'.($Half_mutton_korma*100).'</font><hr>' ;
 	if($Full_mutton_korma>"0")
 		echo '<font size=  2px>'.($Full_mutton_korma*200).'</font><hr>' ;
 	if($Half_shahi_mutton_korma>"0")
 		echo '<font size=  2px> '.($Half_shahi_mutton_korma*110).'</font><hr>' ;
 	if($Half_shahi_mutton_korma>"0")
 		echo '<font size=  2px> '.($Half_shahi_mutton_korma*220).'</font><hr>' ;
 	if($quarter_mutton_gravy>"0")
 		echo '<font size=  2px>'.($quarter_mutton_gravy*15).'</font><hr>' ;
    if($Half_mutton_gravy>"0")
 		echo '<font size=  2px>'.($Half_mutton_gravy*40).'</font><hr>' ;
 	if($Full_mutton_gravy>"0")
 		echo '<font size=  2px> '.($Full_mutton_gravy*80).'</font><hr>' ;
 	if($Half_chicken_masala>"0")
 		echo '<font size=  2px> '.($Half_chicken_masala*90).'</font><hr>' ;
 	if($Full_chicken_masala>"0")
 		echo '<font size=  2px> '.($Full_chicken_masala*180).'</font><hr>' ;
 //	if($Half_chicken_chilli>"0"||$Half_chicken_chilli!="")
 	//	echo 'Half chicken chilli: '.$Half_chicken_chilli.'</br>' ;
 //	if($Full_chicken_chilli>"0"||$Full_chicken_chilli!="")
 	//	echo 'Full chicken chilli: '.$Full_chicken_chilli.'</br>' ;
  	if($Half_chicken_korma>"0")
 		echo '<font size=  2px>'.($Half_chicken_korma*100).'</font><hr>' ;
 	if($Full_chicken_korma>"0")
 		echo '<font size=  2px>'.($Full_chicken_korma*200).'</font><hr>' ;
 	if($Half_chicken_tikka_masala_boneless>"0")
 		echo '<font size=  2px> '.($Half_chicken_tikka_masala_boneless*100).'</font><hr>' ;
 	if($Full_chicken_tikka_masala_boneless>"0")
 		echo '<font size=  2px> '.($Full_chicken_tikka_masala_boneless*200).'</font><hr>' ;
 	if($Half_kadhai_chicken>"0")
 		echo '<font size=  2px> '.($Half_kadhai_chicken*100).'</font><hr>' ;
 	if($Full_kadhai_chicken>"0")
 		echo '<font size=  2px> '.($Full_kadhai_chicken*200).'</font><hr>' ;
 	if($Half_butter_chicken>"0")
 		echo '<font size=  2px> '.($Half_butter_chicken*100).'</font><hr>' ;
 	if($Full_butter_chicken>"0")
 		echo '<font size=  2px> '.($Full_butter_chicken*200).'</font><hr>' ;
 	if($Half_tawa_chicken>"0")
 		echo '<font size=  2px> '.($Half_tawa_chicken*120).'</font><hr>' ;
 	if($Full_tawa_chicken>"0")
 		echo '<font size=  2px> '.($Full_tawa_chicken*240).'</font><hr>' ;
 	if($Half_shahi_chicken>"0")
 		echo '<font size=  2px> '.($Half_shahi_chicken*105).'</font><hr>' ;
 	if($Full_shahi_chicken>"0")
 		echo '<font size=  2px> '.($Full_shahi_chicken*210).'</font><hr>' ;
 	if($quarter_chicken_gravy>"0")
 		echo '<font size=  2px> '.($quarter_chicken_gravy*15).'</font><hr>' ;
    if($Half_chicken_gravy>"0")
 		echo '<font size=  2px> '.($Half_chicken_gravy*40).'</font><hr>' ;
 	if($Full_chicken_gravy>"0")
 		echo '<font size=  2px> '.($Full_chicken_gravy*80).'</font><hr>' ;
 	if($Half_plain_rice>"0")
 		echo '<font size=  2px> '.($Half_plain_rice*40).'</font><hr>' ;
 	if($Full_plain_rice>"0")
 		echo '<font size=  2px> '.($Full_plain_rice*80).'</font><hr>' ;
 	if($Half_jeera_rice>"0")
 		echo '<font size=  2px> '.($Half_jeera_rice*45).'</font><hr>' ;
 	if($Full_jeera_rice>"0")
 		echo '<font size=  2px>'.($Full_jeera_rice*90).'</font><hr>' ;
 	if($Half_biryani_rice>"0")
 		echo '<font size=  2px>'.($Half_biryani_rice*50).'</font><hr>' ;
 	if($Full_biryani_rice>"0")
 		echo '<font size=  2px>'.($Full_biryani_rice*100).'</font><hr>' ;
 	if($Half_egg_biryani>"0")
 		echo '<font size=  2px> '.($Half_egg_biryani*60).'</font><hr>' ;
 	if($Full_egg_biryani>"0")
 		echo '<font size=  2px>'.($Full_egg_biryani*120).'</font><hr>' ;
 	if($Half_mutton_biryani>"0")
 		echo '<font size=  2px> '.($Half_mutton_biryani*90).'</font><hr>' ;
 	if($Full_mutton_biryani>"0")
 		echo '<font size=  2px>'.($Full_mutton_biryani*180).'</font><hr>' ;
 	if($Half_chicken_biryani>"0")
 		echo '<font size=  2px>'.($Half_chicken_biryani*70).'</font><hr>' ;
 	if($Full_chicken_biryani>"0")
 		echo '<font size=  2px> '.($Full_chicken_biryani*140).'</font><hr>' ;
 	if($Half_veg_fried_rice>"0")
 		echo '<font size=  2px> '.($Half_veg_fried_rice*50).'</font><hr>' ;
 	if($Full_veg_fried_rice>"0")
 		echo '<font size=  2px>'.($Full_veg_fried_rice*100).'</font><hr>' ;
 	if($Half_chicken_fried_rice>"0")
 		echo '<font size=  2px>'.($Half_chicken_fried_rice*70).'</font><hr>' ;
 	if($Full_chicken_fried_rice>"0")
 		echo '<font size=  2px>'.($Full_chicken_fried_rice*140).'</font><hr>' ;
 	if($Half_egg_chilli>"0")
 		echo '<font size=  2px>'.($Half_egg_chilli*45).'</font><hr>' ;
 	if($Full_egg_chilli>"0")
 		echo '<font size=  2px> '.($Full_egg_chilli*90).'</font><hr>' ;
 	if($Half_rosted>"0")
 		echo '<font size=  2px>'.($Half_rosted*120).'</font><hr>' ;
 	if($Full_rosted>"0")
 		echo '<font size=  2px>'.($Full_rosted*240).'</font><hr>' ;
 	if($Half_chicken_tikka>"0")
 		echo '<font size=  2px> '.($Half_chicken_tikka*90).'</font><hr>' ;
 	if($Full_chicken_tikka>"0")
 		echo 'Full chicken tikka: '.($Full_chicken_tikka*180).'</font><hr>' ;
 	if($Half_shami_kabab>"0")
 		echo '<font size=  2px>'.($Half_shami_kabab*30).'</font><hr>' ;
 	if($Full_shami_kabab>"0")
 		echo '<font size=  2px>'.($Full_shami_kabab*60).'</font><hr>' ;
 	if($Half_paneer_kadhai>"0")
 		echo '<font size=  2px>'.($Half_paneer_kadhai*65).'</font><hr>' ;
 	if($Full_paneer_kadhai>"0")
 		echo '<font size=  2px>'.($Full_paneer_kadhai*130).'</font><hr>' ;
 	if($Half_paneer_butter_masala>"0")
 		echo '<font size=  2px>'.($Half_paneer_butter_masala*65).'</font><hr>' ;
 	if($Full_paneer_butter_masala>"0")
 		echo '<font size=  2px>'.($Full_paneer_butter_masala*130).'</font><hr>' ;
 	if($Half_paneer_do_pyaza>"0")
 		echo '<font size=  2px>'.($Half_paneer_do_pyaza*65).'</font><hr>' ;
 	if($Full_paneer_do_pyaza>"0")
 		echo '<font size=  2px>'.($Full_paneer_do_pyaza*130).'</font><hr>' ;
 	if($Half_dal_butter_fry>"0")
 		echo '<font size=  2px> '.($Half_dal_butter_fry*45).'</font><hr>' ;
 	if($Full_dal_butter_fry>"0")
 		echo '<font size=  2px>'.($Full_dal_butter_fry*90).'</font><hr>' ;
 	if($Half_paneer_bhujiya>"0")
 		echo '<font size=  2px>'.($Half_paneer_bhujiya*60).'</font><hr>' ;
 	if($Full_paneer_bhujiya>"0")
 		echo '<font size=  2px>'.($Full_paneer_bhujiya*120).'</font><hr>' ;
 	if($Half_matar_paneer>"0")
 		echo '<font size=  2px>'.($Half_matar_paneer*70).'</font><hr>' ;
 	if($Full_matar_paneer>"0")
 		echo '<font size=  2px>'.($Full_matar_paneer*140).'</font><hr>' ;	 	
 		if($Half_aloo_jeera>"0")
 		echo '<font size=  2px>'.($Half_aloo_jeera*40).'</font><hr>' ;
 	if($Full_aloo_jeera>"0")
 		echo '<font size=  2px>'.($Full_aloo_jeera*80).'</font><hr>' ;	 	
 	if($Half_aloo_matar>"0")
 		echo '<font size=  2px>'.($Half_aloo_matar*50).'</font><hr>' ;
 	if($Full_aloo_matar>"0")
 		echo '<font size=  2px>'.($Full_aloo_matar*100).'</font><hr>' ;
 	if($Half_paneer_chilli>"0")
 		echo '<font size=  2px>'.($Half_paneer_chilli*60).'</font><hr>' ;
 	if($Full_paneer_chilli>"0")
 		echo '<font size=  2px>'.($Full_paneer_chilli*120).'</font><hr>' ;
 	if($Half_mushroom_masala>"0")
 		echo '<font size=  2px>'.($Half_mushroom_masala*60).'</font><hr>' ;
 	if($Full_mushroom_masala>"0")
 		echo '<font size=  2px>'.($Full_mushroom_masala*120).'</font><hr>' ;
 	if($Half_mushroom_matar>"0")
 		echo '<font size=  2px>'.($Half_mushroom_matar*70).'</font><hr>' ;
 	if($Full_mushroom_matar>"0")
 		echo '<font size=  2px>'.($Full_mushroom_matar*140).'</font><hr>' ;
 	if($Half_egg_curry>"0")
 		echo '<font size=  2px>'.($Half_egg_curry*50).'</font><hr>' ;
 	if($Full_egg_curry>"0")
 		echo '<font size=  2px>'.($Full_egg_curry*100).'</font><hr>' ;
 	if($Half_egg_bhurji_masala>"0")
 		echo '<font size=  2px>'.($Half_egg_bhurji_masala*40).'</font><hr>' ;
 	if($Full_egg_bhurji_masala>"0")
 		echo '<font size=  2px>'.($Full_egg_bhurji_masala*80).'</font><hr>' ;
 	if($cold_drink>"0")
 		echo '<font size=  2px>'.($cold_drink*14).'</font><hr>' ;
 	if($onion_salad>"0")
 		echo '<font size=  2px> '.($onion_salad*5).'</font><hr>' ;
 	if($green_salad>"0")
 		echo '<font size=  2px>'.($green_salad*20).'</font><hr>' ;
 	if($roti>"0")
 		echo '<font size=  2px>'.($roti*5).'</font><hr>' ;
 	if($paratha>"0")
 		echo '<font size=  2px>'.($paratha*10).'</font><hr>' ;
 	if($egg_roll>"0")
 		echo '<font size=  2px>'.($egg_roll*25).'</font><hr>' ;
 	if($kabab_roll>"0")
 		echo '<font size=  2px>'.($kabab_roll*40).'</font><hr>' ;
 	if($Half_mutton_masala>"0")
 		echo '<font size=  2px>'.($Half_mutton_masala*100).'</font><hr>' ;
 	if($Full_mutton_masala>"0")
 		echo '<font size=  2px>'.($Full_mutton_masala*200).'</font><hr>' ;
 	if($Half_chicken_curry>"0")
 		echo '<font size=  2px>'.($Half_chicken_curry*90).'</font><hr>' ;
 	if($Full_chicken_curry>"0")
 		echo '<font size=  2px>'.($Full_chicken_curry*180).'</font><hr>' ;

		?>
	</td>

	</td>
</tr>
<tr>
	<td><h4>Subtotal</h4></td>
	<td>
			<?php
			echo '<h4>'.$totalqty.'</h4>';
		?></td>
	<td>
			<?php
			echo '<h4>'.$totalamt.'</h4>';
		?>
	</td>
</tr>
</table>

     </center>
     <h5>Want to <b><a href=lazeez.php>Add/Remove</a></b> items</h5>


      </div>
    


    	<div class="col-sm-3">

          

          <div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
				  </div>
				  <div class="form">
				    <h2>SUMBMIT YOUR ORDER</h2>

				    <form role="form" method="post" action="orderplaced.php" autocomplete="off">
				      <div class="form-group"><input type="text" placeholder="Name" id="name" name="name" /></div>
				      <div class="form-group"><input type="textarea" placeholder="Address" id="address" name="address" required /></div>
				      <div class="form-group"><input type="number" placeholder="Mobile number" id="number" name="number" required /></div>
				      <div><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" ></div>



                            <?php require('includes/config.php');
                    // $name=$_POST['name'];
                   // $address=$_POST['address'];
                  //  $mobile_no=$_POST['mobile_no'];
            // if(isset($_POST['submit'])){
               //  if(strlen($name) < 3){
                 //  $error[] = 'Name is too short.';
                 // }
             ///     if(strlen($mobile_no) < 10){
                //   $error[] = 'Number not valid.';
                //  }
              if(isset($_POST['submit'])){
              //      if(!isset($error)){
                //   try {
                      //insert into database with a prepared statement
                  //   $stmt = $db->prepare('INSERT INTO order (name,mobile_no,address) VALUES (:name, :mobile_no, :address)');
                    // $stmt->execute(array(
                     //  ':name' => $name,
                   //    ':mobile_no' => $mobile_no,
                 //      ':address' => $address,
               //       ));
                      //send email
                      $to = "abdul.7275.ak@gmail.com";
                      $subject = "Order Details";
                      $body =file_get_contents('http://foodzumbo.com/Pages/restraunt/lazeezcheckout.php');
                      $mail = new Mail();
                      $mail->setFrom(SITEEMAIL);
                      $mail->addAddress($to);
                      $mail->subject($subject);
                      $mail->body($body);
                      $mail->send();
                    }      
            require('layout/header.php');
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="container-fluid">
   <div class="foot">
  <table>
<center><h3><b>Get in Touch</b></h3></center>
<center>
  <a href="http://www.facebook.com"> <img src="../../Images/facebook_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
  <a href="http://www.facebook.com"> <img src="../../Images/twitter_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
  <a href="http://www.facebook.com"> <img src="../../Images/instagram_sq.png"></a>
</center><br><hr>
</table>
<div>
    <center>
      <b><h3>Contact Us.</h3></b>
      Feel free to contact with us at our Helpline no. <b>7068987538,&nbsp;8273176768</b><br>
    </center>
  </div>
</div>
</footer>

</body>
</html>



	
</body>
</html>