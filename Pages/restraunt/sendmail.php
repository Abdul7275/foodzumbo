            <?php
               require '../../order/connect.inc.php';
                      $email=$_POST['email'];
                      $add=$_POST['address'];   
                      $name=$_POST['name'];
                      $num=$_POST['number']; 
                      $totamt = $_POST['amount'];
                      $rest = $_POST['restaurant'];
                      $user_mail=$_POST['user_mail'];
                      $admin='abdulmyth@gmail.com';    
                      $to = $admin;

                      
                      $query = "INSERT INTO `order` VALUES ('', '$name', '$rest','$totamt', '$add','$email','$user_mail')";
                      if(mysqli_query(mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db),$query)){
                          echo "Order stored";
                      }else{
                          echo "Could not process this time";
                      }

                      


                      $subject = "Order Details";
                      $body = '<h3>Processs Order.  
                                            <br>'.$email.'<br>Name:'.$name.'<br> Number:'.$num.'<br> Address:'.$add.'<br> User email: &nbsp;'.$user_mail.'</br>
                      <h4>Regards Team <br> <b>FoodZumbo.</b></h4>
                      <br><br><h6>(Please do not reply to this mail. This is an auto generated mail.)</h6>';
                      $mail = new Mail();
                      $mail->setFrom(SITEEMAIL);
                      $mail->addAddress($to);
                      $mail->subject($subject);
                      $mail->body($body);
                      $mail->send();


                      $to = $user_mail;
                      $subject = "Order Details";
                      $body = '<h3>Thanks For Placing Order With Us.</h3>
                      
                      <br>'.$email.'<br>Delivery Address<br>Name:'.$name.'<br> Number:'.$num.'<br> Address:'.$add.'<br>
                      <h4>Regards Team <br> <b>FoodZumbo.</b></h4>
                      <br><br><h6>(Please do not reply to this mail. This is an auto generated mail.)</h6>';
                      $mail = new Mail();
                      $mail->setFrom(SITEEMAIL);
                      $mail->addAddress($to);
                      $mail->subject($subject);
                      $mail->body($body);
                      if($mail->send())
                        echo 'Mail Sent';
                      
                    {
            require('layout/header.php');
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
                        <h3 class="modal-title"><font color="blue">Order Succesful</font></h3>
                    </div>
                    <!--------Body--------->
                    <div class="modal-body">
                        Thanks for Placing Order with us..!!<br>
                        Want to order more from another restaurant please click <a href="../sultanpur.html">here</a>
                    </div>

                    <!----------footer-------->
                    <div class="modal-footer">
                        <center>
                           <h6>Please Like our<a href="http://facebook.com/foodzumbo"> Facebook</a> page in order to stay updated with aur restaurant lists..!!</h6>
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