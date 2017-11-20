<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
<style type="text/css">
#container {
	height: 700px;
	width: 1024px;
	margin-right: auto;
	margin-left: auto;
}
#main #contentOne {
	float: left;
	height: 465px;
	width: 420px;
	background-color: #292931;
}
#main #contentTwo {
	float: right;
	height: 465px;
	width: 570px;
	background-color: #292931;
}
#main #contentThree {
	float: right;
	height: 50px;
	width: 1024px;
	background-color: #292931;
	clear: none;
}
header {
	height: 125px;
	width: 1024px;
	color: #FFF;
	background-color: #000;
}
#titleBar {
	height: 35px;
	width: 1024px;
}
#topNav {
	height: 35px;
	width: 1009px;
	padding-top: 5px;
	padding-left: 15px;
}
#topNav a:hover {
	text-decoration: line-through;
	border: 2px none #000;
	color: #FF3;
	font-style: normal;
	font-weight: normal;
	text-transform: uppercase;
}
#topNav a {
	text-transform: uppercase;
	color: #FFF;
	text-decoration: none;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: bold;
	display: inline-block;
	margin-right: 15px;
	padding-top: 10px;
	font-size: 15px;
}
#main {
	height: 448px;
	width: 1024px;
}
body{
	background: #292931;	
	}
#form2 div table tr td {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	color: #000;
}
footer {
	color: #FFF;
	padding-right: 40px;
	padding-left: 340px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	border: thin solid #000;
	background-color: #000;
}
#Button{
	height: 20pn;
	width: 155px;
	background-color: #C00;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	font-family: Arial, Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #000;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 50px;
	-webkit-transition: all 0.2s ease 0s;
	-moz-transition: all 0.2s ease 0s;
	-ms-transition: all 0.2s ease 0s;
	-o-transition: all 0.2s ease 0s;
	transition: all 0.2s ease 0s;
	margin-left: 100px;
	margin-left: 425px;
	
	}
#Button:hover {
	background-color: #FFF;
}
#container #main #contentTwo #form3 div table tr td {
	font-family: Verdana, Geneva, sans-serif;
	color: #FFF;
	border-top-style: groove;
	border-right-style: groove;
	border-bottom-style: groove;
	border-left-style: groove;
}
#container #main #contentTwo #form3 div {
	font-family: Verdana, Geneva, sans-serif;
	color: #FFF;
}
</style>
</head>



<body>

<div id="container"><header><img src="Header.jpg" width="1024" height="125" alt="headerimg" /></header>
  <title> Transparent Navbar </title>
  
  <nav id="topNav">
  <a href="#">Home</a> 
  <a href="#"></a>
  <a href="#"></a>  
  <a href="#"> Futsal Court </a>
  <a href="#"></a> 
  <a href="#"></a>  
  <a href="#"> Reservations </a>
  <a href="#"></a>
  <a href="#"></a>   
  <a href="#"> Events </a>
  <a href="#"></a>
  <a href="#"></a>   
  <a href="#"> Contact Us </a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"> Login </a></nav><!-- end topNav -->

  <div id="main">
  <div id="contentOne">
    <form id="form1" name="form1" method="post" action="">
      <p align="center">
      <script src="./js/jquery-1.10.2.min.js">
</script>
<link rel="stylesheet" 
href="./js/jquery-ui.min.css"/>
<script src="./js/jquery-ui.min.js"></script>

<style type="text/css">
.calendar_block {
    box-shadow: 0 0 5px 5px #dcdcdc;
    background-color:#666;
    float: left;
}

.calendar {
    padding:20px;
}

.calendar .ui-widget-header {
    border:none;
    background:none;
}

.calendar .ui-datepicker {
    border: 3px solid #fff;
    padding:10px 30px 10px;
}

.calendar .ui-corner-all {
    border-radius:10px;
}

.calendar .ui-widget-content {
    background: none;
}

.calendar .ui-datepicker-calendar {
   color: #fff;
}

.calendar .ui-state-hover {
   background-color: #fff !important;
   color: #FF8800 !important;
}

.calendar .ui-state-default {
    text-align:center;
    background: none;
    color: #fff;
    width:40px;
    padding:10px 0 10px 0;
}

 </style>
 <div class="calendar_block">
    <div class="calendar"></div>
