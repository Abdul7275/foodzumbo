<?php
include '../../Core/Functions/general.php';

    $totalqty=0;
  $delivery=0;
  $discount=5;
    $Half_tunday_galawati_kabab = secure($_POST['Half_tunday_galawati_kabab']) ;
    $Full_tunday_galawati_kabab = secure($_POST['Full_tunday_galawati_kabab']) ;
    $Half_shami_kabab = secure($_POST['Half_shami_kabab']) ;
    $Full_shami_kabab = secure($_POST['Full_shami_kabab']) ;
    $Half_mutton_stoo = secure($_POST['Half_mutton_stoo']) ;
    $Full_mutton_stoo = secure($_POST['Full_mutton_stoo']) ;
    $Half_mutton_korma = secure($_POST['Half_mutton_korma']) ;
    $Full_mutton_korma = secure($_POST['Full_mutton_korma']) ;
  $Half_mutton_biryani = secure($_POST['Half_mutton_biryani']) ;
    $Full_mutton_biryani = secure($_POST['Full_mutton_biryani']) ;
    $Half_chicken_biryani = secure($_POST['Half_chicken_biryani']) ;
    $Full_chicken_biryani = secure($_POST['Full_chicken_biryani']) ;
    $Half_rosted_chicken = secure($_POST['Half_rosted_chicken']) ;
    $Full_rosted_chicken = secure($_POST['Full_rosted_chicken']) ;
    $chicken_tangri = secure($_POST['chicken_tangri']) ;
    $chicken_tikka = secure($_POST['chicken_tikka']) ;
    $malai_tikka = secure($_POST['malai_tikka']) ;
    $fish_tikka = secure($_POST['fish_tikka']) ;
    $Half_chicken_kali_mirch = secure($_POST['Half_chicken_kali_mirch']) ;
    $Full_chicken_kali_mirch = secure($_POST['Full_chicken_kali_mirch']) ;
    $Half_butter_chicken = secure($_POST['Half_butter_chicken']) ;
    $Full_butter_chicken = secure($_POST['Full_butter_chicken']) ;
  $quarter_chicken_masala = secure($_POST['quarter_chicken_masala']) ;
    $Half_chicken_masala = secure($_POST['Half_chicken_masala']) ;
    $Full_chicken_masala = secure($_POST['Full_chicken_masala']) ;
    $Half_boti_kabab = secure($_POST['Half_boti_kabab']) ;
    $Full_boti_kabab = secure($_POST['Full_boti_kabab']) ;
    $galawati_roll_2kabab_1paratha = secure($_POST['galawati_roll_2kabab_1paratha']) ;
    $galawati_roll_1kabab_1paratha = secure($_POST['galawati_roll_1kabab_1paratha']) ;
    $shami_kabab_roll_2kabab_1paratha = secure($_POST['shami_kabab_roll_2kabab_1paratha']) ;
    $shami_kabab_roll_1kabab_1paratha = secure($_POST['shami_kabab_roll_1kabab_1paratha']) ;
    $mughlai_paratha = secure($_POST['mughlai_paratha']) ;
    $rumali_roti = secure($_POST['rumali_roti']) ;
    $Half_biryani_rice = secure($_POST['Half_biryani_rice']) ;
    $Full_biryani_rice = secure($_POST['Full_biryani_rice']) ;
    $extra_boti = secure($_POST['extra_boti']) ;
    $Half_gravy = secure($_POST['Half_gravy']) ;
    $extra_raita = secure($_POST['extra_raita']) ;
    $salad = secure($_POST['salad']) ;
    $totalqty=($Half_tunday_galawati_kabab + $Full_tunday_galawati_kabab + $Half_shami_kabab + $Full_shami_kabab + $Half_mutton_stoo + $Full_mutton_stoo + $Half_mutton_korma + $Full_mutton_korma + $Half_mutton_biryani + $Full_mutton_biryani + $Half_chicken_biryani + $Full_chicken_biryani + $Half_rosted_chicken + $Full_rosted_chicken + $chicken_tangri + $chicken_tikka + $malai_tikka + $fish_tikka + $Half_chicken_kali_mirch + $Full_chicken_kali_mirch + $Half_butter_chicken +$Full_butter_chicken + $quarter_chicken_masala + $Half_chicken_masala + $Full_chicken_masala + $Half_boti_kabab + $Full_boti_kabab + $galawati_roll_2kabab_1paratha + $galawati_roll_1kabab_1paratha + $shami_kabab_roll_2kabab_1paratha + $shami_kabab_roll_1kabab_1paratha+ $mughlai_paratha + $rumali_roti + $Half_biryani_rice + $Full_biryani_rice + $extra_boti + $Half_gravy + $extra_raita + $salad); 
    $totalamt=(($Half_tunday_galawati_kabab*50) + ($Full_tunday_galawati_kabab*100) + ($Half_shami_kabab*60) + ($Full_shami_kabab*120) + ($Half_mutton_stoo*150) + ($Half_mutton_stoo*300) + ($Half_mutton_korma*130) + ($Full_mutton_korma*250) + ($Half_mutton_biryani*130) + ($Full_mutton_biryani*250) +($Half_chicken_biryani*110) + ($Full_chicken_biryani*220) + ($Half_rosted_chicken*130) + ($Full_rosted_chicken*250) + ($chicken_tangri*50) + ($chicken_tikka*200) + ($malai_tikka*220) + ($fish_tikka*250) + ($Half_chicken_kali_mirch*200) + ($Full_chicken_kali_mirch*390) + ($Half_butter_chicken*200) + ($Full_butter_chicken*390) + ($quarter_chicken_masala*100) + ($Half_chicken_masala*200) + ($Full_chicken_masala*390) + ($Half_boti_kabab*150) + ($Full_boti_kabab*300) + ($galawati_roll_2kabab_1paratha*65) + ($galawati_roll_1kabab_1paratha*40) + ($shami_kabab_roll_2kabab_1paratha*75) + ($shami_kabab_roll_1kabab_1paratha*45) + ($mughlai_paratha*15) + ($rumali_roti*5) + ($Half_biryani_rice*70) + ($Full_biryani_rice*140) + ($extra_boti*25) + ($Half_gravy*60) + ($extra_raita*5) + ($salad*10)); 

    if($totalamt<"350")
    $delivery="20";

  if($totalamt>"200"){


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
    if($Half_tunday_galawati_kabab >"0")
        echo '<font size=  2px>Tunday Galawati Kabab 2 Pcs.</font><hr>' ;
    if($Full_tunday_galawati_kabab>"0")
        echo '<font size=  2px>Tunday Galawati Kabab 4 Pcs.</font><hr> ' ;
    if($Half_shami_kabab>"0")
        echo '<font size=  2px>Shami Kabab 2 piece</font><hr> ' ;
    if($Full_shami_kabab>"0")
        echo '<font size=  2px>Shami Kabab</font><hr> ' ;
   if($Half_mutton_stoo>"0")
        echo '<font size=  2px>Half Mutton Stoo</font><hr> ' ;
    if($Full_mutton_stoo>"0")
        echo '<font size=  2px>Full Mutton Stoo</font><hr> ' ;
    if($Half_mutton_korma>"0")
        echo '<font size=  2px>Half Mutton Korma</font><hr> ' ;
    if($Full_mutton_korma>"0")
        echo '<font size=  2px>Full Mutton Korma</font><hr> ' ;
    if($Half_mutton_biryani>"0")
        echo '<font size=  2px>Half Mutton Biryani</font><hr> ' ;
    if($Full_mutton_biryani>"0")
        echo '<font size=  2px>Full Mutton Biryani</font><hr> ' ; 
    if($Half_chicken_biryani>"0")
        echo '<font size=  2px>Half Chicken Biryani</font><hr> ' ;
    if($Full_chicken_biryani>"0")
        echo '<font size=  2px>Full Chicken Biryani</font><hr> ' ;
    if($Half_rosted_chicken>"0")
        echo '<font size=  2px>Half Rosted Chicken</font><hr> ' ;
    if($Full_rosted_chicken>"0")
        echo '<font size=  2px>Full Rosted Chicken</font><hr> ' ;
    if($chicken_tangri>"0")
        echo '<font size=  2px>Chicken Tangri</font><hr> ' ;
    if($chicken_tikka>"0")
        echo '<font size=  2px>Chicken Tikka 8 Pcs.</font><hr> ' ;
    if($malai_tikka>"0")
        echo '<font size=  2px>Malai Tikka</font><hr> ' ;
    if($fish_tikka>"0")
        echo '<font size=  2px>Fish Tikka 8 Pcs.</font><hr> ' ; 
    if($Half_chicken_kali_mirch>"0")
        echo '<font size=  2px>Half Chicken Kali Mirch</font><hr> ' ;
    if($Full_chicken_kali_mirch>"0")
        echo '<font size=  2px>Full Chicken Kali Mirch</font><hr> ' ;
   if($Half_butter_chicken>"0")
        echo '<font size=  2px>Half Butter Chicken </font><hr> ' ;
    if($Full_butter_chicken>"0")
        echo '<font size=  2px>Full Butter chicken</font><hr> ' ;   
    if($quarter_chicken_masala>"0")
    echo '<font size=  2px>Qtr. Chicken Masala</font><hr> ' ;
  if($Half_chicken_masala>"0")
        echo '<font size=  2px>Half Chicken Masala</font><hr> ' ;
    if($Full_chicken_masala>"0")
        echo '<font size=  2px>Full Chicken Masala</font><hr> ' ;   
    if($Half_boti_kabab>"0")
        echo '<font size=  2px>Half Boti Kabab</font><hr> ' ;
    if($Full_boti_kabab>"0")
        echo '<font size=  2px>Full Boti Kabab</font><hr> ' ;
    if($galawati_roll_2kabab_1paratha>"0")
        echo '<font size=  2px>Galabati Roll Kabab 2 Kabab</font><hr> ' ;
    if($galawati_roll_1kabab_1paratha>"0")
        echo '<font size=  2px>Galabati Roll Kabab 1 Kabab</font><hr> ' ;
    if($shami_kabab_roll_2kabab_1paratha>"0")
        echo '<font size=  2px>Shami Kabab Roll 2 Kabab</font><hr> ' ;
    if($shami_kabab_roll_1kabab_1paratha>"0")
        echo '<font size=  2px>Shami Kabab Roll 1 Kabab</font><hr> ' ;
    if($mughlai_paratha>"0")
        echo '<font size=  2px>Mughlai Paratha</font><hr> ' ;
    if($rumali_roti>"0")
        echo '<font size=  2px>Rumali Roti</font><hr> ' ;
    if($Half_biryani_rice>"0")
        echo '<font size=  2px>Half Biryani Rice</font><hr> ' ;
    if($Full_biryani_rice>"0")
        echo '<font size=  2px>Full Biryani Rice</font><hr> ' ;
    if($extra_boti>"0")
        echo '<font size=  2px>Extra Boti</font><hr> ' ;
  if($Half_gravy>"0")
    echo '<font size= 2px> Half Gravy</font><hr> ' ;
    if($extra_raita>"0")
        echo '<font size=  2px>Extra Raita</font><hr> ' ;
    if($salad>"0")
        echo '<font size=  2px>Salad</font><hr> ' ;
     echo '<font size=  2px>Discount</font><hr> ' ;
   if($totalamt<'350'){
   echo '<font size=  2px>Delivery</font><hr> ' ;
 }
    
  
        ?>
            </td>
            <td>
                <?php  
  
  if($Half_tunday_galawati_kabab >"0")
    echo '<font size=  2px>'.$Half_tunday_galawati_kabab.'</font><hr>' ;
  if($Full_tunday_galawati_kabab>"0")
    echo '<font size=  2px>'.$Full_tunday_galawati_kabab.'</font><hr> ' ;
  if($Half_shami_kabab>"0")
    echo '<font size=  2px>'.$Half_shami_kabab.'</font><hr> ' ;
  if($Full_shami_kabab>"0")
    echo '<font size=  2px>'.$Full_shami_kabab.'</font><hr> ' ;
   if($Half_mutton_stoo>"0")
    echo '<font size=  2px>'.$Half_mutton_stoo.'</font><hr> ' ;
  if($Full_mutton_stoo>"0")
    echo '<font size=  2px>'.$Full_mutton_stoo.'</font><hr> ' ;
  if($Half_mutton_korma>"0")
    echo '<font size=  2px>'.$Half_mutton_korma.'</font><hr> ' ;
  if($Full_mutton_korma>"0")
    echo '<font size=  2px>'.$Full_mutton_korma.'</font><hr> ' ;
  if($Half_mutton_biryani>"0")
    echo '<font size=  2px>'.$Half_mutton_biryani.'</font><hr> ' ;
  if($Full_mutton_biryani>"0")
    echo '<font size=  2px>'.$Full_mutton_biryani.'</font><hr> ' ; 
  if($Half_chicken_biryani>"0")
    echo '<font size=  2px>'.$Half_chicken_biryani.'</font><hr> ' ;
  if($Full_chicken_biryani>"0")
    echo '<font size=  2px>Full Chicken Biryani</font><hr> ' ;
  if($Half_rosted_chicken>"0")
    echo '<font size=  2px>'.$Full_chicken_biryani.'</font><hr> ' ;
  if($Full_rosted_chicken>"0")
    echo '<font size=  2px>'.$Full_rosted_chicken.'</font><hr> ' ;
  if($chicken_tangri>"0")
    echo '<font size=  2px>'.$chicken_tangri.'</font><hr> ' ;
  if($chicken_tikka>"0")
    echo '<font size=  2px>'.$chicken_tikka.'</font><hr> ' ;
  if($malai_tikka>"0")
    echo '<font size=  2px>'.$malai_tikka.'</font><hr> ' ;
  if($fish_tikka>"0")
    echo '<font size=  2px>'.$fish_tikka.'</font><hr> ' ; 
  if($Half_chicken_kali_mirch>"0")
    echo '<font size=  2px>'.$Half_chicken_kali_mirch.'</font><hr> ' ;
  if($Full_chicken_kali_mirch>"0")
    echo '<font size=  2px>'.$Full_chicken_kali_mirch.'</font><hr> ' ;
   if($Half_butter_chicken>"0")
    echo '<font size=  2px>'.$Half_butter_chicken.'</font><hr> ' ;
  if($Full_butter_chicken>"0")
    echo '<font size=  2px>'.$Full_butter_chicken.'</font><hr> ' ; 
  if($quarter_chicken_masala>"0")
    echo '<font size=  2px>'.$quarter_chicken_masala.'</font><hr> ' ;
  if($Half_chicken_masala>"0")
    echo '<font size=  2px>'.$Half_chicken_masala.'</font><hr> ' ;
  if($Full_chicken_masala>"0")
    echo '<font size=  2px>'.$Full_chicken_masala.'</font><hr> ' ; 
  if($Half_boti_kabab>"0")
    echo '<font size=  2px>'.$Half_boti_kabab.'</font><hr> ' ;
  if($Full_boti_kabab>"0")
    echo '<font size=  2px>'.$Full_boti_kabab.'</font><hr> ' ;
  if($galawati_roll_2kabab_1paratha>"0")
    echo '<font size=  2px>'.$galawati_roll_2kabab_1paratha.'</font><hr> ' ;
  if($galawati_roll_1kabab_1paratha>"0")
    echo '<font size=  2px>'.$galawati_roll_1kabab_1paratha.'</font><hr> ' ;
  if($shami_kabab_roll_2kabab_1paratha>"0")
    echo '<font size=  2px>'.$shami_kabab_roll_2kabab_1paratha.'</font><hr> ' ;
  if($shami_kabab_roll_1kabab_1paratha>"0")
    echo '<font size=  2px>'.$shami_kabab_roll_1kabab_1paratha.'</font><hr> ' ;
  if($mughlai_paratha>"0")
    echo '<font size=  2px>'.$mughlai_paratha.'</font><hr> ' ;
  if($rumali_roti>"0")
    echo '<font size=  2px>'.$rumali_roti.'</font><hr> ' ;
  if($Half_biryani_rice>"0")
    echo '<font size=  2px>'.$Half_biryani_rice.'</font><hr> ' ;
  if($Full_biryani_rice>"0")
    echo '<font size=  2px>'.$Full_biryani_rice.'</font><hr> ' ;
  if($extra_boti>"0")
    echo '<font size=  2px>'.$extra_boti.'</font><hr> ' ;
    if($Half_gravy>"0")
    echo '<font size=  2px>'.$Half_gravy.'</font><hr> ' ;
  if($extra_raita>"0")
    echo '<font size=  2px>'.$extra_raita.'</font><hr> ' ;
  if($salad>"0")
    echo '<font size=  2px>'.$salad.'</font><hr> ' ;
  echo '<font size=  2px>'.'5%'.'</font><hr>' ;
  if($totalamt<'350'){
    echo '<font size=  2px>'.'&nbsp;'.'</font><hr>' ;
  }
        ?>

            </td>
            <td>
                <?php
   if($Half_tunday_galawati_kabab >"0")
    echo '<font size=  2px>'.($Half_tunday_galawati_kabab*50).'</font><hr>' ;
  if($Full_tunday_galawati_kabab>"0")
    echo '<font size=  2px>'.($Full_tunday_galawati_kabab*100).'</font><hr> ' ;
  if($Half_shami_kabab>"0")
    echo '<font size=  2px>'.($Half_shami_kabab*60).'</font><hr> ' ;
  if($Full_shami_kabab>"0")
    echo '<font size=  2px>'.($Full_shami_kabab*120).'</font><hr> ' ;
   if($Half_mutton_stoo>"0")
    echo '<font size=  2px>'.($Half_mutton_stoo*150).'</font><hr> ' ;
  if($Full_mutton_stoo>"0")
    echo '<font size=  2px>'.($Full_mutton_stoo*300).'</font><hr> ' ;
  if($Half_mutton_korma>"0")
    echo '<font size=  2px>'.($Half_mutton_korma*130).'</font><hr> ' ;
  if($Full_mutton_korma>"0")
    echo '<font size=  2px>'.($Full_mutton_korma*250).'</font><hr> ' ;
  if($Half_mutton_biryani>"0")
    echo '<font size=  2px>'.($Half_mutton_biryani*130).'</font><hr> ' ;
  if($Full_mutton_biryani>"0")
    echo '<font size=  2px>'.($Full_mutton_biryani*250).'</font><hr> ' ; 
  if($Half_chicken_biryani>"0")
    echo '<font size=  2px>'.($Half_chicken_biryani*110).'</font><hr> ' ;
  if($Full_chicken_biryani>"0")
    echo '<font size=  2px>'.($Full_chicken_biryani*220).'</font><hr> ' ;
  if($Half_rosted_chicken>"0")
    echo '<font size=  2px>'.($Half_rosted_chicken*130).'</font><hr> ' ;
  if($Full_rosted_chicken>"0")
    echo '<font size=  2px>'.($Full_rosted_chicken*250).'</font><hr> ' ;
  if($chicken_tangri>"0")
    echo '<font size=  2px>'.($chicken_tangri*50).'</font><hr> ' ;
  if($chicken_tikka>"0")
    echo '<font size=  2px>'.($chicken_tikka*200).'</font><hr> ' ;
  if($malai_tikka>"0")
    echo '<font size=  2px>'.($malai_tikka*220).'</font><hr> ' ;
  if($fish_tikka>"0")
    echo '<font size=  2px>'.($fish_tikka*250).'</font><hr> ' ; 
  if($Half_chicken_kali_mirch>"0")
    echo '<font size=  2px>'.($Half_chicken_kali_mirch*200).'</font><hr> ' ;
  if($Full_chicken_kali_mirch>"0")
    echo '<font size=  2px>'.($Full_chicken_kali_mirch*390).'</font><hr> ' ;
   if($Half_butter_chicken>"0")
    echo '<font size=  2px>'.($Half_butter_chicken*200).'</font><hr> ' ;
  if($Full_butter_chicken>"0")
    echo '<font size=  2px>'.($Full_butter_chicken*390).'</font><hr> ' ; 
  if($quarter_chicken_masala>"0")
    echo '<font size=  2px>'.($quarter_chicken_masala*100).'</font><hr> ' ;
  if($Half_chicken_masala>"0")
    echo '<font size=  2px>'.($Half_chicken_masala*200).'</font><hr> ' ;
  if($Full_chicken_masala>"0")
    echo '<font size=  2px>'.($Full_chicken_masala*390).'</font><hr> ' ; 
  if($Half_boti_kabab>"0")
    echo '<font size=  2px>'.($Half_boti_kabab*150).'</font><hr> ' ;
  if($Full_boti_kabab>"0")
    echo '<font size=  2px>'.($Full_boti_kabab*300).'</font><hr> ' ;
  if($galawati_roll_2kabab_1paratha>"0")
    echo '<font size=  2px>'.($galawati_roll_2kabab_1paratha*65).'</font><hr> ' ;
  if($galawati_roll_1kabab_1paratha>"0")
    echo '<font size=  2px>'.($galawati_roll_1kabab_1paratha*40).'</font><hr> ' ;
  if($shami_kabab_roll_2kabab_1paratha>"0")
    echo '<font size=  2px>'.($shami_kabab_roll_2kabab_1paratha*75).'</font><hr> ' ;
  if($shami_kabab_roll_1kabab_1paratha>"0")
    echo '<font size=  2px>'.($shami_kabab_roll_1kabab_1paratha*45).'</font><hr> ' ;
  if($mughlai_paratha>"0")
    echo '<font size=  2px>'.($mughlai_paratha*15).'</font><hr> ' ;
  if($rumali_roti>"0")
    echo '<font size=  2px>'.($rumali_roti*5).'</font><hr> ' ;
  if($Half_biryani_rice>"0")
    echo '<font size=  2px>'.($Half_biryani_rice*70).'</font><hr> ' ;
  if($Full_biryani_rice>"0")
    echo '<font size=  2px>'.($Full_biryani_rice*140).'</font><hr> ' ;
  if($extra_boti>"0")
    echo '<font size=  2px>'.($extra_boti*25).'</font><hr> ' ;
  if($Half_gravy>"0")
    echo '<font size=  2px>'.$Half_gravy.'</font><hr> ' ;
  if($extra_raita>"0")
    echo '<font size=  2px>'.($extra_raita*5).'</font><hr> ' ;
  if($salad>"0")
    echo '<font size=  2px>'.($salad*10).'</font><hr> ' ;
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
                            <form role="form" action="sendmail.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name" name="name"required/><br>
                                    <input type="textarea" class="form-control" placeholder="Address" id="address" name="address" required/><br>
                                    <input type="number" class="form-control" placeholder="Mobile number" id="number" name="number" required/><br>
                                    <input type="email" class="form-control" placeholder="email id" id="email" name="user_mail" required/><br>
                                    <input type="hidden" id="items" name="email" value="<?php  
              if($Half_tunday_galawati_kabab >"0")
    echo '<font size=  2px>Tunday Galawati Kabab 2 Pcs.'.$Half_tunday_galawati_kabab.'</font><hr>' ;
  if($Full_tunday_galawati_kabab>"0")
    echo '<font size=  2px>Tunday Galawati Kabab 4 Pcs.'.$Full_tunday_galawati_kabab.'</font><hr> ' ;
  if($Half_shami_kabab>"0")
    echo '<font size=  2px>Shami Kabab 2 Pcs.'.$Half_shami_kabab.'</font><hr> ' ;
  if($Full_shami_kabab>"0")
    echo '<font size=  2px>Shami Kabab'.$Full_shami_kabab.'</font><hr> ' ;
   if($Half_mutton_stoo>"0")
    echo '<font size=  2px>Half Mutton Stoo'.$Half_mutton_stoo.'</font><hr> ' ;
  if($Full_mutton_stoo>"0")
    echo '<font size=  2px>Full Mutton Stoo'.$Full_mutton_stoo.'</font><hr> ' ;
  if($Half_mutton_korma>"0")
    echo '<font size=  2px>Half Mutton Korma'.$Half_mutton_korma.'</font><hr> ' ;
  if($Full_mutton_korma>"0")
    echo '<font size=  2px>Full Mutton Korma'.$Full_mutton_korma.'</font><hr> ' ;
  if($Half_mutton_biryani>"0")
    echo '<font size=  2px>Half Mutton Biryani'.$Half_mutton_biryani.'</font><hr> ' ;
  if($Full_mutton_biryani>"0")
    echo '<font size=  2px>Full Mutton Biryani'.$Full_mutton_biryani.'</font><hr> ' ; 
  if($Half_chicken_biryani>"0")
    echo '<font size=  2px>Half Chicken Biryani'.$Half_chicken_biryani.'</font><hr> ' ;
  if($Full_chicken_biryani>"0")
    echo '<font size=  2px>Full Chicken Biryani'.$Full_chicken_biryani.'</font><hr> ' ;
  if($Half_rosted_chicken>"0")
    echo '<font size=  2px>Half Rosted Chicken'.$Half_rosted_chicken.'</font><hr> ' ;
  if($Full_rosted_chicken>"0")
    echo '<font size=  2px>Full Rosted Chicken'.$Full_rosted_chicken.'</font><hr> ' ;
  if($chicken_tangri>"0")
    echo '<font size=  2px>Chicken Tangri'.$chicken_tangri.'</font><hr> ' ;
  if($chicken_tikka>"0")
    echo '<font size=  2px>Chicken Tikka 8 Pcs.'.$chicken_tikka.'</font><hr> ' ;
  if($malai_tikka>"0")
    echo '<font size=  2px>Malai Tikka'.$malai_tikka.'</font><hr> ' ;
  if($fish_tikka>"0")
    echo '<font size=  2px>Fish Tikka 8 Pcs.'.$fish_tikka.'</font><hr> ' ; 
  if($Half_chicken_kali_mirch>"0")
    echo '<font size=  2px>Half Chicken Kali Mirch'.$Half_chicken_kali_mirch.'</font><hr> ' ;
  if($Full_chicken_kali_mirch>"0")
    echo '<font size=  2px>Full Chicken Kali Mirch'.$Full_chicken_kali_mirch.'</font><hr> ' ;
   if($Half_butter_chicken>"0")
    echo '<font size=  2px>Half Butter Chicken '.$Half_butter_chicken.'</font><hr> ' ;
  if($Full_butter_chicken>"0")
    echo '<font size=  2px>Full Butter chicken'.$Full_butter_chicken.'</font><hr> ' ; 
  if($quarter_chicken_masala>"0")
    echo '<font size=  2px>Qtr. Chicken Masala'.$quarter_chicken_masala.'</font><hr> ' ;
  if($Half_chicken_masala>"0")
    echo '<font size=  2px>Half Chicken Masala'.$Half_chicken_masala.'</font><hr> ' ;
  if($Full_chicken_masala>"0")
    echo '<font size=  2px>Full Chicken Masala'.$Full_chicken_masala.'</font><hr> ' ; 
  if($Half_boti_kabab>"0")
    echo '<font size=  2px>Half Boti Kabab'.$Half_boti_kabab.'</font><hr> ' ;
  if($Full_boti_kabab>"0")
    echo '<font size=  2px>Full Boti Kabab'.$Full_boti_kabab.'</font><hr> ' ;
  if($galawati_roll_2kabab_1paratha>"0")
    echo '<font size=  2px>Galabati Roll Kabab 2 Kabab'.$galawati_roll_2kabab_1paratha.'</font><hr> ' ;
  if($galawati_roll_1kabab_1paratha>"0")
    echo '<font size=  2px>Galabati Roll Kabab 1 Kabab'.$galawati_roll_1kabab_1paratha.'</font><hr> ' ;
  if($shami_kabab_roll_2kabab_1paratha>"0")
    echo '<font size=  2px>Shami Kabab Roll 2 Kabab'.$shami_kabab_roll_2kabab_1paratha.'</font><hr> ' ;
  if($shami_kabab_roll_1kabab_1paratha>"0")
    echo '<font size=  2px>Shami Kabab Roll 1 Kabab'.$shami_kabab_roll_1kabab_1paratha.'</font><hr> ' ;
  if($mughlai_paratha>"0")
    echo '<font size=  2px>Mughlai Paratha'.$mughlai_paratha.'</font><hr> ' ;
  if($rumali_roti>"0")
    echo '<font size=  2px>Rumali Roti'.$rumali_roti.'</font><hr> ' ;
  if($Half_biryani_rice>"0")
    echo '<font size=  2px>Half Biryani Rice'.$Half_biryani_rice.'</font><hr> ' ;
  if($Full_biryani_rice>"0")
    echo '<font size=  2px>Full Biryani Rice'.$Full_biryani_rice.'</font><hr> ' ;
  if($extra_boti>"0")
    echo '<font size=  2px>Extra Boti'.$extra_boti.'</font><hr> ' ;
  if($Half_gravy>"0")
    echo '<font size= 2px> Half Gravy'.$Half_gravy.'</font><hr> ' ;
  if($extra_raita>"0")
    echo '<font size=  2px>Extra Raita'.$extra_raita.'</font><hr> ' ;
  if($salad>"0")
    echo '<font size=  2px>Salad'.$salad.'</font><hr> ' ;
    echo 'Total Amount:'.$totalamt.'<br><hr>';
    echo 'tunday';
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
<h5>Want to <b><a href=tunday.php>Add/Remove</a></b> items</h5>
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
    <title>Abdul Kalam</title>
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
                        Click <a href="tunday.php">here</a> to go back to Menu page...!!
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