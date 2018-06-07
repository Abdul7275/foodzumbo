<?php
include '../../Core/Functions/general.php';
    $totalqty=0;
  $delivery=0;
$totalqty=0;
  $delivery=0;
  $discount=0;
 	$veg_cutlet = secure($_POST['veg_cutlet']) ;
 	$paneer_cutlet = secure($_POST['paneer_cutlet']) ;
 	$onion_pakoda = secure($_POST['onion_pakoda']) ;
 	$paneer_pakoda = secure($_POST['paneer_pakoda']) ;
 	$french_fries = secure($_POST['french_fries']) ;
 	$paneer_fingers = secure($_POST['paneer_fingers']) ;
 	$veg_sandwich = secure($_POST['veg_sandwich']) ;
 	$cheese_sandwich = secure($_POST['cheese_sandwich']) ;
 	$paneer_tikka = secure($_POST['paneer_tikka']) ;
 	$veg_franky = secure($_POST['veg_franky']) ;
 	$cheese_franky = secure($_POST['cheese_franky']) ;
 	$paneer_franky = secure($_POST['paneer_franky']) ;
 	$double_maska_pavbhaji = secure($_POST['double_maska_pavbhaji']) ;
 	$teekha_pavbhaji = secure($_POST['teekha_pavbhaji']) ;
 	$paneer_pavbhaji = secure($_POST['paneer_pavbhaji']) ;
 	$chilly_paneer_gravy = secure($_POST['chilly_paneer_gravy']) ;
 	$chilly_paneer_dry = secure($_POST['chilly_paneer_dry']) ;
 	$veg_manchurian_gravy = secure($_POST['veg_manchurian_gravy']) ;
 	$veg_manchurian_dry = secure($_POST['veg_manchurian_dry']) ;
 	$paneer_manchurian = secure($_POST['paneer_manchurian']) ;
 	$cheese_manchurian = secure($_POST['cheese_manchurian']) ;
 	$american_chopsuey = secure($_POST['american_chopsuey']) ;
 	$hakka_noodles_gravy = secure($_POST['hakka_noodles_gravy']) ;
 	$hakka_noodles_dry = secure($_POST['hakka_noodles_dry']) ;
 	$paneer_schezwan = secure($_POST['paneer_schezwan']) ;
 	$crispy_baby_corns = secure($_POST['crispy_baby_corns']) ;
 	$crispy_chilly_potato_hot = secure($_POST['crispy_chilly_potato_hot']) ;
 	$crispy_chilly_potato_sweet = secure($_POST['crispy_chilly_potato_sweet']) ;
 	$paneer_75 = secure($_POST['paneer_75']) ;
 	$ching_pong_crispeez = secure($_POST['ching_pong_crispeez']) ;
 	$veg_chowmien = secure($_POST['veg_chowmien']) ;
 	$paneer_chowmien = secure($_POST['paneer_chowmien']) ;
 	$american_chowmien = secure($_POST['american_chowmien']) ;
 	$cheese_chowmien = secure($_POST['cheese_chowmien']) ;
 	$all_in_one_chowmien = secure($_POST['all_in_one_chowmien']) ;
 	$chowmien_soup_style = secure($_POST['chowmien_soup_style']) ;
 	$chilli_garlic = secure($_POST['chilli_garlic']) ;
 	$bread_roll = secure($_POST['bread_roll']) ;
 	$veg_spring_roll = secure($_POST['veg_spring_roll']) ;
 	$paneer_spring_roll = secure($_POST['paneer_spring_roll']) ;
 	$noodles_spring_roll = secure($_POST['noodles_spring_roll']) ;
 	$mushroom_spring_roll = secure($_POST['mushroom_spring_roll']) ;
 	$chakkar_kachauri = secure($_POST['chakkar_kachauri']) ;
 	$cheese_balls = secure($_POST['cheese_balls']) ;
 	$italian_cream_pasta = secure($_POST['italian_cream_pasta']) ;
 	$tom_chi_pasta = secure($_POST['tom_chi_pasta']) ;
 	$fusili_bucati_pasta = secure($_POST['fusili_bucati_pasta']) ;
 	$veg_kathi_roll = secure($_POST['veg_kathi_roll']) ;
 	$veg_kabab_roll = secure($_POST['veg_kabab_roll']) ;
 	$veg_fried_rice = secure($_POST['veg_fried_rice']) ;
 	$paneer_fried_rice = secure($_POST['paneer_fried_rice']) ;
 	$cheese_fried_rice = secure($_POST['cheese_fried_rice']) ;
 	$mushroom_babycorn = secure($_POST['mushroom_babycorn']) ;
 	$all_in_one = secure($_POST['all_in_one']) ;
 	
 	$spicy_paneer_tit_bit = secure($_POST['spicy_paneer_tit_bit']) ;
 	$veg_biryani = secure($_POST['veg_biryani']) ;
 	$paneer_biryani = secure($_POST['paneer_biryani']) ;
 	$veg_burger = secure($_POST['veg_burger']) ;
 	$veg_cheese_burger = secure($_POST['veg_cheese_burger']) ;
 	$paneer_burger = secure($_POST['paneer_burger']) ;
 	$veg_pond = secure($_POST['veg_pond']) ;
 	$cheese_pond = secure($_POST['cheese_pond']) ;
 	$tomato_tango = secure($_POST['tomato_tango']) ;
 	$super_cheese_bits = secure($_POST['super_cheese_bits']) ;
 	$exotic_veg = secure($_POST['exotic_veg']) ;
 	$veg_pizza = secure($_POST['veg_pizza']) ;
 	$king_cheese_pizza = secure($_POST['king_cheese_pizza']) ;
 	$paneer_pizza = secure($_POST['paneer_pizza']) ;
 	$mushroom_pizza = secure($_POST['mushroom_pizza']) ;
 	$onion_capsicum_classic = secure($_POST['onion_capsicum_classic']) ;
 	$triple_c_pizza = secure($_POST['triple_c_pizza']) ;
 	$mushroom_babycorn_pizza = secure($_POST['mushroom_babycorn_pizza']) ;
 	$red_chilli_bijli = secure($_POST['red_chilli_bijli']) ;
 	$cheesy_macroni = secure($_POST['cheesy_macroni']) ;
 	$paneer_tikka_pizza = secure($_POST['paneer_tikka_pizza']) ;
 	$green_olive_vegetable = secure($_POST['green_olive_vegetable']) ;
 	$sundae_spl_pizza = secure($_POST['sundae_spl_pizza']) ;
 	$paneer_paratha = secure($_POST['paneer_paratha']) ;
 	$cheese_paratha = secure($_POST['cheese_paratha']) ;
 	$seasonal_paratha = secure($_POST['seasonal_paratha']) ;
 	$makke_di_roti = secure($_POST['makke_di_roti']) ;
 	$tomato_soup = secure($_POST['tomato_soup']) ;
 	$sweet_corn_soup = secure($_POST['sweet_corn_soup']) ;
  $hot_n_sour_vegetable_soup = secure($_POST['hot_n_sour_vegetable_soup']) ;
  $peking_soup = secure($_POST['peking_soup']) ;
  $veg_soup = secure($_POST['veg_soup']) ;
  $mushroom_soup = secure($_POST['mushroom_soup']) ;
  $manchow_soup = secure($_POST['manchow_soup']) ;
  $masala_balls_soup = secure($_POST['masala_balls_soup']) ;
  $paper_dosa = secure($_POST['paper_dosa']) ;
  $masala_dosa = secure($_POST['masala_dosa']) ;
  $onion_dosa = secure($_POST['onion_dosa']) ;
  $paneer_masala_dosa = secure($_POST['paneer_masala_dosa']) ;
  $shahi_paneer_dosa = secure($_POST['shahi_paneer_dosa']) ;
  $butter_masala_dosa = secure($_POST['butter_masala_dosa']) ;
  $sundae_spl_dosa = secure($_POST['sundae_spl_dosa']) ;
  $chilly_paneer_dosa = secure($_POST['chilly_paneer_dosa']) ;
  $idli_sambhar = secure($_POST['idli_sambhar']) ;
  $idli_fry = secure($_POST['idli_fry']) ;
  $onion_uttapam = secure($_POST['onion_uttapam']) ;
  $paneer_uttapam = secure($_POST['paneer_uttapam']) ;
  $mix_veg_uttapam = secure($_POST['mix_veg_uttapam']) ;
  $fusion_dosa = secure($_POST['fusion_dosa']) ;
  $paneer_tikka_dosa = secure($_POST['paneer_tikka_dosa']) ;
  $totalqty=($veg_cutlet + $paneer_cutlet + $onion_pakoda + $paneer_pakoda + $french_fries + $paneer_fingers + $veg_sandwich + $cheese_sandwich + $paneer_tikka + $veg_franky + $paneer_franky + $cheese_franky + $double_maska_pavbhaji + $teekha_pavbhaji + $paneer_pavbhaji + $chilly_paneer_gravy + $chilly_paneer_dry + $veg_manchurian_dry + $veg_manchurian_gravy + $paneer_manchurian + $cheese_manchurian + $american_chopsuey + $hakka_noodles_dry + $hakka_noodles_gravy + $paneer_schezwan + $crispy_baby_corns + $crispy_chilly_potato_hot + $crispy_chilly_potato_sweet + $paneer_75 + $ching_pong_crispeez + $veg_chowmien + $paneer_chowmien + $cheese_chowmien + $american_chowmien + $all_in_one_chowmien + $chowmien_soup_style + $chilli_garlic + $bread_roll + $veg_spring_roll + $paneer_spring_roll + $noodles_spring_roll + $mushroom_spring_roll + $chakkar_kachauri + $cheese_balls + $italian_cream_pasta + $tom_chi_pasta + $fusili_bucati_pasta + $veg_kathi_roll + $veg_kabab_roll + $veg_fried_rice + $cheese_fried_rice + $paneer_fried_rice + $mushroom_babycorn + $all_in_one + $spicy_paneer_tit_bit + $veg_biryani +$paneer_biryani +$veg_burger +$veg_cheese_burger +$paneer_burger + $cheese_pond + $veg_pond + $tomato_tango +$super_cheese_bits + $exotic_veg + $veg_pizza + $paneer_pizza + $king_cheese_pizza +$onion_capsicum_classic +$mushroom_pizza + $triple_c_pizza +$mushroom_babycorn_pizza +$red_chilli_bijli + $cheesy_macroni +$paneer_tikka_pizza +$green_olive_vegetable +$sundae_spl_pizza +$paneer_paratha +$cheese_paratha +$makke_di_roti +$seasonal_paratha +$tomato_soup +$sweet_corn_soup +$hot_n_sour_vegetable_soup +$peking_soup +$veg_soup + $mushroom_soup +$masala_balls_soup +$manchow_soup + $paper_dosa +$masala_dosa +$onion_dosa +$paneer_masala_dosa +$shahi_paneer_dosa +$sundae_spl_dosa +$butter_masala_dosa +$chilly_paneer_dosa +$idli_sambhar +$idli_fry +$onion_uttapam +$mix_veg_uttapam +$paneer_uttapam + $fusion_dosa +$paneer_tikka_dosa); 
 	$totalamt=(($veg_cutlet*60)+ ($paneer_cutlet*75)+ ($onion_pakoda*60)+ ($paneer_pakoda*75)+ ($french_fries*70)+ ($paneer_fingers*120)+ ($veg_sandwich*40)+ ($cheese_sandwich*60)+ ($paneer_tikka*120)+ ($veg_franky*60)+ ($paneer_franky*75)+ ($cheese_franky*75)+ ($double_maska_pavbhaji*70)+ ($teekha_pavbhaji*70)+ ($paneer_pavbhaji*90)+ ($chilly_paneer_gravy*100)+ ($chilly_paneer_dry*120)+ ($veg_manchurian_dry*120)+ ($veg_manchurian_gravy*100)+ ($paneer_manchurian*120)+ ($cheese_manchurian*130)+ ($american_chopsuey*140)+ ($hakka_noodles_dry*120)+ ($hakka_noodles_gravy*120)+ ($paneer_schezwan*140)+ ($crispy_baby_corns*155)+ ($crispy_chilly_potato_hot*145)+ ($crispy_chilly_potato_sweet*145)+ ($paneer_75*155)+ ($ching_pong_crispeez*155)+ ($veg_chowmien*90)+ ($paneer_chowmien*120)+  ($cheese_chowmien*120)+ ($american_chowmien*120)+ ($all_in_one_chowmien*120)+ ($chowmien_soup_style*120)+ ($chilli_garlic*120)+ ($bread_roll*70)+ ($veg_spring_roll*70)+ ($paneer_spring_roll*100)+ ($noodles_spring_roll*70)+ ($mushroom_spring_roll*100)+ ($chakkar_kachauri*90)+ ($cheese_balls*100)+ ($italian_cream_pasta*130)+ ($tom_chi_pasta*120)+ ($fusili_bucati_pasta*120)+ ($veg_kathi_roll*70)+ ($veg_kabab_roll*70)+ ($veg_fried_rice*90)+ ($cheese_fried_rice*120)+ ($paneer_fried_rice*120)+ ($mushroom_babycorn*120)+ ($all_in_one*120)+ ($spicy_paneer_tit_bit*120)+ ($veg_biryani*90)+($paneer_biryani*120)+($veg_burger*50)+($veg_cheese_burger*70)+ ($cheese_pond*90)+ ($veg_pond*70)+ ($paneer_burger*70) + ($tomato_tango*130)+($super_cheese_bits*220)+ ($exotic_veg*260)+ ($veg_pizza*130)+ ($paneer_pizza*150) + ($king_cheese_pizza*160) + ($onion_capsicum_classic*130) + ($mushroom_pizza*160) + ($triple_c_pizza*150) + ($mushroom_babycorn_pizza*160)+ ($red_chilli_bijli*160)+ ($cheesy_macroni*160)+($paneer_tikka_pizza*180)+($green_olive_vegetable*200)+($sundae_spl_pizza*300)+($paneer_paratha*50)+($cheese_paratha*50)+($makke_di_roti*90)+($seasonal_paratha*40)+($tomato_soup*60)+($sweet_corn_soup*70)+($hot_n_sour_vegetable_soup*70)+($peking_soup*80)+($veg_soup*70)+ ($mushroom_soup*70)+($masala_balls_soup*80)+($manchow_soup*80)+ ($paper_dosa*60)+($masala_dosa*80)+($onion_dosa*80)+($paneer_masala_dosa*100)+($shahi_paneer_dosa*120)+($sundae_spl_dosa*120)+($butter_masala_dosa*90)+($chilly_paneer_dosa*120)+($idli_sambhar*80)+($idli_fry*90)+($onion_uttapam*90)+($mix_veg_uttapam*90)+($paneer_uttapam*110)+ ($fusion_dosa*110)+($paneer_tikka_dosa*140)); 
   
  if($totalamt>"149"){


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Please Review Your Order</title>
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
            <a href="../../index.html" class="navbar-brand">FoodZumbo</a>
        </div>

        <!--------------Menuitems---------------->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#about">About</a> </li>
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
	if($veg_cutlet>"0")
    echo '<font size=  2px>veg cutlet</font><hr>' ;
  if($paneer_cutlet>"0")
    echo '<font size=  2px>paneer cutlet</font><hr>' ;
  if($onion_pakoda>"0")
    echo '<font size=  2px>onion pakoda</font><hr>' ;
  if($paneer_pakoda>"0")
    echo '<font size=  2px>paneer pakoda</font><hr>' ;
  if($french_fries>"0")
    echo '<font size=  2px>french fries</font><hr>' ;
  if($paneer_fingers>"0")
    echo '<font size=  2px>paneer fingers</font><hr>' ;
  if($veg_sandwich>"0")
    echo '<font size=  2px>veg sandwich</font><hr>' ;
  if($cheese_sandwich>"0")
    echo '<font size=  2px>cheese sandwich</font><hr>' ;
  if($paneer_tikka>"0")
    echo '<font size=  2px>paneer tikka</font><hr>' ;
  if($veg_franky>"0")
    echo '<font size=  2px>veg franky</font><hr>' ;
  if($cheese_franky>"0")
    echo '<font size=  2px>cheese franky</font><hr>' ;
  if($paneer_franky>"0")
    echo '<font size=  2px>paneer franky</font><hr>' ;
  if($double_maska_pavbhaji>"0")
    echo '<font size=  2px>double maska pavbhaji</font><hr>' ;
  if($teekha_pavbhaji>"0")
    echo '<font size=  2px>teekha pavbhaji</font><hr>' ;
  if($paneer_pavbhaji>"0")
    echo '<font size=  2px>paneer pavbhaji</font><hr>' ;
  if($chilly_paneer_gravy>"0")
    echo '<font size=  2px>chilly paneer gravy</font><hr>' ;
  if($chilly_paneer_dry>"0")
    echo '<font size=  2px>chilly paneer dry</font><hr>' ;
  if($veg_manchurian_gravy>"0")
    echo '<font size=  2px>veg manchurian gravy</font><hr>' ;
  if($veg_manchurian_dry>"0")
    echo '<font size=  2px>veg manchurian dry</font><hr>' ;
  if($paneer_manchurian>"0")
    echo '<font size=  2px>paneer manchurian</font><hr>' ;
  if($cheese_manchurian>"0")
    echo '<font size=  2px>cheese manchurian</font><hr>' ;
  if($american_chopsuey>"0")
    echo '<font size=  2px>american chopsuey</font><hr>' ;
  if($hakka_noodles_gravy>"0")
    echo '<font size=  2px>hakka noodles gravy</font><hr>' ;
  if($hakka_noodles_dry>"0")
    echo '<font size=  2px>hakka noodles dry</font><hr>' ;
  if($paneer_schezwan>"0")
    echo '<font size=  2px>paneer schezwan</font><hr>' ;
  if($crispy_baby_corns>"0")
    echo '<font size=  2px>crispy baby_ orns</font><hr>' ;
  if($crispy_chilly_potato_hot>"0")
    echo '<font size=  2px>crispy chilly potato hot</font><hr>' ;
  if($crispy_chilly_potato_sweet>"0")
    echo '<font size=  2px>crispy chilly potato sweet</font><hr>' ;
  if($paneer_75>"0")
    echo '<font size=  2px>paneer 75</font><hr>' ;
  if($ching_pong_crispeez>"0")
    echo '<font size=  2px>ching pong crispeez</font><hr>' ;
  if($veg_chowmien>"0")
    echo '<font size=  2px>veg chowmien</font><hr>' ;
  if($paneer_chowmien>"0")
    echo '<font size=  2px>paneer chowmien</font><hr>' ;
  if($american_chowmien>"0")
    echo '<font size=  2px>american chowmien</font><hr>' ;
  if($cheese_chowmien>"0")
    echo '<font size=  2px>cheese chowmien</font><hr>' ;
  if($all_in_one_chowmien>"0")
    echo '<font size=  2px>all in one chowmien</font><hr>' ;
  if($chowmien_soup_style>"0")
    echo '<font size=  2px>chowmien soup style</font><hr>' ;
  if($chilli_garlic>"0")
    echo '<font size=  2px>chilli garlic</font><hr>' ;
  if($bread_roll>"0")
    echo '<font size=  2px>bread roll</font><hr>' ;
  if($veg_spring_roll>"0")
    echo '<font size=  2px>veg spring roll</font><hr>' ;
  if($paneer_spring_roll>"0")
    echo '<font size=  2px>paneer spring roll</font><hr>' ;
  if($noodles_spring_roll>"0")
    echo '<font size=  2px>noodles spring roll</font><hr>' ;
  if($mushroom_spring_roll>"0")
    echo '<font size=  2px>mushroom spring roll</font><hr>' ;
  if($chakkar_kachauri>"0")
    echo '<font size=  2px>chakkar kachauri</font><hr>' ;
  if($cheese_balls>"0")
    echo '<font size=  2px>cheese balls</font><hr>' ;
  if($italian_cream_pasta>"0")
    echo '<font size=  2px>italian cream pasta</font><hr>' ;
  if($tom_chi_pasta>"0")
    echo '<font size=  2px>tom chi pasta</font><hr>' ;
  if($fusili_bucati_pasta>"0")
    echo '<font size=  2px>fusili bucati pasta</font><hr>' ;
  if($veg_kathi_roll>"0")
    echo '<font size=  2px>veg kathi roll</font><hr>' ;
  if($veg_kabab_roll>"0")
    echo '<font size=  2px>veg kabab roll</font><hr>' ;
  if($veg_fried_rice>"0")
    echo '<font size=  2px>veg fried rice</font><hr>' ;
  if($paneer_fried_rice>"0")
    echo '<font size=  2px>paneer fried rice</font><hr>' ;
  if($cheese_fried_rice>"0")
    echo '<font size=  2px>cheese fried rice</font><hr>' ;
  if($mushroom_babycorn>"0")
    echo '<font size=  2px>mushroom babycorn</font><hr>' ;
  if($all_in_one>"0")
    echo '<font size=  2px>all in one</font><hr>' ;
  
  if($spicy_paneer_tit_bit>"0")
    echo '<font size=  2px>spicy paneer tit bit</font><hr>' ;
  if($veg_biryani>"0")
    echo '<font size=  2px>veg biryani</font><hr>' ;
  if($paneer_biryani>"0")
    echo '<font size=  2px>paneer biryani</font><hr>' ;
  if($veg_burger>"0")
    echo '<font size=  2px>veg burger</font><hr>' ;
  if($veg_cheese_burger>"0")
    echo '<font size=  2px>veg cheese burger</font><hr>' ;
  if($paneer_burger>"0")
    echo '<font size=  2px>paneer burger</font><hr>' ;
  if($veg_pond>"0")
    echo '<font size=  2px>veg pond</font><hr>' ;
  if($cheese_pond>"0")
    echo '<font size=  2px>cheese pond</font><hr>' ;
  if($tomato_tango>"0")
    echo '<font size=  2px>tomato tango</font><hr>' ;
  if($super_cheese_bits>"0")
    echo '<font size=  2px>super cheese bits</font><hr>' ;
  if($exotic_veg>"0")
    echo '<font size=  2px>exotic veg</font><hr>' ;
  if($veg_pizza>"0")
    echo '<font size=  2px>veg pizza</font><hr>' ;
  if($king_cheese_pizza>"0")
    echo '<font size=  2px>king cheese pizza</font><hr>' ;
  if($paneer_pizza>"0")
    echo '<font size=  2px>paneer pizza</font><hr>' ;
  if($mushroom_pizza>"0")
    echo '<font size=  2px>mushroom pizza</font><hr>' ;
  if($onion_capsicum_classic>"0")
    echo '<font size=  2px>onion capsicum classic</font><hr>' ;
  if($triple_c_pizza>"0")
    echo '<font size=  2px>triple c pizza</font><hr>' ;
  if($mushroom_babycorn_pizza>"0")
    echo '<font size=  2px>mushroom babycorn pizza</font><hr>' ;
  if($red_chilli_bijli>"0")
    echo '<font size=  2px>red chilli bijli</font><hr>' ;
  if($cheesy_macroni>"0")
    echo '<font size=  2px>cheesy macroni</font><hr>' ;
  if($paneer_tikka_pizza>"0")
    echo '<font size=  2px>paneer tikka pizza</font><hr>' ;
  if($green_olive_vegetable>"0")
    echo '<font size=  2px>green olive vegetable</font><hr>' ;
  if($sundae_spl_pizza>"0")
    echo '<font size=  2px>sundae spl pizza</font><hr>' ;
  if($paneer_paratha>"0")
    echo '<font size=  2px>paneer paratha</font><hr>' ;
  if($cheese_paratha>"0")
    echo '<font size=  2px>cheese paratha</font><hr>' ;
  if($seasonal_paratha>"0")
    echo '<font size=  2px>seasonal paratha</font><hr>' ;
  if($makke_di_roti>"0")
    echo '<font size=  2px>makke di roti</font><hr>' ;
  if($tomato_soup>"0")
    echo '<font size=  2px>tomato soup</font><hr>' ;
  if($sweet_corn_soup>"0")
    echo '<font size=  2px>sweet corn soup</font><hr>' ;
  if($hot_n_sour_vegetable_soup>"0")
    echo '<font size=  2px>hot n sour vegetable soup</font><hr>' ;
  if($peking_soup>"0")
    echo '<font size=  2px>peking soup</font><hr>' ;
  if($veg_soup>"0")
    echo '<font size=  2px>veg soup</font><hr>' ;
  if($mushroom_soup>"0")
    echo '<font size=  2px>mushroom soup</font><hr>' ;
  if($manchow_soup>"0")
    echo '<font size=  2px>manchow soup</font><hr>' ;
  if($masala_balls_soup>"0")
    echo '<font size=  2px>masala balls soup</font><hr>' ;
  if($paper_dosa>"0")
    echo '<font size=  2px>paper dosa</font><hr>' ;
  if($masala_dosa>"0")
    echo '<font size=  2px>masala dosa</font><hr>' ;
  if($onion_dosa>"0")
    echo '<font size=  2px>onion dosa</font><hr>' ;
  if($paneer_masala_dosa>"0")
    echo '<font size=  2px>paneer masala dosa</font><hr>' ;
  if($shahi_paneer_dosa>"0")
    echo '<font size=  2px>shahi paneer dosa</font><hr>' ;
  if($butter_masala_dosa>"0")
    echo '<font size=  2px>butter masala dosa</font><hr>' ;
  if($sundae_spl_dosa>"0")
    echo '<font size=  2px>sundae spl dosa</font><hr>' ;
  if($chilly_paneer_dosa>"0")
    echo '<font size=  2px>chilly paneer dosa</font><hr>' ;
  if($idli_sambhar>"0")
    echo '<font size=  2px>idli sambhar</font><hr>' ;
  if($idli_fry>"0")
    echo '<font size=  2px>idli fry</font><hr>' ;
  if($onion_uttapam>"0")
    echo '<font size=  2px>onion uttapam</font><hr>' ;
  if($paneer_uttapam>"0")
    echo '<font size=  2px>paneer uttapam</font><hr>' ;
  if($mix_veg_uttapam>"0")
    echo '<font size=  2px>mix veg uttapam</font><hr>' ;
  if($fusion_dosa>"0")
    echo '<font size=  2px>fusion dosa</font><hr>' ;
  if($paneer_tikka_dosa>"0")
    echo '<font size=  2px>paneer tikka dosa</font><hr>' ;
    
  
		?>
	</td>

	<td width=10% >
    <?php  
  if($veg_cutlet>"0")
    echo '<font size=  2px>'.$veg_cutlet.'</font><hr>' ;
  if($paneer_cutlet>"0")
    echo '<font size=  2px>'.$paneer_cutlet.'</font><hr>' ;
  if($onion_pakoda>"0")
    echo '<font size=  2px>'.$onion_pakoda.'</font><hr>' ;
  if($paneer_pakoda>"0")
    echo '<font size=  2px>'.$paneer_pakoda.'</font><hr>' ;
  if($french_fries>"0")
    echo '<font size=  2px>'.$french_fries.'</font><hr>' ;
  if($paneer_fingers>"0")
    echo '<font size=  2px>'.$paneer_fingers.'</font><hr>' ;
  if($veg_sandwich>"0")
    echo '<font size=  2px>'.$veg_sandwich.'</font><hr>' ;
  if($cheese_sandwich>"0")
    echo '<font size=  2px>'.$cheese_sandwich.'</font><hr>' ;
  if($paneer_tikka>"0")
    echo '<font size=  2px>'.$paneer_tikka.'</font><hr>' ;
  if($veg_franky>"0")
    echo '<font size=  2px>'.$veg_franky.'</font><hr>' ;
  if($cheese_franky>"0")
    echo '<font size=  2px>'.$cheese_franky.'</font><hr>' ;
  if($paneer_franky>"0")
    echo '<font size=  2px>'.$paneer_franky.'</font><hr>' ;
  if($double_maska_pavbhaji>"0")
    echo '<font size=  2px>'.$double_maska_pavbhaji.'</font><hr>' ;
  if($teekha_pavbhaji>"0")
    echo '<font size=  2px>'.$teekha_pavbhaji.'</font><hr>' ;
  if($paneer_pavbhaji>"0")
    echo '<font size=  2px>'.$paneer_pavbhaji.'</font><hr>' ;
  if($chilly_paneer_gravy>"0")
    echo '<font size=  2px>'.$chilly_paneer_gravy.'</font><hr>' ;
  if($chilly_paneer_dry>"0")
    echo '<font size=  2px>'.$chilly_paneer_dry.'</font><hr>' ;
  if($veg_manchurian_gravy>"0")
    echo '<font size=  2px>'.$veg_manchurian_gravy.'</font><hr>' ;
  if($veg_manchurian_dry>"0")
    echo '<font size=  2px>'.$veg_manchurian_dry.'</font><hr>' ;
  if($paneer_manchurian>"0")
    echo '<font size=  2px>'.$paneer_manchurian.'</font><hr>' ;
  if($cheese_manchurian>"0")
    echo '<font size=  2px>'.$cheese_manchurian.'</font><hr>' ;
  if($american_chopsuey>"0")
    echo '<font size=  2px>'.$american_chopsuey.'</font><hr>' ;
  if($hakka_noodles_gravy>"0")
    echo '<font size=  2px>'.$hakka_noodles_gravy.'</font><hr>' ;
  if($hakka_noodles_dry>"0")
    echo '<font size=  2px>'.$hakka_noodles_dry.'</font><hr>' ;
  if($paneer_schezwan>"0")
    echo '<font size=  2px>'.$paneer_schezwan.'</font><hr>' ;
  if($crispy_baby_corns>"0")
    echo '<font size=  2px>'.$crispy_baby_corns.'</font><hr>' ;
  if($crispy_chilly_potato_hot>"0")
    echo '<font size=  2px>'.$crispy_chilly_potato_hot.'</font><hr>' ;
  if($crispy_chilly_potato_sweet>"0")
    echo '<font size=  2px>'.$crispy_chilly_potato_sweet.'</font><hr>' ;
  if($paneer_75>"0")
    echo '<font size=  2px>'.$paneer_75.'</font><hr>' ;
  if($ching_pong_crispeez>"0")
    echo '<font size=  2px>'.$ching_pong_crispeez.'</font><hr>' ;
  if($veg_chowmien>"0")
    echo '<font size=  2px>'.$veg_chowmien.'</font><hr>' ;
  if($paneer_chowmien>"0")
    echo '<font size=  2px>'.$paneer_chowmien.'</font><hr>' ;
  if($american_chowmien>"0")
    echo '<font size=  2px>'.$american_chowmien.'</font><hr>' ;
  if($cheese_chowmien>"0")
    echo '<font size=  2px>'.$cheese_chowmien.'</font><hr>' ;
  if($all_in_one_chowmien>"0")
    echo '<font size=  2px>'.$all_in_one_chowmien.'</font><hr>' ;
  if($chowmien_soup_style>"0")
    echo '<font size=  2px>'.$chowmien_soup_style.'</font><hr>' ;
  if($chilli_garlic>"0")
    echo '<font size=  2px>'.$chilli_garlic.'</font><hr>' ;
  if($bread_roll>"0")
    echo '<font size=  2px>'.$bread_roll.'</font><hr>' ;
  if($veg_spring_roll>"0")
    echo '<font size=  2px>'.$veg_spring_roll.'</font><hr>' ;
  if($paneer_spring_roll>"0")
    echo '<font size=  2px>'.$paneer_spring_roll.'</font><hr>' ;
  if($noodles_spring_roll>"0")
    echo '<font size=  2px>'.$noodles_spring_roll.'</font><hr>' ;
  if($mushroom_spring_roll>"0")
    echo '<font size=  2px>'.$mushroom_spring_roll.'</font><hr>' ;
  if($chakkar_kachauri>"0")
    echo '<font size=  2px>'.$chakkar_kachauri.'</font><hr>' ;
  if($cheese_balls>"0")
    echo '<font size=  2px>'.$cheese_balls.'</font><hr>' ;
  if($italian_cream_pasta>"0")
    echo '<font size=  2px>'.$italian_cream_pasta.'</font><hr>' ;
  if($tom_chi_pasta>"0")
    echo '<font size=  2px>'.$tom_chi_pasta.'</font><hr>' ;
  if($fusili_bucati_pasta>"0")
    echo '<font size=  2px>'.$fusili_bucati_pasta.'</font><hr>' ;
  if($veg_kathi_roll>"0")
    echo '<font size=  2px>'.$veg_kathi_roll.'</font><hr>' ;
  if($veg_kabab_roll>"0")
    echo '<font size=  2px>'.$veg_kabab_roll.'</font><hr>' ;
  if($veg_fried_rice>"0")
    echo '<font size=  2px>'.$veg_fried_rice.'</font><hr>' ;
  if($paneer_fried_rice>"0")
    echo '<font size=  2px>'.$paneer_fried_rice.'</font><hr>' ;
  if($cheese_fried_rice>"0")
    echo '<font size=  2px>'.$cheese_fried_rice.'</font><hr>' ;
  if($mushroom_babycorn>"0")
    echo '<font size=  2px>'.$mushroom_babycorn.'</font><hr>' ;
  if($all_in_one>"0")
    echo '<font size=  2px>'.$all_in_one.'</font><hr>' ;
  
  if($spicy_paneer_tit_bit>"0")
    echo '<font size=  2px>'.$spicy_paneer_tit_bit.'</font><hr>' ;
  if($veg_biryani>"0")
    echo '<font size=  2px>'.$veg_biryani.'</font><hr>' ;
  if($paneer_biryani>"0")
    echo '<font size=  2px>'.$paneer_biryani.'</font><hr>' ;
  if($veg_burger>"0")
    echo '<font size=  2px>'.$veg_burger.'</font><hr>' ;
  if($veg_cheese_burger>"0")
    echo '<font size=  2px>'.$veg_cheese_burger.'</font><hr>' ;
  if($paneer_burger>"0")
    echo '<font size=  2px>'.$paneer_burger.'</font><hr>' ;
  if($veg_pond>"0")
    echo '<font size=  2px>'.$veg_pond.'</font><hr>' ;
  if($cheese_pond>"0")
    echo '<font size=  2px>'.$cheese_pond.'</font><hr>' ;
  if($tomato_tango>"0")
    echo '<font size=  2px>'.$tomato_tango.'</font><hr>' ;
  if($super_cheese_bits>"0")
    echo '<font size=  2px>'.$super_cheese_bits.'</font><hr>' ;
  if($exotic_veg>"0")
    echo '<font size=  2px>'.$exotic_veg.'</font><hr>' ;
  if($veg_pizza>"0")
    echo '<font size=  2px>'.$veg_pizza.'</font><hr>' ;
  if($king_cheese_pizza>"0")
    echo '<font size=  2px>'.$king_cheese_pizza.'</font><hr>' ;
  if($paneer_pizza>"0")
    echo '<font size=  2px>'.$paneer_pizza.'</font><hr>' ;
  if($mushroom_pizza>"0")
    echo '<font size=  2px>'.$mushroom_pizza.'</font><hr>' ;
  if($onion_capsicum_classic>"0")
    echo '<font size=  2px>'.$onion_capsicum_classic.'</font><hr>' ;
  if($triple_c_pizza>"0")
    echo '<font size=  2px>'.$triple_c_pizza.'</font><hr>' ;
  if($mushroom_babycorn_pizza>"0")
    echo '<font size=  2px>'.$mushroom_babycorn_pizza.'</font><hr>' ;
  if($red_chilli_bijli>"0")
    echo '<font size=  2px>'.$red_chilli_bijli.'</font><hr>' ;
  if($cheesy_macroni>"0")
    echo '<font size=  2px>'.$cheesy_macroni.'</font><hr>' ;
  if($paneer_tikka_pizza>"0")
    echo '<font size=  2px>'.$paneer_tikka_pizza.'</font><hr>' ;
  if($green_olive_vegetable>"0")
    echo '<font size=  2px>'.$green_olive_vegetable.'</font><hr>' ;
  if($sundae_spl_pizza>"0")
    echo '<font size=  2px>'.$sundae_spl_pizza.'</font><hr>' ;
  if($paneer_paratha>"0")
    echo '<font size=  2px>'.$paneer_paratha.'</font><hr>' ;
  if($cheese_paratha>"0")
    echo '<font size=  2px>'.$cheese_paratha.'</font><hr>' ;
  if($seasonal_paratha>"0")
    echo '<font size=  2px>'.$seasonal_paratha.'</font><hr>' ;
  if($makke_di_roti>"0")
    echo '<font size=  2px>'.$makke_di_roti.'</font><hr>' ;
  if($tomato_soup>"0")
    echo '<font size=  2px>'.$tomato_soup.'</font><hr>' ;
  if($sweet_corn_soup>"0")
    echo '<font size=  2px>'.$sweet_corn_soup.'</font><hr>' ;
  if($hot_n_sour_vegetable_soup>"0")
    echo '<font size=  2px>'.$hot_n_sour_vegetable_soup.'</font><hr>' ;
  if($peking_soup>"0")
    echo '<font size=  2px>'.$peking_soup.'</font><hr>' ;
  if($veg_soup>"0")
    echo '<font size=  2px>'.$veg_soup.'</font><hr>' ;
  if($mushroom_soup>"0")
    echo '<font size=  2px>'.$mushroom_soup.'</font><hr>' ;
  if($manchow_soup>"0")
    echo '<font size=  2px>'.$manchow_soup.'</font><hr>' ;
  if($masala_balls_soup>"0")
    echo '<font size=  2px>'.$masala_balls_soup.'</font><hr>' ;
  if($paper_dosa>"0")
    echo '<font size=  2px>'.$paper_dosa.'</font><hr>' ;
  if($masala_dosa>"0")
    echo '<font size=  2px>'.$masala_dosa.'</font><hr>' ;
  if($onion_dosa>"0")
    echo '<font size=  2px>'.$onion_dosa.'</font><hr>' ;
  if($paneer_masala_dosa>"0")
    echo '<font size=  2px>'.$paneer_masala_dosa.'</font><hr>' ;
  if($shahi_paneer_dosa>"0")
    echo '<font size=  2px>'.$shahi_paneer_dosa.'</font><hr>' ;
  if($butter_masala_dosa>"0")
    echo '<font size=  2px>'.$butter_masala_dosa.'</font><hr>' ;
  if($sundae_spl_dosa>"0")
    echo '<font size=  2px>'.$sundae_spl_dosa.'</font><hr>' ;
  if($chilly_paneer_dosa>"0")
    echo '<font size=  2px>'.$chilly_paneer_dosa.'</font><hr>' ;
  if($idli_sambhar>"0")
    echo '<font size=  2px>'.$idli_sambhar.'</font><hr>' ;
  if($idli_fry>"0")
    echo '<font size=  2px>'.$idli_fry.'</font><hr>' ;
  if($onion_uttapam>"0")
    echo '<font size=  2px>'.$onion_uttapam.'</font><hr>' ;
  if($paneer_uttapam>"0")
    echo '<font size=  2px>'.$paneer_uttapam.'</font><hr>' ;
  if($mix_veg_uttapam>"0")
    echo '<font size=  2px>'.$mix_veg_uttapam.'</font><hr>' ;
  if($fusion_dosa>"0")
    echo '<font size=  2px>'.$fusion_dosa.'</font><hr>' ;
  if($paneer_tikka_dosa>"0")
    echo '<font size=  2px>'.$paneer_tikka_dosa.'</font><hr>' ;

        

		?>
	</td>
	<td width=10%>

			<?php
      
	if($veg_cutlet>"0")
    echo '<font size=  2px>'.($veg_cutlet*60).'</font><hr>' ;
  if($paneer_cutlet>"0")
    echo '<font size=  2px>'.($paneer_cutlet*75).'</font><hr>' ;
  if($onion_pakoda>"0")
    echo '<font size=  2px>'.($onion_pakoda*60).'</font><hr>' ;
  if($paneer_pakoda>"0")
    echo '<font size=  2px>'.($paneer_pakoda*75).'</font><hr>' ;
  if($french_fries>"0")
    echo '<font size=  2px>'.($french_fries*70).'</font><hr>' ;
  if($paneer_fingers>"0")
    echo '<font size=  2px>'.($paneer_fingers*120).'</font><hr>' ;
  if($veg_sandwich>"0")
    echo '<font size=  2px>'.($veg_sandwich*40).'</font><hr>' ;
  if($cheese_sandwich>"0")
    echo '<font size=  2px>'.($cheese_sandwich*60).'</font><hr>' ;
  if($paneer_tikka>"0")
    echo '<font size=  2px>'.($paneer_tikka*120).'</font><hr>' ;
  if($veg_franky>"0")
    echo '<font size=  2px>'.($veg_franky*60).'</font><hr>' ;
  if($cheese_franky>"0")
    echo '<font size=  2px>'.($cheese_franky*75).'</font><hr>' ;
  if($paneer_franky>"0")
    echo '<font size=  2px>'.($paneer_franky*75).'</font><hr>' ;
  if($double_maska_pavbhaji>"0")
    echo '<font size=  2px>'.($double_maska_pavbhaji*70).'</font><hr>' ;
  if($teekha_pavbhaji>"0")
    echo '<font size=  2px>'.($teekha_pavbhaji*70).'</font><hr>' ;
  if($paneer_pavbhaji>"0")
    echo '<font size=  2px>'.($paneer_pavbhaji*90).'</font><hr>' ;
  if($chilly_paneer_gravy>"0")
    echo '<font size=  2px>'.($chilly_paneer_gravy*100).'</font><hr>' ;
  if($chilly_paneer_dry>"0")
    echo '<font size=  2px>'.($chilly_paneer_dry*120).'</font><hr>' ;
  if($veg_manchurian_gravy>"0")
    echo '<font size=  2px>'.($veg_manchurian_gravy*100).'</font><hr>' ;
  if($veg_manchurian_dry>"0")
    echo '<font size=  2px>'.($veg_manchurian_dry*120).'</font><hr>' ;
  if($paneer_manchurian>"0")
    echo '<font size=  2px>'.($paneer_manchurian*120).'</font><hr>' ;
  if($cheese_manchurian>"0")
    echo '<font size=  2px>'.($cheese_manchurian*130).'</font><hr>' ;
  if($american_chopsuey>"0")
    echo '<font size=  2px>'.($american_chopsuey*140).'</font><hr>' ;
  if($hakka_noodles_gravy>"0")
    echo '<font size=  2px>'.($hakka_noodles_gravy*120).'</font><hr>' ;
  if($hakka_noodles_dry>"0")
    echo '<font size=  2px>'.($hakka_noodles_dry*120).'</font><hr>' ;
  if($paneer_schezwan>"0")
    echo '<font size=  2px>'.($paneer_schezwan*140).'</font><hr>' ;
  if($crispy_baby_corns>"0")
    echo '<font size=  2px>'.($crispy_baby_corns*155).'</font><hr>' ;
  if($crispy_chilly_potato_hot>"0")
    echo '<font size=  2px>'.($crispy_chilly_potato_hot*145).'</font><hr>' ;
  if($crispy_chilly_potato_sweet>"0")
    echo '<font size=  2px>'.($crispy_chilly_potato_sweet*145).'</font><hr>' ;
  if($paneer_75>"0")
    echo '<font size=  2px>'.($paneer_75*155).'</font><hr>' ;
  if($ching_pong_crispeez>"0")
    echo '<font size=  2px>'.($ching_pong_crispeez*155).'</font><hr>' ;
  if($veg_chowmien>"0")
    echo '<font size=  2px>'.($veg_chowmien*90).'</font><hr>' ;
  if($paneer_chowmien>"0")
    echo '<font size=  2px>'.($paneer_chowmien*120).'</font><hr>' ;
  if($american_chowmien>"0")
    echo '<font size=  2px>'.($american_chowmien*120).'</font><hr>' ;
  if($cheese_chowmien>"0")
    echo '<font size=  2px>'.($cheese_chowmien*120).'</font><hr>' ;
  if($all_in_one_chowmien>"0")
    echo '<font size=  2px>'.($all_in_one_chowmien*120).'</font><hr>' ;
  if($chowmien_soup_style>"0")
    echo '<font size=  2px>'.($chowmien_soup_style*120).'</font><hr>' ;
  if($chilli_garlic>"0")
    echo '<font size=  2px>'.($chilli_garlic*120).'</font><hr>' ;
  if($bread_roll>"0")
    echo '<font size=  2px>'.($bread_roll*70).'</font><hr>' ;
  if($veg_spring_roll>"0")
    echo '<font size=  2px>'.($veg_spring_roll*70).'</font><hr>' ;
  if($paneer_spring_roll>"0")
    echo '<font size=  2px>'.($paneer_spring_roll*100).'</font><hr>' ;
  if($noodles_spring_roll>"0")
    echo '<font size=  2px>'.($noodles_spring_roll*70).'</font><hr>' ;
  if($mushroom_spring_roll>"0")
    echo '<font size=  2px>'.($mushroom_spring_roll*100).'</font><hr>' ;
  if($chakkar_kachauri>"0")
    echo '<font size=  2px>'.($chakkar_kachauri*90).'</font><hr>' ;
  if($cheese_balls>"0")
    echo '<font size=  2px>'.($cheese_balls*100).'</font><hr>' ;
  if($italian_cream_pasta>"0")
    echo '<font size=  2px>'.($italian_cream_pasta*130).'</font><hr>' ;
  if($tom_chi_pasta>"0")
    echo '<font size=  2px>'.($tom_chi_pasta*120).'</font><hr>' ;
  if($fusili_bucati_pasta>"0")
    echo '<font size=  2px>'.($fusili_bucati_pasta*120).'</font><hr>' ;
  if($veg_kathi_roll>"0")
    echo '<font size=  2px>'.($veg_kathi_roll*70).'</font><hr>' ;
  if($veg_kabab_roll>"0")
    echo '<font size=  2px>'.($veg_kabab_roll*70).'</font><hr>' ;
  if($veg_fried_rice>"0")
    echo '<font size=  2px>'.($veg_fried_rice*90).'</font><hr>' ;
  if($paneer_fried_rice>"0")
    echo '<font size=  2px>'.($paneer_fried_rice*120).'</font><hr>' ;
  if($cheese_fried_rice>"0")
    echo '<font size=  2px>'.($cheese_fried_rice*120).'</font><hr>' ;
  if($mushroom_babycorn>"0")
    echo '<font size=  2px>'.($mushroom_babycorn*120).'</font><hr>' ;
  if($all_in_one>"0")
    echo '<font size=  2px>'.($all_in_one*120).'</font><hr>' ;
  
  if($spicy_paneer_tit_bit>"0")
    echo '<font size=  2px>'.($spicy_paneer_tit_bit*120).'</font><hr>' ;
  if($veg_biryani>"0")
    echo '<font size=  2px>'.($veg_biryani*90).'</font><hr>' ;
  if($paneer_biryani>"0")
    echo '<font size=  2px>'.($paneer_biryani*120).'</font><hr>' ;
  if($veg_burger>"0")
    echo '<font size=  2px>'.($veg_burger*50).'</font><hr>' ;
  if($veg_cheese_burger>"0")
    echo '<font size=  2px>'.($veg_cheese_burger*70).'</font><hr>' ;
  if($paneer_burger>"0")
    echo '<font size=  2px>'.($paneer_burger*70).'</font><hr>' ;
  if($veg_pond>"0")
    echo '<font size=  2px>'.($veg_pond*70).'</font><hr>' ;
  if($cheese_pond>"0")
    echo '<font size=  2px>'.($cheese_pond*90).'</font><hr>' ;
  if($tomato_tango>"0")
    echo '<font size=  2px>'.($tomato_tango*130).'</font><hr>' ;
  if($super_cheese_bits>"0")
    echo '<font size=  2px>'.($super_cheese_bits*220).'</font><hr>' ;
  if($exotic_veg>"0")
    echo '<font size=  2px>'.($exotic_veg*260).'</font><hr>' ;
  if($veg_pizza>"0")
    echo '<font size=  2px>'.($veg_pizza*130).'</font><hr>' ;
  if($king_cheese_pizza>"0")
    echo '<font size=  2px>'.($king_cheese_pizza*160).'</font><hr>' ;
  if($paneer_pizza>"0")
    echo '<font size=  2px>'.($paneer_pizza*150).'</font><hr>' ;
  if($mushroom_pizza>"0")
    echo '<font size=  2px>'.($mushroom_pizza*160).'</font><hr>' ;
  if($onion_capsicum_classic>"0")
    echo '<font size=  2px>'.($onion_capsicum_classic*130).'</font><hr>' ;
  if($triple_c_pizza>"0")
    echo '<font size=  2px>'.($triple_c_pizza*150).'</font><hr>' ;
  if($mushroom_babycorn_pizza>"0")
    echo '<font size=  2px>'.($mushroom_babycorn_pizza*160).'</font><hr>' ;
  if($red_chilli_bijli>"0")
    echo '<font size=  2px>'.($red_chilli_bijli*160).'</font><hr>' ;
  if($cheesy_macroni>"0")
    echo '<font size=  2px>'.($cheesy_macroni*160).'</font><hr>' ;
  if($paneer_tikka_pizza>"0")
    echo '<font size=  2px>'.($paneer_tikka_pizza*180).'</font><hr>' ;
  if($green_olive_vegetable>"0")
    echo '<font size=  2px>'.($green_olive_vegetable*200).'</font><hr>' ;
  if($sundae_spl_pizza>"0")
    echo '<font size=  2px>'.($sundae_spl_pizza*300).'</font><hr>' ;
  if($paneer_paratha>"0")
    echo '<font size=  2px>'.($paneer_paratha*50).'</font><hr>' ;
  if($cheese_paratha>"0")
    echo '<font size=  2px>'.($cheese_paratha*50).'</font><hr>' ;
  if($seasonal_paratha>"0")
    echo '<font size=  2px>'.($seasonal_paratha*40).'</font><hr>' ;
  if($makke_di_roti>"0")
    echo '<font size=  2px>'.($makke_di_roti*90).'</font><hr>' ;
  if($tomato_soup>"0")
    echo '<font size=  2px>'.($tomato_soup*60).'</font><hr>' ;
  if($sweet_corn_soup>"0")
    echo '<font size=  2px>'.($sweet_corn_soup*70).'</font><hr>' ;
  if($hot_n_sour_vegetable_soup>"0")
    echo '<font size=  2px>'.($hot_n_sour_vegetable_soup*70).'</font><hr>' ;
  if($peking_soup>"0")
    echo '<font size=  2px>'.($peking_soup*80).'</font><hr>' ;
  if($veg_soup>"0")
    echo '<font size=  2px>'.($veg_soup*70).'</font><hr>' ;
  if($mushroom_soup>"0")
    echo '<font size=  2px>'.($mushroom_soup*70).'</font><hr>' ;
  if($manchow_soup>"0")
    echo '<font size=  2px>'.($manchow_soup*80).'</font><hr>' ;
  if($masala_balls_soup>"0")
    echo '<font size=  2px>'.($masala_balls_soup*80).'</font><hr>' ;
  if($paper_dosa>"0")
    echo '<font size=  2px>'.($paper_dosa*60).'</font><hr>' ;
  if($masala_dosa>"0")
    echo '<font size=  2px>'.($masala_dosa*80).'</font><hr>' ;
  if($onion_dosa>"0")
    echo '<font size=  2px>'.($onion_dosa*80).'</font><hr>' ;
  if($paneer_masala_dosa>"0")
    echo '<font size=  2px>'.($paneer_masala_dosa*100).'</font><hr>' ;
  if($shahi_paneer_dosa>"0")
    echo '<font size=  2px>'.($shahi_paneer_dosa*120).'</font><hr>' ;
  if($butter_masala_dosa>"0")
    echo '<font size=  2px>'.($butter_masala_dosa*90).'</font><hr>' ;
  if($sundae_spl_dosa>"0")
    echo '<font size=  2px>'.($sundae_spl_dosa*120).'</font><hr>' ;
  if($chilly_paneer_dosa>"0")
    echo '<font size=  2px>'.($chilly_paneer_dosa*120).'</font><hr>' ;
  if($idli_sambhar>"0")
    echo '<font size=  2px>'.($idli_sambhar*80).'</font><hr>' ;
  if($idli_fry>"0")
    echo '<font size=  2px>'.($idli_fry*90).'</font><hr>' ;
  if($onion_uttapam>"0")
    echo '<font size=  2px>'.($onion_uttapam*90).'</font><hr>' ;
  if($paneer_uttapam>"0")
    echo '<font size=  2px>'.($paneer_uttapam*110).'</font><hr>' ;
  if($mix_veg_uttapam>"0")
    echo '<font size=  2px>'.($mix_veg_uttapam*90).'</font><hr>' ;
  if($fusion_dosa>"0")
    echo '<font size=  2px>'.($fusion_dosa*110).'</font><hr>' ;
  if($paneer_tikka_dosa>"0")
    echo '<font size=  2px>'.($paneer_tikka_dosa*140).'</font><hr>' ;
  
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
    <center>
        <div class="container">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#popupwindow">Place Order</button>
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
                            <form role="form" action="sendmail.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name" name="name"required/><br>
                                    <input type="textarea" class="form-control" placeholder="Address" id="address" name="address" required/><br>
                                    <input type="number" class="form-control" placeholder="Mobile number" id="number" name="number" required/><br>
                                    <input type="email" class="form-control" placeholder="email id" id="email" name="user_mail" required/><br>
                                    <input type="hidden" id="amount" name="amount" value="<?php echo $totalamt; ?>"/>
                                    <input type="hidden" id="restaurant" name="restaurant" value="Sundae"/>
                                    <input type="hidden" id="items" name="email" value="<?php  if($veg_cutlet>"0")
    echo 'veg cutlet :'.$veg_cutlet.'</br><hr>' ;
  if($paneer_cutlet>"0")
    echo 'paneer cutlet :'.$paneer_cutlet.'</br><hr>' ;
  if($onion_pakoda>"0")
    echo 'onion pakoda :'.$onion_pakoda.'</br><hr>' ;
  if($paneer_pakoda>"0")
    echo 'paneer pakoda :'.$paneer_pakoda.'</br><hr>' ;
  if($french_fries>"0")
    echo 'french fries :'.$french_fries.'</br><hr>' ;
  if($paneer_fingers>"0")
    echo 'paneer fingers :'.$paneer_fingers.'</br><hr>' ;
  if($veg_sandwich>"0")
    echo 'veg sandwich :'.$veg_sandwich.'</br><hr>' ;
  if($cheese_sandwich>"0")
    echo 'cheese sandwich :'.$cheese_sandwich.'</br><hr>' ;
  if($paneer_tikka>"0")
    echo 'paneer tikka :'.$paneer_tikka.'</br><hr>' ;
  if($veg_franky>"0")
    echo 'veg franky :'.$veg_franky.'</br><hr>' ;
  if($cheese_franky>"0")
    echo 'cheese franky :'.$cheese_franky.'</br><hr>' ;
  if($paneer_franky>"0")
    echo 'paneer franky :'.$paneer_franky.'</br><hr>' ;
  if($double_maska_pavbhaji>"0")
    echo 'double maska pavbhaji :'.$double_maska_pavbhaji.'</br><hr>' ;
  if($teekha_pavbhaji>"0")
    echo 'teekha pavbhaji :'.$teekha_pavbhaji.'</br><hr>' ;
  if($paneer_pavbhaji>"0")
    echo 'paneer pavbhaji :'.$paneer_pavbhaji.'</br><hr>' ;
  if($chilly_paneer_gravy>"0")
    echo 'chilly paneer gravy :'.$chilly_paneer_gravy.'</br><hr>' ;
  if($chilly_paneer_dry>"0")
    echo 'chilly paneer dry :'.$chilly_paneer_dry.'</br><hr>' ;
  if($veg_manchurian_gravy>"0")
    echo 'veg manchurian gravy :'.$veg_manchurian_gravy.'</br><hr>' ;
  if($veg_manchurian_dry>"0")
    echo 'veg manchurian dry :'.$veg_manchurian_dry.'</br><hr>' ;
  if($paneer_manchurian>"0")
    echo 'paneer manchurian :'.$paneer_manchurian.'</br><hr>' ;
  if($cheese_manchurian>"0")
    echo 'cheese manchurian :'.$cheese_manchurian.'</br><hr>' ;
  if($american_chopsuey>"0")
    echo 'american chopsuey :'.$american_chopsuey.'</br><hr>' ;
  if($hakka_noodles_gravy>"0")
    echo 'hakka noodles gravy :'.$hakka_noodles_gravy.'</br><hr>' ;
  if($hakka_noodles_dry>"0")
    echo 'hakka noodles dry :'.$hakka_noodles_dry.'</br><hr>' ;
  if($paneer_schezwan>"0")
    echo 'paneer schezwan :'.$paneer_schezwan.'</br><hr>' ;
  if($crispy_baby_corns>"0")
    echo 'crispy baby corns :'.$crispy_baby_corns.'</br><hr>' ;
  if($crispy_chilly_potato_hot>"0")
    echo 'crispy chilly potato hot :'.$crispy_chilly_potato_hot.'</br><hr>' ;
  if($crispy_chilly_potato_sweet>"0")
    echo 'crispy chilly potato sweet :'.$crispy_chilly_potato_sweet.'</br><hr>' ;
  if($paneer_75>"0")
    echo 'paneer 75 :'.$paneer_75.'</br><hr>' ;
  if($ching_pong_crispeez>"0")
    echo 'ching pong crispeez :'.$ching_pong_crispeez.'</br><hr>' ;
  if($veg_chowmien>"0")
    echo 'veg chowmien :'.$veg_chowmien.'</br><hr>' ;
  if($paneer_chowmien>"0")
    echo 'paneer chowmein :'.$paneer_chowmien.'</br><hr>' ;
  if($american_chowmien>"0")
    echo 'american chowmien :'.$american_chowmien.'</br><hr>' ;
  if($cheese_chowmien>"0")
    echo 'cheese chowmien :'.$cheese_chowmien.'</br><hr>' ;
  if($all_in_one_chowmien>"0")
    echo 'all in one chowmien :'.$all_in_one_chowmien.'</br><hr>' ;
  if($chowmien_soup_style>"0")
    echo 'chowmien soup style :'.$chowmien_soup_style.'</br><hr>' ;
  if($chilli_garlic>"0")
    echo 'chilli garlic :'.$chilli_garlic.'</br><hr>' ;
  if($bread_roll>"0")
    echo 'bread roll :'.$bread_roll.'</br><hr>' ;
  if($veg_spring_roll>"0")
    echo 'veg spring roll :'.$veg_spring_roll.'</br><hr>' ;
  if($paneer_spring_roll>"0")
    echo 'paneer spring roll :'.$paneer_spring_roll.'</br><hr>' ;
  if($noodles_spring_roll>"0")
    echo 'noodles spring roll :'.$noodles_spring_roll.'</br><hr>' ;
  if($mushroom_spring_roll>"0")
    echo 'mushroom spring roll :'.$mushroom_spring_roll.'</br><hr>' ;
  if($chakkar_kachauri>"0")
    echo 'chakkar kachauri :'.$chakkar_kachauri.'</br><hr>' ;
  if($cheese_balls>"0")
    echo 'cheese balls :'.$cheese_balls.'</br><hr>' ;
  if($italian_cream_pasta>"0")
    echo 'italian cream pasta :'.$italian_cream_pasta.'</br><hr>' ;
  if($tom_chi_pasta>"0")
    echo 'tom chi pasta :'.$tom_chi_pasta.'</br><hr>' ;
  if($fusili_bucati_pasta>"0")
    echo 'fusili bucati pasta :'.$fusili_bucati_pasta.'</br><hr>' ;
  if($veg_kathi_roll>"0")
    echo 'veg kathi roll :'.$veg_kathi_roll.'</br><hr>' ;
  if($veg_kabab_roll>"0")
    echo 'veg kabab roll :'.$veg_kabab_roll.'</br><hr>' ;
  if($veg_fried_rice>"0")
    echo 'veg fried rice :'.$veg_fried_rice.'</br><hr>' ;
  if($paneer_fried_rice>"0")
    echo 'paneer fried rice :'.$paneer_fried_rice.'</br><hr>' ;
  if($cheese_fried_rice>"0")
    echo 'cheese fried rice :'.$cheese_fried_rice.'</br><hr>' ;
  if($mushroom_babycorn>"0")
    echo 'mushroom babycorn :'.$mushroom_babycorn.'</br><hr>' ;
  if($all_in_one>"0")
    echo 'all in one :'.$all_in_one.'</br><hr>' ;
  
  if($spicy_paneer_tit_bit>"0")
    echo 'spicy paneer tit bit :'.$spicy_paneer_tit_bit.'</br><hr>' ;
  if($veg_biryani>"0")
    echo 'veg biryani :'.$veg_biryani.'</br><hr>' ;
  if($paneer_biryani>"0")
    echo 'paneer biryani :'.$paneer_biryani.'</br><hr>' ;
  if($veg_burger>"0")
    echo 'veg burger :'.$veg_burger.'</br><hr>' ;
  if($veg_cheese_burger>"0")
    echo 'veg cheese burger :'.$veg_cheese_burger.'</br><hr>' ;
  if($paneer_burger>"0")
    echo 'paneer burger :'.$paneer_burger.'</br><hr>' ;
  if($veg_pond>"0")
    echo 'veg pond :'.$veg_pond.'</br><hr>' ;
  if($cheese_pond>"0")
    echo 'cheese pond :'.$cheese_pond.'</br><hr>' ;
  if($tomato_tango>"0")
    echo 'tomato tango :'.$tomato_tango.'</br><hr>' ;
  if($super_cheese_bits>"0")
    echo 'super cheese bits :'.$super_cheese_bits.'</br><hr>' ;
  if($exotic_veg>"0")
    echo 'exotic veg :'.$exotic_veg.'</br><hr>' ;
  if($veg_pizza>"0")
    echo 'veg pizza :'.$veg_pizza.'</br><hr>' ;
  if($king_cheese_pizza>"0")
    echo 'king cheese pizza :'.$king_cheese_pizza.'</br><hr>' ;
  if($paneer_pizza>"0")
    echo 'paneer pizza :'.$paneer_pizza.'</br><hr>' ;
  if($mushroom_pizza>"0")
    echo 'mushroom pizza :'.$mushroom_pizza.'</br><hr>' ;
  if($onion_capsicum_classic>"0")
    echo 'onion capsicum classic :'.$onion_capsicum_classic.'</br><hr>' ;
  if($triple_c_pizza>"0")
    echo 'triple c pizza :'.$triple_c_pizza.'</br><hr>' ;
  if($mushroom_babycorn_pizza>"0")
    echo 'mushroom babycorn pizza :'.$mushroom_babycorn_pizza.'</br><hr>' ;
  if($red_chilli_bijli>"0")
    echo 'red chilli bijli :'.$red_chilli_bijli.'</br><hr>' ;
  if($cheesy_macroni>"0")
    echo 'cheesy macroni :'.$cheesy_macroni.'</br><hr>' ;
  if($paneer_tikka_pizza>"0")
    echo 'paneer tikka pizza :'.$paneer_tikka_pizza.'</br><hr>' ;
  if($green_olive_vegetable>"0")
    echo 'green olive vegetable :'.$green_olive_vegetable.'</br><hr>' ;
  if($sundae_spl_pizza>"0")
    echo 'sundae spl pizza :'.$sundae_spl_pizza.'</br><hr>' ;
  if($paneer_paratha>"0")
    echo 'paneer paratha :'.$paneer_paratha.'</br><hr>' ;
  if($cheese_paratha>"0")
    echo 'cheese paratha :'.$cheese_paratha.'</br><hr>' ;
  if($seasonal_paratha>"0")
    echo 'seasonal paratha :'.$seasonal_paratha.'</br><hr>' ;
  if($makke_di_roti>"0")
    echo 'makke di roti :'.$makke_di_roti.'</br><hr>' ;
  if($tomato_soup>"0")
    echo 'tomato soup :'.$tomato_soup.'</br><hr>' ;
  if($sweet_corn_soup>"0")
    echo 'sweet corn soup :'.$sweet_corn_soup.'</br><hr>' ;
  if($hot_n_sour_vegetable_soup>"0")
    echo 'hot n sour vegetable soup :'.$hot_n_sour_vegetable_soup.'</br><hr>' ;
  if($peking_soup>"0")
    echo 'peking soup :'.$peking_soup.'</br><hr>' ;
  if($veg_soup>"0")
    echo 'veg soup :'.$veg_soup.'</br><hr>' ;
  if($mushroom_soup>"0")
    echo 'mushroom soup :'.$mushroom_soup.'</br><hr>' ;
  if($manchow_soup>"0")
    echo 'manchow soup :'.$manchow_soup.'</br><hr>' ;
  if($masala_balls_soup>"0")
    echo 'masala balls soup :'.$masala_balls_soup.'</br><hr>' ;
  if($paper_dosa>"0")
    echo 'paper dosa :'.$paper_dosa.'</br><hr>' ;
  if($masala_dosa>"0")
    echo 'masala dosa :'.$masala_dosa.'</br><hr>' ;
  if($onion_dosa>"0")
    echo 'onion dosa :'.$onion_dosa.'</br><hr>' ;
  if($paneer_masala_dosa>"0")
    echo 'paneer masala dosa :'.$paneer_masala_dosa.'</br><hr>' ;
  if($shahi_paneer_dosa>"0")
    echo 'shahi paneer dosa :'.$shahi_paneer_dosa.'</br><hr>' ;
  if($butter_masala_dosa>"0")
    echo 'butter masala dosa :'.$butter_masala_dosa.'</br><hr>' ;
  if($sundae_spl_dosa>"0")
    echo 'sundae spl dosa :'.$sundae_spl_dosa.'</br><hr>' ;
  if($chilly_paneer_dosa>"0")
    echo 'chilly paneer dosa :'.$chilly_paneer_dosa.'</br><hr>' ;
  if($idli_sambhar>"0")
    echo 'idli sambhar :'.$idli_sambhar.'</br><hr>' ;
  if($idli_fry>"0")
    echo 'idli fry :'.$idli_fry.'</br><hr>' ;
  if($onion_uttapam>"0")
    echo 'onion uttapam :'.$onion_uttapam.'</br><hr>' ;
  if($paneer_uttapam>"0")
    echo 'paneer uttapam :'.$paneer_uttapam.'</br><hr>' ;
  if($mix_veg_uttapam>"0")
    echo 'mix veg uttapam :'.$mix_veg_uttapam.'</br><hr>' ;
  if($fusion_dosa>"0")
    echo 'fusion dosa :'.$fusion_dosa.'</br><hr>' ;
  if($paneer_tikka_dosa>"0")
    echo 'paneer tikka dosa :'.$paneer_tikka_dosa.'</br><hr>' ;

    echo 'Total Amount:'.$totalamt.'<br><hr>';
    echo 'Sundae';
     ?>"/>
                                    <button type="submit" class="btn btn-primary ">Place Order</button>
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
<h5>Want to <b><a href=diet.php>Add/Remove</a></b> items</h5>
<!------------------------Main Content------------------------------>

</body>
<footer  class="container-fluid text-center">
    <div class="foot">
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
                Feel free to contact with us at our Helpline no. <b>7068987538,8574925398,9457816243</b><br>
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
                        <h5>Sorry your order couldn't be processed it must be greater than <font color="red">150</font></h5>
                        Click <a href="sundae.php">here</a> to go back to Menu page...!!
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