<?php

include '../../Core/Functions/general.php';
	$totalqty=0;
  $delivery=0;
  $discount=10;
 	$Half_kaleji_paneer = secure($_POST['Half_kaleji_paneer']) ;
 	$Full_kaleji_paneer = secure($_POST['Full_kaleji_paneer']) ;
 	$Half_matar_paneer = secure($_POST['Half_matar_paneer']) ;
 	$Full_matar_paneer = secure($_POST['Full_matar_paneer']) ;
 	$Half_paneer_butter_masala = secure($_POST['Half_paneer_butter_masala']) ;
 	$Full_paneer_butter_masala = secure($_POST['Full_paneer_butter_masala']) ;
 	$Half_shahi_paneer = secure($_POST['Half_shahi_paneer']) ;
 	$Full_shahi_paneer = secure($_POST['Full_shahi_paneer']) ;
 	$Half_savera_special_paneer = secure($_POST['Half_savera_special_paneer']) ;
 	$Full_savera_special_paneer = secure($_POST['Full_savera_special_paneer']) ;
 	$Half_kadhai_paneer = secure($_POST['Half_kadhai_paneer']) ;
 	$Full_kadhai_paneer = secure($_POST['Full_kadhai_paneer']) ;
 	$Half_paneer_bhujiya = secure($_POST['Half_paneer_bhujiya']) ;
 	$Full_paneer_bhujiya = secure($_POST['Full_paneer_bhujiya']) ;
 	$Half_malai_paneer = secure($_POST['Half_malai_paneer']) ;
 	$Full_malai_paneer = secure($_POST['Full_malai_paneer']) ;
 	$Half_malai_kofta = secure($_POST['Half_malai_kofta']) ;
 	$Full_malai_kofta = secure($_POST['Full_malai_kofta']) ;
 	$Half_mushroom_matar = secure($_POST['Half_mushroom_matar']) ;
 	$Full_mushroom_matar = secure($_POST['Full_mushroom_matar']) ;
 	$Half_mushroom_pyaza = secure($_POST['Half_mushroom_pyaza']) ;
 	$Full_mushroom_pyaza = secure($_POST['Full_mushroom_pyaza']) ;
 	$Half_aloo_pyaza = secure($_POST['Half_aloo_pyaza']) ;
 	$Full_aloo_pyaza = secure($_POST['Full_aloo_pyaza']) ;
 	$Half_aloo_dum_masala = secure($_POST['Half_aloo_dum_masala']) ;
 	$Full_aloo_dum_masala = secure($_POST['Full_aloo_dum_masala']) ;
 	$Half_aloo_zeera = secure($_POST['Half_aloo_zeera']) ;
 	$Full_aloo_zeera = secure($_POST['Full_aloo_zeera']) ;
 	$Half_aloo_matar = secure($_POST['Half_aloo_matar']) ;
 	$Full_aloo_matar = secure($_POST['Full_aloo_matar']) ;
 	$Half_seasonal_veg = secure($_POST['Half_seasonal_veg']) ;
 	$Full_seasonal_veg = secure($_POST['Full_seasonal_veg']) ;
 	$Half_mix_veg = secure($_POST['Half_mix_veg']) ;
 	$Full_mix_veg = secure($_POST['Full_mix_veg']) ;
 	$Half_chana_masala = secure($_POST['Half_chana_masala']) ;
 	$Full_chana_masala = secure($_POST['Full_chana_masala']) ;
 	$dal_fry_arhar = secure($_POST['dal_fry_arhar']) ;
 	$plain_dal_arhar = secure($_POST['plain_dal_arhar']) ;
 	$dal_butter_fry_arhar = secure($_POST['dal_butter_fry_arhar']) ;
 	$dal_handi = secure($_POST['dal_handi']) ;
 	$Half_plain_rice = secure($_POST['Half_plain_rice']) ;
 	$Full_plain_rice = secure($_POST['Full_plain_rice']) ;
 	$Half_zeera_rice = secure($_POST['Half_zeera_rice']) ;
 	$Full_zeera_rice = secure($_POST['Full_zeera_rice']) ;
 	$Half_matar_pulao = secure($_POST['Half_matar_pulao']) ;
 	$Full_matar_pulao = secure($_POST['Full_matar_pulao']) ;
 	$Half_paneer_pulao = secure($_POST['Half_paneer_pulao']) ;
 	$Full_paneer_pulao = secure($_POST['Full_paneer_pulao']) ;
 	$Half_veg_biryani = secure($_POST['Half_veg_biryani']) ;
 	$Full_veg_biryani = secure($_POST['Full_veg_biryani']) ;
 	$missi_roti = secure($_POST['missi_roti']) ;
 	$tandoori_roti = secure($_POST['tandoori_roti']) ;
 	$butter_tandoori_roti = secure($_POST['butter_tandoori_roti']) ;
 	$plain_nan = secure($_POST['plain_nan']) ;
 	$stuff_nan = secure($_POST['stuff_nan']) ;
 	$butter_nan = secure($_POST['butter_nan']) ;
 	$tandoori_laccha_paratha = secure($_POST['tandoori_laccha_paratha']) ;
 	$aloo_paratha = secure($_POST['aloo_paratha']) ;
 	$pyaz_paratha = secure($_POST['pyaz_paratha']) ;
 	$gobhi_paratha = secure($_POST['gobhi_paratha']) ;
 	$paneer_paratha = secure($_POST['paneer_paratha']) ;
 	$Half_plain_dahi = secure($_POST['Half_plain_dahi']) ;
 	$Full_plain_dahi = secure($_POST['Full_plain_dahi']) ;
 	$Half_boondi_raita = secure($_POST['Half_boondi_raita']) ;
 	$Full_boondi_raita = secure($_POST['Full_boondi_raita']) ;
 	$Half_green_salad = secure($_POST['Half_green_salad']) ;
 	$Full_green_salad = secure($_POST['Full_green_salad']) ;
 	$Half_onion_salad = secure($_POST['Half_onion_salad']) ;
 	$Full_onion_salad = secure($_POST['Full_onion_salad']) ;
 	$plain_dosa = secure($_POST['plain_dosa']) ;
 	$masala_dosa = secure($_POST['masala_dosa']) ;
 	$special_masala_dosa = secure($_POST['special_masala_dosa']) ;
 
 	$paneer_masala_dosa = secure($_POST['paneer_masala_dosa']) ;
 	$veg_uttapam = secure($_POST['veg_uttapam']) ;
 	$onion_uttapam = secure($_POST['onion_uttapam']) ;
 	$mix_uttapam = secure($_POST['mix_uttapam']) ;
 	
 	$chola_bhatura = secure($_POST['chola_bhatura']) ;
 	$pavbhaji = secure($_POST['pavbhaji']) ;
 	$veg_pakoda = secure($_POST['veg_pakoda']) ;
 	$paneer_pakoda = secure($_POST['paneer_pakoda']) ;
 	$veg_burger = secure($_POST['veg_burger']) ;
 	$paneer_burger = secure($_POST['paneer_burger']) ;
 	$spring_roll = secure($_POST['spring_roll']) ;
 	$Half_veg_chowmein = secure($_POST['Half_veg_chowmein']) ;
 	$Full_veg_chowmein = secure($_POST['Full_veg_chowmein']) ;
 	$Half_mushroom_chowmein = secure($_POST['Half_mushroom_chowmein']) ;
 	$Full_mushroom_chowmein = secure($_POST['Full_mushroom_chowmein']) ;
 	$Half_singapur_chowmein = secure($_POST['Half_singapur_chowmein']) ;
 	$Full_singapur_chowmein = secure($_POST['Full_singapur_chowmein']) ;
 	$Half_paneer_chowmein = secure($_POST['Half_paneer_chowmein']) ;
 	$Full_paneer_chowmein = secure($_POST['Full_paneer_chowmein']) ;
 	$Half_paneer_chilli = secure($_POST['Half_paneer_chilli']) ;
 	$Full_paneer_chilli = secure($_POST['Full_paneer_chilli']) ;
	$Half_veg_manchurian = secure($_POST['Half_veg_manchurian']) ;
	$Full_veg_manchurian = secure($_POST['Full_veg_manchurian']) ;
	$Half_veg_fried_rice = secure($_POST['Half_veg_fried_rice']) ;
 	$Full_veg_fried_rice = secure($_POST['Full_veg_fried_rice']) ;
 	$Half_mushroom_fried_rice = secure($_POST['Half_mushroom_fried_rice']) ;
 	$Full_mushroom_fried_rice = secure($_POST['Full_mushroom_fried_rice']) ;
 	$Half_paneer_fried_rice = secure($_POST['Half_paneer_fried_rice']) ;
 	$Full_paneer_fried_rice = secure($_POST['Full_paneer_fried_rice']) ;
 	$totalqty=($Half_kaleji_paneer + $Full_kaleji_paneer + $Half_matar_paneer + $Full_matar_paneer + $Half_paneer_butter_masala + $Full_paneer_butter_masala + $Half_shahi_paneer + $Full_shahi_paneer + $Half_savera_special_paneer + $Full_savera_special_paneer + $Half_kadhai_paneer + $Full_kadhai_paneer + $Half_paneer_do_pyaza + $Full_paneer_do_pyaza + $Half_paneer_bhujiya + $Full_paneer_bhujiya + $Half_malai_paneer + $Full_malai_paneer + $Half_malai_kofta + $Full_malai_kofta + $Half_mushroom_matar + $Full_mushroom_matar + $Half_mushroom_pyaza + $Full_mushroom_pyaza + $Half_aloo_pyaza + $Full_aloo_pyaza + $Half_aloo_dum_masala + $Full_aloo_dum_masala + $Half_aloo_zeera + $Full_aloo_zeera + $Half_aloo_matar + $Full_aloo_matar + $Half_seasonal_veg + $Full_seasonal_veg + $Half_mix_veg + $Full_mix_veg + $Half_chana_masala + $Full_chana_masala + $dal_fry_arhar + $plain_dal_arhar + $dal_butter_fry_arhar + $dal_handi + $Half_plain_rice + $Full_plain_rice + $Half_zeera_rice + $Full_zeera_rice + $Half_matar_pulao + $Full_matar_pulao + $Half_paneer_pulao + $Full_paneer_pulao + $Half_veg_biryani + $Full_veg_biryani + $missi_roti + $tandoori_roti + $butter_tandoori_roti + $plain_nan + $stuff_nan + $butter_nan + $tandoori_laccha_paratha + $aloo_paratha + $pyaz_paratha +$gobhi_paratha +$paneer_paratha +$Half_plain_dahi + $Full_plain_dahi + $Half_boondi_raita + $Full_boondi_raita +$Half_green_salad + $Full_green_salad + $Half_onion_salad + $Full_onion_salad + $plain_dosa +$masala_dosa + $special_masala_dosa +$savera_special_dosa +$paneer_masala_dosa + $veg_uttapam +$onion_uttapam +$mix_uttapam +$savera_special_uttapam +$chola_bhatura +$pavbhaji +$veg_pakoda +$paneer_pakoda +$veg_burger +$paneer_burger +$spring_roll +$Half_veg_chowmein + $Full_veg_chowmein + $Half_mushroom_chowmein + $Full_mushroom_chowmein +$Half_singapur_chowmein + $Full_singapur_chowmein +$Half_paneer_chowmein +$Full_paneer_chowmein + $Half_paneer_chilli +$Full_paneer_chilli +$Half_veg_manchurian +$Full_veg_manchurian +$Half_veg_fried_rice +$Full_veg_fried_rice +$Half_mushroom_fried_rice +$Full_mushroom_fried_rice +$Half_paneer_fried_rice +$Full_paneer_fried_rice);
 	$totalamt=(($Half_kaleji_paneer*80) + ($Full_kaleji_paneer*140) + ($Half_matar_paneer*70) + ($Full_matar_paneer*130) + ($Half_paneer_butter_masala*80) + ($Full_paneer_butter_masala*140) + ($Half_shahi_paneer*80) + ($Full_shahi_paneer*140) + ($Half_savera_special_paneer*80) + ($Full_savera_special_paneer*140) + ($Half_kadhai_paneer*80) + ($Full_kadhai_paneer*140) + ($Half_paneer_bhujiya*80) + ($Full_paneer_bhujiya*140) + ($Half_malai_paneer*80) + ($Full_malai_paneer*140) + ($Half_malai_kofta*75) + ($Full_malai_kofta*140) + ($Half_mushroom_matar*80) + ($Full_mushroom_matar*140) + ($Half_mushroom_pyaza*80) + ($Full_mushroom_pyaza*140) + ($Half_aloo_pyaza*50) + ($Full_aloo_pyaza*100) + ($Half_aloo_dum_masala*40) + ($Full_aloo_dum_masala*80) + ($Half_aloo_zeera*40) + ($Full_aloo_zeera*70) + ($Half_aloo_matar*40) + ($Full_aloo_matar*70) + ($Half_seasonal_veg*40) + ($Full_seasonal_veg*70) + ($Half_mix_veg*50) + ($Full_mix_veg*80) + ($Half_chana_masala*40) + ($Full_chana_masala*70) + ($dal_fry_arhar*60) + ($plain_dal_arhar*40) + ($dal_butter_fry_arhar*70) + ($dal_handi*70) + ($Half_plain_rice*35) + ($Full_plain_rice*65) + ($Half_zeera_rice*40) + ($Full_zeera_rice*75) + ($Half_matar_pulao*45) + ($Full_matar_pulao*75) + ($Half_paneer_pulao*60) + ($Full_paneer_pulao*100) + ($Half_veg_biryani*50) + ($Full_veg_biryani*90) + ($missi_roti*20) + ($tandoori_roti*6) + ($butter_tandoori_roti*8) + ($plain_nan*15) + ($stuff_nan*35) + ($butter_nan*20) + ($tandoori_laccha_paratha*20) + ($aloo_paratha*35) + ($pyaz_paratha*35) +($gobhi_paratha*35) +($paneer_paratha*45) +($Half_plain_dahi*25) + ($Full_plain_dahi*50) + ($Half_boondi_raita*30) + ($Full_boondi_raita*50) +($Half_green_salad*15) + ($Full_green_salad*30) + ($Half_onion_salad*10) + ($Full_onion_salad*20) + ($plain_dosa*45) +($masala_dosa*60) + ($special_masala_dosa*70) +($paneer_masala_dosa*80) + ($veg_uttapam*65) +($onion_uttapam*60) +($mix_uttapam*70) +($chola_bhatura*60) +($pavbhaji*50) +($veg_pakoda*40) +($paneer_pakoda*75) +($veg_burger*40) +($paneer_burger*60) +($spring_roll*60) +($Half_veg_chowmein*45) + ($Full_veg_chowmein*80) + ($Half_mushroom_chowmein*60) + ($Full_mushroom_chowmein*100) +($Half_singapur_chowmein*60) + ($Full_singapur_chowmein*100) +($Half_paneer_chowmein*50) +($Full_paneer_chowmein*90) + ($Half_paneer_chilli*80) +($Full_paneer_chilli*150) +($Half_veg_manchurian*70) +($Full_veg_manchurian*130) +($Half_veg_fried_rice*50) +($Full_veg_fried_rice*80) +($Half_mushroom_fried_rice*60) +($Full_mushroom_fried_rice*100) +($Half_paneer_fried_rice*60) +($Full_paneer_fried_rice*100));
    

  if($totalamt>"150"){


 	?>
<html>

<body>

		<!DOCTYPE html>
<html lang="en">
<head>
  <title>Savera Checkout</title>
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
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
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
    padding: 2px;
      padding-left: 5px;
       padding-right: 5px;
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
  margin-top: 2px;
  margin-bottom: 2px;
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
</nav><br><br><br><br>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-9 sidenav">
<h3>Please Review your Order</h3>
	<center>
	
<table class="tftable" width=10%>
<tr><th><b><h2>Item</h2></b></th>
	<th><b><h2>Qty.</h2></b></th>
	<th><b><h2>Amount</h2></b></th></tr>
<tr>
	<td width=80% id=name>

	<?php

  if($Half_kaleji_paneer>0)
    echo '<font size=2px>Half Kaleji Paneer</font><hr>' ;
  if($Full_kaleji_paneer>0)
    echo '<font size=2px>Full Kaleji Paneer<hr>' ;
  if($Half_matar_paneer>0)
    echo '<font size=2px>Half Matar Paneer</font><hr>' ;
  if($Full_matar_paneer>0)
    echo '<font size=2px>Full Matar Paneer</font><hr>' ;
    if($Half_paneer_butter_masala>0)
    echo '<font size=2px>Half Paneer Butter Masala</font><hr>' ;
  if($Full_paneer_butter_masala>0)
    echo '<font size=2px>Full Paneer Butter Masala</font><hr>' ;
  if($Half_shahi_paneer>0)
    echo '<font size=2px>Half Shahi Paneer</font><hr>' ;
  if($Full_shahi_paneer>0)
    echo '<font size=2px>Full Shahi Paneer</font><hr>' ;
  if($Half_savera_special_paneer>0)
    echo '<font size=2px>Half Savera Special Paneer</font><hr>' ;
  if($Full_savera_special_paneer>0)
    echo '<font size=2px>Full Savera Special Paneer</font><hr>' ;
  if($Half_kadhai_paneer>0)
    echo '<font size=2px>Half Kadhai Paneer</font><hr>' ;
  if($Full_kadhai_paneer>0)
    echo '<font size=2px>Full Kadhai Paneer</font><hr>' ; 
  if($Half_paneer_bhujiya>0)
    echo '<font size=2px>Half Paneer Bhujiya</font><hr>' ;
  if($Full_paneer_bhujiya>0)
    echo '<font size=2px>Full Paneer Bhujiya</font><hr>' ;
  if($Half_malai_paneer>0)
    echo '<font size=2px>Half Malai Paneer</font><hr>' ;
  if($Full_malai_paneer>0)
    echo '<font size=2px>Full Malai Paneer</font><hr>' ;
  if($Half_malai_kofta>0)
    echo '<font size=2px>Half Malai Kofta</font><hr>' ;
  if($Full_malai_kofta>0)
    echo '<font size=2px>Full Malai Kofta</font><hr>' ; 
  if($Half_mushroom_matar>0)
    echo '<font size=2px>Half Mushroom Matar</font><hr>' ;
  if($Full_mushroom_matar>0)
    echo '<font size=2px>Full Mushroom Matar</font><hr>' ;
  if($Half_mushroom_pyaza>0)
    echo '<font size=2px>Half Mushroom Pyaza</font><hr>' ;
  if($Full_mushroom_pyaza>0)
    echo '<font size=2px>Full Mushroom Pyaza</font><hr>' ;
  if($Half_aloo_pyaza>0)
    echo '<font size=2px>Half Aloo Pyaza</font><hr>' ;
  if($Full_aloo_pyaza>0)
    echo '<font size=2px>Full Aloo Pyaza</font><hr>' ;  
  if($Half_aloo_dum_masala>0)
    echo '<font size=2px>Half Aloo Dum Masala</font><hr>' ;
  if($Full_aloo_dum_masala>0)
    echo '<font size=2px>Full Aloo Dum Masala</font><hr>' ; 
  if($Half_aloo_zeera>0)
    echo '<font size=2px>Half Aloo Zeera</font><hr>' ;
  if($Full_aloo_zeera>0)
    echo '<font size=2px>Full Aloo Zeera</font><hr>' ;
  if($Half_aloo_matar>0)
    echo '<font size=2px>Half Aloo Matar</font><hr>' ;
  if($Full_aloo_matar>0)
    echo '<font size=2px>Full Aloo Matar</font><hr>' ;
  if($Half_seasonal_veg>0)
    echo '<font size=2px>Half Seasonal Veg</font><hr>' ;
  if($Full_seasonal_veg>0)
    echo '<font size=2px>Full Seasonal Veg</font><hr>' ;
  if($Half_mix_veg>0)
    echo '<font size=2px>Half Mix Veg</font><hr>' ;
  if($Full_mix_veg>0)
    echo '<font size=2px>Full Mix Veg</font><hr>' ;
  if($Half_chana_masala>0)
    echo '<font size=2px>Hot Chana Masala</font><hr>' ;
  if($Full_chana_masala>0)
    echo '<font size=2px>Full Chana Masala</font><hr>' ;
  if($Half_plain_rice>0)
    echo '<font size=2px>Half Plain Rice</font><hr>' ;
  if($Full_plain_rice>0)
    echo '<font size=2px>Full Plain Rice</font><hr>' ;
  if($Half_zeera_rice>0)
    echo '<font size=2px>Half Zeera Rice</font><hr>' ;
  if($Full_zeera_rice>0)
    echo '<font size=2px>Full Zeera Rice</font><hr>' ;
  if($Half_matar_pulao>0)
    echo '<font size=2px>Half Matar pulao</font><hr>' ;
  if($Full_matar_pulao>0)
    echo '<font size=2px>Full Matar pulao</font><hr>' ;
  if($Half_paneer_pulao>0)
    echo '<font size=2px>Half Paneer pulao</font><hr>' ;
  if($Full_paneer_pulao>0)
    echo '<font size=2px>Full Paneer pulao</font><hr>' ;
  if($Half_veg_biryani>0)
    echo '<font size=2px>Half Veg Biryani</font><hr>' ;
  if($Full_veg_biryani>0)
    echo '<font size=2px>Full Veg Biryani</font><hr>' ;
  if($missi_roti>0)
    echo '<font size=2px>Missi Roti</font><hr>' ;
  if($tandoori_roti>0)
    echo '<font size=2px>Tandoori Roti</font><hr>' ;  
  if($butter_tandoori_roti>0)
    echo '<font size=2px>Butter Tandoori Roti</font><hr>' ;
  if($plain_nan>0)
    echo '<font size=2px>Plain Nan</font><hr>' ;  
  if($stuff_nan>0)
    echo '<font size=2px>Stuff Nan</font><hr>' ;
  if($butter_nan>0)
    echo '<font size=2px>Butter Nan</font><hr>' ;
  if($tandoori_laccha_paratha>0)
    echo '<font size=2px>Tandoori Laccha Paratha</font><hr>' ;
  if($aloo_paratha>0)
    echo '<font size=2px>Aloo Paratha</font><hr>' ;
  if($pyaz_paratha>0)
    echo '<font size=2px>Pyaz Paratha</font><hr>' ;
  if($gobhi_paratha>0)
    echo '<font size=2px>Gobhi Paratha</font><hr>' ;
  if($paneer_paratha>0)
    echo '<font size=2px>Paneer Paratha</font><hr>' ;
  if($Half_plain_dahi>0)
    echo '<font size=2px>Half Plain Dahi</font><hr>' ;
  if($Full_plain_dahi>0)
    echo '<font size=2px>Full Plain Dahi</font><hr>' ;    
  if($Half_boondi_raita>0)
    echo '<font size=2px>Half Boondi Raita</font><hr>' ;
  if($Full_boondi_raita>0)
    echo '<font size=2px>Full Boondi Raita</font><hr>' ;  
  if($dal_fry_arhar>0)
    echo '<font size=2px>Dal Fry Arhar</font><hr>' ;          
  if($plain_dal_arhar>0)
    echo '<font size=2px>Plain Dal Arhar</font><hr>' ;          
  if($dal_butter_fry_arhar>0)
    echo '<font size=2px>Dal Butter Fry Arhar</font><hr>' ;          
  if($dal_handi>0)
    echo '<font size=2px>Dal Handi</font><hr>' ;          
  if($Half_green_salad>0)
    echo '<font size=2px>Half Green Salad</font><hr>' ;
  if($Full_green_salad>0)
    echo '<font size=2px>Full Green Salad</font><hr>' ;
  if($Half_onion_salad>0)
    echo '<font size=2px>Half onion Salad</font><hr>' ;
  if($Full_onion_salad>0)
    echo '<font size=2px>Full Green Salad</font><hr>' ;
  if($plain_dosa>0)
    echo '<font size=2px>Plain Dosa</font><hr>' ;
  if($masala_dosa>0)
    echo '<font size=2px>Masala Dosa</font><hr>' ;  
  if($special_masala_dosa>0)
    echo '<font size=2px>Special Masala Dosa</font><hr>' ;
  if($paneer_masala_dosa>0)
    echo '<font size=2px>paneer masala dosa</font><hr>' ;
  if($veg_uttapam>0)
    echo '<font size=2px>veg uttapam</font><hr>' ;
  if($onion_uttapam>0)
    echo '<font size=2px>onion uttapam</font><hr>' ;
  if($mix_uttapam>0)
    echo '<font size=2px>mix uttapam</font><hr>' ;

  if($chola_bhatura>0)
    echo '<font size=2px>chola bhatura</font><hr>' ;
  if($pavbhaji>0)
    echo '<font size=2px>pavbhaji</font><hr>' ;
  if($veg_pakoda>0)
    echo '<font size=2px>veg pakoda</font><hr>' ;
  if($paneer_pakoda>0)
    echo '<font size=2px>paneer pakoda</font><hr>' ;
  if($veg_burger>0)
    echo '<font size=2px>veg burger</font><hr>' ;
  if($paneer_burger>0)
    echo '<font size=2px>paneer burger</font><hr>' ;
  
  if($spring_roll>0)
    echo '<font size=2px>spring roll</font><hr>' ;
  if($Half_veg_chowmein>0)
    echo '<font size=2px>Half veg chowmein</font><hr>' ;
  if($Full_veg_chowmein>0)
    echo '<font size=2px>Full veg chowmein</font><hr>' ;
  if($Half_paneer_chowmein>0)
    echo '<font size=2px>Half paneer chowmein</font><hr>' ;
  if($Full_paneer_chowmein>0)
    echo '<font size=2px>Full paneer chowmein</font><hr>' ;
  if($Half_mushroom_chowmein>0)
    echo '<font size=2px>half mushroom chowmein</font><hr>' ;
  if($Full_mushroom_chowmein>0)
    echo '<font size=2px>Full mushroom chowmein</font><hr>' ;
  if($Half_singapur_chowmein>0)
    echo '<font size=2px>half singapur chowmein</font><hr>' ;
  if($Full_singapur_chowmein>0)
    echo '<font size=2px>full singapur chowmein</font><hr>' ;
  
  if($Half_paneer_chilli>0)
    echo '<font size=2px>Half paneer chilli</font><hr>' ;
  if($Full_paneer_chilli>0)
    echo '<font size=2px>Full paneer chilli</font><hr>' ;
   if($Half_veg_manchurian>0)
    echo '<font size=2px>half veg manchurian</font><hr>' ;
  if($Full_veg_manchurian>0)
    echo '<font size=2px>full veg manchurian</font><hr>' ;
  if($Half_veg_fried_rice>0)
    echo '<font size=2px>Half veg fried_rice</font><hr>' ;
  if($Full_veg_fried_rice>0)
    echo '<font size=2px>full veg fried rice</font><hr>' ;
  if($Half_mushroom_fried_rice>0)
    echo '<font size=2px>Half mushroom fried rice</font><hr>' ;
  if($Full_mushroom_fried_rice>0)
    echo '<font size=2px>Full mushroom fried rice</font><hr>' ;
  if($Half_paneer_fried_rice>0)
    echo '<font size=2px>half paneer fried rice</font><hr>' ;
  if($Full_paneer_fried_rice>0)
    echo '<font size=2px>Full paneer fried rice</font><hr>' ;
    echo '<font size=  2px>Discount</font><hr> ' ;
  
  ?>
	</td>

	<td width=10% >

	<?php

  if($Half_kaleji_paneer>0)
    echo '<font size=2px>'.$Half_kaleji_paneer.'</font><hr>' ;
  if($Full_kaleji_paneer>0)
    echo '<font size=2px>'.$Full_kaleji_paneer.'</font><hr>' ;
  if($Half_matar_paneer>0)
    echo '<font size=2px>'.$Half_matar_paneer.'</font><hr>' ;
  if($Full_matar_paneer>0)
    echo '<font size=2px>'.$Full_matar_paneer.'</font><hr>' ;
  if($Half_paneer_butter_masala>0)
    echo '<font size=2px>'.$Half_paneer_butter_masala.'</font><hr>' ;
  if($Full_paneer_butter_masala>0)
    echo '<font size=2px>'.$Full_paneer_butter_masala.'</font><hr>' ;
  if($Half_shahi_paneer>0)
    echo '<font size=2px>'.$Half_shahi_paneer.'</font><hr>' ;
  if($Full_shahi_paneer>0)
    echo '<font size=2px>'.$Full_shahi_paneer.'</font><hr>' ;
  if($Half_savera_special_paneer>0)
    echo '<font size=2px>'.$Half_savera_special_paneer.'</font><hr>' ;
  if($Full_savera_special_paneer>0)
    echo '<font size=2px>'.$Full_savera_special_paneer.'</font><hr>' ;
  if($Half_kadhai_paneer>0)
    echo '<font size=2px>'.$Half_kadhai_paneer.'</font><hr>' ;
  if($Full_kadhai_paneer>0)
    echo '<font size=2px>'.$Full_kadhai_paneer.'</font><hr>' ;
  if($Half_paneer_bhujiya>0)
    echo '<font size=2px>'.$Half_paneer_bhujiya.'</font><hr>' ;
  if($Full_paneer_bhujiya>0)
    echo '<font size=2px>'.$Full_paneer_bhujiya.'</font><hr>' ;
  if($Half_malai_paneer>0)
    echo '<font size=2px>'.$Half_malai_paneer.'</font><hr>' ;
  if($Full_malai_paneer>0)
    echo '<font size=2px>'.$Full_malai_paneer.'</font><hr>' ;
  if($Half_malai_kofta>0)
    echo '<font size=2px>'.$Half_malai_kofta.'</font><hr>' ;
  if($Full_malai_kofta>0)
    echo '<font size=2px>'.$Full_malai_kofta.'</font><hr>' ;
  if($Half_mushroom_matar>0)
    echo '<font size=2px>'.$Half_mushroom_matar.'</font><hr>' ;  
  if($Full_mushroom_matar>0)
    echo '<font size=2px>'.$Full_mushroom_matar.'</font><hr>' ;  
  if($Half_mushroom_pyaza>0)
    echo '<font size=2px>'.$Half_mushroom_pyaza.'</font><hr>' ;
  if($Full_mushroom_pyaza>0)
    echo '<font size=2px>'.$Full_mushroom_pyaza.'</font><hr>' ;
  if($Half_aloo_pyaza>0)
    echo '<font size=2px>'.$Half_aloo_pyaza.'</font><hr>' ;  
  if($Full_aloo_pyaza>0)
    echo '<font size=2px>'.$Full_aloo_pyaza.'</font><hr>' ;  
  if($Half_aloo_dum_masala>0)
    echo '<font size=2px>'.$Half_aloo_dum_masala.'</font><hr>' ;
  if($Full_aloo_dum_masala>0)
    echo '<font size=2px>'.$Full_aloo_dum_masala.'</font><hr>' ;
  if($Half_aloo_zeera>0)
    echo '<font size=2px>'.$Half_aloo_zeera.'</font><hr>' ;
  if($Full_aloo_zeera>0)
    echo '<font size=2px>'.$Full_aloo_zeera.'</font><hr>' ;
  if($Half_aloo_matar>0)
    echo '<font size=2px>'.$Half_aloo_matar.'</font><hr>' ;
  if($Full_aloo_matar>0)
    echo '<font size=2px>'.$Full_aloo_matar.'</font><hr>' ;
  if($Half_seasonal_veg>0)
    echo '<font size=2px>'.$Half_seasonal_veg.'</font><hr>' ;
  if($Full_seasonal_veg>0)
    echo '<font size=2px>'.$Full_seasonal_veg.'</font><hr>' ;
  if($Half_mix_veg>0)
    echo '<font size=2px>'.$Half_mix_veg.'</font><hr>' ;
  if($Full_mix_veg>0)
    echo '<font size=2px>'.$Full_mix_veg.'</font><hr>' ;
  if($Half_chana_masala>0)
    echo '<font size=2px>'.$Half_chana_masala.'</font><hr>' ;
  if($Full_chana_masala>0)
    echo '<font size=2px>'.$Full_chana_masala.'</font><hr>' ;
    if($Half_plain_rice>0)
    echo '<font size=2px>'.$Half_plain_rice.'</font><hr>' ;
  if($Full_plain_rice>0)
    echo '<font size=2px>'.$Full_plain_rice.'</font><hr>' ;
  if($Half_zeera_rice>0)
    echo '<font size=2px>'.$Half_zeera_rice.'</font><hr>' ;
  if($Full_zeera_rice>0)
    echo '<font size=2px>'.$Full_zeera_rice.'</font><hr>' ;
  if($Half_matar_pulao>0)
    echo '<font size=2px>'.$Half_matar_pulao.'</font><hr>' ;
  if($Full_matar_pulao>0)
    echo '<font size=2px>'.$Full_matar_pulao.'</font><hr>' ;
  if($Half_paneer_pulao>0)
    echo '<font size=2px>'.$Half_paneer_pulao.'</font><hr>' ;
  if($Full_paneer_pulao>0)
    echo '<font size=2px>'.$Full_paneer_pulao.'</font><hr>' ;
  if($Half_veg_biryani>0)
    echo '<font size=2px>'.$Half_veg_biryani.'</font><hr>' ;
  if($Full_veg_biryani>0)
    echo '<font size=2px>'.$Full_veg_biryani.'</font><hr>' ;
  if($missi_roti>0)
    echo '<font size=2px>'.$missi_roti.'</font><hr>' ;
  if($tandoori_roti>0)
    echo '<font size=2px>'.$tandoori_roti.'</font><hr>' ;  
  if($butter_tandoori_roti>0)
    echo '<font size=2px>'.$butter_tandoori_roti.'</font><hr>' ;
  if($plain_nan>0)
    echo '<font size=2px>'.$plain_nan.'</font><hr>' ;          
  if($stuff_nan>0)
    echo '<font size=2px>'.$stuff_nan.'</font><hr>' ;          
  if($butter_nan>0)
    echo '<font size=2px>'.$butter_nan.'</font><hr>' ;          
  if($tandoori_laccha_paratha>0)
    echo '<font size=2px>'.$tandoori_laccha_paratha.'</font><hr>' ; 
  if($aloo_paratha>0)
    echo '<font size=2px>'.$aloo_paratha.'</font><hr>' ;
  if($pyaz_paratha>0)
    echo '<font size=2px>'.$pyaz_paratha.'</font><hr>' ;  
  if($gobhi_paratha>0)
    echo '<font size=2px>'.$gobhi_paratha.'</font><hr>' ;
  if($paneer_paratha>0)
    echo '<font size=2px>'.$paneer_paratha.'</font><hr>' ;  
  if($Half_plain_dahi>0)
    echo '<font size=2px>'.$Half_plain_dahi.'</font><hr>' ;
  if($Full_plain_dahi>0)
    echo '<font size=2px>'.$Full_plain_dahi.'</font><hr>' ;
  if($Half_boondi_raita>0)
    echo '<font size=2px>'.$Half_boondi_raita.'</font><hr>' ;
  if($Full_boondi_raita>0)
    echo '<font size=2px>'.$Full_boondi_raita.'</font><hr>' ;
  if($dal_fry_arhar>0)
    echo '<font size=2px>'.$dal_fry_arhar.'</font><hr>' ;          
  if($plain_dal_arhar>0)
    echo '<font size=2px>'.$plain_dal_arhar.'</font><hr>' ;          
  if($dal_butter_fry_arhar>0)
    echo '<font size=2px>'.$dal_butter_fry_arhar.'</font><hr>' ;          
  if($dal_handi>0)
    echo '<font size=2px>'.$dal_handi.'</font><hr>' ;          
  if($Half_green_salad>0)
    echo '<font size=2px>'.$Half_green_salad.'</font><hr>' ;
  if($Full_green_salad>0)
    echo '<font size=2px>'.$Full_green_salad.'</font><hr>' ;
  if($Half_onion_salad>0)
    echo '<font size=2px>'.$Half_onion_salad.'</font><hr>' ;
  if($Full_onion_salad>0)
    echo '<font size=2px>'.$Full_onion_salad.'</font><hr>' ;
  if($plain_dosa>0)
    echo '<font size=2px>'.$plain_dosa.'</font><hr>' ;
  if($masala_dosa>0)
    echo '<font size=2px>'.$masala_dosa.'</font><hr>' ;
  if($special_masala_dosa>0)
    echo '<font size=2px>'.$special_masala_dosa.'</font><hr>' ;

  if($paneer_masala_dosa>0)
    echo '<font size=2px>'.$paneer_masala_dosa.'</font><hr>' ;
  if($veg_uttapam>0)
    echo '<font size=2px>'.$veg_uttapam.'</font><hr>' ;
  if($onion_uttapam>0)
    echo '<font size=2px>'.$onion_uttapam.'</font><hr>' ;
  if($mix_uttapam>0)
    echo '<font size=2px>'.$mix_uttapam.'</font><hr>' ;

  if($chola_bhatura>0)
    echo '<font size=2px>'.$chola_bhatura.'</font><hr>' ;
  if($pavbhaji>0)
    echo '<font size=2px>'.$pavbhaji.'</font><hr>' ;
    if($veg_pakoda>0)
    echo '<font size=2px>'.$veg_pakoda.'</font><hr>' ;
  if($paneer_pakoda>0)
    echo '<font size=2px>'.$paneer_pakoda.'</font><hr>' ; 
  if($veg_burger>0)
    echo '<font size=2px>'.$veg_burger.'</font><hr>' ;
  if($paneer_burger>0)
    echo '<font size=2px>'.$paneer_burger.'</font><hr>' ;
  
  if($spring_roll>0)
    echo '<font size=2px>'.$spring_roll.'</font><hr>' ;
  if($Half_veg_chowmein>0)
    echo '<font size=2px>'.$Half_veg_chowmein.'</font><hr>' ;
  if($Full_veg_chowmein>0)
    echo '<font size=2px>'.$Full_veg_chowmein.'</font><hr>' ;
  if($Half_paneer_chowmein>0)
    echo '<font size=2px>'.$Half_paneer_chowmein.'</font><hr>' ;
  if($Full_paneer_chowmein>0)
    echo '<font size=2px>'.$Full_paneer_chowmein.'</font><hr>' ;
  if($Half_mushroom_chowmein>0)
    echo '<font size=2px>'.$Half_mushroom_chowmein.'</font><hr>' ;  
  if($Full_mushroom_chowmein>0)
    echo '<font size=2px>'.$Full_mushroom_chowmein.'</font><hr>' ;
  if($Half_singapur_chowmein>0)
    echo '<font size=2px>'.$Half_singapur_chowmein.'</font><hr>' ;
  if($Full_singapur_chowmein>0)
    echo '<font size=2px>'.$Full_singapur_chowmein.'</font><hr>' ;
  
  if($Half_paneer_chilli>0)
    echo '<font size=2px>'.$Half_paneer_chilli.'</font><hr>' ;
    if($Full_paneer_chilli>0)
    echo '<font size=2px>'.$Full_paneer_chilli.'</font><hr>' ;
   if($Half_veg_manchurian>0)
    echo '<font size=2px>'.$Half_veg_manchurian.'</font><hr>' ;
  if($Full_veg_manchurian>0)
    echo '<font size=2px>'.$Full_veg_manchurian.'</font><hr>' ;  
  if($Half_veg_fried_rice>0)
    echo '<font size=2px>'.$Half_veg_fried_rice.'</font><hr>' ;
  if($Full_veg_fried_rice>0)
    echo '<font size=2px>'.$Full_veg_fried_rice.'</font><hr>' ;  
  if($Half_mushroom_fried_rice>0)
    echo '<font size=2px>'.$Half_mushroom_fried_rice.'</font><hr>' ;
  if($Full_mushroom_fried_rice>0)
    echo '<font size=2px>'.$Full_mushroom_fried_rice.'</font><hr>' ;
  if($Half_paneer_fried_rice>0)
    echo '<font size=2px>'.$Half_paneer_fried_rice.'</font><hr>' ;
  if($Full_paneer_fried_rice>0)
    echo '<font size=2px>'.$Full_paneer_fried_rice.'</font><hr>' ;
      echo '<font size=2px>'.'10%'.'</font><hr> ' ;
  
?>
	</td>
	<td width=10%>

		<?php
  if($Half_kaleji_paneer>0)
    echo '<font size=2px>'.($Half_kaleji_paneer*80).'</font><hr>' ;
  if($Full_kaleji_paneer>0)
    echo '<font size=2px>'.($Full_kaleji_paneer*140).'</font><hr>' ;
  if($Half_matar_paneer>0)
    echo '<font size=2px>'.($Half_matar_paneer*70).'</font><hr>' ;
  if($Full_matar_paneer>0)
    echo '<font size=2px>'.($Full_matar_paneer*130).'</font><hr>' ;
  if($Half_paneer_butter_masala>0)
    echo '<font size=2px>'.($Half_paneer_butter_masala*80).'</font><hr>' ;
  if($Full_paneer_butter_masala>0)
    echo '<font size=2px>'.($Full_paneer_butter_masala*140).'</font><hr>' ;
  if($Half_shahi_paneer>0)
    echo '<font size=2px>'.($Half_shahi_paneer*80).'</font><hr>' ;
  if($Full_shahi_paneer>0)
    echo '<font size=2px>'.($Full_shahi_paneer*140).'</font><hr>' ;
  if($Half_savera_special_paneer>0)
    echo '<font size=2px>'.($Half_savera_special_paneer*80).'</font><hr>' ;
  if($Full_savera_special_paneer>0)
    echo '<font size=2px>'.($Full_savera_special_paneer*140).'</font><hr>' ;
  if($Half_kadhai_paneer>0)
    echo '<font size=2px>'.($Half_kadhai_paneer*80).'</font><hr>' ;
  if($Full_kadhai_paneer>0)
    echo '<font size=2px>'.($Full_kadhai_paneer*140).'</font><hr>';
  if($Half_paneer_bhujiya>0)
    echo '<font size=2px>'.($Half_paneer_bhujiya*80).'</font><hr>' ;
  if($Full_paneer_bhujiya>0)
    echo '<font size=2px>'.($Full_paneer_bhujiya*140).'</font><hr>' ;
  if($Half_malai_paneer>0)
    echo '<font size=2px>'.($Half_malai_paneer*80).'</font><hr>' ;
  if($Full_malai_paneer>0)
    echo '<font size=2px>'.($Full_malai_paneer*140).'</font><hr>' ;
  if($Half_malai_kofta>0)
    echo '<font size=2px>'.($Half_malai_kofta*80).'</font><hr>' ;
  if($Full_malai_kofta>0)
    echo '<font size=2px>'.($Full_malai_kofta*140).'</font><hr>' ;
  if($Half_mushroom_matar>0)
    echo '<font size=2px>'.($Half_mushroom_matar*80).'</font><hr>' ;  
  if($Full_mushroom_matar>0)
    echo '<font size=2px>'.($Full_mushroom_matar*140).'</font><hr>' ;  
  if($Half_mushroom_pyaza>0)
    echo '<font size=2px>'.($Half_mushroom_pyaza*80).'</font><hr>' ;
  if($Full_mushroom_pyaza>0)
    echo '<font size=2px>'.($Full_mushroom_pyaza*140).'</font><hr>' ;
  if($Half_aloo_pyaza>0)
    echo '<font size=2px>'.($Half_aloo_pyaza*50).'</font><hr>' ;  
  if($Full_aloo_pyaza>0)
    echo '<font size=2px>'.($Full_aloo_pyaza*100).'</font><hr>' ;  
  if($Half_aloo_dum_masala>0)
    echo '<font size=2px>'.($Half_aloo_dum_masala*40).'</font><hr>' ;
  if($Full_aloo_dum_masala>0)
    echo '<font size=2px>'.($Full_aloo_dum_masala*80).'</font><hr>' ;
  if($Half_aloo_zeera>0)
    echo '<font size=2px>'.($Half_aloo_zeera*40).'</font><hr>' ;
  if($Full_aloo_zeera>0)
    echo '<font size=2px>'.($Full_aloo_zeera*70).'</font><hr>' ;
  if($Half_aloo_matar>0)
    echo '<font size=2px>'.($Half_aloo_matar*40).'</font><hr>' ;
  if($Full_aloo_matar>0)
    echo '<font size=2px>'.($Full_aloo_matar*70).'</font><hr>' ;
  if($Half_seasonal_veg>0)
    echo '<font size=2px>'.($Half_seasonal_veg*40).'</font><hr>' ;
  if($Full_seasonal_veg>0)
    echo '<font size=2px>'.($Full_seasonal_veg*70).'</font><hr>' ;
  if($Half_mix_veg>0)
    echo '<font size=2px>'.($Half_mix_veg*50).'</font><hr>' ;
  if($Full_mix_veg>0)
    echo '<font size=2px>'.($Full_mix_veg*80).'</font><hr>' ;
  if($Half_chana_masala>0)
    echo '<font size=2px>'.($Half_chana_masala*40).'</font><hr>' ;
  if($Full_chana_masala>0)
    echo '<font size=2px>'.($Full_chana_masala*70).'</font><hr>' ;
  if($Half_plain_rice>0)
    echo '<font size=2px>'.($Half_plain_rice*35).'</font><hr>' ;
  if($Full_plain_rice>0)
    echo '<font size=2px>'.($Full_plain_rice*65).'</font><hr>' ;
  if($Half_zeera_rice>0)
    echo '<font size=2px>'.($Half_zeera_rice*40).'</font><hr>' ;
  if($Full_zeera_rice>0)
    echo '<font size=2px>'.($Full_zeera_rice*75).'</font><hr>' ;
  if($Half_matar_pulao>0)
    echo '<font size=2px>'.($Half_matar_pulao*45).'</font><hr>' ;
  if($Full_matar_pulao>0)
    echo '<font size=2px>'.($Full_matar_pulao*75).'</font><hr>' ;
  if($Half_paneer_pulao>0)
    echo '<font size=2px>'.($Half_paneer_pulao*60).'</font><hr>' ;
  if($Full_paneer_pulao>0)
    echo '<font size=2px>'.($Full_paneer_pulao*100).'</font><hr>' ;
  if($Half_veg_biryani>0)
    echo '<font size=2px>'.($Half_veg_biryani*50).'</font><hr>' ;
  if($Full_veg_biryani>0)
    echo '<font size=2px>'.($Full_veg_biryani*90).'</font><hr>' ;
  if($missi_roti>0)
    echo '<font size=2px>'.($missi_roti*20).'</font><hr>' ;
  if($tandoori_roti>0)
    echo '<font size=2px>'.($tandoori_roti*6).'</font><hr>' ;  
  if($butter_tandoori_roti>0)
    echo '<font size=2px>'.($butter_tandoori_roti*8).'</font><hr>' ;
  if($plain_nan>0)
    echo '<font size=2px>'.($plain_nan*15).'</font><hr>' ;          
  if($stuff_nan>0)
    echo '<font size=2px>'.($stuff_nan*35).'</font><hr>' ;          
  if($butter_nan>0)
    echo '<font size=2px>'.($butter_nan*20).'</font><hr>' ;          
  if($tandoori_laccha_paratha>0)
    echo '<font size=2px>'.($tandoori_laccha_paratha*20).'</font><hr>' ; 
  if($aloo_paratha>0)
    echo '<font size=2px>'.($aloo_paratha*35).'</font><hr>' ;
  if($pyaz_paratha>0)
    echo '<font size=2px>'.($pyaz_paratha*35).'</font><hr>' ;  
  if($gobhi_paratha>0)
    echo '<font size=2px>'.($gobhi_paratha*35).'</font><hr>' ;
  if($paneer_paratha>0)
    echo '<font size=2px>'.($paneer_paratha*45).'</font><hr>' ;  
  if($Half_plain_dahi>0)
    echo '<font size=2px>'.($Half_plain_dahi*25).'</font><hr>' ;
  if($Full_plain_dahi>0)
    echo '<font size=2px>'.($Full_plain_dahi*50).'</font><hr>' ;
  if($Half_boondi_raita>0)
    echo '<font size=2px>'.($Half_boondi_raita*30).'</font><hr>' ;
  if($Full_boondi_raita>0)
    echo '<font size=2px>'.($Full_boondi_raita*50).'</font><hr>' ;
	if($dal_fry_arhar>0)
    echo '<font size=2px>'.($dal_fry_arhar*60).'</font><hr>' ;          
  if($plain_dal_arhar>0)
    echo '<font size=2px>'.($plain_dal_arhar*40).'</font><hr>' ;          
  if($dal_butter_fry_arhar>0)
    echo '<font size=2px>'.($dal_butter_fry_arhar*70).'</font><hr>' ;          
  if($dal_handi>0)
    echo '<font size=2px>'.($dal_handi*70).'</font><hr>' ;          
  if($Half_green_salad>0)
    echo '<font size=2px>'.($Half_green_salad*15).'</font><hr>' ;
  if($Full_green_salad>0)
    echo '<font size=2px>'.($Full_green_salad*30).'</font><hr>' ;
  if($Half_onion_salad>0)
    echo '<font size=2px>'.($Half_onion_salad*10).'</font><hr>' ;
  if($Full_onion_salad>0)
    echo '<font size=2px>'.($Full_onion_salad*20).'</font><hr>' ;
  if($plain_dosa>0)
    echo '<font size=2px>'.($plain_dosa*45).'</font><hr>' ;
  if($masala_dosa>0)
    echo '<font size=2px>'.($masala_dosa*60).'</font><hr>' ;
  if($special_masala_dosa>0)
    echo '<font size=2px>'.($special_masala_dosa*70).'</font><hr>' ;
  if($paneer_masala_dosa>0)
    echo '<font size=2px>'.($paneer_masala_dosa*80).'</font><hr>' ;
  if($veg_uttapam>0)
    echo '<font size=2px>'.($veg_uttapam*65).'</font><hr>' ;
  if($onion_uttapam>0)
    echo '<font size=2px>'.($onion_uttapam*60).'</font><hr>' ;
  if($mix_uttapam>0)
    echo '<font size=2px>'.($mix_uttapam*70).'</font><hr>' ;
  if($chola_bhatura>0)
    echo '<font size=2px>'.($chola_bhatura*60).'</font><hr>' ;
  if($pavbhaji>0)
    echo '<font size=2px>'.($pavbhaji*50).'</font><hr>' ;
    if($veg_pakoda>0)
    echo '<font size=2px>'.($veg_pakoda*40).'</font><hr>' ;
  if($paneer_pakoda>0)
    echo '<font size=2px>'.($paneer_pakoda*75).'</font><hr>' ; 
  if($veg_burger>0)
    echo '<font size=2px>'.($veg_burger*40).'</font><hr>' ;
  if($paneer_burger>0)
    echo '<font size=2px>'.($paneer_burger*60).'</font><hr>' ;
  
  if($spring_roll>0)
    echo '<font size=2px>'.($spring_roll*60).'</font><hr>' ;
  if($Half_veg_chowmein>0)
    echo '<font size=2px>'.($Half_veg_chowmein*45).'</font><hr>' ;
  if($Full_veg_chowmein>0)
    echo '<font size=2px>'.($Full_veg_chowmein*80).'</font><hr>' ;
  if($Half_paneer_chowmein>0)
    echo '<font size=2px>'.($Half_paneer_chowmein*50).'</font><hr>' ;
  if($Full_paneer_chowmein>0)
    echo '<font size=2px>'.($Full_paneer_chowmein*90).'</font><hr>' ;
  if($Half_mushroom_chowmein>0)
    echo '<font size=2px>'.($Half_mushroom_chowmein*60).'</font><hr>' ;  
  if($Full_mushroom_chowmein>0)
    echo '<font size=2px>'.($Full_mushroom_chowmein*100).'</font><hr>' ;
  if($Half_singapur_chowmein>0)
    echo '<font size=2px>'.($Half_singapur_chowmein*60).'</font><hr>' ;
  if($Full_singapur_chowmein>0)
    echo '<font size=2px>'.($Full_singapur_chowmein*100).'</font><hr>' ;
  if($Half_paneer_chilli>0)
    echo '<font size=2px>'.($Half_paneer_chilli*80).'</font><hr>' ;
  if($Full_paneer_chilli>0)
    echo '<font size=2px>'.($Full_paneer_chilli*150).'</font><hr>' ;
  if($Half_veg_manchurian>0)
    echo '<font size=2px>'.($Half_veg_manchurian*70).'</font><hr>' ;
  if($Full_veg_manchurian>0)
    echo '<font size=2px>'.($Full_veg_manchurian*130).'</font><hr>' ;  
  if($Half_veg_fried_rice>0)
    echo '<font size=2px>'.($Half_veg_fried_rice*50).'</font><hr>' ;
  if($Full_veg_fried_rice>0)
    echo '<font size=2px>'.($Full_veg_fried_rice*80).'</font><hr>' ;  
  if($Half_mushroom_fried_rice>0)
    echo '<font size=2px>'.($Half_mushroom_fried_rice*60).'</font><hr>' ;
  if($Full_mushroom_fried_rice>0)
    echo '<font size=2px>'.($Full_mushroom_fried_rice*100).'</font><hr>' ;
  if($Half_paneer_fried_rice>0)
    echo '<font size=2px>'.($Half_paneer_fried_rice*60).'</font><hr>' ;
  if($Full_paneer_fried_rice>0)
    echo '<font size=2px>'.($Full_paneer_fried_rice*100).'</font><hr>' ;
    echo '<font size=  2px>'.(($totalamt*10)/100).'</font><hr>' ;
    $totalamt=(90*$totalamt)/100;
  if($delivery>"0"){
      $totalamt=$totalamt+$delivery;
    echo '<font size=  2px>'.($delivery).'</font><hr>' ;
    }
  
?>

	</td>

	</td>
</tr>
<tr>
	<td><h4>Total</h4> </td>
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
     <h5>Want to <b><a href=savera.php>Add/Remove</a></b> items</h5>
     <h4 style="color:#A3190F;">All orders will be placed by 8:30pm</h4>
     

      </div>
    


    	<div class="col-sm-3">
          <div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
				  </div>
				  <div class="form">
				    <h2>Enter Your Details</h2>
				    <form role="form" method="post" action="sendmail.php" autocomplete="off">
				      <div class="form-group"><input type="text" placeholder="Name" id="name" name="name"required/></div>
				      <div class="form-group"><input type="textarea" placeholder="Address" id="address" name="address" required/></div>
					   <div class="form-group"><input type="number" placeholder="Mobile number" id="number" name="number" required/></div>
             <div class="form-group"><input type="email" placeholder="email id" id="email" name="user_mail" min='13' required/></div>
				      <div class="form-group"><input type="hidden" id="number" name="email" value="<?php if($plain_dosa>0)

    echo 'plain dosa'.$plain_dosa.'<hr>' ;
  if($masala_dosa>0)
    echo 'masala dosa'.$masala_dosa.'<hr>' ;
  if($special_masala_dosa>0)
    echo 'special masala dosa'.$special_masala_dosa.'<hr>' ;

  if($paneer_masala_dosa>0)
    echo 'paneer masala dosa'.$paneer_masala_dosa.'<hr>' ;
  if($veg_uttapam>0)
    echo 'veg uttapam'.$veg_uttapam.'<hr>' ;
  if($onion_uttapam>0)
    echo 'onion uttapam'.$onion_uttapam.'<hr>' ;
  if($mix_uttapam>0)
    echo 'mix uttapam'.$mix_uttapam.'<hr>' ;
  if($chola_bhatura>0)
    echo 'chola bhatura '.$chola_bhatura.'<hr>' ;
  if($pavbhaji>0)
    echo 'pavbhaji '.$pavbhaji.'<hr>' ;
  if($veg_pakoda>0)
    echo 'veg pakoda'.$veg_pakoda.'<hr>' ;
  if($paneer_pakoda>0)
    echo 'paneer pakoda'.$paneer_pakoda.'<hr>' ; 
  if($veg_burger>0)
    echo 'veg burger'.$veg_burger.'<hr>' ;
  if($paneer_burger>0)
    echo 'paneer burger'.$paneer_burger.'<hr>' ;
  
  if($spring_roll>0)
    echo 'spring roll'.$spring_roll.'<hr>' ;
  if($Half_veg_chowmein>0)
    echo 'Half veg chowmein'.$Half_veg_chowmein.'<hr>' ;
  if($Full_veg_chowmein>0)
    echo 'Full veg chowmein'.$Full_veg_chowmein.'<hr>' ;
  if($Half_paneer_chowmein>0)
    echo 'Half paneer chowmein'.$Half_paneer_chowmein.'<hr>' ;
  if($Full_paneer_chowmein>0)
    echo 'Full paneer chowmein'.$Full_paneer_chowmein.'<hr>' ;
  if($Half_mushroom_chowmein>0)
    echo 'half mushroom chowmein'.$Half_mushroom_chowmein.'<hr>' ;  
  if($Full_mushroom_chowmein>0)
    echo 'Full mushroom chowmein'.$Full_mushroom_chowmein.'<hr>' ;
  if($Half_singapur_chowmein>0)
    echo 'half singapur chowmein'.$Half_singapur_chowmein.'<hr>' ;
  if($Full_singapur_chowmein>0)
    echo 'full singapur chowmein'.$Full_singapur_chowmein.'<hr>' ;
  if($Half_paneer_chilli>0)
    echo 'Half paneer chilli'.$Half_paneer_chilli.'<hr>' ;
  if($Full_paneer_chilli>0)
    echo 'Full paneer chilli'.$Full_paneer_chilli.'<hr>' ;
  if($Half_veg_manchurian>0)
    echo 'half veg manchurian'.$Half_veg_manchurian.'<hr>' ;
  if($Full_veg_manchurian>0)
    echo 'full veg manchurian'.$Full_veg_manchurian.'<hr>' ;  
  if($Half_veg_fried_rice>0)
    echo 'Half veg fried_rice'.$Half_veg_fried_rice.'<hr>' ;
  if($Full_veg_fried_rice>0)
    echo 'full veg fried rice'.$Full_veg_fried_rice.'<hr>' ;  
  if($Half_mushroom_fried_rice>0)
    echo 'Half mushroom fried rice'.$Half_mushroom_fried_rice.'<hr>' ;
  if($Full_mushroom_fried_rice>0)
    echo 'Full mushroom fried rice'.$Full_mushroom_fried_rice.'<hr>' ;
  if($Half_paneer_fried_rice>0)
    echo 'half paneer fried rice'.$Half_paneer_fried_rice.'<hr>' ;
  if($Full_paneer_fried_rice>0)
    echo 'Full paneer fried rice'.$Full_paneer_fried_rice.'<hr>' ;
  if($Half_kaleji_paneer>0)
    echo 'Half kaleji paneer'.$Half_kaleji_paneer.'<hr>' ;
  if($Full_kaleji_paneer>0)
    echo 'Full kaleji paneer'.$Full_kaleji_paneer.'<hr>' ;
  if($Half_matar_paneer>0)
    echo 'Half matar paneer'.$Half_matar_paneer.'<hr>' ;
  if($Full_matar_paneer>0)
    echo 'Full matar paneer'.$Full_matar_paneer.'<hr>' ;
  if($Half_paneer_butter_masala>0)
    echo 'Half paneer butter masala'.$Half_paneer_butter_masala.'<hr>' ;
  if($Full_paneer_butter_masala>0)
    echo 'Full paneer butter masala'.$Full_paneer_butter_masala.'<hr>' ;
  if($Half_shahi_paneer>0)
    echo 'Half shahi paneer'.$Half_shahi_paneer.'<hr>' ;
  if($Full_shahi_paneer>0)
    echo 'Full shahi paneer'.$Full_shahi_paneer.'<hr>' ;
  if($Half_savera_special_paneer>0)
    echo 'Half_savera_special_paneer'.$Half_savera_special_paneer.'<hr>' ;
  if($Full_savera_special_paneer>0)
    echo 'Full savera special paneer'.$Full_savera_special_paneer.'<hr>' ;
  if($Half_kadhai_paneer>0)
    echo 'Half kadhai paneer'.$Half_kadhai_paneer.'<hr>' ;
  if($Full_kadhai_paneer>0)
    echo 'Full kadhai paneer'.$Full_kadhai_paneer.'<hr>' ;
  if($Half_paneer_do_pyaza>0)
    echo 'Half_paneer_do_pyaza'.$Half_paneer_do_pyaza.'<hr>' ;

  if($Half_paneer_bhujiya>0)
    echo 'Half paneer bhujiya'.$Half_paneer_bhujiya.'<hr>' ;
  if($Full_paneer_bhujiya>0)
    echo 'Full paneer bhujiya'.$Full_paneer_bhujiya.'<hr>' ;
  if($Half_malai_paneer>0)
    echo 'Half malai paneer'.$Half_malai_paneer.'<hr>' ;
  if($Full_malai_paneer>0)
    echo 'Full malai paneer'.$Full_malai_paneer.'<hr>' ;
  if($Half_malai_kofta>0)
    echo 'Half malai kofta'.$Half_malai_kofta.'<hr>' ;
  if($Full_malai_kofta>0)
    echo 'Full malai kofta'.$Full_malai_kofta.'<hr>' ;
  if($Half_mushroom_matar>0)
    echo 'Half mushroom matar'.$Half_mushroom_matar.'<hr>' ;  
  if($Full_mushroom_matar>0)
    echo 'Full mushroom matar'.$Full_mushroom_matar.'<hr>' ;  
  if($Half_mushroom_pyaza>0)
    echo 'Half mushroom pyaza'.$Half_mushroom_pyaza.'<hr>' ;
  if($Full_mushroom_pyaza>0)
    echo 'Full mushroom pyaza'.$Full_mushroom_pyaza.'<hr>' ;
  if($Half_aloo_pyaza>0)
    echo 'Half aloo pyaza'.$Half_aloo_pyaza.'<hr>' ;  
  if($Full_aloo_pyaza>0)
    echo 'Full aloo pyaza'.$Full_aloo_pyaza.'<hr>' ;  
  if($Half_aloo_dum_masala>0)
    echo 'Half aloo dum masala'.$Half_aloo_dum_masala.'<hr>' ;
  if($Full_aloo_dum_masala>0)
    echo 'Full aloo dum masala'.$Full_aloo_dum_masala.'<hr>' ;
  if($Half_aloo_zeera>0)
    echo 'Half aloo zeera'.$Half_aloo_zeera.'<hr>' ;
  if($Full_aloo_zeera>0)
    echo 'Full aloo zeera'.$Full_aloo_zeera.'<hr>' ;
  if($Half_aloo_matar>0)
    echo 'Half aloo matar'.$Half_aloo_matar.'<hr>' ;
  if($Full_aloo_matar>0)
    echo 'Full aloo matar'.$Full_aloo_matar.'<hr>' ;
  if($Half_seasonal_veg>0)
    echo 'Half seasonal veg'.$Half_seasonal_veg.'<hr>' ;
  if($Full_seasonal_veg>0)
    echo 'Full seasonal veg'.$Full_seasonal_veg.'<hr>' ;
  if($Half_mix_veg>0)
    echo 'Half mix veg'.$Half_mix_veg.'<hr>' ;
  if($Full_mix_veg>0)
    echo 'Full mix veg'.$Full_mix_veg.'<hr>' ;
  if($Half_chana_masala>0)
    echo 'Half chana masala'.$Half_chana_masala.'<hr>' ;
  if($Full_chana_masala>0)
    echo 'Full chana masala'.$Full_chana_masala.'<hr>' ;
  if($missi_roti>0)
    echo 'missi roti'.$missi_roti.'<hr>' ;
  if($tandoori_roti>0)
    echo 'tandoori roti'.$tandoori_roti.'<hr>' ;  
  if($butter_tandoori_roti>0)
    echo 'butter tandoori roti'.$butter_tandoori_roti.'<hr>' ;
  if($plain_nan>0)
    echo 'plain nan'.$plain_nan.'<hr>' ;          
  if($stuff_nan>0)
    echo 'stuff nan'.$stuff_nan.'<hr>' ;          
  if($butter_nan>0)
    echo 'butter nan'.$butter_nan.'<hr>' ;          
  if($tandoori_laccha_paratha>0)
    echo 'tandoori laccha paratha'.$tandoori_laccha_paratha.'<hr>' ; 
  if($aloo_paratha>0)
    echo 'aloo paratha'.$aloo_paratha.'<hr>' ;
  if($pyaz_paratha>0)
    echo 'pyaz_paratha'.$pyaz_paratha.'<hr>' ;  
  if($gobhi_paratha>0)
    echo 'gobhi paratha'.$gobhi_paratha.'<hr>' ;
  if($paneer_paratha>0)
    echo 'paneer_paratha'.$paneer_paratha.'<hr>' ;  
  if($Half_plain_dahi>0)
    echo 'Half plain dahi'.$Half_plain_dahi.'<hr>' ;
  if($Full_plain_dahi>0)
    echo 'Full plain dahi'.$Full_plain_dahi.'<hr>' ;
  if($Half_boondi_raita>0)
    echo 'Half boondi raita'.$Half_boondi_raita.'<hr>' ;
  if($Full_boondi_raita>0)
    echo 'Full boondi_raita'.$Full_boondi_raita.'<hr>' ;
  if($dal_fry_arhar>0)
    echo 'dal fry arhar'.$dal_fry_arhar.'</font><hr>' ;          
  if($plain_dal_arhar>0)
    echo 'plain dal arhar'.$plain_dal_arhar.'</font><hr>' ;          
  if($dal_butter_fry_arhar>0)
    echo 'dal butter fry arhar'.$dal_butter_fry_arhar.'</font><hr>' ;          
  if($dal_handi>0)
    echo 'dal handi'.$dal_handi.'</font><hr>' ;          
  if($Half_green_salad>0)
    echo 'Half green salad'.$Half_green_salad.'</font><hr>' ;
  if($Full_green_salad>0)
    echo 'Full green salad'.$Full_green_salad.'</font><hr>' ;
  if($Half_onion_salad>0)
    echo 'Half onion salad'.$Half_onion_salad.'</font><hr>' ;
  if($Full_onion_salad>0)
    echo 'Full onion salad'.$Full_onion_salad.'</font><hr>' ;

    echo'total amount='.$totalamt.'<hr>';
    echo'Savera<hr>';
  ?>"/></div>
	 <div><input type="submit" name="submit" value="Place Order" class="btn btn-primary btn-block btn-lg" ></div>    
        </form></div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
   <div class="foot">
  <table>
<center><h3><b>Get in Touch</b></h3></center>
<center>
  <a href="http://www.facebook.com/foodzumbo"> <img src="../../Images/facebook_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
  <a href="#"> <img src="../../Images/twitter_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
  <a href="#"> <img src="../../Images/instagram_sq.png"></a>
</center><br><hr>
</table>
<div>
    <center>
      <b><h3>Contact Us.</h3></b>
      Feel free to contact with us at our Helpline no. <b>7068987538,&nbsp;8273176768,&nbsp;8574925398</b><br>
    </center>
  </div>
</div>
</footer>
<?php
}
else{echo 'order must be greater than 100 rupees';
?>
<a href="lazeez.php">click here to go back to last page</a>
<?php
}
?>
</body>
</html>