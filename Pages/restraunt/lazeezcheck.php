<?php
include '../../Core/Functions/general.php';

    $totalqty=0;
  $delivery=0;
  $discount=5;
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
 // $Full_chicken_chilli = secure($_POST['Full_chicken_chilli']) ;
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
    $totalamt=(($Half_mutton_korma*100) + ($Full_mutton_korma*200) + ($Half_shahi_mutton_korma*110) + ($Full_shahi_mutton_korma*220) + ($quarter_mutton_gravy*15) + ($Half_mutton_gravy*40) + ($Full_mutton_gravy*80) + ($Half_chicken_masala*90) + ($Full_chicken_masala*180) + ($Half_chicken_korma*100) + ($Full_chicken_korma*200) + ($Half_chicken_tikka_masala_boneless*100) + ($Full_chicken_tikka_masala_boneless*200) + ($Half_kadhai_chicken*100) + ($Full_kadhai_chicken*200) + ($Half_butter_chicken*100) + ($Full_butter_chicken*200) + ($Half_tawa_chicken*120) + ($Full_tawa_chicken*240) + ($Half_shahi_chicken*105) + ($Full_shahi_chicken*210) + ($quarter_chicken_gravy*15) + ($Half_chicken_gravy*40) + ($Full_chicken_gravy*80) + ($Half_plain_rice*40) + ($Full_plain_rice*80) + ($Half_jeera_rice*45) + ($Full_jeera_rice*90) + ($Half_biryani_rice*50) + ($Full_biryani_rice*100) + ($Half_egg_biryani*60) + ($Full_egg_biryani*120) + ($Half_mutton_biryani*90) + ($Full_mutton_biryani*180) + ($Half_chicken_biryani*70) + ($Full_chicken_biryani*140) + ($Half_veg_fried_rice*50) + ($Full_veg_fried_rice*100) + ($Half_chicken_fried_rice*70) + ($Full_chicken_fried_rice*140) + ($Half_egg_chilli*45) + ($Full_egg_chilli*90) + ($Half_rosted*120) + ($Full_rosted*240) + ($Half_chicken_tikka*90) + ($Full_chicken_tikka*180) + ($Half_shami_kabab*30) + ($Full_shami_kabab*60) + ($Half_paneer_kadhai*65) + ($Full_paneer_kadhai*130) + ($Half_paneer_butter_masala*65) + ($Full_paneer_butter_masala*130) + ($Half_paneer_do_pyaza*65) + ($Full_paneer_do_pyaza*130) + ($Half_dal_butter_fry*45) + ($Full_dal_butter_fry*90) + ($Half_paneer_bhujiya*60) +($Full_paneer_bhujiya*120) +($Half_matar_paneer*70) +($Full_matar_paneer*140) + ($Half_aloo_jeera*40) + ($Full_aloo_jeera*80) + ($Half_aloo_matar*50) +($Full_aloo_matar*100) + ($Half_paneer_chilli*60) + ($Full_paneer_chilli*120) + ($Half_mushroom_masala*60) + ($Full_mushroom_masala*120) +($Half_mushroom_matar*70) + ($Full_mushroom_matar*140) +($Half_egg_curry*50) +($Full_egg_curry*100) + ($Half_egg_bhurji_masala*40) +($Full_egg_bhurji_masala*80) +($cold_drink*14) +($onion_salad*5) +($green_salad*20) +($roti*5) +($paratha*10) +($egg_roll*25) +($kabab_roll*40) +($Half_mutton_masala*100) +($Full_mutton_masala*200) +($Half_chicken_curry*90) +($Full_chicken_curry*180)); 
 
    if($totalamt<"150")
    $delivery="20";

  if($totalamt>"100"){


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurants in Sultanpur</title>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
        hr{
            margin-bottom: 10px;
            margin-top: 0px;
            color: black;
        }
        .foot{
            border-color: #33b5e5;
            padding-left: 10%;
            padding-right: 10%;
        }
    </style>
</head>
<body>
<!-----------------Navigation Bar---------------------->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-------Logo-------->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../../index.php" class="navbar-brand">FoodZumbo</a>
        </div>

        <!--------------Menuitems---------------->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../../about.html">About</a> </li>
                <li><a href="#contact">Contact Us</a> </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <h3>Please Review Your Order</h3>
    <table class="table">
        <thead>
        <tr>
            <th width="50%">Item</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>

                <?php
    if($Half_mutton_korma>"0")
        echo '<font size=  2px>Half mutton korma</font><hr>' ;
    if($Full_mutton_korma>"0")
        echo '<font size=  2px>Full mutton korma</font><hr> ' ;
    if($Half_shahi_mutton_korma>"0")
        echo '<font size=  2px>Half shahi mutton korma</font><hr> ' ;
    if($Full_shahi_mutton_korma>"0")
        echo '<font size=  2px>Full shahi mutton korma</font><hr> ' ;
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
 // if($Half_chicken_chilli>"0"||$Half_chicken_chilli!="")
    //  echo '<font size=  2px>Half chicken chilli: '.$Half_chicken_chilli.'</br>' ;
 // if($Full_chicken_chilli>"0"||$Full_chicken_chilli!="")
    //  echo '<font size=  2px>Full chicken chilli: '.$Full_chicken_chilli.'</br>' ;
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
  echo '<font size=  2px>Discount</font><hr> ' ;
  if($delivery>"0")
    echo '<font size=  2px>Delivery</font><hr> ' ;
    
  
        ?>
            </td>
            <td>
                <?php  
  if($Half_mutton_korma>"0")
        echo '<font size=  2px>'.$Half_mutton_korma.'</font><hr>' ;
    if($Full_mutton_korma>"0")
        echo '<font size=  2px>'.$Full_mutton_korma.'</font><hr>' ;
    if($Half_shahi_mutton_korma>"0")
        echo '<font size=  2px> '.$Half_shahi_mutton_korma.'</font><hr>' ;
    if($Full_shahi_mutton_korma>"0")
        echo '<font size=  2px> '.$Full_shahi_mutton_korma.'</font><hr>' ;
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
 // if($Half_chicken_chilli>"0")
    //  echo '<font size=  2px> '.$Half_chicken_chilli.'</br>' ;
 // if($Full_chicken_chilli>"0")
    //  echo '<font size=  2px> '.$Full_chicken_chilli.'</br>' ;
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
        echo '<font size=  2px>'.$Full_chicken_tikka.'</font><hr>' ;
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
  echo '<font size=  2px>'.'5%'.'</font><hr>' ;
  if($delivery>"0")
    echo '<font size=  2px>'.'&nbsp;'.'</font><hr>' ;
    
        

        ?>

            </td>
            <td>
                <?php
      
    if($Half_mutton_korma>"0")
        echo '<font size=  2px>'.($Half_mutton_korma*100).'</font><hr>' ;
    if($Full_mutton_korma>"0")
        echo '<font size=  2px>'.($Full_mutton_korma*200).'</font><hr>' ;
    if($Half_shahi_mutton_korma>"0")
        echo '<font size=  2px> '.($Half_shahi_mutton_korma*110).'</font><hr>' ;
    if($Full_shahi_mutton_korma>"0")
        echo '<font size=  2px> '.($Full_shahi_mutton_korma*220).'</font><hr>' ;
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
 // if($Half_chicken_chilli>"0"||$Half_chicken_chilli!="")
    //  echo 'Half chicken chilli: '.$Half_chicken_chilli.'</br>' ;
 // if($Full_chicken_chilli>"0"||$Full_chicken_chilli!="")
    //  echo 'Full chicken chilli: '.$Full_chicken_chilli.'</br>' ;
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
        echo '<font size=  2px>'.($Full_chicken_tikka*180).'</font><hr>' ;
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
    echo '<font size=  2px>'.(($totalamt*5)/100).'</font><hr>' ;
    $totalamt=(95*$totalamt)/100;
  if($delivery>"0"){
      $totalamt=$totalamt+$delivery;
    echo '<font size=  2px>'.($delivery).'</font><hr>' ;
        
}
    ?>

            </td>
        </tr>

        <tr>
            <td>
                <h4>Subtotal</h4>
            </td>
            <td>
                <?php
                        echo '<h4>'.$totalqty.'</h4>';
                ?>
            </td>
            <td>
                <?php
                        echo '<h4>'.$totalamt.'</h4>';
                ?>
            </td>
        </tr>
        </tbody>
    </table>
     <div class="container"><center>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#popupwindow">Place Order</button></center>
            <div class="modal fade" id="popupwindow">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-----header-------->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Enter Your Details</h3>
                        </div>
                        <!--------Body--------->
                        <div class="modal-body">
                            <form role="form" action="sendmail.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name" name="name"required/><br>
                                    <input type="textarea" class="form-control" placeholder="Address" id="address" name="address" required/><br>
                                    <input type="number" class="form-control" placeholder="Mobile number" id="number" name="number" required/><br>
                                    <input type="email" class="form-control" placeholder="email id" id="email" name="user_mail" required/><br>
                                    <input type="hidden" id="amount" name="amount" value="<?php echo $totalamt; ?>"/>
                                    <input type="hidden" id="restaurant" name="restaurant" value="lazeez Restaurant"/>
                                    <input type="hidden" id="items" name="email" value="<?php if($Half_mutton_korma>0)
    echo 'Half mutton korma: '.$Half_mutton_korma.'</br><hr>' ;
  if($Full_mutton_korma>0)
    echo 'Full mutton korma: '.$Full_mutton_korma.'</br><hr>' ;
  if($Half_shahi_mutton_korma>0)
    echo 'Half shahi mutton korma: '.$Half_shahi_mutton_korma.'</br><hr>' ;
  if($Half_shahi_mutton_korma>0)
    echo 'Half shahi mutton korma: '.$Half_shahi_mutton_korma.'</br><hr>' ;
  if($quarter_mutton_gravy>0)
    echo 'quarter mutton gravy: '.$quarter_mutton_gravy.'</br><hr>' ;
    if($Half_mutton_gravy>0)
    echo 'Half mutton gravy: '.$Half_mutton_gravy.'</br><hr>' ;
  if($Full_mutton_gravy>0)
    echo 'Full mutton gravy: '.$Full_mutton_gravy.'</br><hr>' ;
  if($Half_chicken_masala>0)
    echo 'Half chicken masala: '.$Half_chicken_masala.'</br><hr>' ;
  if($Full_chicken_masala>0)
    echo 'Full chicken masala: '.$Full_chicken_masala.'</br><hr>' ;
  if($Half_chicken_chilli>0)
    echo 'Half chicken chilli: '.$Half_chicken_chilli.'</br><hr>' ;
  if($Full_chicken_chilli>0)
    echo 'Full chicken chilli: '.$Full_chicken_chilli.'</br><hr>' ;
    if($Half_chicken_korma>0)
    echo 'Half chicken korma: '.$Half_chicken_korma.'</br><hr>' ;
  if($Full_chicken_korma>0)
    echo 'Full chicken korma: '.$Full_chicken_korma.'</br><hr>' ; 
  if($Half_chicken_tikka_masala_boneless>0)
    echo 'Half chicken tikka masala boneless: '.$Half_chicken_tikka_masala_boneless.'</br><hr>' ;
  if($Full_chicken_tikka_masala_boneless>0)
    echo 'Full chicken tikka masala boneless: '.$Full_chicken_tikka_masala_boneless.'</br><hr>' ;
  if($Half_kadhai_chicken>0)
    echo 'Half kadhai chicken: '.$Half_kadhai_chicken.'</br><hr>' ;
  if($Full_kadhai_chicken>0)
    echo 'Full kadhai chicken: '.$Full_kadhai_chicken.'</br><hr>' ;
  if($Half_butter_chicken>0)
    echo 'Half butter chicken: '.$Half_butter_chicken.'</br><hr>' ;
  if($Full_butter_chicken>0)
    echo 'Full butter chicken: '.$Full_butter_chicken.'</br><hr>' ;
  if($Half_tawa_chicken>0)
    echo 'Half tawa chicken: '.$Half_tawa_chicken.'</br><hr>' ;
  if($Full_tawa_chicken>0)
    echo 'Full tawa chicken: '.$Full_tawa_chicken.'</br><hr>' ; 
  if($Half_shahi_chicken>0)
    echo 'Half shahi chicken: '.$Half_shahi_chicken.'</br><hr>' ;
  if($Full_shahi_chicken>0)
    echo 'Full shahi chicken: '.$Full_shahi_chicken.'</br><hr>' ;
  if($quarter_chicken_gravy>0)
    echo 'quarter chicken gravy: '.$quarter_chicken_gravy.'</br><hr>' ;
    if($Half_chicken_gravy>0)
    echo 'Half chicken gravy: '.$Half_chicken_gravy.'</br><hr>' ;
  if($Full_chicken_gravy>0)
    echo 'Full chicken gravy: '.$Full_chicken_gravy.'</br><hr>' ; 
  if($Half_plain_rice>0)
    echo 'Half plain rice: '.$Half_plain_rice.'</br><hr>' ;
  if($Full_plain_rice>0)
    echo 'Full plain rice: '.$Full_plain_rice.'</br><hr>' ; 
  if($Half_jeera_rice>0)
    echo 'Half jeera rice: '.$Half_jeera_rice.'</br><hr>' ;
  if($Full_jeera_rice>0)
    echo 'Full jeera rice: '.$Full_jeera_rice.'</br><hr>' ;
  if($Half_biryani_rice>0)
    echo 'Half biryani rice: '.$Half_biryani_rice.'</br><hr>' ;
  if($Full_biryani_rice>0)
    echo 'Full biryani rice: '.$Full_biryani_rice.'</br><hr>' ;
  if($Half_egg_biryani>0)
    echo 'Half egg biryani: '.$Half_egg_biryani.'</br><hr>' ;
  if($Full_egg_biryani>0)
    echo 'Full egg biryani: '.$Full_egg_biryani.'</br><hr>' ;
  if($Half_muttoon_biryani>0)
    echo 'Half mutton biryani: '.$Half_mutton_biryani.'</br><hr>' ;
  if($Full_mutton_biryani>0)
    echo 'Full mutton biryani: '.$Full_mutton_biryani.'</br><hr>' ;
  if($Half_chicken_biryani>0)
    echo 'Half chicken biryani: '.$Half_chicken_biryani.'</br><hr>' ;
  if($Full_chicken_biryani>0)
    echo 'Full chicken biryani: '.$Full_chicken_biryani.'</br><hr>' ;
  if($Half_veg_fried_rice>0)
    echo 'Half veg fried rice: '.$Half_veg_fried_rice.'</br><hr>' ;
  if($Full_veg_fried_rice>0)
    echo 'Full veg fried rice: '.$Full_veg_fried_rice.'</br><hr>' ;
  if($Half_chicken_fried_rice>0)
    echo 'Half chicken fried rice: '.$Half_chicken_fried_rice.'</br><hr>' ;
  if($Half_egg_chilli>0)
    echo 'Half Egg chilli: '.$Half_egg_chilli.'</br><hr>' ;
  if($Full_egg_chilli>o)
    echo 'Full Egg Chilli: '.$Full_egg_chilli.'</br><hr>' ;
  if($Half_rosted>0)
    echo 'Half Roasted: '.$Half_rosted.'</br><hr>' ;
  if($Full_rosted>0)
    echo 'Full Roasted: '.$Full_rosted.'</br><hr>' ;
    if($Half_chicken_tikka>0)
    echo 'Half Chicken Tikka: '.$Half_chicken_tikka.'</br><hr>' ;
  if($Full_chicken_tikka>0)
    echo 'Full Chicken Tikka: '.$Full_chicken_tikka.'</br><hr>' ;
  if($Half_shami_kabab>0)
    echo 'Half Shami Kawab: '.$Half_shami_kabab.'</br><hr>' ;
  if($Full_shami_kabab>0)
    echo 'Full Shami Kawab: '.$Full_shami_kabab.'</br><hr>' ;
  if($Full_chicken_fried_rice>0)
    echo 'Full chicken fried rice: '.$Full_chicken_fried_rice.'</br><hr>' ;
  if($Half_egg_chilli>0)
    echo 'Half egg chilli: '.$Half_egg_chilli.'</br><hr>' ;
  if($Full_egg_chilli>0)
    echo 'Full egg chilli: '.$Full_egg_chilli.'</br><hr>' ;
  if($Half_rosted>0)
    echo 'Half rosted: '.$Half_rosted.'</br><hr>' ;
  if($Full_rosted>0)
    echo 'Full rosted: '.$Full_rosted.'</br><hr>' ;
  if($Half_chicken_tikka>0)
    echo 'Half chicken tikka: '.$Half_chicken_tikka.'</br><hr>' ;
  if($Full_chicken_tikka>0)
    echo 'Full chicken tikka: '.$Full_chicken_tikka.'</br><hr>' ;
  if($Half_shami_kabab>0)
    echo 'Half shami kabab: '.$Half_shami_kabab.'</br><hr>' ;
  if($Full_shami_kabab>0)
    echo 'Full shami kabab: '.$Full_shami_kabab.'</br><hr>' ;   
  if($Half_paneer_kadhai>0)
    echo 'Half paneer kadhai: '.$Half_paneer_kadhai.'</br><hr>' ;
  if($Full_paneer_kadhai>0)
    echo 'Full paneer kadhai: '.$Full_paneer_kadhai.'</br><hr>' ;   
  if($Half_paneer_butter_masala>0)
    echo 'Half paneer butter masala: '.$Half_paneer_butter_masala.'</br><hr>' ;
  if($Full_paneer_butter_masala>0)
    echo 'Full paneer butter masala: '.$Full_paneer_butter_masala.'</br><hr>' ;
  if($Half_paneer_do_pyaza>0)
    echo 'Half paneer do pyaza: '.$Half_paneer_do_pyaza.'</br><hr>' ;
  if($Full_paneer_do_pyaza>0)
    echo 'Full paneer do pyaza: '.$Full_paneer_do_pyaza.'</br><hr>' ;
  if($Half_dal_butter_fry>0)
    echo 'Half dal butter fry: '.$Half_dal_butter_fry.'</br><hr>' ;
  if($Full_dal_butter_fry>0)
    echo 'Full dal butter fry: '.$Full_dal_butter_fry.'</br><hr>' ;
  if($Half_paneer_bhujiya>0)
    echo 'Half paneer bhujiya: '.$Half_paneer_bhujiya.'</br><hr>' ;
  if($Full_paneer_bhujiya>0)
    echo 'Full paneer bhujiya: '.$Full_paneer_bhujiya.'</br><hr>' ;   
  if($Half_matar_paneer>0)
    echo 'Half matar paneer: '.$Half_matar_paneer.'</br><hr>' ;
  if($Full_matar_paneer>0)
    echo 'Full matar paneer: '.$Full_matar_paneer.'</br><hr>' ;           
  if($Half_aloo_matar>0)
    echo 'Half aloo matar: '.$Half_aloo_matar.'</br><hr>' ;
  if($Full_aloo_matar>0)
    echo 'Full aloo matar: '.$Full_aloo_matar.'</br><hr>' ; 
  if($Half_paneer_chilli>0)
    echo 'Half paneer chilli: '.$Half_paneer_chilli.'</br><hr>' ;
  if($Full_paneer_chilli>0)
    echo 'Full paneer chilli: '.$Full_paneer_chilli.'</br><hr>' ;   
  if($Half_mushroom_masala>0)
    echo 'Half mushroom masala: '.$Half_mushroom_masala.'</br><hr>' ;
  if($Full_mushroom_masala>0)
    echo 'Full mushroom masala: '.$Full_mushroom_masala.'</br><hr>' ;
  if($Half_mushroom_matar>0)
    echo 'Half mushroom matar: '.$Half_mushroom_matar.'</br><hr>' ;
  if($Full_mushroom_matar>0)
    echo 'Full mushroom matar: '.$Full_mushroom_matar.'</br><hr>' ;
  if($Half_egg_curry>0)
    echo 'Half egg curry: '.$Half_egg_curry.'</br><hr>' ;
  if($Full_egg_curry>0)
    echo 'Full egg curry: '.$Full_egg_curry.'</br><hr>' ;
  if($Half_egg_bhurji_masala>0)
    echo 'Half egg bhurji masala: '.$Half_egg_bhurji_masala.'</br><hr>' ;
  if($Full_egg_bhurji_masala>0)
    echo 'Full egg bhurji masala: '.$Full_egg_bhurji_masala.'</br><hr>' ;
  if($cold_drink>0)
    echo 'Cold Drink: '.$cold_drink.'</br><hr>' ;
  if($onion_salad>0)
    echo 'onion salad: '.$onion_salad.'</br><hr>' ;
  if($green_salad>0)
    echo 'green salad: '.$green_salad.'</br><hr>' ;
  if($roti>0)
    echo 'roti: '.$roti.'</br><hr>' ;
  if($paratha>0)
    echo 'paratha: '.$paratha.'</br><hr>' ;
  if($egg_roll>0)
    echo 'egg roll: '.$egg_roll.'</br><hr>' ;
  if($kabab_roll>0)
    echo 'kabab roll: '.$kabab_roll.'</br><hr>' ;
  if($Half_mutton_masala>0)
    echo 'Half mutton masala: '.$Half_mutton_masala.'</br><hr>' ;
  if($Full_mutton_masala>0)
    echo 'Full mutton masala: '.$Full_mutton_masala.'</br><hr>' ;
  if($Half_chicken_curry>0)
    echo 'Half chicken curry: '.$Half_chicken_curry.'</br><hr>' ;
  if($Full_chicken_curry>0)
    echo 'Full chicken curry: '.$Full_chicken_curry.'</br><hr>' ;
    echo 'Total Amount:'.$totalamt.'<br><hr>';
    echo 'lazeez';
     ?>"/>

                                <center><button type="submit" class="btn btn-primary ">Place Order</button></center>
                                </div>
                            </form>
                        </div>
                        <!----------footer--------
                        <div class="modal-footer">
                            <center>
                                <button class="btn btn-primary ">Place Order</button>
                            </center>
                        </div>
                        ------------->
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>
<h5>Want to <b><a href=lazeez.php>Add/Remove</a></b> items</h5>
<!------------------------Main Content------------------------------>

</body>
<footer  class="container-fluid text-center">
    <div class="foot">
        <center>
            <h3>Founders...</h3>
            <table class="table">
                <thead>
                <tr>
                    <th><center><img src="../../Images/abdfoodzumbo.png" class="img-responsive"><br><b>Abdul Kalam<br>7068987538</b></center></th>
                    <th><center><img src="../../Images/ggfoodzumbo.png" class="img-responsive"><br><b>Garvita Garg<br>.....</b></center></th>
                    <th><center><img src="../../Images/bansalfoodzumbo.png" class="img-responsive"><br><b>Tushar Bansal<br>8273176768</b></center></th>
                </tr>
                </thead>
            </table>
        </center>
        <div><center><h3>About us.</h3></center>
            <center>
                FoodZumbo is most convenient online food ordering site for all the colleges ,universities<br>
                and all the people of sultanpur.It connects people with the best restaurants around them.<br>
                Delivering only in sultanpur, FoodZumbo is the only site for delivering the best of foods&nbsp;&nbsp;<br>
                from the restaurants around you of your choice.<br>
                &nbsp;&nbsp;We believe food is a pleasure and ordering should be fast and definitely a fun experience.<br>
                Ordering with foodzumbo is as easy as a 5-step recipe: enjoy n share ur experience with<br>
                us...!!!!!<br>
            </center><br><hr></div>

        <a name="contact"></a>
        <center><h3><b>Get in Touch</b></h3></center>
        <center>
            <a href="http://www.facebook.com/foodzumbo"> <img src="../../Images/facebook_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
            <a href="log.html"> <img src="../../Images/twitter_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
            <a href="#"> <img src="../../Images/instagram_sq.png"></a>
        </center><br><hr>

        <div>
            <center>
                <b><h3>Contact Us.</h3></b>
                Feel free to contact with us at our Helpline no. <b>7068987538,8574925398,8273176768</b><br>
                For any Suggestions/Queries kindly mail us at <b>FoodZumbo@gmail.com</b>
            </center>
        </div>
    </div>
</footer>
</html>
<?php
}
else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Failed</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <center>
        <div class="modal-fade" id="popupwindow">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-----header-------->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Order Failed</h3>
                    </div>
                    <!--------Body--------->
                    <div class="modal-body">
                        <h5>Sorry your order couldn't be processed it must be greater than <font color="red">200</font></h5>
                        Click <a href="lazeez.php">here</a> to go back to Menu page...!!
                    </div>

                    <!----------footer-------->
                    <div class="modal-footer">
                        <center>
                            <h4>Thank You..!!</h4>
                        </center>
                    </div>

                </div>
            </div>
        </div>
    </center>
</div>
</body>
</html>
<?php
}
?>