<?php

include '../../Core/Functions/general.php';

    $totalqty=0;
  $delivery=0;
  $discount=5;
    $mini_pizza = secure($_POST['mini_pizza']) ;
    $manchurian_roll = secure($_POST['manchurian_roll']) ;
    $veg_hotdog = secure($_POST['veg_hotdog']) ;
    $sweetcorn_pizza_mini = secure($_POST['sweetcorn_pizza_mini']) ;
    $manchurian_pizza = secure($_POST['manchurian_pizza']) ;
    $burger = secure($_POST['burger']) ;
    $mushroom_pizza = secure($_POST['mushroom_pizza']) ;
    $spring_roll = secure($_POST['spring_roll']) ;
    $donnut = secure($_POST['donnut']) ;
    $donnut_strawberry = secure($_POST['donnut_strawberry']) ;
    $dhokla = secure($_POST['dhokla']) ;
    $veg_sandwich = secure($_POST['veg_sandwich']) ;
    $sweetpuff = secure($_POST['sweetpuff']) ;
    $cream_roll = secure($_POST['cream_roll']) ;
    $cream_roll_strawberry_chocolate = secure($_POST['cream_roll_strawberry_chocolate']) ;
    $cream_bun = secure($_POST['cream_bun']) ;
    $sweet_patties = secure($_POST['sweet_patties']) ;
    $sweet_bun = secure($_POST['sweet_bun']) ;
    $pineapple_juicy_pastry = secure($_POST['pineapple_juicy_pastry']) ;
    $black_current_pastry = secure($_POST['black_current_pastry']) ;
    $butter_scotch_pastry = secure($_POST['butter_scotch_pastry']) ;
    $lemon_pastry = secure($_POST['lemon_pastry']) ;
    $strawberry_pastry = secure($_POST['strawberry_pastry']) ;
    $vanilla_pastry = secure($_POST['vanilla_pastry']) ;
    $dark_fantasy_pastry = secure($_POST['dark_fantasy_pastry']) ;
    $chocolate_pastry = secure($_POST['chocolate_pastry']) ;
    $rumwall_pastry= secure($_POST['rumwall_pastry']) ;
    $mix_fruit_pudding = secure($_POST['mix_fruit_pudding']) ;
    $pineapple_katori = secure($_POST['pineapple_katori']) ;
    $butter_scotch_katori = secure($_POST['butter_scotch_katori']) ;
    $chocolate_chip_pastry = secure($_POST['chocolate_chip_pastry']) ;
    $mango_mousse = secure($_POST['mango_mousse']) ;
    $strawberry_mousse = secure($_POST['strawberry_mousse']) ;
    $fruit_n_nut_pastry = secure($_POST['fruit_n_nut_pastry']) ;
    $pineapple_kela_pastry = secure($_POST['pineapple_kela_pastry']) ;
    $milk_and_milk_pastry = secure($_POST['milk_and_milk_pastry']) ;
    $chocolate_katori = secure($_POST['chocolate_katori']) ;
    $paneer_patties = secure($_POST['paneer_patties']) ;
    $aloo_patties = secure($_POST['aloo_patties']) ;
    $mix_veg_patties = secure($_POST['mix_veg_patties']) ;
    $pancake = secure($_POST['pancake']) ;
    $slice_cake = secure($_POST['slice_cake']) ;
    $fruit_cake = secure($_POST['fruit_cake']) ;
    $vanilla_muffins = secure($_POST['vanilla_muffins']) ;
    $chocolate_muffins = secure($_POST['chocolate_muffins']) ;
    $butter_rusk = secure($_POST['butter_rusk']) ;
    $suji_rusk = secure($_POST['suji_rusk']) ;
    $palak_extra = secure($_POST['palak_extra']) ;
    $cheese_extra = secure($_POST['cheese_extra']) ;
    $jeera_extra = secure($_POST['jeera_extra']) ;
    $jam_cookies = secure($_POST['jam_cookies']) ;
    $pineapple_cream_cookies = secure($_POST['pineapple_cream_cookies']) ;
    $chocolate_cream_cookies = secure($_POST['chocolate_cream_cookies']) ;
    $fruit_cake_cookies = secure($_POST['fruit_cake_cookies']) ;
    $sweet_heart_cookies = secure($_POST['sweet_heart_cookies']) ;
    $laccha_peanut_cookies = secure($_POST['laccha_peanut_cookies']) ;
    $laccha_coconut_cookies = secure($_POST['laccha_coconut_cookies']) ;
    $laccha_chocolate_cookies = secure($_POST['laccha_chocolate_cookies']) ;
    $milkmaid_coconut_cookies = secure($_POST['milkmaid_coconut_cookies']) ;
    $pizza_cookies = secure($_POST['pizza_cookies']) ;
    $pista_badam_cookies = secure($_POST['pista_badam_cookies']) ;
    $full_chocolate_badam_cookies = secure($_POST['full_chocolate_badam_cookies']) ;
    $kaju_makhan_cookies = secure($_POST['kaju_makhan_cookies']) ;  
    $besan_nankhatai = secure($_POST['besan_nankhatai']) ;
    $white_nankhatai = secure($_POST['white_nankhatai']) ;
    $chocolate_kaju_mix_cookies = secure($_POST['chocolate_kaju_mix_cookies']) ;
    $swar_namkeen = secure($_POST['swar_namkeen']) ;
  $butter_namkeen = secure($_POST['butter_namkeen']) ;
    $chocolate_chip_cookies = secure($_POST['chocolate_chip_cookies']) ;
    $cherry_flower_cookies = secure($_POST['cherry_flower_cookies']) ;
    $flower_namkeen = secure($_POST['flower_namkeen']) ;
  $flower_meetha = secure($_POST['flower_meetha']) ;
    $sewai_nankhatai = secure($_POST['sewai_nankhatai']) ;
  $aata_nankhatai=secure($_POST['aata_nankhatai']);
    $half_half_cookies = secure($_POST['half_half_cookies']) ;
    $sweet_butterfly_cookies = secure($_POST['sweet_butterfly_cookies']) ;
    $badam_nankhatai = secure($_POST['badam_nankhatai']) ;
    $badam_laccha_cookies = secure($_POST['badam_laccha_cookies']) ;
  $vanilla_cake = secure($_POST['vanilla_cake']) ;
  $strawberry_cake = secure($_POST['strawberry_cake']) ;
  $blackcurrent_cake = secure($_POST['blackcurrent_cake']) ;
  $butterscotch_cake = secure($_POST['butterscotch_cake']) ;
  $pineapple_cake = secure($_POST['pineapple_cake']) ;
  $chocolate_cake = secure($_POST['chocolate_cake']) ;  
  $mix_fruit_cake = secure($_POST['mix_fruit_cake']) ;
  $strips = secure($_POST['strips']) ;
  $big_balloon = secure($_POST['big_balloon']) ;
  $crown = secure($_POST['crown']) ;
  $magic_candle = secure($_POST['magic_candle']) ;
  $anaar_candle = secure($_POST['anaar_candle']) ;
  $musical_knife = secure($_POST['musical_knife']) ;
  $snow_white = secure($_POST['snow_white']) ;
  $small_birthday_cap = secure($_POST['small_birthday_cap']) ;
  $medium_birthday_cap = secure($_POST['medium_birthday_cap']) ;
  $large_birthday_cap=secure($_POST['large_birthday_cap']);
  $small_balloon_packet = secure($_POST['small_balloon_packet']) ;
  $medium_balloon_packet = secure($_POST['medium_balloon_packet']) ;
  $large_balloon_packet = secure($_POST['large_balloon_packet']) ;
  $small_party_popper = secure($_POST['small_party_popper']) ;
  $medium_party_popper = secure($_POST['medium_party_popper']) ;
  $large_party_popper = secure($_POST['large_party_popper']) ;
  $small_lotus_candle = secure($_POST['small_lotus_candle']) ;
  $large_lotus_candle = secure($_POST['large_lotus_candle']) ;
  $small_birthday_banner = secure($_POST['small_birthday_banner']) ;
  $medium_birthday_banner = secure($_POST['medium_birthday_banner']) ;
  $large_birthday_banner = secure($_POST['large_birthday_banner']) ;
    $totalqty=( $mini_pizza + $manchurian_roll + $veg_hotdog + $sweetcorn_pizza_mini + $manchurian_pizza + $burger + $mushroom_pizza + $spring_roll + $donnut + $donnut_strawberry + $dhokla + $veg_sandwich + $cream_roll + $cream_roll_strawberry_chocolate + $sweetpuff + $cream_bun + $sweet_patties + $sweet_bun + $pineapple_juicy_pastry + $black_current_pastry + $butter_scotch_pastry + $lemon_pastry + $strawberry_pastry + $vanilla_pastry + $dark_fantasy_pastry + $chocolate_pastry + $rumwall_pastry + $mix_fruit_pudding + $pineapple_katori + $butter_scotch_katori + $chocolate_chip_pastry + $mango_mousse + $strawberry_mousse + $fruit_n_nut_pastry + $pineapple_kela_pastry + $milk_and_milk_pastry + $chocolate_katori + $paneer_patties + $aloo_patties + $mix_veg_patties + $jam_cookies + $pineapple_cream_cookies + $chocolate_cream_cookies + $fruit_cake_cookies + $sweet_heart_cookies + $laccha_peanut_cookies + $laccha_coconut_cookies + $laccha_chocolate_cookies + $milkmaid_coconut_cookies + $pizza_cookies + $pista_badam_cookies + $full_chocolate_badam_cookies + $kaju_makhan_cookies + $aata_nankhatai + $besan_nankhatai + $white_nankhatai + $chocolate_kaju_mix_cookies + $swar_namkeen + $butter_namkeen + $chocolate_chip_cookies + $cherry_flower_cookies + $flower_namkeen + $flower_meetha + $aata_nankhatai + $sewai_nankhatai + $half_half_cookies + $sweet_butterfly_cookies + $badam_nankhatai + $badam_laccha_cookies + $pancake + $slice_cake + $fruit_cake + $vanilla_muffins + $chocolate_muffins + $butter_rusk + $suji_rusk + $palak_extra + $cheese_extra + $jeera_extra + $vanilla_cake + $strawberry_cake + $blackcurrent_cake + $butterscotch_cake + $pineapple_cake + $chocolate_cake +$mix_fruit_cake + $strips + $big_balloon + $crown + $magic_candle + $anaar_candle + $musical_knife + $snow_white + $small_birthday_cap + $medium_birthday_cap + $large_birthday_cap + $small_balloon_packet +$medium_balloon_packet + $large_balloon_packet + $small_party_popper + $medium_party_popper + $large_party_popper + $small_lotus_candle + $large_lotus_candle + $small_birthday_banner + $medium_birthday_banner + $large_birthday_banner );
    $totalamt=(($mini_pizza*25) + ($manchurian_roll*25) + ($veg_hotdog*25) + ($sweetcorn_pizza_mini*35) + ($manchurian_pizza*45) + ($burger*30) + ($mushroom_pizza*40) + ($spring_roll*30) + ($donnut*25) + ($donnut_strawberry*25) + ($dhokla*40) + ($veg_sandwich*20) + ($cream_roll*8) + ($cream_roll_strawberry_chocolate*10) + ($sweetpuff*10) + ($cream_bun*6) + ($sweet_patties*8) + ($sweet_bun*6) + ($pineapple_juicy_pastry*30)+ ($black_current_pastry*20) + ($butter_scotch_pastry*30) + ($lemon_pastry*20) + ($strawberry_pastry*20) + ($vanilla_pastry*20) + ($dark_fantasy_pastry*45) + ($chocolate_pastry*35) + ($rumwall_pastry*20) + ($mix_fruit_pudding*40) + ($pineapple_katori*30) + ($butter_scotch_katori*30) + ($chocolate_chip_pastry*40) + ($mango_mousse*30) + ($strawberry_mousse*30) + ($fruit_n_nut_pastry*50) + ($pineapple_kela_pastry*35) + ($milk_and_milk_pastry*40) + ($chocolate_katori*50) + ($paneer_patties*15) + ($aloo_patties*7) + ($mix_veg_patties*12) + ($jam_cookies*300) + ($pineapple_cream_cookies*260) + ($chocolate_cream_cookies*260) + ($fruit_cake_cookies*200) + ($sweet_heart_cookies*300) + ($laccha_peanut_cookies*200) + ($laccha_coconut_cookies*200) + ($laccha_chocolate_cookies*240) + ($milkmaid_coconut_cookies*300) + ($pizza_cookies*400) + ($pista_badam_cookies*400) + ($full_chocolate_badam_cookies*400) + ($kaju_makhan_cookies*400) + ($aata_nankhatai*200) + ($besan_nankhatai*180) + ($white_nankhatai*160) + ($chocolate_kaju_mix_cookies*300) + ($swar_namkeen*200) + ($butter_namkeen*200) + ($chocolate_chip_cookies*200) + ($cherry_flower_cookies*200) + ($flower_namkeen*200) +($flower_meetha*200) +($aata_nankhatai*200) +($sewai_nankhatai*160) + ($half_half_cookies*160) + ($sweet_butterfly_cookies*160) + ($badam_nankhatai*300) + ($badam_laccha_cookies*300) + ($pancake*30) + ($slice_cake*20) + ($fruit_cake*50) + ($vanilla_muffins*15) +($chocolate_muffins*15) + ($butter_rusk*30) +($suji_rusk*30) + ($palak_extra*30) + ($cheese_extra*30) +($jeera_extra*30) + ($vanilla_cake*200) + ($strawberry_cake*250) + ($blackcurrent_cake*250) + ($butterscotch_cake*250) + ($pineapple_cake*250) + ($chocolate_cake*300) + ($mix_fruit_cake*300) + ($strips*10) + ($big_balloon*5) + ($crown*25) + ($magic_candle*10) + ($anaar_candle*15) + ($musical_knife*30) + ($snow_white*35) + ($small_birthday_cap*5) + ($medium_birthday_cap*10) + ($large_birthday_cap*25) + ($small_balloon_packet*20) + ($medium_balloon_packet*25) + ($large_balloon_packet*50) + ($small_party_popper*30) + ($medium_party_popper*40) + ($large_party_popper*50) + ($small_lotus_candle*30) + ($large_lotus_candle*50) + ($small_birthday_banner*10) + ($medium_birthday_banner*25) + ($large_birthday_banner*30));
    if($totalamt<"400"){
    $delivery="25";
   
  }
  if($totalamt>"250"){  
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
            <a href="#" class="navbar-brand">FoodZumbo</a>
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

  if($mini_pizza>0)
    echo '<font size=2px>mini pizza</font><hr>' ;
  if($manchurian_roll>0)
    echo '<font size=2px>manchurian roll</font><hr>' ;
  if($veg_hotdog>0)
    echo '<font size=2px>veg hot dog</font><hr>' ;
  if($sweetcorn_pizza_mini>0)
    echo '<font size=2px>sweetcorn pizza mini</font><hr>' ;
  if($manchurian_pizza>0)
    echo '<font size=2px>manchurian pizza</font><hr>' ;
  if($burger>0)
    echo '<font size=2px>burger</font><hr>' ;
  if($mushroom_pizza>0)
    echo '<font size=2px>mushroom pizza</font><hr>' ;
  if($spring_roll>0)
    echo '<font size=2px>spring roll</font><hr>' ;
  if($donnut>0)
    echo '<font size=2px>donnut</font><hr>' ;
  if($donnut_strawberry>0)
    echo '<font size=2px>donnut strawberry</font><hr>' ;
  if($dhokla>0)
    echo '<font size=2px>dhokla</font><hr>' ;
  if($veg_sandwich>0)
    echo '<font size=2px>veg sandwich</font><hr>' ; 
  if($cream_roll>0)
    echo '<font size=2px>cream roll</font><hr>' ;
  if($sweetpuff>0)
    echo '<font size=2px>sweetpuff</font><hr>' ;
  if($cream_roll_strawberry_chocolate>0)
    echo '<font size=2px>cream roll (strawberry+chocolate)</font><hr>' ;
  if($cream_bun>0)
    echo '<font size=2px>cream bun</font><hr>' ;
  if($sweet_patties>0)
    echo '<font size=2px>sweet patties</font><hr>' ;
  if($sweet_bun>0)
    echo '<font size=2px>sweet bun</font><hr>' ;
  if($paneer_patties>0)
    echo '<font size=2px>paneer patties</font><hr>' ;
  if($aloo_patties>0)
    echo '<font size=2px>aloo patties</font><hr>' ; 
  if($mix_veg_patties>0)
    echo '<font size=2px>mix veg patties</font><hr>' ;
  if($jam_cookies>0)
    echo '<font size=2px>jam cookies</font><hr>' ;
  if($pineapple_cream_cookies>0)
    echo '<font size=2px>pineapple cream cookies</font><hr>' ;
  if($chocolate_cream_cookies>0)
    echo '<font size=2px>chocolate cream cookies</font><hr>' ;
  if($fruit_cake_cookies>0)
    echo '<font size=2px>fruit cake cookies</font><hr>' ;
  if($sweet_heart_cookies>0)
    echo '<font size=2px>sweet heart cookies</font><hr>' ;  
  if($laccha_peanut_cookies>0)
    echo '<font size=2px>laccha peanut cookies</font><hr>' ;
  if($laccha_coconut_cookies>0)
    echo '<font size=2px>laccha coconut cookies</font><hr>' ; 
  if($laccha_chocolate_cookies>0)
    echo '<font size=2px>laccha chocolate cookies</font><hr>' ;
  if($milkmaid_coconut_cookies>0)
    echo '<font size=2px>milkmaid coconut cookies</font><hr>' ;
  if($pizza_cookies>0)
    echo '<font size=2px>pizza cookies</font><hr>' ;
  if($pista_badam_cookies>0)
    echo '<font size=2px>pista badam cookies</font><hr>' ;
  if($full_chocolate_badam_cookies>0)
    echo '<font size=2px>full chocolate badam cookies</font><hr>' ;
  if($kaju_makhan_cookies>0)
    echo '<font size=2px>kaju makhan cookies</font><hr>' ;
  if($aata_nankhatai>0)
    echo '<font size=2px>aata nankhatai</font><hr>' ;
  if($besan_nankhatai>0)
    echo '<font size=2px>besan nankhatai</font><hr>' ;
  if($white_nankhatai>0)
    echo '<font size=2px>white nankhatai</font><hr>' ;
  if($chocolate_kaju_mix_cookies>0)
    echo '<font size=2px>chocolate kaju mix cookies</font><hr>' ;
  if($swar_namkeen>0)
    echo '<font size=2px>swar namkeen</font><hr>' ;
  if($butter_namkeen>0)
    echo '<font size=2px>butter namkeen</font><hr>' ;
  if($chocolate_chip_cookies>0)
    echo '<font size=2px>chocolate chip cookies</font><hr>' ;
  if($cherry_flower_cookies>0)
    echo '<font size=2px>cherry flower cookies</font><hr>' ;
  if($flower_namkeen>0)
    echo '<font size=2px>flower namkeen</font><hr>' ;
  if($flower_meetha>0)
    echo '<font size=2px>flower meetha</font><hr>' ;
  if($sewai_nankhatai>0)
    echo '<font size=2px>sewai nankhatai</font><hr>' ;
  if($half_half_cookies>0)
    echo '<font size=2px>half half cookies</font><hr>' ;
  if($sweet_butterfly_cookies>0)
    echo '<font size=2px>sweet butterfly cookies</font><hr>' ;
  if($badam_nankhatai>0)
    echo '<font size=2px>badam nankhatai</font><hr>' ;
  if($badam_laccha_cookies>0)
    echo '<font size=2px>badam laccha cookies</font><hr>' ;
  if($vanilla_cake>0)
    echo '<font size=2px>vanilla cake</font><hr>' ;  
  if($strawberry_cake>0)
    echo '<font size=2px>strawberry cake</font><hr>' ;
  if($blackcurrent_cake>0)
    echo '<font size=2px>blackcurrent cake</font><hr>' ;  
  if($butterscotch_cake>0)
    echo '<font size=2px>butterscotch cake</font><hr>' ;
  if($pineapple_cake>0)
    echo '<font size=2px>pineapple cake </font><hr>' ;
  if($chocolate_cake>0)
    echo '<font size=2px>chocolate cake</font><hr>' ;
  if($mix_fruit_cake>0)
    echo '<font size=2px>mix fruit cake</font><hr>' ;
  if($strips>0)
    echo '<font size=2px>strips</font><hr>' ;
  if($big_balloon>0)
    echo '<font size=2px>big balloon</font><hr>' ;
  if($crown>0)
    echo '<font size=2px>crown</font><hr>' ;
  if($magic_candle>0)
    echo '<font size=2px>magic candle</font><hr>' ;
  if($anaar_candle>0)
    echo '<font size=2px>anaar candle</font><hr>' ;    
  if($musical_knife>0)
    echo '<font size=2px>musical knife</font><hr>' ;
  if($snow_white>0)
    echo '<font size=2px>snow white</font><hr>' ;  
  if($small_birthday_cap>0)
    echo '<font size=2px>small birthday cap</font><hr>' ;          
  if($medium_birthday_cap>0)
    echo '<font size=2px>medium birthday cap</font><hr>' ;          
  if($large_birthday_cap>0)
    echo '<font size=2px>large birthday cap</font><hr>' ;          
  if($small_balloon_packet>0)
    echo '<font size=2px>small balloon packet</font><hr>' ;          
  if($medium_balloon_packet>0)
    echo '<font size=2px>medium balloon packet</font><hr>' ;
  if($large_balloon_packet>0)
    echo '<font size=2px>large balloon packet</font><hr>' ;
  if($small_party_popper>0)
    echo '<font size=2px>small party popper</font><hr>' ;
  if($medium_party_popper>0)
    echo '<font size=2px>medium party popper</font><hr>' ;
  if($large_party_popper>0)
    echo '<font size=2px>large party popper</font><hr>' ;
  if($small_lotus_candle>0)
    echo '<font size=2px>small lotus candle</font><hr>' ;  
  if($large_lotus_candle>0)
    echo '<font size=2px>large lotus candle</font><hr>' ;
  if($small_birthday_banner>0)
    echo '<font size=2px>small birthday banner</font><hr>' ;
  if($medium_birthday_banner>0)
    echo '<font size=2px>medium birthday banner</font><hr>' ;
  if($large_birthday_banner>0)
    echo '<font size=2px>large birthday banner</font><hr>' ;
  if($jeera_extra>0)
    echo '<font size=2px>Jeera Extra</font><hr>' ;
  if($vanilla_pastry>0)
    echo '<font size=2px>Vanilla Pastry</font><hr>' ;
  if($pineapple_juicy_pastry>0)
    echo '<font size=2px>Pineapple Juicy Pastry</font><hr>' ;
  if($black_current_pastry>0)
    echo '<font size=2px>Black Current Pastry</font><hr>' ;
  if($butter_scotch_pastry>0)
    echo '<font size=2px>Butter Scotch Pastry</font><hr>' ;
  if($lemon_pastry>0)
    echo '<font size=2px>Lemon Pastry</font><hr>' ;
  if($chocolate_pastry>0)
    echo '<font size=2px>Chocolate Pastry</font><hr>' ;
  if($rumwall_pastry>0)
    echo '<font size=2px>Rumwall Pastry</font><hr>' ;
  if($chocolate_chip_pastry>0)
    echo '<font size=2px>Chocolate Chip Pastry</font><hr>' ;
  if($fruit_n_nut_pastry>0)
    echo '<font size=2px>Fruit n nut Pastry</font><hr>' ;
  if($pineapple_kela_pastry>0)
    echo '<font size=2px>Pineapple Kela Pastry</font><hr>' ;
  if($milk_and_milk_pastry>0)
    echo '<font size=2px>Milk and Milk Pastry</font><hr>' ;
  if($strawberry_pastry>0)
    echo '<font size=2px>Strawberry Pastry</font><hr>' ;
  if($dark_fantasy_pastry>0)
    echo '<font size=2px>Dark Fantasy Pastry</font><hr>' ;
  if($mix_fruit_pudding>0)
    echo '<font size=2px>mix fruit pudding</font><hr>' ;
  if($pineapple_katori>0)
    echo '<font size=2px>pineapple katori</font><hr>' ;
  if($butter_scotch_katori>0)
    echo '<font size=2px>butter scotch katori</font><hr>' ;
  if($mango_mousse>0)
    echo '<font size=2px>mango mousse</font><hr>' ;
  if($strawberry_mousse>0)
    echo '<font size=2px>strawberry mousse</font><hr>' ;
  if($chocolate_katori>0)
    echo '<font size=2px>Chocolate katori</font><hr>' ;
  if($pancake>0)
    echo '<font size=2px>Pancake</font><hr>' ;
  if($slice_cake>0)
    echo '<font size=2px>Slice Cake</font><hr>' ;
  if($fruit_cake>0)
    echo '<font size=2px>Fruit Cake</font><hr>' ;
  if($vanilla_muffins>0)
    echo '<font size=2px>Vanilla Muffins</font><hr>' ;
  if($chocolate_muffins>0)
    echo '<font size=2px>Chocolate Muffins</font><hr>' ;
  if($butter_rusk>0)
    echo '<font size=2px>Butter Rusk</font><hr>' ;
  if($suji_rusk>0)
    echo '<font size=2px>Suji Rusk</font><hr>' ;
  if($palak_extra>0)
    echo '<font size=2px>Palak Extra</font><hr>' ;
  if($cheese_extra>0)
    echo '<font size=2px>Cheese Extra</font><hr>' ;
    echo '<font size=  2px>Discount</font><hr> ' ;
   if($delivery>"0")
    echo '<font size=  2px>Delivery</font><hr> ' ;
  
  ?>
    </td>
    <td>
        <?php

  if($mini_pizza>0)
    echo '<font size=2px>'.$mini_pizza.'</font><hr>' ;
  if($manchurian_roll>0)
    echo '<font size=2px>'.$manchurian_roll.'</font><hr>' ;
  if($veg_hotdog>0)
    echo '<font size=2px>'.$veg_hotdog.'</font><hr>' ;
  if($sweetcorn_pizza_mini>0)
    echo '<font size=2px>'.$sweetcorn_pizza_mini.'</font><hr>' ;
  if($manchurian_pizza>0)
    echo '<font size=2px>'.$manchurian_pizza.'</font><hr>' ;
  if($burger>0)
    echo '<font size=2px>'.$burger.'</font><hr>' ;
  if($mushroom_pizza>0)
    echo '<font size=2px>'.$mushroom_pizza.'</font><hr>' ;
  if($spring_roll>0)
    echo '<font size=2px>'.$spring_roll.'</font><hr>' ;
  if($donnut>0)
    echo '<font size=2px>'.$donnut.'</font><hr>' ;
  if($donnut_strawberry>0)
    echo '<font size=2px>'.$donnut_strawberry.'</font><hr>' ;
  if($dhokla>0)
    echo '<font size=2px>'.$dhokla.'</font><hr>' ;
  if($veg_sandwich>0)
    echo '<font size=2px>'.$veg_sandwich.'</font><hr>' ; 
  if($cream_roll>0)
    echo '<font size=2px>'.$cream_roll.'</font><hr>' ;
  if($sweetpuff>0)
    echo '<font size=2px>'.$sweetpuff.'</font><hr>' ;
  if($cream_roll_strawberry_chocolate>0)
    echo '<font size=2px>'.$cream_roll_strawberry_chocolate.'</font><hr>' ;
  if($cream_bun>0)
    echo '<font size=2px>'.$cream_bun.'</font><hr>' ;
  if($sweet_patties>0)
    echo '<font size=2px>'.$sweet_patties.'</font><hr>' ;
  if($sweet_bun>0)
    echo '<font size=2px>'.$sweet_bun.'</font><hr>' ;
  if($paneer_patties>0)
    echo '<font size=2px>'.$paneer_patties.'</font><hr>' ;
  if($aloo_patties>0)
    echo '<font size=2px>'.$aloo_patties.'</font><hr>' ; 
  if($mix_veg_patties>0)
    echo '<font size=2px>'.$mix_veg_patties.'</font><hr>' ;
  if($jam_cookies>0)
    echo '<font size=2px>'.$jam_cookies.'</font><hr>' ;
  if($pineapple_cream_cookies>0)
    echo '<font size=2px>'.$pineapple_cream_cookies.'</font><hr>' ;
  if($chocolate_cream_cookies>0)
    echo '<font size=2px>'.$chocolate_cream_cookies.'</font><hr>' ;
  if($fruit_cake_cookies>0)
    echo '<font size=2px>'.$fruit_cake_cookies.'</font><hr>' ;
  if($sweet_heart_cookies>0)
    echo '<font size=2px>'.$sweet_heart_cookies.'</font><hr>' ;  
  if($laccha_peanut_cookies>0)
    echo '<font size=2px>'.$laccha_peanut_cookies.'</font><hr>' ;
  if($laccha_coconut_cookies>0)
    echo '<font size=2px>'.$laccha_coconut_cookies.'</font><hr>' ; 
  if($laccha_chocolate_cookies>0)
    echo '<font size=2px>'.$laccha_chocolate_cookies.'</font><hr>' ;
  if($milkmaid_coconut_cookies>0)
    echo '<font size=2px>'.$milkmaid_coconut_cookies.'</font><hr>' ;
  if($pizza_cookies>0)
    echo '<font size=2px>'.$pizza_cookies.'</font><hr>' ;
  if($pista_badam_cookies>0)
    echo '<font size=2px>'.$pista_badam_cookies.'</font><hr>' ;
  if($full_chocolate_badam_cookies>0)
    echo '<font size=2px>'.$full_chocolate_badam_cookies.'</font><hr>' ;
  if($kaju_makhan_cookies>0)
    echo '<font size=2px>'.$kaju_makhan_cookies.'</font><hr>' ;
  if($aata_nankhatai>0)
    echo '<font size=2px>'.$aata_nankhatai.'</font><hr>' ;
  if($besan_nankhatai>0)
    echo '<font size=2px>'.$besan_nankhatai.'</font><hr>' ;
  if($white_nankhatai>0)
    echo '<font size=2px>'.$white_nankhatai.'</font><hr>' ;
  if($chocolate_kaju_mix_cookies>0)
    echo '<font size=2px>'.$chocolate_kaju_mix_cookies.'</font><hr>' ;
  if($swar_namkeen>0)
    echo '<font size=2px>'.$swar_namkeen.'</font><hr>' ;
  if($butter_namkeen>0)
    echo '<font size=2px>'.$butter_namkeen.'</font><hr>' ;
  if($chocolate_chip_cookies>0)
    echo '<font size=2px>'.$chocolate_chip_cookies.'</font><hr>' ;
  if($cherry_flower_cookies>0)
    echo '<font size=2px>'.$cherry_flower_cookies.'</font><hr>' ;
  if($flower_namkeen>0)
    echo '<font size=2px>'.$flower_namkeen.'</font><hr>' ;
  if($flower_meetha>0)
    echo '<font size=2px>'.$flower_meetha.'</font><hr>' ;
  if($sewai_nankhatai>0)
    echo '<font size=2px>'.$sewai_nankhatai.'</font><hr>' ;
  if($half_half_cookies>0)
    echo '<font size=2px>'.$half_half_cookies.'</font><hr>' ;
  if($sweet_butterfly_cookies>0)
    echo '<font size=2px>'.$sweet_butterfly_cookies.'</font><hr>' ;
  if($badam_nankhatai>0)
    echo '<font size=2px>'.$badam_nankhatai.'</font><hr>' ;
  if($badam_laccha_cookies>0)
    echo '<font size=2px>'.$badam_laccha_cookies.'</font><hr>' ;
  if($vanilla_cake>0)
    echo '<font size=2px>'.$vanilla_cake.'</font><hr>' ;  
  if($strawberry_cake>0)
    echo '<font size=2px>'.$strawberry_cake.'</font><hr>' ;
  if($blackcurrent_cake>0)
    echo '<font size=2px>'.$blackcurrent_cake.'</font><hr>' ;  
  if($butterscotch_cake>0)
    echo '<font size=2px>'.$butterscotch_cake.'</font><hr>' ;
  if($pineapple_cake>0)
    echo '<font size=2px>'.$pineapple_cake.'</font><hr>' ;
  if($chocolate_cake>0)
    echo '<font size=2px>'.$chocolate_cake.'</font><hr>' ;
  if($mix_fruit_cake>0)
    echo '<font size=2px>'.$mix_fruit_cake.'</font><hr>' ;
  if($strips>0)
    echo '<font size=2px>'.$strips.'</font><hr>' ;
  if($big_balloon>0)
    echo '<font size=2px>'.$big_balloon.'</font><hr>' ;
  if($crown>0)
    echo '<font size=2px>'.$crown.'</font><hr>' ;
  if($magic_candle>0)
    echo '<font size=2px>'.$magic_candle.'</font><hr>' ;
  if($anaar_candle>0)
    echo '<font size=2px>'.$anaar_candle.'</font><hr>' ;    
  if($musical_knife>0)
    echo '<font size=2px>'.$musical_knife.'</font><hr>' ;
  if($snow_white>0)
    echo '<font size=2px>'.$snow_white.'</font><hr>' ;  
  if($small_birthday_cap>0)
    echo '<font size=2px>'.$small_birthday_cap.'</font><hr>' ;          
  if($medium_birthday_cap>0)
    echo '<font size=2px>'.$medium_birthday_cap.'</font><hr>' ;          
  if($large_birthday_cap>0)
    echo '<font size=2px>'.$large_birthday_cap.'</font><hr>' ;          
  if($small_balloon_packet>0)
    echo '<font size=2px>'.$small_balloon_packet.'</font><hr>' ;          
  if($medium_balloon_packet>0)
    echo '<font size=2px>'.$medium_balloon_packet.'</font><hr>' ;
  if($large_balloon_packet>0)
    echo '<font size=2px>'.$large_balloon_packet.'</font><hr>' ;
  if($small_party_popper>0)
    echo '<font size=2px>'.$small_party_popper.'</font><hr>' ;
  if($medium_party_popper>0)
    echo '<font size=2px>'.$medium_party_popper.'</font><hr>' ;
  if($large_party_popper>0)
    echo '<font size=2px>'.$large_party_popper.'</font><hr>' ;
  if($small_lotus_candle>0)
    echo '<font size=2px>'.$small_lotus_candle.'</font><hr>' ;  
  if($large_lotus_candle>0)
    echo '<font size=2px>'.$large_lotus_candle.'</font><hr>' ;
  if($small_birthday_banner>0)
    echo '<font size=2px>'.$small_birthday_banner.'</font><hr>' ;
  if($medium_birthday_banner>0)
    echo '<font size=2px>'.$medium_birthday_banner.'</font><hr>' ;
  if($large_birthday_banner>0)
    echo '<font size=2px>'.$large_birthday_banner.'</font><hr>' ;
  if($jeera_extra>0)
    echo '<font size=2px>'.$jeera_extra.'</font><hr>' ;
  if($vanilla_pastry>0)
    echo '<font size=2px>'.$vanilla_pastry.'</font><hr>' ;
  if($pineapple_juicy_pastry>0)
    echo '<font size=2px>'.$pineapple_juicy_pastry.'</font><hr>' ;
  if($black_current_pastry>0)
    echo '<font size=2px>'.$black_current_pastry.'</font><hr>' ;
  if($butter_scotch_pastry>0)
    echo '<font size=2px>'.$butter_scotch_pastry.'</font><hr>' ;
  if($lemon_pastry>0)
    echo '<font size=2px>'.$lemon_pastry.'</font><hr>' ;
  if($chocolate_pastry>0)
    echo '<font size=2px>'.$chocolate_pastry.'</font><hr>' ;
  if($rumwall_pastry>0)
    echo '<font size=2px>'.$rumwall_pastry.'</font><hr>' ;
  if($chocolate_chip_pastry>0)
    echo '<font size=2px>'.$chocolate_chip_pastry.'</font><hr>' ;
  if($fruit_n_nut_pastry>0)
    echo '<font size=2px>'.$fruit_n_nut_pastry.'</font><hr>' ;
  if($pineapple_kela_pastry>0)
    echo '<font size=2px>'.$pineapple_kela_pastry.'</font><hr>' ;
  if($milk_and_milk_pastry>0)
    echo '<font size=2px>'.$milk_and_milk_pastry.'</font><hr>' ;
  if($strawberry_pastry>0)
    echo '<font size=2px>'.$strawberry_pastry.'</font><hr>' ;
  if($dark_fantasy_pastry>0)
    echo '<font size=2px>'.$dark_fantasy_pastry.'</font><hr>' ;
  if($mix_fruit_pudding>0)
    echo '<font size=2px>'.$mix_fruit_pudding.'</font><hr>' ;
  if($pineapple_katori>0)
    echo '<font size=2px>'.$pineapple_katori.'</font><hr>' ;
  if($butter_scotch_katori>0)
    echo '<font size=2px>'.$butter_scotch_katori.'</font><hr>' ;
  if($mango_mousse>0)
    echo '<font size=2px>'.$mango_mousse.'</font><hr>' ;
  if($strawberry_mousse>0)
    echo '<font size=2px>'.$strawberry_mousse.'</font><hr>' ;
  if($chocolate_katori>0)
    echo '<font size=2px>'.$chocolate_katori.'</font><hr>' ;
  if($pancake>0)
    echo '<font size=2px>'.$pancake.'</font><hr>' ;
  if($slice_cake>0)
    echo '<font size=2px>'.$slice_cake.'</font><hr>' ;
  if($fruit_cake>0)
    echo '<font size=2px>'.$fruit_cake.'</font><hr>' ;
  if($vanilla_muffins>0)
    echo '<font size=2px>'.$vanilla_muffins.'</font><hr>' ;
  if($chocolate_muffins>0)
    echo '<font size=2px>'.$chocolate_muffins.'</font><hr>' ;
  if($butter_rusk>0)
    echo '<font size=2px>'.$butter_rusk.'</font><hr>' ;
  if($suji_rusk>0)
    echo '<font size=2px>'.$suji_rusk.'</font><hr>' ;
  if($palak_extra>0)
    echo '<font size=2px>'.$palak_extra.'</font><hr>' ;
  if($cheese_extra>0)
    echo '<font size=2px>'.$Cheese_extra.'</font><hr>' ;
    echo '<font size=  2px>5%</font><hr> ' ;
   if($delivery>"0")
    echo '<font size=  2px>'.'&nbsp;'.'</font><hr>' ;
  ?>
    </td>
    <td>
        <?php

  if($mini_pizza>0)
    echo '<font size=2px>'.($mini_pizza*25).'</font><hr>' ;
  if($manchurian_roll>0)
    echo '<font size=2px>'.($manchurian_roll*25).'</font><hr>' ;
  if($veg_hotdog>0)
    echo '<font size=2px>'.($veg_hotdog*25).'</font><hr>' ;
  if($sweetcorn_pizza_mini>0)
    echo '<font size=2px>'.($sweetcorn_pizza_mini*35).'</font><hr>' ;
  if($manchurian_pizza>0)
    echo '<font size=2px>'.($manchurian_pizza*45).'</font><hr>' ;
  if($burger>0)
    echo '<font size=2px>'.($burger*30).'</font><hr>' ;
  if($mushroom_pizza>0)
    echo '<font size=2px>'.($mushroom_pizza*40).'</font><hr>' ;
  if($spring_roll>0)
    echo '<font size=2px>'.($spring_roll*30).'</font><hr>' ;
  if($donnut>0)
    echo '<font size=2px>'.($donnut*25).'</font><hr>' ;
  if($donnut_strawberry>0)
    echo '<font size=2px>'.($donnut_strawberry*25).'</font><hr>' ;
  if($dhokla>0)
    echo '<font size=2px>'.($dhokla*40).'</font><hr>' ;
  if($veg_sandwich>0)
    echo '<font size=2px>'.($veg_sandwich*20).'</font><hr>' ; 
  if($cream_roll>0)
    echo '<font size=2px>'.($cream_roll*8).'</font><hr>' ;
  if($sweetpuff>0)
    echo '<font size=2px>'.($sweetpuff*10).'</font><hr>' ;
  if($cream_roll_strawberry_chocolate>0)
    echo '<font size=2px>'.($cream_roll_strawberry_chocolate*10).'</font><hr>' ;
  if($cream_bun>0)
    echo '<font size=2px>'.($cream_bun*6).'</font><hr>' ;
  if($sweet_patties>0)
    echo '<font size=2px>'.($sweet_patties*8).'</font><hr>' ;
  if($sweet_bun>0)
    echo '<font size=2px>'.($sweet_bun*6).'</font><hr>' ;
  if($paneer_patties>0)
    echo '<font size=2px>'.($paneer_patties*15).'</font><hr>' ;
  if($aloo_patties>0)
    echo '<font size=2px>'.($aloo_patties*7).'</font><hr>' ; 
  if($mix_veg_patties>0)
    echo '<font size=2px>'.($mix_veg_patties*12).'</font><hr>' ;
  if($jam_cookies>0)
    echo '<font size=2px>'.($jam_cookies*300).'</font><hr>' ;
  if($pineapple_cream_cookies>0)
    echo '<font size=2px>'.($pineapple_cream_cookies*260).'</font><hr>' ;
  if($chocolate_cream_cookies>0)
    echo '<font size=2px>'.($chocolate_cream_cookies*260).'</font><hr>' ;
  if($fruit_cake_cookies>0)
    echo '<font size=2px>'.($fruit_cake_cookies*200).'</font><hr>' ;
  if($sweet_heart_cookies>0)
    echo '<font size=2px>'.($sweet_heart_cookies*300).'</font><hr>' ;  
  if($laccha_peanut_cookies>0)
    echo '<font size=2px>'.($laccha_peanut_cookies*200).'</font><hr>' ;
  if($laccha_coconut_cookies>0)
    echo '<font size=2px>'.($laccha_coconut_cookies*200).'</font><hr>' ; 
  if($laccha_chocolate_cookies>0)
    echo '<font size=2px>'.($laccha_chocolate_cookies*240).'</font><hr>' ;
  if($milkmaid_coconut_cookies>0)
    echo '<font size=2px>'.($milkmaid_coconut_cookies*300).'</font><hr>' ;
  if($pizza_cookies>0)
    echo '<font size=2px>'.($pizza_cookies*400).'</font><hr>' ;
  if($pista_badam_cookies>0)
    echo '<font size=2px>'.($pista_badam_cookies*400).'</font><hr>' ;
  if($full_chocolate_badam_cookies>0)
    echo '<font size=2px>'.($full_chocolate_badam_cookies*400).'</font><hr>' ;
  if($kaju_makhan_cookies>0)
    echo '<font size=2px>'.($kaju_makhan_cookies*400).'</font><hr>' ;
  if($aata_nankhatai>0)
    echo '<font size=2px>'.($aata_nankhatai*200).'</font><hr>' ;
  if($besan_nankhatai>0)
    echo '<font size=2px>'.($besan_nankhatai*180).'</font><hr>' ;
  if($white_nankhatai>0)
    echo '<font size=2px>'.($white_nankhatai*160).'</font><hr>' ;
  if($chocolate_kaju_mix_cookies>0)
    echo '<font size=2px>'.($chocolate_kaju_mix_cookies*300).'</font><hr>' ;
  if($swar_namkeen>0)
    echo '<font size=2px>'.($swar_namkeen*200).'</font><hr>' ;
  if($butter_namkeen>0)
    echo '<font size=2px>'.($butter_namkeen*200).'</font><hr>' ;
  if($chocolate_chip_cookies>0)
    echo '<font size=2px>'.($chocolate_chip_cookies*200).'</font><hr>' ;
  if($cherry_flower_cookies>0)
    echo '<font size=2px>'.($cherry_flower_cookies*200).'</font><hr>' ;
  if($flower_namkeen>0)
    echo '<font size=2px>'.($flower_namkeen*200).'</font><hr>' ;
  if($flower_meetha>0)
    echo '<font size=2px>'.($flower_meetha*200).'</font><hr>' ;
  if($sewai_nankhatai>0)
    echo '<font size=2px>'.($sewai_nankhatai*160).'</font><hr>' ;
  if($half_half_cookies>0)
    echo '<font size=2px>'.($half_half_cookies*160).'</font><hr>' ;
  if($sweet_butterfly_cookies>0)
    echo '<font size=2px>'.($sweet_butterfly_cookies*160).'</font><hr>' ;
  if($badam_nankhatai>0)
    echo '<font size=2px>'.($badam_nankhatai*300).'</font><hr>' ;
  if($badam_laccha_cookies>0)
    echo '<font size=2px>'.($badam_laccha_cookies*300).'</font><hr>' ;
  if($vanilla_cake>0)
    echo '<font size=2px>'.($vanilla_cake*200).'</font><hr>' ;  
  if($strawberry_cake>0)
    echo '<font size=2px>'.($strawberry_cake*250).'</font><hr>' ;
  if($blackcurrent_cake>0)
    echo '<font size=2px>'.($blackcurrent_cake*250).'</font><hr>' ;  
  if($butterscotch_cake>0)
    echo '<font size=2px>'.($butterscotch_cake*250).'</font><hr>' ;
  if($pineapple_cake>0)
    echo '<font size=2px>'.($pineapple_cake*250).'</font><hr>' ;
  if($chocolate_cake>0)
    echo '<font size=2px>'.($chocolate_cake*300).'</font><hr>' ;
  if($mix_fruit_cake>0)
    echo '<font size=2px>'.($mix_fruit_cake*300).'</font><hr>' ;
  if($strips>0)
    echo '<font size=2px>'.($strips*10).'</font><hr>' ;
  if($big_balloon>0)
    echo '<font size=2px>'.($big_balloon*5).'</font><hr>' ;
  if($crown>0)
    echo '<font size=2px>'.($crown*25).'</font><hr>' ;
  if($magic_candle>0)
    echo '<font size=2px>'.($magic_candle*10).'</font><hr>' ;
  if($anaar_candle>0)
    echo '<font size=2px>'.($anaar_candle*15).'</font><hr>' ;    
  if($musical_knife>0)
    echo '<font size=2px>'.($musical_knife*30).'</font><hr>' ;
  if($snow_white>0)
    echo '<font size=2px>'.($snow_white*35).'</font><hr>' ;  
  if($small_birthday_cap>0)
    echo '<font size=2px>'.($small_birthday_cap*5).'</font><hr>' ;          
  if($medium_birthday_cap>0)
    echo '<font size=2px>'.($medium_birthday_cap*10).'</font><hr>' ;          
  if($large_birthday_cap>0)
    echo '<font size=2px>'.($large_birthday_cap*25).'</font><hr>' ;          
  if($small_balloon_packet>0)
    echo '<font size=2px>'.($small_balloon_packet*20).'</font><hr>' ;          
  if($medium_balloon_packet>0)
    echo '<font size=2px>'.($medium_balloon_packet*25).'</font><hr>' ;
  if($large_balloon_packet>0)
    echo '<font size=2px>'.($large_balloon_packet*50).'</font><hr>' ;
  if($small_party_popper>0)
    echo '<font size=2px>'.($small_party_popper*30).'</font><hr>' ;
  if($medium_party_popper>0)
    echo '<font size=2px>'.($medium_party_popper*40).'</font><hr>' ;
  if($large_party_popper>0)
    echo '<font size=2px>'.($large_party_popper*50).'</font><hr>' ;
  if($small_lotus_candle>0)
    echo '<font size=2px>'.($small_lotus_candle*30).'</font><hr>' ;  
  if($large_lotus_candle>0)
    echo '<font size=2px>'.($large_lotus_candle*50).'</font><hr>' ;
  if($small_birthday_banner>0)
    echo '<font size=2px>'.($small_birthday_banner*10).'</font><hr>' ;
  if($medium_birthday_banner>0)
    echo '<font size=2px>'.($medium_birthday_banner*25).'</font><hr>' ;
  if($large_birthday_banner>0)
    echo '<font size=2px>'.($large_birthday_banner*30).'</font><hr>' ;
  if($jeera_extra>0)
    echo '<font size=2px>'.($jeera_extra*30).'</font><hr>' ;
  if($vanilla_pastry>0)
    echo '<font size=2px>'.($vanilla_pastry*20).'</font><hr>' ;
  if($pineapple_juicy_pastry>0)
    echo '<font size=2px>'.($pineapple_juicy_pastry*30).'</font><hr>' ;
  if($black_current_pastry>0)
    echo '<font size=2px>'.($black_current_pastry*20).'</font><hr>' ;
  if($butter_scotch_pastry>0)
    echo '<font size=2px>'.($butter_scotch_pastry*30).'</font><hr>' ;
  if($lemon_pastry>0)
    echo '<font size=2px>'.($lemon_pastry*20).'</font><hr>' ;
  if($chocolate_pastry>0)
    echo '<font size=2px>'.($chocolate_pastry*35).'</font><hr>' ;
  if($rumwall_pastry>0)
    echo '<font size=2px>'.($rumwall_pastry*20).'</font><hr>' ;
  if($chocolate_chip_pastry>0)
    echo '<font size=2px>'.($chocolate_chip_pastry*40).'</font><hr>' ;
  if($fruit_n_nut_pastry>0)
    echo '<font size=2px>'.($fruit_n_nut_pastry*50).'</font><hr>' ;
  if($pineapple_kela_pastry>0)
    echo '<font size=2px>'.($pineapple_kela_pastry*35).'</font><hr>' ;
  if($milk_and_milk_pastry>0)
    echo '<font size=2px>'.($milk_and_milk_pastry*40).'</font><hr>' ;
  if($strawberry_pastry>0)
    echo '<font size=2px>'.($strawberry_pastry*20).'</font><hr>' ;
  if($dark_fantasy_pastry>0)
    echo '<font size=2px>'.($dark_fantasy_pastry*35).'</font><hr>' ;
  if($mix_fruit_pudding>0)
    echo '<font size=2px>'.($mix_fruit_pudding*40).'</font><hr>' ;
  if($pineapple_katori>0)
    echo '<font size=2px>'.($pineapple_katori*30).'</font><hr>' ;
  if($butter_scotch_katori>0)
    echo '<font size=2px>'.($butter_scotch_katori*30).'</font><hr>' ;
  if($mango_mousse>0)
    echo '<font size=2px>'.($mango_mousse*30).'</font><hr>' ;
  if($strawberry_mousse>0)
    echo '<font size=2px>'.($strawberry_mousse*30).'</font><hr>' ;
  if($chocolate_katori>0)
    echo '<font size=2px>'.($chocolate_katori*50).'</font><hr>' ;
  if($pancake>0)
    echo '<font size=2px>'.($pancake*30).'</font><hr>' ;
  if($slice_cake>0)
    echo '<font size=2px>'.($slice_cake*20).'</font><hr>' ;
  if($fruit_cake>0)
    echo '<font size=2px>'.($fruit_cake*50).'</font><hr>' ;
  if($vanilla_muffins>0)
    echo '<font size=2px>'.($vanilla_muffins*15).'</font><hr>' ;
  if($chocolate_muffins>0)
    echo '<font size=2px>'.($chocolate_muffins*15).'</font><hr>' ;
  if($butter_rusk>0)
    echo '<font size=2px>'.($butter_rusk*30).'</font><hr>' ;
  if($suji_rusk>0)
    echo '<font size=2px>'.($suji_rusk*30).'</font><hr>' ;
  if($palak_extra>0)
    echo '<font size=2px>'.($palak_extra*30).'</font><hr>' ;
  if($cheese_extra>0)
    echo '<font size=2px>'.($Cheese_extra*30).'</font><hr>' ;
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
                            <form role="form" action="sendmail1.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name" name="name"required/><br>
                                    <input type="textarea" class="form-control" placeholder="Address" id="address" name="address" required/><br>
                                    <input type="number" class="form-control" placeholder="Mobile number" id="number" name="number" required/><br>
                                    <input type="email" class="form-control" placeholder="email id" id="email" name="user_mail" required/><br>
                                    <input type="hidden" id="amount" name="amount" value="<?php echo $totalamt; ?>"/>
                                    <input type="hidden" id="restaurant" name="restaurant" value="Gupta Bakers"/>
                                    <input type="hidden" id="items" name="email" value="<?php 
                                      
  if($mini_pizza>0)
    echo 'mini pizza'.$mini_pizza.'<hr>' ;
  if($manchurian_roll>0)
    echo 'manchurian roll'.$manchurian_roll.'<hr>' ;
  if($veg_hotdog>0)
    echo 'veg_hotdog'.$veg_hotdog.'<hr>' ;
  if($sweetcorn_pizza_mini>0)
    echo 'sweetcorn_pizza_mini'.$sweetcorn_pizza_mini.'<hr>' ;
  if($manchurian_pizza>0)
    echo 'manchurain pizza'.$manchurian_pizza.'<hr>' ;
  if($burger>0)
    echo 'burger'.$burger.'<hr>' ;
  if($mushroom_pizza>0)
    echo 'mushroom pizza'.$mushroom_pizza.'<hr>' ;
  if($spring_roll>0)
    echo 'spring roll'.$spring_roll.'<hr>' ;
  if($donnut>0)
    echo 'donnut'.$donnut.'<hr>' ;
  if($donnut_strawberry>0)
    echo 'donnut strawberry'.$donnut_strawberry.'<hr>' ;
  if($dhokla>0)
    echo 'dhokla'.$dhokla.'<hr>' ;
  if($veg_sandwich>0)
    echo 'veg sandwich'.$veg_sandwich.'<hr>' ; 
  if($cream_roll>0)
    echo 'cream roll'.$cream_roll.'<hr>' ;
  if($sweetpuff>0)
    echo 'sweetpuff'.$sweetpuff.'<hr>' ;
  if($cream_roll_strawberry_chocolate>0)
    echo 'cream roll strawberry chocolate'.$cream_roll_strawberry_chocolate.'<hr>' ;
  if($cream_bun>0)
    echo 'cream bun'.$cream_bun.'<hr>' ;
  if($sweet_patties>0)
    echo 'sweet patties'.$sweet_patties.'<hr>' ;
  if($sweet_bun>0)
    echo 'sweet bun'.$sweet_bun.'<hr>' ;
  if($paneer_patties>0)
    echo 'paneer patties'.$paneer_patties.'<hr>' ;
  if($aloo_patties>0)
    echo 'aloo patties'.$aloo_patties.'<hr>' ; 
  if($mix_veg_patties>0)
    echo 'mix veg patties'.$mix_veg_patties.'<hr>' ;
  if($jam_cookies>0)
    echo 'jam cookies'.$jam_cookies.'<hr>' ;
  if($pineapple_cream_cookies>0)
    echo 'pineapple cream cookies'.$pineapple_cream_cookies.'<hr>' ;
  if($chocolate_cream_cookies>0)
    echo 'chocolate cookies'.$chocolate_cream_cookies.'<hr>' ;
  if($fruit_cake_cookies>0)
    echo 'fruit cake cookies'.$fruit_cake_cookies.'<hr>' ;
  if($sweet_heart_cookies>0)
    echo 'sweet heart cookies'.$sweet_heart_cookies.'<hr>' ;  
  if($laccha_peanut_cookies>0)
    echo 'laccha peanut cookies'.$laccha_peanut_cookies.'<hr>' ;
  if($laccha_coconut_cookies>0)
    echo 'laccha coconut cookies'.$laccha_coconut_cookies.'<hr>' ; 
  if($milkmaid_coconut_cookies>0)
    echo 'milkmaid coconut cookies'.$milkmaid_coconut_cookies.'<hr>' ;
  if($pizza_cookies>0)
    echo 'pizza cookies'.$pizza_cookies.'<hr>' ;
  if($pista_badam_cookies>0)
    echo 'pista badam cookies'.$pista_badam_cookies.'<hr>' ;
  if($full_chocolate_badam_cookies>0)
    echo 'full chocolate badam cookies'.$full_chocolate_badam_cookies.'<hr>' ;
  if($kaju_makhan_cookies>0)
    echo 'kaju makhan cookies'.$kaju_makhan_cookies.'<hr>' ;
  if($aata_nankhatai>0)
    echo 'aata nankhatai'.$aata_nankhatai.'<hr>' ;
  if($besan_nankhatai>0)
    echo 'besan nankhatai'.$besan_nankhatai.'<hr>' ;
  if($white_nankhatai>0)
    echo 'white nankhatai'.$white_nankhatai.'<hr>' ;
  if($chocolate_kaju_mix_cookies>0)
    echo 'chocolate kaju mix cookies'.$chocolate_kaju_mix_cookies.'</font><hr>' ;
  if($swar_namkeen>0)
    echo 'swar namkeen'.$swar_namkeen.'<hr>' ;
  if($butter_namkeen>0)
    echo 'butter namkeen'.$butter_namkeen.'<hr>' ;
  if($chocolate_chip_cookies>0)
    echo 'chocolate chip cookies'.$chocolate_chip_cookies.'<hr>' ;
  if($cherry_flower_cookies>0)
    echo 'cherry flower cookies'.$cherry_flower_cookies.'<hr>' ;
  if($flower_namkeen>0)
    echo 'flower namkeen'.$flower_namkeen.'<hr>' ;
  if($flower_meetha>0)
    echo 'flower meetha'.$flower_meetha.'<hr>' ;
  if($sewai_nankhatai>0)
    echo 'sewai nankhatai'.$sewai_nankhatai.'<hr>' ;
  if($half_half_cookies>0)
    echo 'half half cookies'.$half_half_cookies.'<hr>' ;
  if($sweet_butterfly_cookies>0)
    echo 'sweet butterfly cookies '.$sweet_butterfly_cookies.'<hr>' ;
  if($badam_nankhatai>0)
    echo 'badam nankhatai'.$badam_nankhatai.'<hr>' ;
  if($badam_laccha_cookies>0)
    echo 'badam laccha cookies'.$badam_laccha_cookies.'<hr>' ;
  if($vanilla_cake>0)
    echo 'vanilla cake'.$vanilla_cake.'<hr>' ;  
  if($strawberry_cake>0)
    echo 'strawberry cake'.$strawberry_cake.'<hr>' ;
  if($blackcurrent_cake>0)
    echo 'blackcurrent cake'.$blackcurrent_cake.'<hr>' ;  
  if($butterscotch_cake>0)
    echo 'butterscotch cake'.$butterscotch_cake.'<hr>' ;
  if($pineapple_cake>0)
    echo 'pineapple cake'.$pineapple_cake.'<hr>' ;
  if($chocolate_cake>0)
    echo 'chocolate cake'.$chocolate_cake.'<hr>' ;
  if($mix_fruit_cake>0)
    echo 'mix fruit cake'.$mix_fruit_cake.'<hr>' ;
  if($strips>0)
    echo 'strips'.$strips.'<hr>' ;
  if($big_balloon>0)
    echo 'big balloon'.$big_balloon.'<hr>' ;
  if($crown>0)
    echo 'crown'.$crown.'<hr>' ;
  if($magic_candle>0)
    echo 'magic candle'.$magic_candle.'<hr>' ;
  if($anaar_candle>0)
    echo 'anaar candle'.$anaar_candle.'<hr>' ;    
  if($musical_knife>0)
    echo 'musical knife'.$musical_knife.'<hr>' ;
  if($snow_white>0)
    echo 'snow white'.$snow_white.'<hr>' ;  
  if($small_birthday_cap>0)
    echo 'small birthday cap'.$small_birthday_cap.'<hr>' ;          
  if($medium_birthday_cap>0)
    echo 'medium birthday cap'.$medium_birthday_cap.'<hr>' ;          
  if($large_birthday_cap>0)
    echo 'large birthday cap'.$large_birthday_cap.'<hr>' ;          
  if($small_balloon_packet>0)
    echo 'small balloon packet'.$small_balloon_packet.'<hr>' ;          
  if($medium_balloon_packet>0)
    echo 'medium balloon packet'.$medium_balloon_packet.'<hr>' ;
  if($large_balloon_packet>0)
    echo 'large balloon packet'.$large_balloon_packet.'<hr>' ;
  if($small_party_popper>0)
    echo 'small party popper'.$small_party_popper.'<hr>' ;
  if($medium_party_popper>0)
    echo 'medium party popper'.$medium_party_popper.'<hr>' ;
  if($large_party_popper>0)
    echo 'large party popper'.$large_party_popper.'<hr>' ;
  if($small_lotus_candle>0)
    echo 'small lotus candle'.$small_lotus_candle.'<hr>' ;  
  if($large_lotus_candle>0)
    echo 'large lotus candle'.$large_lotus_candle.'<hr>' ;
  if($small_birthday_banner>0)
    echo'small birthday banner'.$small_birthday_banner.'<hr>' ;
  if($medium_birthday_banner>0)
    echo 'medium birthday banner'.$medium_birthday_banner.'<hr>' ;
  if($large_birthday_banner>0)
    echo 'large birthday banner'.$large_birthday_banner.'</font><hr>' ;
  if($jeera_extra>0)
    echo 'jeera extra'.$jeera_extra.'</font><hr>' ;
  if($vanilla_pastry>0)
    echo 'vanilla Pastry'.$vanilla_pastry.'</font><hr>' ;
  if($pineapple_juicy_pastry>0)
    echo 'pineapple juicy Pastry'.$pineapple_juicy_pastry.'</font><hr>' ;
  if($black_current_pastry>0)
    echo 'black current pastry'.$black_current_pastry.'</font><hr>' ;
  if($butter_scotch_pastry>0)
    echo 'butterscotch pastry'.$butter_scotch_pastry.'</font><hr>' ;
  if($lemon_pastry>0)
    echo 'lemon pastry'.$lemon_pastry.'</font><hr>' ;
  if($chocolate_pastry>0)
    echo 'chocolate pastry'.$chocolate_pastry.'</font><hr>' ;
  if($rumwall_pastry>0)
    echo 'rumwall pastry'.$rumwall_pastry.'</font><hr>' ;
  if($chocolate_chip_pastry>0)
    echo 'chocolate chip pastry'.$chocolate_chip_pastry.'</font><hr>' ;
  if($fruit_n_nut_pastry>0)
    echo 'fruit n nut pastry'.$fruit_n_nut_pastry.'</font><hr>' ;
  if($pineapple_kela_pastry>0)
    echo 'pineapple kela pastry'.$pineapple_kela_pastry.'</font><hr>' ;
  if($milk_and_milk_pastry>0)
    echo 'milk and milk pastry'.$milk_and_milk_pastry.'</font><hr>' ;
  if($strawberry_pastry>0)
    echo 'strawberry pastry'.$strawberry_pastry.'</font><hr>' ;
  if($dark_fantasy_pastry>0)
    echo 'dark fantasy pastry'.$dark_fantasy_pastry.'</font><hr>' ;
  if($mix_fruit_pudding>0)
    echo 'mix fruit pudding'.$mix_fruit_pudding.'</font><hr>' ;
  if($pineapple_katori>0)
    echo 'pineapple katori'.$pineapple_katori.'</font><hr>' ;
  if($butter_scotch_katori>0)
    echo 'butterscotch katori'.$butter_scotch_katori.'</font><hr>' ;
  if($mango_mousse>0)
    echo 'mango mousse'.$mango_mousse.'</font><hr>' ;
  if($strawberry_mousse>0)
    echo 'strawberry mousse'.$strawberry_mousse.'</font><hr>' ;
  if($chocolate_katori>0)
    echo 'chocolate katori'.$chocolate_katori.'</font><hr>' ;
  if($pancake>0)
    echo 'pancake'.$pancake.'</font><hr>' ;
  if($slice_cake>0)
    echo 'slice cake'.$slice_cake.'</font><hr>' ;
  if($fruit_cake>0)
    echo 'fruit cake'.$fruit_cake.'</font><hr>' ;
  if($vanilla_muffins>0)
    echo 'vanilla muffins'.$vanilla_muffins.'</font><hr>' ;
  if($chocolate_muffins>0)
    echo 'chocolate muffins'.$chocolate_muffins.'</font><hr>' ;
  if($butter_rusk>0)
    echo 'butter rusk'.$butter_rusk.'</font><hr>' ;
  if($suji_rusk>0)
    echo 'suji rusk'.$suji_rusk.'</font><hr>' ;
  if($palak_extra>0)
    echo 'palak extra'.$palak_extra.'</font><hr>' ;
  if($cheese_extra>0)
    echo 'cheese extra'.$Cheese_extra.'</font><hr>' ;  
    echo $totalamt ;
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
<h5>Want to <b><a href=gupta.php>Add/Remove</a></b> items</h5>
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
    <title>Order could not be placed</title>
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
                        <h5>Sorry your order couldn't be processed it must be greater than <font color="red">350</font></h5>
                        Click <a href="guptabakery.php">here</a> to go back to Menu page...!!
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