</div>
 <div align="center">
   <script>
    $(".calendar").datepicker(
	{
		firstDay: 1,
		dayNamesMin: [ "sun","mon", "tue", 
		"wed", "thu", "fri", "sat" ]
		});
      </script>      
   </p>
 </div>
    </form>
  </div>
  <!-- end contentOne -->
  
  <div id="contentTwo">
    <form id="form2" name="form2" method="post" action="">
      <div align="center">
        <p>&nbsp;</p>
        <table width="558" border="0.5">
          <tr bgcolor="#FFFF99">
            <td colspan="2" bgcolor="#FFFF66"> <b><center>eFutebol Futsal</center></b> </td>
            </tr>
          <tr>
            <td width="283" bgcolor="#FFFF99" style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;"><input name="radio" type="radio" id="radio" value="radio" />
              <label for="radio">7.00 am - 8.00 am</label></td>
            <td width="265" bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio9" value="radio" />
            3.00 pm - 4.00 pm</span></td>
            </tr>
          <tr>
            <td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio2" value="radio" />
            8.00 am - 9.00 am</span></td>
            <td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio10" value="radio" />
            4.00 pm - 5.00 pm</span></td>
            </tr>
          <tr>
            <td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio3" value="radio" />
            9.00 am - 10.00 am</span></td>
            <td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio11" value="radio" />
            5.00 pm - 6.00 pm</span></td>
            </tr>
          <tr>
            <td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio4" value="radio" />
            10.00 am - 11.00 am</span></td>
            <td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio12" value="radio" />
            6.00 pm - 7.00 pm</span></td>
            </tr>
          <tr>
            <td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio5" value="radio" />
            11.00 am - 12.00 pm</span></td>
            <td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio13" value="radio" />
            7.00 pm - 8.00 pm</span></td>
            </tr>
          <tr>
            <td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio6" value="radio" />
            12.00 pm - 1.00 pm</span></td>
            <td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio14" value="radio" />
            8.00 pm - 9.00 pm</span></td>
            </tr>
          <tr>
            <td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio7" value="radio" />
            1.00 pm - 2.00 pm</span></td>
            <td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio15" value="radio" />
            9.00 pm - 10.00 pm</span></td>
            </tr>
          <tr>
            <td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio8" value="radio" />
            2.00 pm - 3.00 pm</span></td>
            <td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
              <input name="radio" type="radio" id="radio16" value="radio" />
            10.00 pm - 11.00 pm</span></td>
            </tr>
        </table>
      </div>
    </form>
    <form id="form3" name="form3" method="post" action="">
      <div align="left"><br />
        Court Availability<br />
        <table width="565" border="0.5">
          <tr>
            <td width="112"><div align="center">
              <input type="checkbox" name="checkbox" id="checkbox" />
              <label for="checkbox"></label>
            </div></td>
            <td width="111"><div align="center">
              <input type="checkbox" name="checkbox2" id="checkbox2" />
              <label for="checkbox2"></label>
            </div></td>
            <td width="108"><div align="center">
              <input type="checkbox" name="checkbox3" id="checkbox3" />
              <label for="checkbox3"></label>
            </div></td>
            <td width="100"><div align="center">
              <input type="checkbox" name="checkbox4" id="checkbox4" />
              <label for="checkbox4"></label>
            </div></td>
            <td width="112"><div align="center">
              <input type="checkbox" name="checkbox5" id="checkbox5" />
              <label for="checkbox5"></label>
            </div></td>
            </tr>
          <tr>
            <td><div align="center">A</div></td>
            <td><div align="center">B</div></td>
            <td><div align="center">C</div></td>
            <td><div align="center">D</div></td>
            <td><div align="center">E</div></td>
            </tr>
        </table>
      </div>
      <p>&nbsp;</p>
    </form>
    <form id="form4" name="form4" method="post" action="">
      
    </form>
    <p>&nbsp;</p>
  </div>
  <!-- end contentTwo -->
  
    <div id="contentThree">
    <form id="form2" name="form2" method="post" action="">
        <div id="Button"><b>Booking</b></div>
    </form>
  </div><!-- end contentThree -->
 
</div><!--  end main -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<footer>
<nav id"bottomNav">Designed by Anati Radzi © 2017 eFutebol. All Rights Reserved.</nav>
</footer>

</div><!-- end container -->

</body>
</html>
