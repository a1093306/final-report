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
  tr:nth-of-type(even){
    background-color: #76dd55;
    vertical-align:middle;
  }tr:nth-of-type(odd){
    background-color: #FFFFFF;
    vertical-align:middle;
  }
  tr{
    width: 180px;
    height: 50px;
    vertical-align:middle;
  }
  
  .tdBlack{
    font-size: 22px;
    color:black;
    vertical-align:middle;
    text-align:center;
    overflow:hidden;
  }
  .input1{
    border: 0;
    outline:none;
    background-color: rgba(0, 0, 0, 0);
    color:#000;
  }
  button{
    background-color: rgba(0, 0, 0, 0);
    border:0;
    cursor:pointer;
  }
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div  style="background:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 33%,#bbf0aa 33%,  #bbf0aa 100%);"> 
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
  <!-- ################################################################################################ -->

      <!-- ################################################################################################ -->
      <br/><br/>
      <div class="hoc">
      <?php
        session_start();
        require("DBconnected.php");
        $aNo = $_GET['aNo'];
        $SQL="SELECT * FROM article WHERE aNo='$aNo'";

        if ($result=mysqli_query($link, $SQL)){
            echo "<table border='1' style='border:2px #000000 solid;' cellpadding='5'>";
            echo "<td class='tdBlack'></td>";
            echo "<td class='tdBlack'>??????</td>";
            echo "<td class='tdBlack'>NPO??????</td>";
            echo "<td class='tdBlack'>????????????</td>";
            echo "<td class='tdBlack'>??????</td>";
            echo "<td class='tdBlack'></td>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<form action='updateArticleConfirm.php' method = 'post' style = 'width: 100%;' enctype = 'multipart/form-data'>";
                echo "<tr>";
                echo "<td class='tdBlack'><input type='hidden' name='aNo' value='".$row['aNo']."'>".$row["aNo"]."</td>";
                echo "<td class='tdBlack'><input type='text' class='input1' style='width: 150px;' name='aTitle' placeholder='".$row['aTitle']."' required></td></td>";
                echo "<td class='tdBlack'><input type='text' class='input1' style='width: 240px;' name='aNPO' placeholder='".$row['aNPO']."' required></td>";
                echo "<td class='tdBlack'><input type='text' class='input1' style='width: 165px;' name='aDate' onfocus=(this.type='date') id='date'></td>"; 
                echo "<td class='tdBlack' style='width:70px;'><input type='text' class='input1' style='font-size:15px;width: 120px;' name='aUrl' required></td>";
                echo "<td class='tdBlack'style='color: #345998;'><button type='submit'><u>??????</u></button></td>";
                echo "</tr>";
            } 
            echo "</table>";
            echo "</form>";
        }
    ?>
    </div>
    <div class="inspace-50"></div>
      <!-- ################################################################################################ -->
    
  </div>
  <!-- ################################################################################################ -->
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