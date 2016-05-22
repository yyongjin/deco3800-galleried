<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Ephemeral Traces</title>
<link rel="stylesheet" href="style/main.css">
<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://www.artmuseum.uq.edu.au/misc/favicon.ico" type="image/vnd.microsoft.icon" />
<script src="js/java.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="style/lightbox.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>
(function($) {
    $(document).ready(function () {
        /*-------------------- EXPANDABLE PANELS ----------------------*/
        var panelspeed = 500; //panel animate speed in milliseconds
        var totalpanels = 3; //total number of collapsible panels
        var defaultopenpanel = 0; //leave 0 for no panel open
        var accordian = false; //set panels to behave like an accordian, with one panel only ever open at once      
 
        var panelheight = new Array();
        var currentpanel = defaultopenpanel;
        var iconheight = parseInt($('.icon-close-open').css('height'));
        var highlightopen = true;
 
        //Initialise collapsible panels
        function panelinit() {
                for (var i=1; i<=totalpanels; i++) {
                    panelheight[i] = parseInt($('#cp-'+i).find('.expandable-panel-content').css('height'));
                    $('#cp-'+i).find('.expandable-panel-content').css('margin-top', -panelheight[i]);
                    if (defaultopenpanel == i) {
                        $('#cp-'+i).find('.icon-close-open').css('background-position', '0px -'+iconheight+'px');
                        $('#cp-'+i).find('.expandable-panel-content').css('margin-top', 0);
                    }
                }
        }
 
        $('.expandable-panel-heading').click(function() {
            var obj = $(this).next();
            var objid = parseInt($(this).parent().attr('ID').substr(3,2));
            currentpanel = objid;
            if (accordian == true) {
                resetpanels();
            }
 
            if (parseInt(obj.css('margin-top')) <= (panelheight[objid]*-1)) {
                obj.clearQueue();
                obj.stop();
                obj.prev().find('.icon-close-open').css('background-position', '0px -'+iconheight+'px');
                obj.animate({'margin-top':0}, panelspeed);
                if (highlightopen == true) {
                    $('#cp-'+currentpanel + ' .expandable-panel-heading').addClass('header-active');
                }
            } else {
                obj.clearQueue();
                obj.stop();
                obj.prev().find('.icon-close-open').css('background-position', '0px 0px');
                obj.animate({'margin-top':(panelheight[objid]*-1)}, panelspeed);
                if (highlightopen == true) {
                    $('#cp-'+currentpanel + ' .expandable-panel-heading').removeClass('header-active');
                }
            }
        });
 
        function resetpanels() {
            for (var i=1; i<=totalpanels; i++) {
                if (currentpanel != i) {
                    $('#cp-'+i).find('.icon-close-open').css('background-position', '0px 0px');
                    $('#cp-'+i).find('.expandable-panel-content').animate({'margin-top':-panelheight[i]}, panelspeed);
                    if (highlightopen == true) {
                        $('#cp-'+i + ' .expandable-panel-heading').removeClass('header-active');
                    }
                }
            }
        }
        
       //Uncomment these lines if the expandable panels are not a fixed width and need to resize
       /* $( window ).resize(function() {
          panelinit();
        });*/
 
        $(window).load(function() {
            panelinit();
        }); //END LOAD
    }); //END READY
})(jQuery);
</script>

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
    <a href="#">PAST EXHIBITIONS</a>
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
	
	<div id="ephemeral">
	
		<div id="homepage">
			<a href="images/homepage.jpg" data-lightbox="image1">
			<img id="homeimage" src="images/homepage.jpg"></a>
		</div>
	
		<div id="eleft">

		
		<div id="emain">
		<img class="lefticons" src="images/calendar.png">  2 April 2016 - 26 June 2016<br>
		<img class="lefticons" src="images/clock.png">  10.00 am - 4.00 pm
		</div>
		</div>
	
		<div id="eright">
		<img class="rightname" src="images/ephemeral-traces.jpg">
		
		</div>
		
		<hr>
		
		<div id="centermain">
		
		
		<div id="p1">	Jeanelle Hurst<br>
		Highrise Wallpaper 1988 <br>
		Documentation of the project 'InterFace 88: City as a work of art', Brisbane. <br>
		Collection of Jeanelle Hurst. Reproduced courtesy of the artist. <br></div>
		
		<p id="p2"><br>
		ephemeral traces provides the first comprehensive analysis of artist-run practice in Brisbane during the final decade of the conservative Joh Bjelke-Petersen government. <br>
		The exhibition focuses on the scene that developed around five key spaces that operated in Brisbane from 1982 to 1988: One Flat, A Room, That Space, The Observatory, and John Mills National.<br>
		Drawing on artworks, documentation and ephemera, the exhibition provides a contextual account of this progressive artist-run activity, examining collective projects, publications and the spaces themselves, as well as organisations such as the Artworkers Union and Queensland Artworkers Alliance.<br>
		A counterpoint to Michele Helmrich's earlier exhibition Return to sender (UQ Art Museum, 2012), which focused on the artists who left Queensland during the Bjelke-Petersen era, this exhibition is about the artists who stayed.
		<br><br>
		<b>Curator: Peter Anderson</b>
		</p>
		<br>
		
		
		<div id="mainleft">
		<p id="p3">
			
			  <div id="collapse-container">
    <div class="expandable-panel" id="cp-1">
        <div class="expandable-panel-heading">
            <h2>Opening<span class="icon-close-open"></span></h2>
         </div>
        <div class="expandable-panel-content">
            Friday 8 April 6.15 for 6.30 pm<br>
			to be opened by<br>
			Aileen Burns and Johan Lundh<br>
			Executive Co-Directors and Curators of the Institute of Modern Art<br><br>
			
        </div>
    </div>
 
    <div class="expandable-panel" id="cp-2">
        <div class="expandable-panel-heading">
            <h2>Public Program<span class="icon-close-open"></span></h2>
         </div>
        <div class="expandable-panel-content">
           Saturday 9 April 2.00 - 3.30 pm<br>
			Artist-run initiatives: DIY change agents?<br>
			Curator Peter Anderson and artists Virginia Barratt, Brian Doherty, Jeanelle Hurst and Jay Younger reflect on the Brisbane scene and its socio-cultural context.<br><br>
			Free. All are welcome. <br>
			<a href="https://uqcurrent.custhelp.com/ci/documents/detail/5/639/12/799fca43395e3c81679c04e71fe9d7a453dbd4db">RSVP Friday 1 April</a>
 
        </div>
  </div>
 
  
 
</div>
        
		</div>
		
		<div id="mainright">
			
			<p class="maintitle">Media</p>
			
			UQ News Story <a href="https://www.uq.edu.au/news/article/2016/03/brisbane%E2%80%99s-1980s-alternative-arts-scene-revisited-exhibition">here</a><br>
			Images for News and Review <a href="http://www.artmuseum.uq.edu.au/filething/get/15175/ephemeral%20traces%20images%20for%20media.pdf">here</a><br><br>	
			
			Peter Anderson's work was supported by a Siganto Foundation Fellowship granted by State Library of Queensland for research conducted in the Australian Library of Art. <br><br>

 			<img class="rightname" src="images/aca_logo.jpg"><br><br><br><br>
 			
 			This project has been assisted by the Australian Government through the Australia Council, its arts funding and advisory body.
			
			
		</div>
		
		
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