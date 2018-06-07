<!DOCTYPE html>
<html lang="en">

<head>

  <title>SAVERA...!!</title>
  <meta charset="utf-8">
<meta name="description" content="Foodzumbo order food with Foodzumbo">
  <meta name="keywords" content="Foodzumbo order food with Foodzumbo">
  <meta name="author" content="Foodzumbo order food with Foodzumbo">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../CSS/restraunt.css">
  <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../CSS/normalise.css" />
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 1000px;
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
      .row.content {height:auto;} 
    }
    .foot{
      padding-left: 12%;
      padding-right: 12%;
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
        <li class="active"><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav"><br><br><br><br><br><br>
      <p><a href="#KHANA">KHANA KHAJANA</a></p>
      <p><a href="#basmati">BASMATI RICE KHAJANA</a></p>
      <p><a href="#dal">DAL</a></p>
      <p><a href="#south">SOUTH INDIAN</a></p>
      <p><a href="#salad">SALAD</a></p>
      <p><a href="#roti">ROTI</a></p>
      <p><a href="#chowmein">CHOWMEIN AND FRIED RICE</a></p>
    </div>
    <div class="col-sm-7 text-left">
      <br><br>
      <div style="text-align:center;">
        <a name="khana"></a>
        <h2 style="color:#A3190F;"><b>SAVERA</b></h2>
        <h4 style="color:blue;"><b>Menu</b></h4>
      </div><form  action="saveracheckout.php" method="POST">
        <table width=100% class="menu" >
          <tr style="background-image:url(../../Images/khana.jpg); height:100px">
            <td>
            <h3 style="color:white"><b><center>KHANA KHAJANA</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
           </br>                
              &nbsp;&nbsp;Kaleji Paneer<span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_kaleji_paneer" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_kaleji_paneer" style="height:20px; width:40px"/>
              </span></br>               
              <hr>&nbsp;&nbsp;Matar Paneer<span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_matar_paneer" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_matar_paneer" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Paneer Butter Masala           <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_butter_masala" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_butter_masala" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Shahi Paneer             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_shahi_paneer" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_shahi_paneer" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Savera Special Paneer               <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_savera_special_paneer" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_savera_special_paneer" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Kadhai Paneer
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_kadhai_paneer" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_kadhai_paneer" style="height:20px; width:40px"/>
              </span></br>                
              
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_do_pyaza" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Paneer Bhujia             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_aloo_matar" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_aloo_matar" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Paneer Chilli
              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_bhujiya" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_bhujiya" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Malai Paneer             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_malai_paneer" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_malai_paneer" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Malai Kofta              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_malai_kofta" style="height:20px; width:40px"/>
              </span> </br><span style="float:right">
              Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_malai_kofta" style="height:20px; width:40px"/>
              </span></br>
  
                <hr>&nbsp;&nbsp;Mushroom Matar            <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mushroom_matar" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mushroom_matar" style="height:20px; width:40px"/>
              </span></br>  
              <hr>&nbsp;&nbsp;Mushroom Pyaza          <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mushroom_pyaza" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.140.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mushroom_pyaza" style="height:20px; width:40px"/>
              </span></br>  
              <hr>&nbsp;&nbsp;Aloo Pyaza           <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_aloo_pyaza" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_aloo_pyaza" style="height:20px; width:40px"/>
              </span></br>              

              <hr>&nbsp;&nbsp;Aloo Dum Masala          <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_aloo_dum_masala" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_aloo_dum_masala" style="height:20px; width:40px"/>
              </span></br>   
              <hr>&nbsp;&nbsp;Aloo Zeera            <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_aloo_zeera" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_aloo_zeera" style="height:20px; width:40px"/>
              </span></br>    
                <hr>&nbsp;&nbsp;Aloo Matar          <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_aloo_matar" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_aloo_matar" style="height:20px; width:40px"/>
              </span></br>        <hr>
              &nbsp;&nbsp;Seasonal Veg            <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_seasonal_veg" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_seasonal_veg" style="height:20px; width:40px"/>
              </span></br>            <hr>&nbsp;&nbsp;
              Mix Veg            <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mix_veg" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mix_veg" style="height:20px; width:40px"/>
              </span></br>    <hr>&nbsp;&nbsp;
              Chana Masala         <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_chana_masala" style="height:20px; width:40px"/>
              </span><a name="basmati"></a> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_chana_masala" style="height:20px; width:40px"/>
              </span></br>                
              </br><span style="float:right">
              
          </td></tr> 
          <tr style="background-image:url(../../Images/riceandbiryani.jpg); height:100px"><td>    
            <h3 style="color:black"><b><center>Basmati RICE Khazana</center></b></h3>
            </td>
          </tr>
          <tr >
            <td style="line-height:2";><b>
              </br>&nbsp;&nbsp;Plain Rice        <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.35.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_plain_rice" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.65.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_plain_rice" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Zeera Rice            <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_zeera_rice" style="height:20px; width:40px"/>
              </span></br>
              <span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.75.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_zeera_rice" style="height:20px; width:40px"/>
              </span>
              <br>
               <hr>&nbsp;&nbsp;Matar Pulao             <span style="float:right">
               Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.45.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_matar_pulao"style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.75.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_matar_pulao" style="height:20px; width:40px"/>
              </span>
              </br><hr>&nbsp;&nbsp;Paneer Pulao              <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_pulao" style="height:20px; width:40px"/>
              </span>
             </br><span style="float:right">
              <a name="dal"></a>
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_pulao" style="height:20px; width:40px"/>
              </span></br><hr>
              &nbsp;&nbsp;Veg Biryani      <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_veg_biryani" style="height:20px; width:40px"/>
              </span>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_veg_biryani" style="height:20px; width:40px"/>
              </span>
          </br></td></tr>
            <tr style="background-image:url(../../Images/dal.jpg); height:100px">
            <td> 
            <h3 style="color:black"><b><center>Pulse Pleasure</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
          </br>             
           &nbsp;&nbsp;Dal Fry(arhar)          <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="dal_fry_arhar" style="height:20px; width:40px"/>
              </span>
            <hr>
              &nbsp;&nbsp;Plain Dal (arhar)             <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="plain_dal_arhar" style="height:20px; width:40px"/>
              </span>       <hr>
              &nbsp;&nbsp;Dal butter Fry(arhar)            <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="dal_butter_fry_arhar" style="height:20px; width:40px"/>
              </span><a name="roti"></a>
                <hr>&nbsp;&nbsp;Dal Handi            <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="dal_handi" style="height:20px; width:40px"/>
              </span>
   </br>            </td></tr>
            <tr style="background-image:url(../../Images/rotis.jpg); height:100px"><td>           
            <h3 style="color:black"><b><center>TANDOOR SE</center></b></h3> 
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
              </br>             
              &nbsp;&nbsp;Missi Roti           <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.20.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="missi_roti" style="height:20px; width:40px"/>
                 </span> 
            
                 
              <hr>&nbsp;&nbsp;Tandoori roti            <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.06.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="tandoori_roti" style="height:20px; width:40px"/>
              </span> 
                              
              <hr>&nbsp;&nbsp;Butter Tandoori Roti             <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.08.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="butter_tandoori_roti" style="height:20px; width:40px"/>
              </span> 
                           
              <hr>&nbsp;&nbsp;Plain Nan           <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.15.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="plain_nan" style="height:20px; width:40px"/>
              </span> 
                             
              <hr>&nbsp;&nbsp;Stuff Nan            <span style="float:right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.35.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="stuff_nan" style="height:20px; width:40px"/>
              </span>              
              <hr>&nbsp;&nbsp;Butter Nan             <span style="float:right">
                Rs.20.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="butter_nan" style="height:20px; width:40px"/>
              </span> 
                            
              <hr>&nbsp;&nbsp;Tandoori Laccha Paratha             <span style="float:right">
                Rs.20.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="tandoori_laccha_paratha" style="height:20px; width:40px"/>
              </span> 
              <hr>  &nbsp;&nbsp;Aloo Paratha          <span style="float:right">
                Rs.35.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="aloo_paratha" style="height:20px; width:40px"/>
              </span> 
              <hr>&nbsp;&nbsp;Pyaaz Paratha          <span style="float:right">
                Rs.35.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="pyaz_paratha" style="height:20px; width:40px"/>
              </span> 
              <hr>&nbsp;&nbsp;Gobhi Paratha          <span style="float:right">
                Rs.35.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="gobhi_paratha" style="height:20px; width:40px"/>
              </span> 
              <hr>&nbsp;&nbsp;Paneer Paratha           <span style="float:right">
                Rs.45.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_paratha" style="height:20px; width:40px"/>
              </span> 
              </br>     </br>
    <h3 ><b><center>RAITA AND DAHI</center></b></h3> 
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
         </br>                   
                &nbsp;&nbsp;Plain Dahi          <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.25.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_plain_dahi" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_plain_dahi" style="height:20px; width:40px"/>
              </span></br>                
              <hr>&nbsp;&nbsp;Boondi Raita            <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.30.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_boondi_raita" style="height:20px; width:40px"/>
              </span>  <a name="south"></a>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_boondi_raita" style="height:20px; width:40px"/>
              </span></br></br>                </td></tr>
              <tr style="background-image:url(../../Images/southindian.jpg); height:100px"> 
            <td>
            <h3 style="color:black"><b><center>SOUTH INDIAN</center></b></h3>
             
            </td>
          </tr> 
          <tr><td style="line-height:2";><b>
            </br>
                &nbsp;&nbsp;Plain Dosa             <span style="float:right">
                Rs.45.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="plain_dosa" style="height:20px; width:40px"/>
              </span>                
              <hr>Masala Dosa             <span style="float:right">
                Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="masala_dosa" style="height:20px; width:40px"/>
              </span>                
             <hr>Special Masala Dosa           <span style="float:right">
                Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="special_masala_dosa" style="height:20px; width:40px"/>
              </span>                
                             
              <hr>Paneer Masala Dosa          <span style="float:right">
                Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_masala_dosa" style="height:20px; width:40px"/>
              </span>     <hr>Veg Uttapam          <span style="float:right">
                Rs.65.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_uttapam" style="height:20px; width:40px"/>
              </span>                
              <hr>Onion Uttapam             <span style="float:right">
                Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="onion_uttapam" style="height:20px; width:40px"/>
              </span>                
              <hr>Mix Uttapam             <span style="float:right">
                Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="mix_uttapam" style="height:20px; width:40px"/>
              </span>                
                    <hr>Chola Bhatura            <span style="float:right">
                Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="chola_bhatura" style="height:20px; width:40px"/>
              </span>                
              <hr>Pav Bhaji            <span style="float:right">
                Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="pavbhaji" style="height:20px; width:40px"/>
              </span>                
              <hr>Veg Pakoda             <span style="float:right">
                Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_pakoda" style="height:20px; width:40px"/>
              </span>                
              <hr>Paneer Pakoda            <span style="float:right">
                Rs.75.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_pakoda" style="height:20px; width:40px"/>
              </span>                
              <hr>Veg Burger <span style="float:right">
                Rs.40.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="veg_burger" style="height:20px; width:40px"/>
              </span>                
              <hr>Paneer Burger <span style="float:right">
                Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="paneer_burger" style="height:20px; width:40px"/>
              </span>   <a name="salad"></a>             
              <hr>Spring Roll            <span style="float:right">
                Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="spring_roll" style="height:20px; width:40px"/>
              </span>     </td>
            </tr><tr style="background-image:url(../../Images/saladandcolddrink.jpg); height:100px">      
            <td>
            <h3 style="color:black"><b><center>SALAD</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
           </br>                
                &nbsp;&nbsp;Green Salad             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.15.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_green_salad" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.30.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_green_salad" style="height:20px; width:40px"/>
              </span></br>                
                       <hr>                
                &nbsp;&nbsp;Onion Salad           <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.10.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_onion_salad" style="height:20px; width:40px"/>
              </span> <a name="chowmein"></a>
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.20.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_onion_salad" style="height:20px; width:40px"/>
              </span></br>      </td></tr>
              <tr style="background-image:url(../../Images/chow.jpg); height:100px"><td>
            <h3 style="black"><b><center>CHOWMEIN AND FRIED RICE</center></b></h3> 
            </td>
          </tr> 
         <tr><td style="line-height:2";><b>
           </br>                
              &nbsp;&nbsp;Veg Chowmein             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.45.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_veg_chowmein" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_veg_chowmein" style="height:20px; width:40px"/>
              </span></br>  <hr>    
                &nbsp;&nbsp;Mushroom Chowmein             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mushroom_chowmein" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mushroom_chowmein" style="height:20px; width:40px"/>
              </span></br><hr>
                &nbsp;&nbsp;Singapur Chowmein             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_singapur_chowmein" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_singapur_chowmein" style="height:20px; width:40px"/>
              </span></br>    <hr> 
                &nbsp;&nbsp;Paneer Chowmein             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_chowmein" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.90.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_chowmein" style="height:20px; width:40px"/>
              </span></br>      <hr>
                &nbsp;&nbsp;Paneer Chilli           <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_chilli" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.150.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_chilli" style="height:20px; width:40px"/>
              </span></br>   <hr>
               &nbsp;&nbsp;Veg Manchurian             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.70.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_veg_manchurian" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.130.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_veg_manchurian" style="height:20px; width:40px"/>
              </span></br>       <hr>    
              &nbsp;&nbsp;Veg Fried Rice             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.50.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_veg_fried_rice" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.80.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_veg_fried_rice" style="height:20px; width:40px"/>
              </span></br>         <hr>
              &nbsp;&nbsp;Mushroom Fried Rice             <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_mushroom_fried_rice" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_mushroom_fried_rice" style="height:20px; width:40px"/>
              </span></br>    <hr>
              &nbsp;&nbsp;Paneer Fried Rice            <span style="float:right">
                Half&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Half_paneer_fried_rice" style="height:20px; width:40px"/>
              </span> 
              </br><span style="float:right">
                Full&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.100.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="0" name ="Full_paneer_fried_rice" style="height:20px; width:40px"/>
              </span></br></br></br>      
                       
                                   
                         
                                     <a name="about"></a> 
              <div align="center"><a name="order"><input class="btn btn-primary" type="submit" name="submit" value="Place order" /></a></div> 
              </br></b></br> </td>
</tr>

        </table> </form>             
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <div class="foot">
  <div><center><h3>About us.</h3></center>
  <center><table>
  FoodZumbo is most convenient online food ordering site for all the colleges ,universities<br>
  and all the people of sultanpur.It connects people with the best restaurants around them. <br>
  Delivering only in sultanpur, FoodZumbo is the only site for delivering the best of foods<br>
  from the restaurants around you of your choice.<br>
  We believe food is a pleasure and food ordering should be fast and definitely a fun experience.<br>
  Ordering with foodzumbo is as easy as a 5-step recipe: enjoy n share ur experience with us!!!!!
  </table></center><hr></div>
  <div>
<table>
<center><h3><b>Get in Touch</b></h3></center>
<center>
  <a href="#"> <img src="../../Images/facebook_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
  <a href="#"> <img src="../../Images/twitter_sq.png"><a>&nbsp;&nbsp;&nbsp;&nbsp;</a></a>
  <a href="#"> <img src="../../Images/instagram_sq.png"></a>
</center>
</table>
  </div><hr>
  <div>
    <center>
      <h3><b>Takeaway</b></h3> <h4>Order with us online and pick up at your convenience</h4></center>

  Is the restaurant on your way to work or perhaps just down the street? Feel like having a walk?<br>
  You can place an order online with <b>FoodZumbo</b> and pick it up from your restaurant of choice.<br>
  We have many restaurants that have Takeaway feature so you can grab your favorite meal at <br>a go.
    </center>
  </div><hr>
  <div>
    <center>
      <b><h3>Contact Us.</h3></b>
      Feel free to contact with us at our Helpline no. <b>7068987538,8574925398,8273176768</b><br>
      For any Suggestions/Queries kindly mail us at <b>FoodZumbo@gmail.com</b><br><br>
    </center>
  </div>
</div>
</footer>

</body>
</html>