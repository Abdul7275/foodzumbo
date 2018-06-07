<?php
include '../../Core/Functions/general.php';
    $totalqty=0;
  $delivery=0;
  $discount=0;
    $half_paneer_butter_masala = secure($_POST['half_paneer_butter_masala']) ;
    $full_paneer_butter_masala = secure($_POST['full_paneer_butter_masala']) ;
    $half_kadhai_paneer = secure($_POST['half_kadhai_paneer']) ;
    $full_kadhai_paneer = secure($_POST['full_kadhai_paneer']) ;
    $half_paneer_do_pyaza = secure($_POST['half_paneer_do_pyaza']) ;
    $full_paneer_do_pyaza = secure($_POST['full_paneer_do_pyaza']) ;
    $half_matar_paneer = secure($_POST['half_matar_paneer']) ;
    $full_matar_paneer = secure($_POST['full_matar_paneer']) ;
    $shahi_paneer = secure($_POST['shahi_paneer']) ;
    $paneer_pasanda = secure($_POST['paneer_pasanda']) ;
    $plain_dal = secure($_POST['plain_dal']) ;
    $dal_fry = secure($_POST['dal_fry']) ;
    $dal_makhani = secure($_POST['dal_makhani']) ;
    $tandoori_roti = secure($_POST['tandoori_roti']) ;
    $butter_roti = secure($_POST['butter_roti']) ;
    $laccha_paratha = secure($_POST['laccha_paratha']) ;
    $plain_nan = secure($_POST['plain_nan']) ;
    $butter_nan = secure($_POST['butter_nan']) ;
    $cheese_nan = secure($_POST['cheese_nan']) ;
    $stuff_nan = secure($_POST['stuff_nan']) ;
    $half_steam_rice = secure($_POST['half_steam_rice']) ;
    $full_steam_rice = secure($_POST['full_steam_rice']) ;
    $half_zeera_rice = secure($_POST['half_zeera_rice']) ;
    $full_zeera_rice = secure($_POST['full_zeera_rice']) ;
    $veg_biryani = secure($_POST['veg_biryani']) ;
    $totalqty=($half_matar_paneer + $full_matar_paneer + $half_kadhai_paneer + $full_kadhai_paneer + $half_paneer_butter_masala + $full_paneer_butter_masala + $half_paneer_do_pyaza + $full_paneer_do_pyaza + $shahi_paneer + $paneer_pasanda + $plain_dal + $dal_fry + $dal_makhani + $tandoori_roti + $butter_roti + $laccha_paratha + $plain_nan + $butter_nan + $cheese_nan + $stuff_nan +$half_steam_rice + $full_steam_rice + $half_zeera_rice + $full_zeera_rice + $veg_biryani);
    $totalamt=(($half_matar_paneer *109) + ($full_matar_paneer *149) + ($half_kadhai_paneer *119) + ($full_kadhai_paneer *169) + ($half_paneer_butter_masala *119) + ($full_paneer_butter_masala *169) + ($half_paneer_do_pyaza *119) + ($full_paneer_do_pyaza *169) + ($shahi_paneer *169) + ($paneer_pasanda *199) + ($plain_dal *79) + ($dal_fry *89) + ($dal_makhani *119) + ($tandoori_roti *11) + ($butter_roti *15) + ($laccha_paratha *39) + ($plain_nan *25) + ($butter_nan *34) + ($cheese_nan *39) + ($stuff_nan*39)+($half_steam_rice*59) + ($full_steam_rice*79) + ($half_zeera_rice*69) + ($full_zeera_rice*99) + ($veg_biryani*99));
    
  if($totalamt>"250"){


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

   if($half_paneer_butter_masala >0) echo '<font size=2px>Half Paneer Butter Masala</font><hr>' ;
    if($full_paneer_butter_masala >0) echo '<font size=2px>Full Paneer Butter Masala</font><hr>' ;
    if($half_kadhai_paneer >0) echo '<font size=2px>Half Kadhai Paneer</font><hr>' ;
    if($full_kadhai_paneer >0) echo '<font size=2px>Full Kadhai Paneer</font><hr>' ;
    if($half_paneer_do_pyaza >0) echo '<font size=2px>Half Paneer Do Pyaza</font><hr>' ;
    if($full_paneer_do_pyaza >0) echo '<font size=2px>Full Paneer Do Pyaza</font><hr>' ;
    if($half_matar_paneer >0) echo '<font size=2px>Half Matar Paneer</font><hr>' ;
    if($full_matar_paneer >0) echo '<font size=2px>Full Matar Paneer</font><hr>' ;
    if($shahi_paneer >0) echo '<font size=2px>Shahi Paneer</font><hr>' ;
    if($paneer_pasanda >0) echo '<font size=2px>Paneer Pasanda</font><hr>' ;
    if($plain_dal >0) echo '<font size=2px>Plain Dal</font><hr>' ;
    if($dal_fry >0) echo '<font size=2px>Dal Fry</font><hr>' ;
    if($dal_makhani >0) echo '<font size=2px>Dal Makhani</font><hr>' ;
    if($tandoori_roti >0) echo '<font size=2px>Tandoori Roti</font><hr>' ;
    if($butter_roti >0) echo '<font size=2px>Butter Roti</font><hr>' ;
    if($laccha_paratha >0) echo '<font size=2px>Laccha Paratha</font><hr>' ;
    if($plain_nan >0) echo '<font size=2px>Plain Nan</font><hr>' ;
    if($butter_nan >0) echo '<font size=2px>Butter Nan</font><hr>' ;
    if($cheese_nan >0) echo '<font size=2px>Cheese Nan</font><hr>' ;
    if($stuff_nan >0) echo '<font size=2px>Stuff Nan</font><hr>' ;
    if($half_steam_rice >0) echo '<font size=2px>Half Steam Rice</font><hr>' ;
    if($full_steam_rice >0) echo '<font size=2px>Full Steam Rice</font><hr>' ;
    if($half_zeera_rice >0) echo '<font size=2px>Half Zeera Rice</font><hr>' ;
    if($full_zeera_rice >0) echo '<font size=2px>Full Half Zeera Rice</font><hr>' ;
    if($veg_biryani >0) echo '<font size=2px>Veg Biryani</font><hr>' ;
    ?>
            </td>
            <td>
                <?php

    if($half_paneer_butter_masala >0) echo '<font size=2px>'.$half_paneer_butter_masala.'</font><hr>' ;
    if($full_paneer_butter_masala >0) echo '<font size=2px>'.$full_paneer_butter_masala.'</font><hr>' ;
    if($half_kadhai_paneer >0) echo '<font size=2px>'.$half_kadhai_paneer.'</font><hr>' ;
    if($full_kadhai_paneer >0) echo '<font size=2px>'.$full_kadhai_paneer.'</font><hr>' ;
    if($half_paneer_do_pyaza >0) echo '<font size=2px>'.$half_paneer_do_pyaza.'</font><hr>' ;
    if($full_paneer_do_pyaza >0) echo '<font size=2px>'.$full_paneer_do_pyaza.'</font><hr>' ;
    if($half_matar_paneer >0) echo '<font size=2px>'.$half_matar_paneer.'</font><hr>' ;
    if($full_matar_paneer >0) echo '<font size=2px>'.$full_matar_paneer.'</font><hr>' ;
    if($shahi_paneer >0) echo '<font size=2px>'.$shahi_paneer.'</font><hr>' ;
    if($paneer_pasanda >0) echo '<font size=2px>'.$paneer_pasanda.'</font><hr>' ;
    if($plain_dal >0) echo '<font size=2px>'.$plain_dal.'</font><hr>' ;
    if($dal_fry >0) echo '<font size=2px>'.$dal_fry.'</font><hr>' ;
    if($dal_makhani >0) echo '<font size=2px>'.$dal_makhani.'</font><hr>' ;
    if($tandoori_roti >0) echo '<font size=2px>'.$tandoori_roti.'</font><hr>' ;
    if($butter_roti >0) echo '<font size=2px>'.$butter_roti.'</font><hr>' ;
    if($laccha_paratha >0) echo '<font size=2px>'.$laccha_paratha.'</font><hr>' ;
    if($plain_nan >0) echo '<font size=2px>'.$plain_nan.'</font><hr>' ;
    if($butter_nan >0) echo '<font size=2px>'.$butter_nan.'</font><hr>' ;
    if($cheese_nan >0) echo '<font size=2px>'.$cheese_nan.'</font><hr>' ;
    if($stuff_nan >0) echo '<font size=2px>'.$stuff_nan.'</font><hr>' ;
    if($half_steam_rice >0) echo '<font size=2px>'.$half_steam_rice.'</font><hr>' ;
    if($full_steam_rice >0) echo '<font size=2px>'.$full_steam_rice.'</font><hr>' ;
    if($half_zeera_rice >0) echo '<font size=2px>'.$half_zeera_rice.'</font><hr>' ;
    if($full_zeera_rice >0) echo '<font size=2px>'.$full_zeera_rice.'</font><hr>' ;
    if($veg_biryani >0) echo '<font size=2px>'.$veg_biryani.'</font><hr>' ;
                ?>

            </td>
            <td>
                <?php

           if($half_paneer_butter_masala >0) echo '<font size=2px>'.($half_paneer_butter_masala*119).'</font><hr>' ;
    if($full_paneer_butter_masala >0) echo '<font size=2px>'.($full_paneer_butter_masala*169).'</font><hr>' ;
    if($half_kadhai_paneer >0) echo '<font size=2px>'.($half_kadhai_paneer*119).'</font><hr>' ;
    if($full_kadhai_paneer >0) echo '<font size=2px>'.($full_kadhai_paneer*169).'</font><hr>' ;
    if($half_paneer_do_pyaza >0) echo '<font size=2px>'.($half_paneer_do_pyaza*119).'</font><hr>' ;
    if($full_paneer_do_pyaza >0) echo '<font size=2px>'.($full_paneer_do_pyaza*169).'</font><hr>' ;
    if($half_matar_paneer >0) echo '<font size=2px>'.($half_matar_paneer*109).'</font><hr>' ;
    if($full_matar_paneer >0) echo '<font size=2px>'.($full_matar_paneer*149).'</font><hr>' ;
    if($shahi_paneer >0) echo '<font size=2px>'.($shahi_paneer*169).'</font><hr>' ;
    if($paneer_pasanda >0) echo '<font size=2px>'.($paneer_pasanda*199).'</font><hr>' ;
    if($plain_dal >0) echo '<font size=2px>'.($plain_dal*79).'</font><hr>' ;
    if($dal_fry >0) echo '<font size=2px>'.($dal_fry*89).'</font><hr>' ;
    if($dal_makhani >0) echo '<font size=2px>'.($dal_makhani*119).'</font><hr>' ;
    if($tandoori_roti >0) echo '<font size=2px>'.($tandoori_roti*11).'</font><hr>' ;
    if($butter_roti >0) echo '<font size=2px>'.($butter_roti*15).'</font><hr>' ;
    if($laccha_paratha >0) echo '<font size=2px>'.($laccha_paratha*39).'</font><hr>' ;
    if($plain_nan >0) echo '<font size=2px>'.($plain_nan*25).'</font><hr>' ;
    if($butter_nan >0) echo '<font size=2px>'.($butter_nan*34).'</font><hr>' ;
    if($cheese_nan >0) echo '<font size=2px>'.($cheese_nan*39).'</font><hr>' ;
    if($stuff_nan >0) echo '<font size=2px>'.($stuff_nan*39).'</font><hr>' ;
    if($half_steam_rice >0) echo '<font size=2px>'.($half_steam_rice*59).'</font><hr>' ;
    if($full_steam_rice >0) echo '<font size=2px>'.($full_steam_rice*79).'</font><hr>' ;
    if($half_zeera_rice >0) echo '<font size=2px>'.($half_zeera_rice*69).'</font><hr>' ;
    if($full_zeera_rice >0) echo '<font size=2px>'.($full_zeera_rice*99).'</font><hr>' ;
    if($veg_biryani >0) echo '<font size=2px>'.($veg_biryani*129).'</font><hr>' ;
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
                                    <input type="hidden" id="restaurant" name="restaurant" value="KDI FOOD PLAZA "/>
                                    <input type="hidden" id="items" name="email" value="<?php
                                    
    if($half_paneer_butter_masala >0) echo 'half paneer butter masala'.$half_paneer_butter_masala.'<hr>' ;
    if($full_paneer_butter_masala >0) echo 'full paneer butter masala'.$full_paneer_butter_masala.'<hr>' ;
    if($half_kadhai_paneer >0) echo 'half kadhai paneer'.$half_kadhai_paneer.'<hr>' ;
    if($full_kadhai_paneer >0) echo 'full kadhai paneer'.$full_kadhai_paneer.'<hr>' ;
    if($half_paneer_do_pyaza >0) echo 'half paneer do pyaza'.$half_paneer_do_pyaza.'<hr>' ;
    if($full_paneer_do_pyaza >0) echo 'full paneer do pyaza'.$full_paneer_do_pyaza.'<hr>' ;
    if($half_matar_paneer >0) echo 'half matar paneer'.$half_matar_paneer.'<hr>' ;
    if($full_matar_paneer >0) echo 'full matar paneer'.$full_matar_paneer.'<hr>' ;
    if($shahi_paneer >0) echo 'shahi paneer'.$shahi_paneer.'<hr>' ;
    if($paneer_pasanda >0) echo 'paneer pasanda'.$paneer_pasanda.'<hr>' ;
    if($plain_dal >0) echo 'plain dal'.$plain_dal.'<hr>' ;
    if($dal_fry >0) echo 'dal fry'.$dal_fry.'<hr>' ;
    if($dal_makhani >0) echo 'dal makhani'.$dal_makhani.'<hr>' ;
    if($tandoori_roti >0) echo 'tandoori roti'.$tandoori_roti.'<hr>' ;
    if($butter_roti >0) echo 'butter roti'.$butter_roti.'<hr>' ;
    if($laccha_paratha >0) echo 'laccha paratha'.$laccha_paratha.'<hr>' ;
    if($plain_nan >0) echo 'plain nan'.$plain_nan.'<hr>' ;
    if($butter_nan >0) echo 'butter nan'.$butter_nan.'<hr>' ;
    if($cheese_nan >0) echo 'cheese nan'.$cheese_nan.'<hr>' ;
    if($stuff_nan >0) echo 'stuff nan'.$stuff_nan.'<hr>' ;
    if($half_steam_rice >0) echo 'half steam rice'.$half_steam_rice.'<hr>' ;
    if($full_steam_rice >0) echo 'full steam rice'.$full_steam_rice.'<hr>' ;
    if($half_zeera_rice >0) echo 'half zeera rice'.$half_zeera_rice.'<hr>' ;
    if($full_zeera_rice >0) echo 'full zeera rice'.$full_zeera_rice.'<hr>' ;
    if($veg_biryani >0) echo 'veg biryani'.$veg_biryani.'<hr>' ;
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
<h5>Want to <b><a href=kdi.php>Add/Remove</a></b> items</h5>
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
                        <h5>Sorry your order couldn't be processed it must be greater than <font color="red">250</font></h5>
                        Click <a href="kdi.php">here</a> to go back to Menu page...!!
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