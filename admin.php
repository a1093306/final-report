<!DOCTYPE html>
<!--
Template Name: Decentium
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html>
<head>
<title>FAYA</title>
<link rel="icon" href="img/FAYA_logo.png" type="image/x-icon" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
  .square1{
    border:2px solid #000;
    border-top-left-radius: 50px;
    background-color: #5fbf3b;
    width: 200px;
    height: 200px;
    font-size: 32px;
    display:inline;
    margin-bottom:5px;
  }
  .square1:hover{
    width: 180px;
    height: 180px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    margin: 0 10px;
  }
  .square2{
    border:2px solid #000;
    border-top-right-radius: 50px;
    background-color: #FFF;
    width: 200px;
    height: 200px;
    font-size: 32px;
    display:inline;
    margin-bottom:5px;
  }
  .square2:hover{
    width: 180px;
    height: 180px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    margin: 0 10px;
  }
  .square3{
    border:2px solid #000;
    border-bottom-left-radius: 50px;
    background-color: #FFF;
    width: 200px;
    height: 200px;
    font-size: 32px;
    display:inline;
  }
  .square3:hover{
    width: 180px;
    height: 180px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    margin: 0 10px;
  }
  .square4{
    border:2px solid #000;
    border-bottom-right-radius: 50px;
    background-color: #5fbf3b;
    width: 200px;
    height: 200px;
    font-size: 32px;
    display:inline;
  }
  .square4:hover{
    width: 180px;
    height: 180px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    margin: 0 10px;
  }
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php
    require("DBconnected.php");
    session_start();
    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="Yes"){
            echo "<a href = 'logout.php'><font size ='5'>??????</font><a>";
        }
        else{
            echo "??????????????????";
            exit();
        }
     }else{
        echo "??????????????????";
        exit();
     }
?>
<!-- Top Background Image Wrapper -->
<div  style="background:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 20%,#bbf0aa 20%,  #bbf0aa 100%);"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1 class="heading"><a href="#"><img src="img/FAYA_logo2.jpg" style="width:80px; height: 80px;"><font color="black" size="7">FAYA</font></a></h1>  
     </div>
     <div class ="fl_right">
        <br/>
        <h1 class="heading"><font color="black" size="7">?????????&nbsp&nbsp&nbsp</font><a href="admin.php"><img class="heading" src="img/profile.png" style="width:60px; height: 60px;"></a></h1> 
    </div>
    
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <div class="hoc">
            <div class="inspace-80">
                <center>
                    <button type = "button" class="square1" name="button1"><a href="accountManagement.php" style="color: #FFF;">????????????</a></button>       
                    <button type = "button" class="square2" name="button2"><a href="subscribeManagement.php" style="color: #000;">????????????</a></button> <br/>
                    <button type = "button" class="square3" name="button3" style="border-bottom-left-radius: 50px;"><a href="NPOManagement.php" style="color: #000;">????????????</a></button> 
                    <button type = "button" class="square4" name="button4" style="border-bottom-right-radius: 50px;"><a href="informationManagement.php" style="color: #FFF;">????????????</a></button> 
                </center>
            </div>
            </div>      
        </div>
    </div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">????????????</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          ?????????????????????????????????700???
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +886 0980-689-620</li>
        <li><i class="fa fa-envelope-o"></i> a1093306@mail.nuk.edu.tw</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/FAYA-100346345957025"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-instagram" href="https://www.instagram.com/faya_npo/"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">????????????</h6>
      <p class="nospace btmspace-30">????????????email?????????????????????????????????</p>
      <form method="post" action="mailSend.php">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" name="email" placeholder="Email">
          <button type="submit" value="subscribe">??????</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="https://im.nuk.edu.tw/" target="_blank">NUKIM, Taiwan</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>