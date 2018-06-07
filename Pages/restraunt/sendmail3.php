<?php      


    $email=$_POST['email'];
    $add=$_POST['address'];   
    $name=$_POST['name'];
    $num=$_POST['number']; 
    $totamt = $_POST['amount'];
    $rest = $_POST['restaurant'];
    $user_mail=$_POST['user_mail'];
	
	echo $add;
	echo $name;

      $to = 'abdul.7275.ak@gmail.com';
      
      $subject = 'for fun...!!';
      
      $headers = "From: abdul@knit.com\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

      $message = '<html>';
      $message .= '<body>';
      $message .= '<div class ="container">';
      $message .= '<center><h2>Order Confirmation</h2></center>';
      $message .= '<h3>Hlo '.$name.',</h3>';
      $message .= '<h4>';
      $message .= 'Thanks for placing order with us. Your order has been confirmed and the details are as follows...!!<br>';
      $message .= 'Order Details...<br>';
      $message .= '<br>'.$email.' ';
      $message .= '<br>';
      $message .= '<br>';
      $message .= '<br>';
      $message .= '</h4>';
      $message .= '<h2>Total cost : '.$totamt.'</h2>';
      $message .= '<br>';
      $message .= 'Restaurant name : '.$rest.'<br>';
      $message .= 'Address : '.$add.'<br>';
      $message .= '<br>';
      $message .= 'Mobile No. : '.$num.'<br>';
      $message .= '<br>';
      $message .= '<center><h3>Thanks.....!!!</h3></center>';
      $message .= '<b>Team Foodzumbo</b>';
      $message .= '</div>';
      $message .= '</body></html>';


      if(mail($to, $subject, $message, $headers)){
          echo 'Mail has been Sent.....!!!<br>';
          echo $name;
      }
      else{
          echo 'There was an error Sending Mail';
      }
?>