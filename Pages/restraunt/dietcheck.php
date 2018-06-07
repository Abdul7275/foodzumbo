<?php
    $resttimefrom = 130000;
    $resttimeto = 210000;
    date_default_timezone_set("Asia/Kolkata");
    $currentTime = (int) date('Gis');
    if ($currentTime > $resttimefrom && $currentTime < $resttimeto )
    {                        
                            
    include '../../Core/Functions/general.php';
    $totalqty=0;
    $delivery=0;
    $discount=5;
    $french_fries = secure($_POST['french_fries']) ;
 // $paneer_pakoda = secure($_POST['paneer_pakoda']) ;
    $pyaz_pakoda = secure($_POST['pyaz_pakoda']) ;
    $cutlet = secure($_POST['cutlet']) ;
    $diet_spring_roll = secure($_POST['diet_spring_roll']) ;
    $veg_burger = secure($_POST['veg_burger']) ;
    $paneer_burger = secure($_POST['paneer_burger']) ;
    $cheese_burger = secure($_POST['cheese_burger']) ;
    $paneer_paratha = secure($_POST['paneer_paratha']) ;
    $aloo_paratha = secure($_POST['aloo_paratha']) ;
    $pyaz_paratha = secure($_POST['pyaz_paratha']) ;
    $pavbhaji = secure($_POST['pavbhaji']) ;
    $chola_bhatura = secure($_POST['chola_bhatura']) ;
    $special_chola_bhatura = secure($_POST['special_chola_bhatura']) ;
    $veg_momos = secure($_POST['veg_momo']) ;
    $paneer_momos = secure($_POST['paneer_momos']) ;
    $Half_veg_chowmein = secure($_POST['Half_veg_chowmein']) ;
    $Full_veg_chowmein = secure($_POST['Full_veg_chowmein']) ;
    $Half_paneer_chowmein = secure($_POST['Half_paneer_chowmein']) ;
    $Full_paneer_chowmein = secure($_POST['Full_paneer_chowmein']) ;
    $mix_chowmein = secure($_POST['mix_chowmein']) ;
    $singapuri_chowmein = secure($_POST['singapuri_chowmein']) ;
    $diet_special_chowmein = secure($_POST['diet_special_chowmein']) ;
    $macroni = secure($_POST['macroni']) ;
    $veg_manchurian = secure($_POST['veg_manchurian']) ;
    $paneer_manchurian = secure($_POST['paneer_manchurian']) ;
    $veg_pizza = secure($_POST['veg_pizza']) ;
    $cheese_pizza = secure($_POST['cheese_pizza']) ;
    $diet_special_pizza = secure($_POST['diet_special_pizza']) ;
    $paper_dosa = secure($_POST['paper_dosa']) ;
    $masala_dosa = secure($_POST['masala_dosa']) ;
    $paneer_dosa = secure($_POST['paneer_dosa']) ;
    $onion_masala_dosa = secure($_POST['onion_masala_dosa']) ;
    $diet_special_dosa = secure($_POST['diet_special_dosa']) ;
    $onion_uttapam = secure($_POST['onion_uttapam']) ;
    $paneer_uttapam = secure($_POST['paneer_uttapam']) ;
    $veg_soup = secure($_POST['veg_soup']) ;
    $hot_n_sour_soup = secure($_POST['hot_n_sour_soup']) ;
    $mushroom_soup = secure($_POST['mushroom_soup']) ;
    $tomato_soup = secure($_POST['tomato_soup']) ;
    $cold_drink = secure($_POST['cold_drink']) ;
    $water_bottle = secure($_POST['water_bottle']) ;
    $hot_coffee = secure($_POST['hot_coffee']) ;
    $cold_coffee = secure($_POST['cold_coffee']) ;
    $milk_badam = secure($_POST['milk_badam']) ;
    $mazza = secure($_POST['mazza']) ;
    $rasgulla = secure($_POST['rasgulla']) ;
    $icecream_cone = secure($_POST['cone']) ;
    $icecream_matka_kulfi = secure($_POST['matka_kulfi']) ;
    $icecream_butter_scotch = secure($_POST['butter_scotch']) ;
    $icecream_vannila = secure($_POST['vannila']) ;
    $icecream_chocolate = secure($_POST['chocolate']) ;
    $Half_matar_paneer = secure($_POST['Half_matar_paneer']) ;
    $Full_matar_paneer = secure($_POST['Full_matar_paneer']) ;
    $Half_chilly_paneer = secure($_POST['Half_chilly_paneer']) ;
    $Full_chilly_paneer = secure($_POST['Full_chilly_paneer']) ;
    $Half_paneer_do_pyaza = secure($_POST['Half_paneer_do_pyaza']) ;
    $Full_paneer_do_pyaza = secure($_POST['Full_paneer_do_pyaza']) ;
    $Half_paneer_btr_masala = secure($_POST['Half_paneer_btr_masala']) ;
    $Full_paneer_btr_masala = secure($_POST['Full_paneer_btr_masala']) ;
    $Half_kadhai_paneer = secure($_POST['Half_kadhai_paneer']) ;
    $Full_kadhai_paneer = secure($_POST['Full_kadhai_paneer']) ;
    $Half_paneer_kali_mirch = secure($_POST['Half_paneer_kali_mirch']) ;
    $Full_paneer_kali_mirch = secure($_POST['Full_paneer_kali_mirch']) ;
    $Half_shahi_paneer = secure($_POST['Half_shahi_paneer']) ;
    $Full_shahi_paneer = secure($_POST['Full_shahi_paneer']) ;
    $Half_paneer_pasanda = secure($_POST['Half_paneer_pasanda']) ;
    $Full_paneer_pasanda = secure($_POST['Full_paneer_pasanda']) ;
    $Half_paneer_bhujiya = secure($_POST['Half_paneer_bhujia']) ;
    $Full_paneer_bhujiya = secure($_POST['Full_paneer_bhujia']) ;
    $handi_paneer = secure($_POST['handi_paneer']) ;
    $paneer_mumtaz = secure($_POST['paneer_mumtaz']) ;
    $paneer_tikka = secure($_POST['paneer_tikka']) ;
    $paneer_tikka_masala = secure($_POST['paneer_tikka_masala']) ;
    $mushroom_masala = secure($_POST['mushroom_masala']) ;
    $mushroom_matar = secure($_POST['mushroom_matar']) ;
    $mushroom_pyaza = secure($_POST['mushroom_pyaza']) ;
    $paneer_kaleji = secure($_POST['paneer_kaleji']) ;
    $Half_mix_veg = secure($_POST['Half_mix_veg']) ;
    $Full_mix_veg = secure($_POST['Full_mix_veg']) ;
    $aloo_matar = secure($_POST['aloo_matar']) ;
    $aloo_zeera = secure($_POST['aloo_zeera']) ;
    $chana_masala = secure($_POST['chana_masala']) ;
    $veg_korma = secure($_POST['veg_korma']) ;
    $malai_kofta = secure($_POST['malai_kofta']) ;
    $dum_aloo = secure($_POST['dam_aloo']) ;
    $arhar_dal = secure($_POST['arhar_dal']) ;
    $fried_dal = secure($_POST['fried_dal']) ;
    $dal_makhani = secure($_POST['dal_makhani']) ;
    $special_dal_balti = secure($_POST['special_dal_balti']) ;
    $tawa_roti = secure($_POST['tawa_roti']) ;
    $tawa_btr_roti = secure($_POST['tawa_btr_roti']) ;
    $tandoori_roti = secure($_POST['tandoori_roti']) ;
    $tandoori_btr_roti = secure($_POST['tandoori_btr_roti']) ;
    $missi_roti = secure($_POST['missi_roti']) ;
    $plain_paratha = secure($_POST['plain_paratha']) ;
    $laccha_paratha = secure($_POST['laccha_paratha']) ;
    $plain_nan = secure($_POST['plain_nan']) ;
    $butter_nan = secure($_POST['butter_nan']) ;
    $veg_stuff_nan = secure($_POST['veg_stuff_nan']) ;
    $paneer_stuff_nan = secure($_POST['paneer_stuff_nan']) ;
    $papad = secure($_POST['papad']) ;
    $Half_plain_rice = secure($_POST['Half_plain_rice']) ;
    $Full_plain_rice = secure($_POST['Full_plain_rice']) ;
    $veg_fried_rice = secure($_POST['veg_fried_rice']) ;
    $paneer_fried_rice = secure($_POST['paneer_fried_rice']) ;
    $zeera_rice = secure($_POST['zeera_rice']) ;
    $matar_pulao = secure($_POST['matar_pulao']) ;
    $veg_biryani = secure($_POST['veg_biryani']) ;
    $masala_biryani = secure($_POST['masala_biryani']) ;
    $diet_special_biryani = secure($_POST['diet_special_biryani']) ;
    $mushroom_pulao = secure($_POST['mushroom_pulao']) ;
    $onion_salad = secure($_POST['onion_salad']) ;
    $green_salad = secure($_POST['green_salad']) ;
    $totalqty=($french_fries + $pyaz_pakoda + $cutlet + $diet_spring_roll + $veg_burger + $paneer_burger + $cheese_burger + $paneer_paratha + $aloo_paratha + $pyaz_paratha + $pavbhaji + $chola_bhatura + $special_chola_bhatura + $veg_momos + $paneer_momos + $Half_veg_chowmein + $Full_veg_chowmein + $Half_paneer_chowmein + $Full_paneer_chowmein + $mix_chowmein + $singapuri_chowmein + $diet_special_chowmein + $macroni + $veg_manchurian + $paneer_manchurian + $veg_pizza + $cheese_pizza + $diet_special_pizza + $paper_dosa + $masala_dosa + $paneer_dosa + $onion_masala_dosa + $diet_special_dosa + $onion_uttapam + $paneer_uttapam + $veg_soup + $hot_n_sour_soup + $mushroom_soup + $tomato_soup + $cold_drink + $water_bottle + $hot_coffee + $cold_coffee + $milk_badam + $mazza + $rasgulla + $icecream_cone + $icecream_matka_kulfi + $icecream_butter_scotch + $icecream_vannila + $icecream_chocolate + $Half_matar_paneer + $Full_matar_paneer + $Half_chilly_paneer + $Full_chilly_paneer + $Half_paneer_do_pyaza + $Full_paneer_do_pyaza + $Half_paneer_btr_masala + $Full_paneer_btr_masala + $Half_kadhai_paneer +$Full_kadhai_paneer +$Half_paneer_kali_mirch +$Full_paneer_kali_mirch + $Half_shahi_paneer + $Full_shahi_paneer + $Half_paneer_pasanda +$Full_paneer_pasanda + $Half_paneer_bhujiya + $Full_paneer_bhujiya + $handi_paneer + $paneer_mumtaz +$paneer_tikka + $paneer_tikka_masala +$mushroom_masala +$mushroom_matar + $mushroom_pyaza +$paneer_kaleji +$Half_mix_veg +$Full_mix_veg +$aloo_matar +$aloo_zeera +$chana_masala +$veg_korma +$malai_kofta +$dum_aloo +$arhar_dal +$fried_dal +$dal_makhani + $special_dal_balti + $tawa_roti + $tawa_btr_roti +$tandoori_roti + $tandoori_btr_roti +$missi_roti +$plain_paratha + $laccha_paratha +$plain_nan +$butter_nan +$veg_stuff_nan +$paneer_stuff_nan +$papad +$Half_plain_rice +$Full_plain_rice +$veg_fried_rice +$paneer_fried_rice +$zeera_rice +$matar_pulao +$veg_biryani +$masala_biryani + $diet_special_biryani +$mushroom_pulao +$onion_salad +$green_salad);
    $totalamt=(($french_fries*90) + ($pyaz_pakoda*100) + ($cutlet*90) + ($diet_spring_roll*150) + ($veg_burger*80) + ($paneer_burger*90) + ($cheese_burger*100) + ($paneer_paratha*60) + ($aloo_paratha*60) + ($pyaz_paratha*60) + ($pavbhaji*80) + ($chola_bhatura*90) + ($special_chola_bhatura*100) + ($veg_momos*100) + ($paneer_momos*120) + ($Half_veg_chowmein*80) + ($Full_veg_chowmein*100) + ($Half_paneer_chowmein*100) + (120*$Full_paneer_chowmein) + ($mix_chowmein*150) + ($singapuri_chowmein*150) + ($diet_special_chowmein*160) + ($macroni*100) + ($veg_manchurian*120) + ($paneer_manchurian*150) + ($veg_pizza*120) + ($cheese_pizza*140) + ($diet_special_pizza*190) + ($paper_dosa*70) + ($masala_dosa*80) + ($paneer_dosa*110) + ($onion_masala_dosa*100) + ($diet_special_dosa*160) + ($onion_uttapam*140) + ($paneer_uttapam*160) + ($veg_soup*60) + ($hot_n_sour_soup*80) + ($mushroom_soup*100) + ($tomato_soup*100) + ($cold_drink*40) + ($water_bottle*20) + ($hot_coffee*40) + ($cold_coffee*100) + ($milk_badam*50) + ($mazza*40) + ($rasgulla*20) + ($icecream_cone*50) + ($icecream_matka_kulfi*60) + ($icecream_butter_scotch*50) + ($icecream_vannila*50) + ($icecream_chocolate*60) + ($Half_matar_paneer*80) + ($Full_matar_paneer*120) + ($Half_chilly_paneer*90) + ($Full_chilly_paneer*120) + ($Half_paneer_do_pyaza*90) + ($Full_paneer_do_pyaza*130) + ($Half_paneer_btr_masala*90) + ($Full_paneer_btr_masala*150) + ($Half_kadhai_paneer*90) +($Full_kadhai_paneer*150) +($Half_paneer_kali_mirch*90) +($Full_paneer_kali_mirch*150) + ($Half_shahi_paneer*90) + ($Full_shahi_paneer*150) + ($Half_paneer_pasanda*100) +($Full_paneer_pasanda*160) + ($Half_paneer_bhujiya*100) + ($Full_paneer_bhujiya*140) + ($handi_paneer*160) + ($paneer_mumtaz*150) +($paneer_tikka*150) + ($paneer_tikka_masala*170) +($mushroom_masala*160) +($mushroom_matar*150) + ($mushroom_pyaza*160) +($paneer_kaleji*170) +($Half_mix_veg*80) +($Full_mix_veg*120) +($aloo_matar*100) +($aloo_zeera*100) +($chana_masala*100) +($veg_korma*160) +($malai_kofta*160) +($dum_aloo*100) +($arhar_dal*70) +($fried_dal*100) +($dal_makhani*120) + ($special_dal_balti*140) + ($tawa_roti*10) + ($tawa_btr_roti*12) +($tandoori_roti*8) + ($tandoori_btr_roti*12) +($missi_roti*40) +($plain_paratha*30) + ($laccha_paratha*60) +($plain_nan*25) +($butter_nan*30) +($veg_stuff_nan*50) +($paneer_stuff_nan*60) +($papad*15) +($Half_plain_rice*40) +($Full_plain_rice*60) +($veg_fried_rice*110) +($paneer_fried_rice*130) +($zeera_rice*80) +($matar_pulao*100) +($veg_biryani*120) +($masala_biryani*140) + ($diet_special_biryani*160) +($mushroom_pulao*180) +($onion_salad*30) +($green_salad*45));
    if($totalamt<"149")
    $delivery="20";

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

    if($french_fries>0)
                echo '<font size=2px>French Fries</font><hr>' ;
                if($pyaz_pakoda>0)
                echo '<font size=2px>Pyaz Pakoda<hr>' ;
                if($cutlet>0)
                echo '<font size=2px>Cutlet</font><hr>' ;
                if($diet_spring_roll>0)
                echo '<font size=2px>Diet Spring Roll</font><hr>' ;
                if($veg_burger>0)
                echo '<font size=2px>Veg Burger</font><hr>' ;
                if($paneer_burger>0)
                echo '<font size=2px>Paneer Burger</font><hr>' ;
                if($cheese_burger>0)
                echo '<font size=2px>Cheese Burger</font><hr>' ;
                if($paneer_paratha>0)
                echo '<font size=2px>Paneer Paratha</font><hr>' ;
                if($aloo_paratha>0)
                echo '<font size=2px>Aloo Paratha</font><hr>' ;
                if($pyaz_paratha>0)
                echo '<font size=2px>Pyaz Paratha</font><hr>' ;
                if($pavbhaji>0)
                echo '<font size=2px>Pavbhaji</font><hr>' ;
                if($chola_bhatura>0)
                echo '<font size=2px>Chola Bhatura</font><hr>' ;
                if($special_chola_bhatura>0)
                echo '<font size=2px>Special Chola Bhatura</font><hr>' ;
                if($veg_momos>0)
                echo '<font size=2px>Veg Momos</font><hr>' ;
                if($paneer_momos>0)
                echo '<font size=2px>Paneer Momos</font><hr>' ;
                if($Half_veg_chowmein>0)
                echo '<font size=2px>Half Veg Chowmein</font><hr>' ;
                if($Full_veg_chowmein>0)
                echo '<font size=2px>Full Veg Chowmein</font><hr>' ;
                if($Half_paneer_chowmein>0)
                echo '<font size=2px>Half Paneer Chowmein</font><hr>' ;
                if($Full_paneer_chowmein>0)
                echo '<font size=2px>Full Paneer Chowmein</font><hr>' ;
                if($mix_chowmein>0)
                echo '<font size=2px>Mix Chowmein</font><hr>' ;
                if($singapuri_chowmein>0)
                echo '<font size=2px>Singapuri Chowmein</font><hr>' ;
                if($diet_special_chowmein>0)
                echo '<font size=2px>Diet Special Chowmein</font><hr>' ;
                if($macroni>0)
                echo '<font size=2px>Macroni</font><hr>' ;
                if($veg_manchurian>0)
                echo '<font size=2px>Veg Manchurian</font><hr>' ;
                if($paneer_manchurian>0)
                echo '<font size=2px>Paneer Manchurian</font><hr>' ;
                if($veg_pizza>0)
                echo '<font size=2px>Veg Pizza</font><hr>' ;
                if($cheese_pizza>0)
                echo '<font size=2px>Cheese Pizza</font><hr>' ;
                if($diet_special_pizza>0)
                echo '<font size=2px>Diet Special Pizza</font><hr>' ;
                if($paper_dosa>0)
                echo '<font size=2px>Paper Dosa</font><hr>' ;
                if($masala_dosa>0)
                echo '<font size=2px>Masala Dosa</font><hr>' ;
                if($paneer_dosa>0)
                echo '<font size=2px>Paneer Dosa</font><hr>' ;
                if($onion_masala_dosa>0)
                echo '<font size=2px>Onion Masala Dosa</font><hr>' ;
                if($diet_special_dosa>0)
                echo '<font size=2px>Diet Special Dosa</font><hr>' ;
                if($onion_uttapam>0)
                echo '<font size=2px>Onion Uttapam</font><hr>' ;
                if($paneer_uttapam>0)
                echo '<font size=2px>Paneer Uttapam</font><hr>' ;
                if($veg_soup>0)
                echo '<font size=2px>Veg Soup</font><hr>' ;
                if($hot_n_sour_soup>0)
                echo '<font size=2px>Hot N Sour Soup</font><hr>' ;
                if($mushroom_soup>0)
                echo '<font size=2px>Mushroom Soup</font><hr>' ;
                if($tomato_soup>0)
                echo '<font size=2px>Tomato Soup</font><hr>' ;
                if($cold_drink>0)
                echo '<font size=2px>Cold Drink</font><hr>' ;
                if($water_bottle>0)
                echo '<font size=2px>Water Bottle</font><hr>' ;
                if($hot_coffee>0)
                echo '<font size=2px>Hot Coffee</font><hr>' ;
                if($cold_coffee>0)
                echo '<font size=2px>Cold Coffee</font><hr>' ;
                if($milk_badam>0)
                echo '<font size=2px>Milk Badam</font><hr>' ;
                if($mazza>0)
                echo '<font size=2px>Mazza</font><hr>' ;
                if($rasgulla>0)
                echo '<font size=2px>Rasgulla</font><hr>' ;
                if($icecream_cone>0)
                echo '<font size=2px>Icecream Cone</font><hr>' ;
                if($icecream_matka_kulfi>0)
                echo '<font size=2px>Icecream Matka Kulfi</font><hr>' ;
                if($icecream_butter_scotch>0)
                echo '<font size=2px>Icecream Butter Scotch</font><hr>' ;
                if($icecream_vannila>0)
                echo '<font size=2px>Icecream Vannila</font><hr>' ;
                if($icecream_chocolate>0)
                echo '<font size=2px>Icecream Chocolate</font><hr>' ;
                if($Half_matar_paneer>0)
                echo '<font size=2px>Half Matar Paneer</font><hr>' ;
                if($Full_matar_paneer>0)
                echo '<font size=2px>Full Matar Paneer</font><hr>' ;
                if($Half_chilly_paneer>0)
                echo '<font size=2px>Half Chilly Paneer</font><hr>' ;
                if($Full_chilly_paneer>0)
                echo '<font size=2px>Full Chilly Paneer</font><hr>' ;
                if($Half_paneer_do_pyaza>0)
                echo '<font size=2px>Half Paneer Do Pyaza</font><hr>' ;
                if($Full_paneer_do_pyaza>0)
                echo '<font size=2px>Full Paneer Do Pyaza</font><hr>' ;
                if($Half_paneer_btr_masala>0)
                echo '<font size=2px>Half Paneer Butter Masala</font><hr>' ;
                if($Full_paneer_btr_masala>0)
                echo '<font size=2px>Full Paneer Butter Masala</font><hr>' ;
                if($Half_kadhai_paneer>0)
                echo '<font size=2px>Half Kadhai Paneerv<hr>' ;
                    if($Full_kadhai_paneer>0)
                    echo '<font size=2px>Full Kadhai Paneer</font><hr>' ;
                    if($Half_paneer_kali_mirch>0)
                    echo '<font size=2px>Half Paneer Kali Mirch</font><hr>' ;
                    if($Full_paneer_kali_mirch>0)
                    echo '<font size=2px>Full Paneer Kali Mirch</font><hr>' ;
                    if($Half_shahi_paneer>0)
                    echo '<font size=2px>Half Shahi Paneer</font><hr>' ;
                    if($Full_shahi_paneer>0)
                    echo '<font size=2px>Full Shahi Paneer</font><hr>' ;
                    if($Half_paneer_pasanda>0)
                    echo '<font size=2px>Half Paneer Pasanda</font><hr>' ;
                    if($Full_paneer_pasanda>0)
                    echo '<font size=2px>Full Paneer Pasanda</font><hr>' ;
                    if($Half_paneer_bhujiya>0)
                    echo '<font size=2px>Half Paneer Bhujiya</font><hr>' ;
                    if($Full_paneer_bhujiya>0)
                    echo '<font size=2px>Full Paneer Bhujiya</font><hr>' ;
                    if($handi_paneer>0)
                    echo '<font size=2px>Handi Paneer</font><hr>';
                    if($paneer_mumtaz>0)
                    echo '<font size=2px>Paneer Mumtaz</font><hr>' ;
                    if($paneer_tikka>0)
                    echo '<font size=2px>Paneer Tikka</font><hr>' ;
                    if($paneer_tikka_masala>0)
                    echo '<font size=2px>Paneer Tikka Masala</font><hr>' ;
                    if($mushroom_masala>0)
                    echo '<font size=2px>Mushroom Masala</font><hr>' ;
                    if($mushroom_matar>0)
                    echo '<font size=2px>Mushroom Matar</font><hr>' ;
                    if($mushroom_pyaza>0)
                    echo '<font size=2px>Mushroom Pyaza</font><hr>' ;
                    if($paneer_kaleji>0)
                    echo '<font size=2px>Panee Kaleji</font><hr>' ;
                    if($Half_mix_veg>0)
                    echo '<font size=2px>Half Mix Veg</font><hr>' ;
                    if($Full_mix_veg>0)
                    echo '<font size=2px>Full Mix Veg</font><hr>' ;
                    if($aloo_matar>0)
                    echo '<font size=2px>Aloo Matar</font><hr>' ;
                    if($aloo_zeera>0)
                    echo '<font size=2px>Aloo Zeera</font><hr>' ;
                    if($chana_masala>0)
                    echo '<font size=2px>Chana Masala</font><hr>' ;
                    if($veg_korma>0)
                    echo '<font size=2px>Veg Korma</font><hr>' ;
                    if($malai_kofta>0)
                    echo '<font size=2px>Malai Kofta</font><hr>' ;
                    if($dum_aloo>0)
                    echo '<font size=2px>Dum Aloo</font><hr>' ;
                    if($arhar_dal>0)
                    echo '<font size=2px>Arhar Dal</font><hr>' ;
                    if($fried_dal>0)
                    echo '<font size=2px>Fried Dal</font><hr>' ;
                    if($dal_makhani>0)
                    echo '<font size=2px>Dal makhani</font><hr>' ;
                    if($special_dal_balti >0)
                    echo '<font size=2px>Special Dal Balti</font><hr>' ;
                    if($tawa_roti>0)
                    echo '<font size=2px>Tawa Roti</font><hr>' ;
                    if($tawa_btr_roti>0)
                    echo '<font size=2px>Tawa Butter Roti</font><hr>' ;
                    if($tandoori_roti>0)
                    echo '<font size=2px>Tandoori Roti</font><hr>' ;
                    if($tandoori_btr_roti>0)
                    echo '<font size=2px>Tandoori Butter Roti</font><hr>' ;
                    if($missi_roti>0)
                    echo '<font size=2px>Missi Roti</font><hr>' ;
                    if($plain_paratha>0)
                    echo '<font size=2px>Plain Paratha</font><hr>' ;
                    if($laccha_paratha>0)
                    echo '<font size=2px>Laccha Paratha</font><hr>' ;
                    if($plain_nan>0)
                    echo '<font size=2px>Plain Nan</font><hr>' ;

                    if($butter_nan>0)
                    echo '<font size=2px>Butter Nan</font><hr>' ;
                    if($veg_stuff_nan>0)
                    echo '<font size=2px>Veg Stuff Nan</font><hr>' ;
                    if($paneer_stuff_nan>0)
                    echo '<font size=2px>Paneer Stuff Nan</font><hr>' ;
                    if($papad>0)
                    echo '<font size=2px>Papad</font><hr>' ;
                    if($Half_plain_rice>0)
                    echo '<font size=2px>Half Plain Rice</font><hr>' ;
                    if($Full_plain_rice>0)
                    echo '<font size=2px>Full Plain Rice</font><hr>' ;
                    if($veg_fried_rice>0)
                    echo '<font size=2px>Veg Fried Rice</font><hr>' ;
                    if($paneer_fried_rice>0)
                    echo '<font size=2px>Paneer Fried Rice</font><hr>' ;
                    if($zeera_rice>0)
                    echo '<font size=2px>Zeera Rice</font><hr>' ;
                    if($matar_pulao>0)
                    echo '<font size=2px>Matar Pulao</font><hr>' ;
                    if($veg_biryani>0)
                    echo '<font size=2px>Veg Biryani</font><hr>' ;
                    if($masala_biryani>0)
                    echo '<font size=2px>Masala Biryani</font><hr>' ;
                    if($diet_special_biryani>0)
                    echo '<font size=2px>Diet Special Biryani</font><hr>' ;
                    if($mushroom_pulao>0)
                    echo '<font size=2px>Mushroom Pulao</font><hr>' ;
                    if($onion_salad>0)
                    echo '<font size=2px>Onion Salad</font><hr>' ;
                    if($green_salad>0)
                    echo '<font size=2px>Green Salad</font><hr>' ;
                    echo '<font size=  2px>Discount</font><hr> ' ;
                    if($delivery>"0")
                    echo '<font size=  2px>Delivery</font><hr> ' ;

                    ?>
            </td>
            <td>
                <?php

    if($french_fries>0)
                echo '<font size=2px>'.$french_fries.'</font><hr>' ;
                //if($paneer_pakoda>0)
                //echo '<font size=2px>'.$paneer_pakoda.'</font><hr>' ;
                if($pyaz_pakoda>0)
                echo '<font size=2px>'.$pyaz_pakoda.'</font><hr>' ;
                if($cutlet>0)
                echo '<font size=2px>'.($cutlet).'</font><hr>' ;
                if($diet_spring_roll>0)
                echo '<font size=2px>'.($diet_spring_roll).'</font><hr>' ;
                if($veg_burger>0)
                echo '<font size=2px>'.($veg_burger).'</font><hr>' ;
                if($paneer_burger>0)
                echo '<font size=2px>'.($paneer_burger).'</font><hr>' ;
                if($cheese_burger>0)
                echo '<font size=2px>'.($cheese_burger).'</font><hr>' ;
                if($paneer_paratha>0)
                echo '<font size=2px>'.($paneer_paratha).'</font><hr>' ;
                if($aloo_paratha>0)
                echo '<font size=2px>'.($aloo_paratha).'</font><hr>' ;
                if($pyaz_paratha>0)
                echo '<font size=2px>'.($pyaz_paratha).'</font><hr>' ;
                if($pavbhaji>0)
                echo '<font size=2px>'.($pavbhaji).'</font><hr>' ;
                if($chola_bhatura>0)
                echo '<font size=2px>'.($chola_bhatura).'</font><hr>' ;
                if($special_chola_bhatura>0)
                echo '<font size=2px>'.($special_chola_bhatura).'</font><hr>' ;
                if($veg_momos>0)
                echo '<font size=2px>'.($veg_momos).'</font><hr>' ;
                if($paneer_momos>0)
                echo '<font size=2px>'.($paneer_momos).'</font><hr>' ;
                if($Half_veg_chowmein>0)
                echo '<font size=2px>'.($Half_veg_chowmein).'</font><hr>' ;
                if($Full_veg_chowmein>0)
                echo '<font size=2px>'.($Full_veg_chowmein).'</font><hr>' ;
                if($Half_paneer_chowmein>0)
                echo '<font size=2px>'.($Half_paneer_chowmein).'</font><hr>' ;
                if($Full_paneer_chowmein>0)
                echo '<font size=2px>'.($Full_paneer_chowmein).'</font><hr>' ;
                if($mix_chowmein>0)
                echo '<font size=2px>'.($mix_chowmein).'</font><hr>' ;
                if($singapuri_chowmein>0)
                echo '<font size=2px>'.($singapuri_chowmein).'</font><hr>' ;
                if($diet_special_chowmein>0)
                echo '<font size=2px>'.($diet_special_chowmein).'</font><hr>' ;
                if($macroni>0)
                echo '<font size=2px>'.($macroni).'</font><hr>' ;
                if($veg_manchurian>0)
                echo '<font size=2px>'.($veg_manchurian).'</font><hr>' ;
                if($paneer_manchurian>0)
                echo '<font size=2px>'.($paneer_manchurian).'</font><hr>' ;
                if($veg_pizza>0)
                echo '<font size=2px>'.($veg_pizza).'</font><hr>' ;
                if($cheese_pizza>0)
                echo '<font size=2px>'.($cheese_pizza).'</font><hr>' ;
                if($diet_special_pizza>0)
                echo '<font size=2px>'.($diet_special_pizza).'</font><hr>' ;
                if($paper_dosa>0)
                echo '<font size=2px>'.($paper_dosa).'</font><hr>' ;
                if($masala_dosa>0)
                echo '<font size=2px>'.($masala_dosa).'</font><hr>' ;
                if($paneer_dosa>0)
                echo '<font size=2px>'.($paneer_dosa).'</font><hr>' ;
                if($onion_masala_dosa>0)
                echo '<font size=2px>'.($onion_masala_dosa).'</font><hr>' ;
                if($diet_special_dosa>0)
                echo '<font size=2px>'.($diet_special_dosa).'</font><hr>' ;
                if($onion_uttapam>0)
                echo '<font size=2px>'.($onion_uttapam).'</font><hr>' ;
                if($paneer_uttapam>0)
                echo '<font size=2px>'.($paneer_uttapam).'</font><hr>' ;
                if($veg_soup>0)
                echo '<font size=2px>'.($veg_soup).'</font><hr>' ;
                if($hot_n_sour_soup>0)
                echo '<font size=2px>'.($hot_n_sour_soup).'</font><hr>' ;
                if($mushroom_soup>0)
                echo '<font size=2px>'.($mushroom_soup).'</font><hr>' ;
                if($tomato_soup>0)
                echo '<font size=2px>'.($tomato_soup).'</font><hr>' ;
                if($cold_drink>0)
                echo '<font size=2px>'.($cold_drink).'</font><hr>' ;
                if($water_bottle>0)
                echo '<font size=2px>'.($water_bottle).'</font><hr>' ;
                if($hot_coffee>0)
                echo '<font size=2px>'.($hot_coffee).'</font><hr>' ;
                if($cold_coffee>0)
                echo '<font size=2px>'.($cold_coffee).'</font><hr>' ;
                if($milk_badam>0)
                echo '<font size=2px>'.($milk_badam).'</font><hr>' ;
                if($mazza>0)
                echo '<font size=2px>'.($mazza).'</font><hr>' ;
                if($rasgulla>0)
                echo '<font size=2px>'.($rasgulla).'</font><hr>' ;
                if($icecream_cone>0)
                echo '<font size=2px>'.($icecream_cone).'</font><hr>' ;
                if($icecream_matka_kulfi>0)
                echo '<font size=2px>'.($icecream_matka_kulfi).'</font><hr>' ;
                if($icecream_butter_scotch>0)
                echo '<font size=2px>'.($icecream_butter_scotch).'</font><hr>' ;
                if($icecream_vannila>0)
                echo '<font size=2px>'.($icecream_vannila).'</font><hr>' ;
                if($icecream_chocolate>0)
                echo '<font size=2px>'.($icecream_chocolate).'</font><hr>' ;
                if($Half_matar_paneer>0)
                echo '<font size=2px>'.($Half_matar_paneer).'</font><hr>' ;
                if($Full_matar_paneer>0)
                echo '<font size=2px>'.($Full_matar_paneer).'</font><hr>' ;
                if($Half_chilly_paneer>0)
                echo '<font size=2px>'.($Half_chilly_paneer).'</font><hr>' ;
                if($Full_chilly_paneer>0)
                echo '<font size=2px>'.($Full_chilly_paneer).'</font><hr>' ;
                if($Half_paneer_do_pyaza>0)
                echo '<font size=2px>'.($Half_paneer_do_pyaza).'</font><hr>' ;
                if($Full_paneer_do_pyaza>0)
                echo '<font size=2px>'.($Full_paneer_do_pyaza).'</font><hr>' ;
                if($Half_paneer_btr_masala>0)
                echo '<font size=2px>'.($Half_paneer_btr_masala).'</font><hr>' ;
                if($Full_paneer_btr_masala>0)
                echo '<font size=2px>'.($Full_paneer_btr_masala).'</font><hr>' ;
                if($Half_kadhai_paneer>0)
                echo '<font size=2px>'.($Half_kadhai_paneer).'</font><hr>' ;
                if($Full_kadhai_paneer>0)
                echo '<font size=2px>'.($Full_kadhai_paneer).'</font><hr>' ;
                if($Half_paneer_kali_mirch>0)
                echo '<font size=2px>'.($Half_paneer_kali_mirch).'</font><hr>' ;
                if($Full_paneer_kali_mirch>0)
                echo '<font size=2px>'.($Full_paneer_kali_mirch).'</font><hr>' ;
                if($Half_shahi_paneer>0)
                echo '<font size=2px>'.($Half_shahi_paneer).'</font><hr>' ;
                if($Full_shahi_paneer>0)
                echo '<font size=2px>'.($Full_shahi_paneer).'</font><hr>' ;
                if($Half_paneer_pasanda>0)
                echo '<font size=2px>'.($Half_paneer_pasanda).'</font><hr>' ;
                if($Full_paneer_pasanda>0)
                echo '<font size=2px>'.($Full_paneer_pasanda).'</font><hr>' ;
                if($Half_paneer_bhujiya>0)
                echo '<font size=2px>'.($Half_paneer_bhujiya).'</font><hr>' ;
                if($Full_paneer_bhujiya>0)
                echo '<font size=2px>'.($Full_paneer_bhujiya).'</font><hr>' ;
                if($handi_paneer>0)
                echo '<font size=2px>'.($handi_paneer).'</font><hr>';
                if($paneer_mumtaz>0)
                echo '<font size=2px>'.($paneer_mumtaz).'</font><hr>' ;
                if($paneer_tikka>0)
                echo '<font size=2px>'.($paneer_tikka).'</font><hr>' ;
                if($paneer_tikka_masala>0)
                echo '<font size=2px>'.($paneer_tikka_masala).'</font><hr>' ;
                if($mushroom_masala>0)
                echo '<font size=2px>'.($mushroom_masala).'</font><hr>' ;
                if($mushroom_matar>0)
                echo '<font size=2px>'.($mushroom_matar).'</font><hr>' ;
                if($mushroom_pyaza>0)
                echo '<font size=2px>'.($mushroom_pyaza).'</font><hr>' ;
                if($paneer_kaleji>0)
                echo '<font size=2px>'.($paneer_kaleji).'</font><hr>' ;
                if($Half_mix_veg>0)
                echo '<font size=2px>'.($Half_mix_veg).'</font><hr>' ;
                if($Full_mix_veg>0)
                echo '<font size=2px>'.($Full_mix_veg).'</font><hr>' ;
                if($aloo_matar>0)
                echo '<font size=2px>'.($aloo_matar).'</font><hr>' ;
                if($aloo_zeera>0)
                echo '<font size=2px>'.($aloo_zeera).'</font><hr>' ;
                if($chana_masala>0)
                echo '<font size=2px>'.($chana_masala).'</font><hr>' ;
                if($veg_korma>0)
                echo '<font size=2px>'.($veg_korma).'</font><hr>' ;
                if($malai_kofta>0)
                echo '<font size=2px>'.($malai_kofta).'</font><hr>' ;
                if($dum_aloo>0)
                echo '<font size=2px>'.($dum_aloo).'</font><hr>' ;
                if($arhar_dal>0)
                echo '<font size=2px>'.($arhar_dal).'</font><hr>' ;
                if($fried_dal>0)
                echo '<font size=2px>'.($fried_dal).'</font><hr>' ;
                if($special_dal_balti>0)
                echo '<font size=2px>'.($special_dal_balti).'</font><hr>' ;
                if($dal_makhani>0)
                echo '<font size=2px>'.($dal_makhani).'</font><hr>' ;
                if($tawa_roti>0)
                echo '<font size=2px>'.($tawa_roti).'</font><hr>' ;
                if($tawa_btr_roti>0)
                echo '<font size=2px>'.$tawa_btr_roti.'</font><hr>' ;
                if($tandoori_roti>0)
                echo '<font size=2px>'.($tandoori_roti).'</font><hr>' ;
                if($tandoori_btr_roti>0)
                echo '<font size=2px>'.($tandoori_btr_roti).'</font><hr>' ;
                if($missi_roti>0)
                echo '<font size=2px>'.($missi_roti).'</font><hr>' ;
                if($plain_paratha>0)
                echo '<font size=2px>'.($plain_paratha).'</font><hr>' ;
                if($laccha_paratha>0)
                echo '<font size=2px>'.($laccha_paratha).'</font><hr>' ;
                if($plain_nan>0)
                echo '<font size=2px>'.($plain_nan).'</font><hr>' ;
                if($butter_nan>0)
                echo '<font size=2px>'.$butter_nan.'</font><hr>' ;

                if($veg_stuff_nan>0)
                echo '<font size=2px>'.($veg_stuff_nan).'</font><hr>' ;
                if($paneer_stuff_nan>0)
                echo '<font size=2px>'.($paneer_stuff_nan).'</font><hr>' ;
                if($papad>0)
                echo '<font size=2px>'.($papad).'</font><hr>' ;
                if($Half_plain_rice>0)
                echo '<font size=2px>'.($Half_plain_rice).'</font><hr>' ;
                if($Full_plain_rice>0)
                echo '<font size=2px>'.$Full_plain_rice.'</font><hr>' ;
                if($veg_fried_rice>0)
                echo '<font size=2px>'.$veg_fried_rice.'</font><hr>' ;
                if($paneer_fried_rice>0)
                echo '<font size=2px>'.$paneer_fried_rice.'</font><hr>' ;
                if($zeera_rice>0)
                echo '<font size=2px>'.($zeera_rice).'</font><hr>' ;
                if($matar_pulao>0)
                echo '<font size=2px>'.($matar_pulao).'</font><hr>' ;
                if($veg_biryani>0)
                echo '<font size=2px>'.($veg_biryani).'</font><hr>' ;
                if($masala_biryani>0)
                echo '<font size=2px>'.($masala_biryani).'</font><hr>' ;
                if($diet_special_biryani>0)
                echo '<font size=2px>'.($diet_special_biryani).'</font><hr>' ;
                if($mushroom_pulao>0)
                echo '<font size=2px>'.($mushroom_pulao).'</font><hr>' ;
                if($onion_salad>0)
                echo '<font size=2px>'.($onion_salad).'</font><hr>' ;
                if($green_salad>0)
                echo '<font size=2px>'.($green_salad).'</font><hr>' ;
                echo '<font size=  2px>'.'5%'.'</font><hr>' ;
                if($delivery>"0")
                echo '<font size=  2px>'.'&nbsp;'.'</font><hr>' ;

                ?>

            </td>
            <td>
                <?php

            if($french_fries>0)
                echo '<font size=2px>'.($french_fries*90).'</font><hr>' ;
                // if($paneer_pakoda>0)
                // echo '<font size=2px>'.($paneer_pakoda*100).'</font><hr>' ;
                if($pyaz_pakoda>0)
                echo '<font size=2px>'.($pyaz_pakoda*100).'</font><hr>' ;
                if($cutlet>0)
                echo '<font size=2px>'.($cutlet*90).'</font><hr>' ;
                if($diet_spring_roll>0)
                echo '<font size=2px>'.($diet_spring_roll*150).'</font><hr>' ;
                if($veg_burger>0)
                echo '<font size=2px>'.($veg_burger*80).'</font><hr>' ;
                if($paneer_burger>0)
                echo '<font size=2px>'.($paneer_burger*90).'</font><hr>' ;
                if($cheese_burger>0)
                echo '<font size=2px>'.($cheese_burger*100).'</font><hr>' ;
                if($paneer_paratha>0)
                echo '<font size=2px>'.($paneer_paratha*50).'</font><hr>' ;
                if($aloo_paratha>0)
                echo '<font size=2px>'.($aloo_paratha*60).'</font><hr>' ;
                if($pyaz_paratha>0)
                echo '<font size=2px>'.($pyaz_paratha*60).'</font><hr>' ;
                if($pavbhaji>0)
                echo '<font size=2px>'.($pavbhaji*80).'</font><hr>' ;
                if($chola_bhatura>0)
                echo '<font size=2px>'.($chola_bhatura*90).'</font><hr>' ;
                if($special_chola_bhatura>0)
                echo '<font size=2px>'.($special_chola_bhatura*100).'</font><hr>' ;
                if($veg_momos>0)
                echo '<font size=2px>'.($veg_momos*100).'</font><hr>' ;
                if($paneer_momos>0)
                echo '<font size=2px>'.($paneer_momos*120).'</font><hr>' ;
                if($Half_veg_chowmein>0)
                echo '<font size=2px>'.($Half_veg_chowmein*80).'</font><hr>' ;
                if($Full_veg_chowmein>0)
                echo '<font size=2px>'.($Full_veg_chowmein*100).'</font><hr>' ;
                if($Half_paneer_chowmein>0)
                echo '<font size=2px>'.($Half_paneer_chowmein*100).'</font><hr>' ;
                if($Full_paneer_chowmein>0)
                echo '<font size=2px>'.($Full_paneer_chowmein*120).'</font><hr>' ;
                if($mix_chowmein>0)
                echo '<font size=2px>'.($mix_chowmein*150).'</font><hr>' ;
                if($singapuri_chowmein>0)
                echo '<font size=2px>'.($singapuri_chowmein*150).'</font><hr>' ;
                if($diet_special_chowmein>0)
                echo '<font size=2px>'.($diet_special_chowmein*160).'</font><hr>' ;
                if($macroni>0)
                echo '<font size=2px>'.($macroni*100).'</font><hr>' ;
                if($veg_manchurian>0)
                echo '<font size=2px>'.($veg_manchurian*120).'</font><hr>' ;
                if($paneer_manchurian>0)
                echo '<font size=2px>'.($paneer_manchurian*150).'</font><hr>' ;
                if($veg_pizza>0)
                echo '<font size=2px>'.($veg_pizza*120).'</font><hr>' ;
                if($cheese_pizza>0)
                echo '<font size=2px>'.($cheese_pizza*140).'</font><hr>' ;
                if($diet_special_pizza>0)
                echo '<font size=2px>'.($diet_special_pizza*190).'</font><hr>' ;
                if($paper_dosa>0)
                echo '<font size=2px>'.($paper_dosa*70).'</font><hr>' ;
                if($masala_dosa>0)
                echo '<font size=2px>'.($masala_dosa*80).'</font><hr>' ;
                if($paneer_dosa>0)
                echo '<font size=2px>'.($paneer_dosa*110).'</font><hr>' ;
                if($onion_masala_dosa>0)
                echo '<font size=2px>'.($onion_masala_dosa*100).'</font><hr>' ;
                if($diet_special_dosa>0)
                echo '<font size=2px>'.($diet_special_dosa*160).'</font><hr>' ;
                if($onion_uttapam>0)
                echo '<font size=2px>'.($onion_uttapam*140).'</font><hr>' ;
                if($paneer_uttapam>0)
                echo '<font size=2px>'.($paneer_uttapam*160).'</font><hr>' ;
                if($veg_soup>0)
                echo '<font size=2px>'.($veg_soup*60).'</font><hr>' ;
                if($hot_n_sour_soup>0)
                echo '<font size=2px>'.($hot_n_sour_soup*80).'</font><hr>' ;
                if($mushroom_soup>0)
                echo '<font size=2px>'.($mushroom_soup*100).'</font><hr>' ;
                if($tomato_soup>0)
                echo '<font size=2px>'.($tomato_soup*100).'</font><hr>' ;
                if($cold_drink>0)
                echo '<font size=2px>'.($cold_drink*40).'</font><hr>' ;
                if($water_bottle>0)
                echo '<font size=2px>'.($water_bottle*20).'</font><hr>' ;
                if($hot_coffee>0)
                echo '<font size=2px>'.($hot_coffee*40).'</font><hr>' ;
                if($cold_coffee>0)
                echo '<font size=2px>'.($cold_coffee*100).'</font><hr>' ;
                if($milk_badam>0)
                echo '<font size=2px>'.($milk_badam*50).'</font><hr>' ;
                if($mazza>0)
                echo '<font size=2px>'.($mazza*40).'</font><hr>' ;
                if($rasgulla>0)
                echo '<font size=2px>'.($rasgulla*20).'</font><hr>' ;
                if($icecream_cone>0)
                echo '<font size=2px>'.($icecream_cone*50).'</font><hr>' ;
                if($icecream_matka_kulfi>0)
                echo '<font size=2px>'.($icecream_matka_kulfi*60).'</font><hr>' ;
                if($icecream_butter_scotch>0)
                echo '<font size=2px>'.($icecream_butter_scotch*50).'</font><hr>' ;
                if($icecream_vannila>0)
                echo '<font size=2px>'.($icecream_vannila*50).'</font><hr>' ;
                if($icecream_chocolate>0)
                echo '<font size=2px>'.($icecream_chocolate*60).'</font><hr>' ;
                if($Half_matar_paneer>0)
                echo '<font size=2px>'.($Half_matar_paneer*80).'</font><hr>' ;
                if($Full_matar_paneer>0)
                echo '<font size=2px>'.($Full_matar_paneer*120).'</font><hr>' ;
                if($Half_chilly_paneer>0)
                echo '<font size=2px>'.($Half_chilly_paneer*90).'</font><hr>' ;
                if($Full_chilly_paneer>0)
                echo '<font size=2px>'.($Full_chilly_paneer*120).'</font><hr>' ;
                if($Half_paneer_do_pyaza>0)
                echo '<font size=2px>'.($Half_paneer_do_pyaza*90).'</font><hr>' ;
                if($Full_paneer_do_pyaza>0)
                echo '<font size=2px>'.($Full_paneer_do_pyaza*130).'</font><hr>' ;
                if($Half_paneer_btr_masala>0)
                echo '<font size=2px>'.($Half_paneer_btr_masala*90).'</font><hr>' ;
                if($Full_paneer_btr_masala>0)
                echo '<font size=2px>'.($Full_paneer_btr_masala*150).'</font><hr>' ;
                if($Half_kadhai_paneer>0)
                echo '<font size=2px>'.($Half_kadhai_paneer*90).'</font><hr>' ;
                if($Full_kadhai_paneer>0)
                echo '<font size=2px>'.($Full_kadhai_paneer*150).'</font><hr>' ;
                if($Half_paneer_kali_mirch>0)
                echo '<font size=2px>'.($Half_paneer_kali_mirch*90).'</font><hr>' ;
                if($Full_paneer_kali_mirch>0)
                echo '<font size=2px>'.($Full_paneer_kali_mirch*150).'</font><hr>' ;
                if($Half_shahi_paneer>0)
                echo '<font size=2px>'.($Half_shahi_paneer*90).'</font><hr>' ;
                if($Full_shahi_paneer>0)
                echo '<font size=2px>'.($Full_shahi_paneer*150).'</font><hr>' ;
                if($Half_paneer_pasanda>0)
                echo '<font size=2px>'.($Half_paneer_pasanda*100).'</font><hr>' ;
                if($Full_paneer_pasanda>0)
                echo '<font size=2px>'.($Full_paneer_pasanda*160).'</font><hr>' ;
                if($Half_paneer_bhujiya>0)
                echo '<font size=2px>'.($Half_paneer_bhujiya*100).'</font><hr>' ;
                if($Full_paneer_bhujiya>0)
                echo '<font size=2px>'.($Full_paneer_bhujiya*140).'</font><hr>' ;
                if($handi_paneer>0)
                echo '<font size=2px>'.($handi_paneer*160).'</font><hr>';
                if($paneer_mumtaz>0)
                echo '<font size=2px>'.($paneer_mumtaz*150).'</font><hr>' ;
                if($paneer_tikka>0)
                echo '<font size=2px>'.($paneer_tikka*150).'</font><hr>' ;
                if($paneer_tikka_masala>0)
                echo '<font size=2px>'.($paneer_tikka_masala*170).'</font><hr>' ;
                if($mushroom_masala>0)
                echo '<font size=2px>'.($mushroom_masala*160).'</font><hr>' ;
                if($mushroom_matar>0)
                echo '<font size=2px>'.($mushroom_matar*150).'</font><hr>' ;
                if($mushroom_pyaza>0)
                echo '<font size=2px>'.($mushroom_pyaza*160).'</font><hr>' ;
                if($paneer_kaleji>0)
                echo '<font size=2px>'.($paneer_kaleji*170).'</font><hr>' ;
                if($Half_mix_veg>0)
                echo '<font size=2px>'.($Half_mix_veg*80).'</font><hr>' ;
                if($Full_mix_veg>0)
                echo '<font size=2px>'.($Full_mix_veg*120).'</font><hr>' ;
                if($aloo_matar>0)
                echo '<font size=2px>'.($aloo_matar*100).'</font><hr>' ;
                if($aloo_zeera>0)
                echo '<font size=2px>'.($aloo_zeera*100).'</font><hr>' ;
                if($chana_masala>0)
                echo '<font size=2px>'.($chana_masala*100).'</font><hr>' ;
                if($veg_korma>0)
                echo '<font size=2px>'.($veg_korma*160).'</font><hr>' ;
                if($malai_kofta>0)
                echo '<font size=2px>'.($malai_kofta*160).'</font><hr>' ;
                if($dum_aloo>0)
                echo '<font size=2px>'.($dum_aloo*100).'</font><hr>' ;
                if($arhar_dal>0)
                echo '<font size=2px>'.($arhar_dal*70).'</font><hr>' ;
                if($fried_dal>0)
                echo '<font size=2px>'.($fried_dal*100).'</font><hr>' ;
                if($dal_makhani>0)
                echo '<font size=2px>'.($dal_makhani*120).'</font><hr>' ;
                if($special_dal_balti>0)
                echo '<font size=2px>'.($special_dal_balti*140).'</font><hr>' ;
                if($tawa_roti>0)
                echo '<font size=2px>'.($tawa_roti*10).'</font><hr>' ;
                if($tawa_btr_roti>0)
                echo '<font size=2px>'.($tawa_btr_roti*12).'</font><hr>' ;
                if($tandoori_roti>0)
                echo '<font size=2px>'.($tandoori_roti*8).'</font><hr>' ;
                if($tandoori_btr_roti>0)
                echo '<font size=2px>'.($tandoori_btr_roti*12).'</font><hr>' ;
                if($missi_roti>0)
                echo '<font size=2px>'.($missi_roti*40).'</font><hr>' ;
                if($plain_paratha>0)
                echo '<font size=2px>'.($plain_paratha*30).'</font><hr>' ;
                if($laccha_paratha>0)
                echo '<font size=2px>'.($laccha_paratha*60).'</font><hr>' ;
                if($plain_nan>0)
                echo '<font size=2px>'.($plain_nan*25).'</font><hr>' ;
                if($butter_nan>0)
                echo '<font size=2px>'.($butter_nan*30).'</font><hr>' ;

                if($veg_stuff_nan>0)
                echo '<font size=2px>'.($veg_stuff_nan*50).'</font><hr>' ;
                if($paneer_stuff_nan>0)
                echo '<font size=2px>'.($paneer_stuff_nan*60).'</font><hr>' ;
                if($papad>0)
                echo '<font size=2px>'.($papad*15).'</font><hr>' ;
                if($Half_plain_rice>0)
                echo '<font size=2px>'.($Half_plain_rice*40).'</font><hr>' ;
                if($Full_plain_rice>0)
                echo '<font size=2px>'.($Full_plain_rice*60).'</font><hr>' ;
                if($veg_fried_rice>0)
                echo '<font size=2px>'.($veg_fried_rice*110).'</font><hr>' ;
                if($paneer_fried_rice>0)
                echo '<font size=2px>'.($paneer_fried_rice*130).'</font><hr>' ;
                if($zeera_rice>0)
                echo '<font size=2px>'.($zeera_rice*80).'</font><hr>' ;
                if($matar_pulao>0)
                echo '<font size=2px>'.($matar_pulao*100).'</font><hr>' ;
                if($veg_biryani>0)
                echo '<font size=2px>'.($veg_biryani*120).'</font><hr>' ;
                if($masala_biryani>0)
                echo '<font size=2px>'.($masala_biryani*140).'</font><hr>' ;
                if($diet_special_biryani>0)
                echo '<font size=2px>'.($diet_special_biryani*160).'</font><hr>' ;
                if($mushroom_pulao>0)
                echo '<font size=2px>'.($mushroom_pulao*180).'</font><hr>' ;
                if($onion_salad>0)
                echo '<font size=2px>'.($onion_salad*30).'</font><hr>' ;
                if($green_salad>0)
                echo '<font size=2px>'.($green_salad*45).'</font><hr>' ;
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
                                    <input type="hidden" id="restaurant" name="restaurant" value="Diet Restaurant"/>
                                    <input type="hidden" id="items" name="email" value="<?php if($french_fries>0)

                                            echo 'french fries'.$french_fries.'<hr>' ;
                                        //if($paneer_pakoda>0)
                                           // echo 'paneer pakoda'.$paneer_pakoda.'<hr>' ;
                                        if($pyaz_pakoda>0)
                                            echo 'pyaz pakoda'.$pyaz_pakoda.'<hr>' ;
                                        if($cutlet>0)
                                            echo 'cutlet'.$cutlet.'<hr>' ;
                                        if($diet_spring_roll>0)
                                            echo 'diet spring roll'.$diet_spring_roll.'<hr>' ;
                                        if($veg_burger>0)
                                            echo 'veg burger'.$veg_burger.'<hr>' ;
                                        if($paneer_burger>0)
                                            echo 'paneer burger'.$paneer_burger.'<hr>' ;
                                        if($cheese_burger>0)
                                            echo 'cheese burger'.$cheese_burger.'<hr>' ;
                                        if($paneer_paratha>0)
                                            echo 'paneer paratha'.$paneer_paratha.'<hr>' ;
                                        if($aloo_paratha>0)
                                            echo 'aloo paratha '.$aloo_paratha.'<hr>' ;
                                        if($pyaz_paratha>0)
                                            echo 'pyaz paratha '.$pyaz_paratha.'<hr>' ;
                                        if($pavbhaji>0)
                                            echo 'pavbhaji'.$pavbhaji.'<hr>' ;
                                        if($chola_bhatura>0)
                                            echo 'chola bhatura'.$chola_bhatura.'<hr>' ;
                                        if($special_chola_bhatura>0)
                                            echo 'special chola bhatura'.$special_chola_bhatura.'<hr>' ;
                                        if($veg_momos>0)
                                            echo 'veg momos'.$veg_momos.'<hr>' ;
                                        if($paneer_momos>0)
                                            echo 'paneer momos'.$paneer_momos.'<hr>' ;
                                        if($Half_veg_chowmein>0)
                                            echo 'Half veg chowmein'.$Half_veg_chowmein.'<hr>' ;
                                        if($Full_veg_chowmein>0)
                                            echo 'Full veg chowmein'.$Full_veg_chowmein.'<hr>' ;
                                        if($Half_paneer_chowmein>0)
                                            echo 'Half paneer chowmein'.$Half_paneer_chowmein.'<hr>' ;
                                        if($Full_paneer_chowmein>0)
                                            echo 'Full paneer chowmein'.$Full_paneer_chowmein.'<hr>' ;
                                        if($mix_chowmein>0)
                                            echo 'mix chowmein'.$mix_chowmein.'<hr>' ;
                                        if($singapuri_chowmein>0)
                                            echo 'singapuri chowmein'.$singapuri_chowmein.'<hr>' ;
                                        if($diet_special_chowmein>0)
                                            echo 'diet special chowmein'.$diet_special_chowmein.'<hr>' ;
                                        if($macroni>0)
                                            echo 'macroni'.$macroni.'<hr>' ;
                                        if($veg_manchurian>0)
                                            echo 'veg manchurian'.$veg_manchurian.'<hr>' ;
                                       if($paneer_manchurian>0)
                                        echo 'Paneer manchurian'.$paneer_manchurian.'<hr>' ;
                                        if($veg_pizza>0)
                                            echo 'veg pizza'.$veg_pizza.'<hr>' ;
                                        if($cheese_pizza>0)
                                            echo 'cheese pizza'.$cheese_pizza.'<hr>' ;
                                        if($diet_special_pizza>0)
                                            echo 'diet special pizza'.$diet_special_pizza.'<hr>' ;
                                        if($paper_dosa>0)
                                            echo 'paper dosa'.$paper_dosa.'<hr>' ;
                                        if($masala_dosa>0)
                                            echo 'masala dosa'.$masala_dosa.'<hr>' ;
                                        if($paneer_dosa>0)
                                            echo 'paneer dosa'.$paneer_dosa.'<hr>' ;
                                        if($onion_masala_dosa>0)
                                            echo 'onion masala dosa'.$onion_masala_dosa.'<hr>' ;
                                        if($diet_special_dosa>0)
                                            echo 'diet special dosa'.$diet_special_dosa.'<hr>' ;
                                        if($onion_uttapam>0)
                                            echo 'onion uttapam'.$onion_uttapam.'<hr>' ;
                                        if($paneer_uttapam>0)
                                            echo 'paneer uttapam'.$paneer_uttapam.'<hr>' ;
                                        if($veg_soup>0)
                                            echo 'veg soup'.$veg_soup.'<hr>' ;
                                        if($hot_n_sour_soup>0)
                                            echo 'hot n sour soup'.$hot_n_sour_soup.'<hr>' ;
                                        if($mushroom_soup>0)
                                            echo 'mushroom soup'.$mushroom_soup.'<hr>' ;
                                        if($tomato_soup>0)
                                            echo 'tomato soup'.$tomato_soup.'<hr>' ;
                                        if($cold_drink>0)
                                            echo 'cold drink'.$cold_drink.'<hr>' ;
                                        if($water_bottle>0)
                                            echo 'water bottle'.$water_bottle.'<hr>' ;
                                        if($hot_coffee>0)
                                            echo 'hot coffee'.$hot_coffee.'<hr>' ;
                                        if($cold_coffee>0)
                                            echo 'cold coffee'.$cold_coffee.'<hr>' ;
                                        if($milk_badam>0)
                                            echo 'milk badam'.$milk_badam.'<hr>' ;
                                        if($mazza>0)
                                            echo 'mazza'.$mazza.'<hr>' ;
                                        if($rasgulla>0)
                                            echo 'rasgulla'.$rasgulla.'<hr>' ;
                                        if($icecream_cone>0)
                                            echo 'icecream cone'.$icecream_cone.'<hr>' ;
                                        if($icecream_matka_kulfi>0)
                                            echo 'icecream matka kulfi'.$icecream_matka_kulfi.'<hr>' ;
                                        if($icecream_butter_scotch>0)
                                            echo 'icecream butter scotch'.$icecream_butter_scotch.'<hr>' ;
                                        if($icecream_vannila>0)
                                            echo 'icecream vannila'.$icecream_vannila.'<hr>' ;
                                        if($icecream_chocolate>0)
                                            echo 'icecream chocolate'.$icecream_chocolate.'<hr>' ;
                                        if($Half_matar_paneer>0)
                                            echo 'Half matar paneer'.$Half_matar_paneer.'<hr>' ;
                                        if($Full_matar_paneer>0)
                                            echo 'Full matar paneer'.$Full_matar_paneer.'<hr>' ;
                                        if($Half_chilly_paneer>0)
                                            echo 'Half chilly paneer'.$Half_chilly_paneer.'<hr>' ;
                                        if($Full_chilly_paneer>0)
                                            echo 'Full chilly paneer'.$Full_chilly_paneer.'<hr>' ;
                                        if($Half_paneer_do_pyaza>0)
                                            echo 'Half paneer do pyaza'.$Half_paneer_do_pyaza.'<hr>' ;
                                        if($Full_paneer_do_pyaza>0)
                                            echo 'Full paneer do pyaza'.$Full_paneer_do_pyaza.'<hr>' ;
                                        if($Half_paneer_btr_masala>0)
                                            echo 'Half paneer btr masala'.$Half_paneer_btr_masala.'<hr>' ;
                                        if($Full_paneer_btr_masala>0)
                                            echo 'Full paneer btr masala'.$Full_paneer_btr_masala.'<hr>' ;
                                        if($Half_kadhai_paneer>0)
                                            echo 'Half kadhai paneer'.$Half_kadhai_paneer.'<hr>' ;
                                        if($Full_kadhai_paneer>0)
                                            echo 'Full kadhai paneer: '.$Full_kadhai_paneer.'<hr>' ;
                                        if($Half_paneer_kali_mirch>0)
                                            echo 'Half paneer kali mirch'.$Half_paneer_kali_mirch.'<hr>' ;
                                        if($Full_paneer_kali_mirch>0)
                                            echo 'Full paneer kali mirch'.$Full_paneer_kali_mirch.'<hr>' ;
                                        if($Half_shahi_paneer>0)
                                            echo 'Half shahi paneer'.$Half_shahi_paneer.'<hr>' ;
                                        if($Full_shahi_paneer>0)
                                            echo 'Full shahi paneer'.$Full_shahi_paneer.'<hr>' ;
                                        if($Half_paneer_pasanda>0)
                                            echo 'Half paneer pasanda'.$Half_paneer_pasanda.'<hr>' ;
                                        if($Full_paneer_pasanda>0)
                                            echo 'Full paneer pasanda'.$Full_paneer_pasanda.'<hr>' ;
                                        if($Half_paneer_bhujiya>0)
                                            echo 'Half paneer bhujiya'.$Half_paneer_bhujiya.'<hr>' ;
                                        if($Full_paneer_bhujiya>0)
                                            echo 'Full paneer bhujiya'.$Full_paneer_bhujiya.'<hr>' ;
                                        if($handi_paneer>0)
                                            echo 'handi paneer'.$handi_paneer.'<hr>';
                                        if($paneer_mumtaz>0)
                                            echo 'paneer mumtaz'.$paneer_mumtaz.'<hr>' ;
                                        if($paneer_tikka>0)
                                            echo 'paneer tikka'.$paneer_tikka.'<hr>' ;
                                        if($paneer_tikka_masala>0)
                                            echo 'paneer tikka masala: '.$paneer_tikka_masala.'<hr>' ;
                                        if($mushroom_masala>0)
                                            echo 'mushroom masala'.$mushroom_masala.'<hr>' ;
                                        if($mushroom_matar>0)
                                            echo 'mushroom matar'.$mushroom_matar.'<hr>' ;
                                        if($mushroom_pyaza>0)
                                            echo 'mushroom pyaza'.$mushroom_pyaza.'<hr>' ;
                                        if($paneer_kaleji>0)
                                            echo 'paneer kaleji'.$paneer_kaleji.'<hr>' ;
                                        if($Half_mix_veg>0)
                                            echo 'Half mix veg'.$Half_mix_veg.'<hr>' ;
                                        if($Full_mix_veg>0)
                                            echo 'Full mix veg'.$Full_mix_veg.'<hr>' ;
                                        if($aloo_matar>0)
                                            echo 'aloo matar'.$aloo_matar.'<hr>' ;
                                        if($aloo_zeera>0)
                                            echo 'aloo zeera'.$aloo_zeera.'<hr>' ;
                                        if($chana_masala>0)
                                            echo 'chana masala'.$chana_masala.'<hr>' ;
                                        if($veg_korma>0)
                                            echo 'veg korma'.$veg_korma.'<hr>' ;
                                        if($malai_kofta>0)
                                            echo 'malai kofta'.$malai_kofta.'<hr>' ;
                                        if($dum_aloo>0)
                                            echo 'dum aloo'.$dum_aloo.'<hr>' ;
                                        if($arhar_dal>0)
                                            echo 'arhar dal'.$arhar_dal.'<hr>' ;
                                        if($fried_dal>0)
                                            echo 'fried dal'.$fried_dal.'<hr>' ;
                                        if($dal_makhani>0)
                                        echo 'Dal Makhani'.$dal_makhani.'<hr>' ;
                                        if($special_dal_balti>0)
                                        echo 'Special Dal Balti'.$special_dal_balti.'<hr>' ;
                                      if($tawa_roti>0)
                                            echo 'tawa roti'.$tawa_roti.'<hr>' ;
                                        if($tawa_btr_roti>0)
                                            echo 'tawa btr roti'.$tawa_btr_roti.'<hr>' ;
                                        if($tandoori_roti>0)
                                            echo 'tandoori roti'.$tandoori_roti.'<hr>' ;
                                        if($tandoori_btr_roti>0)
                                            echo 'tandoori btr roti'.$tandoori_btr_roti.'<hr>' ;
                                        if($missi_roti>0)
                                            echo 'missi roti'.$missi_roti.'<hr>' ;
                                        if($plain_paratha>0)
                                            echo 'plain paratha'.$plain_paratha.'<hr>' ;
                                        if($laccha_paratha>0)
                                            echo 'laccha paratha'.$laccha_paratha.'<hr>' ;
                                        if($plain_nan>0)
                                            echo 'plain nan'.$plain_nan.'<hr>' ;
                                      if($butter_nan>0)
                                        echo 'butter nan'.$butter_nan.'</font><hr>' ;

                                        if($veg_stuff_nan>0)
                                            echo 'veg stuff nan'.$veg_stuff_nan.'<hr>' ;
                                        if($paneer_stuff_nan>0)
                                            echo 'paneer stuff nan'.$paneer_stuff_nan.'<hr>' ;
                                        if($papad>0)
                                            echo 'papad'.$papad.'<hr>' ;
                                        if($Half_plain_rice>0)
                                            echo 'Half plain rice'.$Half_plain_rice.'<hr>' ;
                                        if($Full_plain_rice>0)
                                            echo 'Full plain rice'.$Full_plain_rice.'<hr>' ;
                                        if($veg_fried_rice>0)
                                            echo 'veg fried rice'.$veg_fried_rice.'<hr>' ;
                                        if($paneer_fried_rice>0)
                                            echo 'paneer fried rice'.$paneer_fried_rice.'<hr>' ;
                                        if($zeera_rice>0)
                                            echo 'zeera rice'.$zeera_rice.'<hr>' ;
                                        if($matar_pulao>0)
                                            echo 'matar pulao'.$matar_pulao.'<hr>' ;
                                        if($veg_biryani>0)
                                            echo 'veg biryani'.$veg_biryani.'<hr>' ;
                                        if($masala_biryani>0)
                                            echo 'masala biryani'.$masala_biryani.'<hr>' ;
                                        if($diet_special_biryani>0)
                                            echo 'diet special biryani'.$diet_special_biryani.'<hr>' ;
                                        if($mushroom_pulao>0)
                                            echo 'mushroom pulao'.$mushroom_pulao.'<hr>' ;
                                        if($onion_salad>0)
                                            echo 'onion salad'.$onion_salad.'<hr>' ;
                                        if($green_salad>0)
                                            echo 'green salad'.$green_salad.'<hr>' ;
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
                        Click <a href="diet.php">here</a> to go back to Menu page...!!
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
}
else{
    
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
                        <h5>Sorry your order couldn't be processed this time as<font color="red"> restaurant order timing is over</font></h5>
                        Click <a href="diet.php">here</a> to go back to Menu page...!!
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
