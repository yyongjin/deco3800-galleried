<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Exhibitions</title>
<link rel="stylesheet" href="style/main.css">
<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://www.artmuseum.uq.edu.au/misc/favicon.ico" type="image/vnd.microsoft.icon" />
<script src="js/java.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="style/lightbox.css">
<script>
function openTabs(evt, pName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tabcontent.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(pName).style.display = "block";
    evt.currentTarget.className += " active";
}</script>

</head>

<div id="drupal">
	<img id="drupalimg" src="images/drupal.png">
	</div>

<div id="banner">
	<img id="bannerimg" src="images/banner.png">
	</div>
	
	<div id="menu-container">
	<div id="banner-div-menu">
	<button id="btnhome" class="btns"><a href="index.php">HOME</a></button>
	
	<div id="dbaboutus">
	<button id="btnaboutus" class="btns"><a href="#">ABOUT US</a></button>
	<div id="dropdown-about">
    <a href="#">VISITING THE ART MUSEUM</a>
    <a href="#">OUR HISTORY</a>
    <a href="#">JAMES AND MARY EMELIA MAYNE CENTRE</a>
    <a href="#">BOARD AND DIRECTORATE</a>
    <a href="#">UAMA</a>
  	</div>
  	</div>
  	
  	<div id="dbexhibition">
	<button id="btnexhibition" class="btns"><a href="#">EXHIBITIONS</a></button>
	<div id="dropdown-exhibition">
	<a href="add.php">ADD EXHIBITIONS</a>
    <a href="current.php">CURRENT EXHIBITIONS</a>
    <a href="#">COMING SOON</a>
    <a href="past.php">PAST EXHIBITIONS</a>
  	</div>
  	</div>
	
	<div id="dbprogram">
	<button id="btnprogram" class="btns"><a href="#">PUBLIC PROGRAMS AND EDUCATION</a></button>
	<div id="dropdown-program">
    <a href="#">20-21 APRIL. 'DETERMINED TO BE MODERN: THE EARLY WORK OF SIDNEY NOLAN' AND 'ART, LOVE AND LITERATURE'</a>
    <a href="#">29 APRIL. 'ALL MY JANUARIES' BOOK LAUNCH AND HIGH TEA</a>
    <a href="#">8-9 APRIL. OPENING WEEKEND 'EPHEMERAL TRACES'</a>
    <a href="#">LEARNING</a>
    <a href="#">PODCASTS</a>
    <a href="#">PUBLIC LECTURE SERIES</a>
    <a href="#">&rsaquo; DAPHNE MAYO LECTURE</a>
    <a href="#">&rsaquo; MAYNE CENTRE LECTURE</a>
  	</div>
  	</div>
	
	<div id="dbcollections">
	<button id="btncollections" class="btns"><a href="#">COLLECTIONS</a></button>
	<div id="dropdown-collections">
    <a href="#">ABOUT THE COLLECTION</a>
    <a href="#">SEARCH THE COLLECTION</a>
    <a href="#">NATIONAL COLLECTION OF SELF PORTRAITS</a>
    <a href="#">THE STUARTHOLME-BEHAN COLLECTION</a>
    <a href="#">COPYRIGHT AND COLLECTION POLICIES</a>
    <a href="#">GIFTED COLLECTIONS</a>
    <a href="#">ON-CAMPUS ART PROGRAM</a>
    <a href="#">THE ALUMNI FRIENDS OF UQ COLLECTION STUDY ROOM</a>
  	</div>
  	</div>
	
	<div id="dbinvolved">
	<button id="btninvolved" class="btns"><a href="#">GET INVOLVED</a></button>
	<div id="dropdown-involved">
    <a href="#">CULTURAL GIFTS AND BEQUEST</a>
    <a href="#">DONATE</a>
    <a href="#">EDUCATION APPEAL: DONATE TODAY</a>
    <a href="#">STUDENT OPPORTUNITIES</a>
    <a href="#">STUDENT VOLUNTEERS</a>
    <a href="#">THE DIRECTOR'S CIRCLE</a>
  	</div>
  	</div>
	
	<div id="dbcontact">
	<button id="btncontact" class="btns"><a href="#">CONTACT</a></button>
	<div id="dropdown-contact">
    <a href="#">BOOKSHOP</a>
    <a href="#">EVENT HIRE</a>
    <a href="#">STAFF LIST</a>
    <a href="#">JOIN</a>
  	</div>
  	</div>
	
	<button id="btnblog" class="btns"><a href="#">BLOG</a></button>
	
	</div> 
	</div>
	
	<body>
	<div id="top">
	<img id="topimg" src="images/top.png">
	</div>
	
	
	<div id="pastpage">

	<div id="pasttabs">
	
	<ul class="tabs">
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2004')">2004</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2005')">2005</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2006')">2006</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2007')">2007</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2008')">2008</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2009')">2009</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2010')">2010</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2011')">2011</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2012')">2012</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2013')">2013</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2014')">2014</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2015')">2015</a></li>
  		<li class="productli"><a href="#" class="tablinks" onclick="openTabs(event, '2016')">2016</a></li>
	</ul>

	<div id="2004" class="tabcontent">
	
  		<div class="exhibitiontitle">2004 Exhibitions</div>
		
  		
	</div>

	<div id="2005" class="tabcontent">
	
  		<div class="exhibitiontitle">2005 Exhibitions</div>
		
  		
	</div>
	
	<div id="2006" class="tabcontent">
	
  		<div class="exhibitiontitle">2006 Exhibitions</div>
		
  		
	</div>
	
	<div id="2007" class="tabcontent">
	
  		<div class="exhibitiontitle">2007 Exhibitions</div>
		
  		
	</div>
	
	<div id="2008" class="tabcontent">
	
  		<div class="exhibitiontitle">2008 Exhibitions</div>
		
  		
	</div>
	
	<div id="2009" class="tabcontent">
	
  		<div class="exhibitiontitle">2009 Exhibitions</div>
		
  		
	</div>
	
	<div id="2010" class="tabcontent">
	
  		<div class="exhibitiontitle">2010 Exhibitions</div>
		
  		
	</div>
	
	<div id="2011" class="tabcontent">
	
  		<div class="exhibitiontitle">2011 Exhibitions</div>
		
  		
	</div>
	
	<div id="2012" class="tabcontent">
	
  		<div class="exhibitiontitle">2012 Exhibitions</div>
		
  		
	</div>
	
	<div id="2013" class="tabcontent">
	
  		<div class="exhibitiontitle">2013 Exhibitions</div>
		
  		
	</div>
	
	<div id="2014" class="tabcontent">
	
  		<div class="exhibitiontitle">2014 Exhibitions</div>
		
  		
	</div>
	
	<div id="2015" class="tabcontent">
	
  		<div class="exhibitiontitle">2015 Exhibitions</div>
		
  		
	</div>
	
	<div id="2016" class="tabcontent">
	
  		<div class="exhibitiontitle">2016 Exhibitions</div>
		
  		
	</div>
	
	
	
	</div>

</div>





	
	
<script src="js/lightbox.js"></script>

<div id="btm">
	<img id="btmimg" src="images/btm.png">
	</div>
</body>
<footer>
<div id="footer">
	<img id="footerimg" src="images/footer.png">
	</div>
</footer>
</html>