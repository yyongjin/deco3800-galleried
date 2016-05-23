<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>RSVP</title>
<link rel="stylesheet" href="style/main.css">
<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://www.artmuseum.uq.edu.au/misc/favicon.ico" type="image/vnd.microsoft.icon" />
<script src="js/java.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="style/lightbox.css">

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
	<a href="current.php">ADD EXHIBITIONS</a>
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
	
	
	<div class="rsvpcontainer">
   
                <div class="panel-heading">  
                    <p class="formwords">RSVP</p>  
                </div>  
                
                <div id="rvspimgcont">
				<img id="rsvpimg" src="images/ephemeral-traces.jpg">
				</div>
                
               	<div class="rsvp-panel-body">  
                    <form id="inputform" role="form" method="post" action="#">  
                        <div id="rsvp-left-col">
                        	<p class="leftwords">Title:</p><br>
                        	<p class="leftwords">First Name:</p><br>
                        	<p class="leftwords">Last Name:</p><br>
                        	<p class="leftwords">Email Address:</p><br>
                        </div>
                        
                        <div id="rsvp-right-col">
                        	<div id="holder">
                        	
                        		<div class="form-group">  
                            		<input class="form-control" name="ename" type="text" autofocus>
                        		</div>  <br>
                           
                            	<div class="form-group">  
                                	<input class="form-control" name="ecurator" type="text" autofocus>  
                            	</div>  <br>
                            
                            	<div class="form-group">  
                                	<input class="form-control"  name="aname" type="text" autofocus>  
                            	</div>  <br>
                            	
                            	<div class="form-group">  
                               		<input class="form-control"  name="atype" type="text" autofocus>  
                           		</div>  <br>
                           		
                            	
                    
                    
                    		</div>
                    	</div>
                    	
                    	<div id="rsvp-middle-col">
                    		<p class="midwords"><u>RSVP Opening Friday 8 April 6.15pm</u></p>
                    		<div class="midgroup">
                    		<input id="rad1" type="radio" name="8april" value="yes"><label class="btnrad" for="rad1"> Yes  </label>
                            <input id="rad2" type="radio" name="8april" value="no"><label class="btnrad" for="rad2"> No  </label><br>
                    		</div><br><br>
                    		<p class="midwords">Please indicate how many guests you are bringing to the opening (if any).</p>
                    		<div class="midgroup1">
                    		<input id="rad1" type="radio" name="guest1" value="male"><label class="btnrad" for="rad1"> 1  </label>
                    		<input id="rad1" type="radio" name="guest1" value="male"><label class="btnrad" for="rad1"> 2  </label>
                    		<input id="rad1" type="radio" name="guest1" value="male"><label class="btnrad" for="rad1"> 3  </label>
                            <input id="rad2" type="radio" name="guest1" value="male"><label class="btnrad" for="rad2"> 4  </label><br>
                    		</div><br><br><br>
                    		<p class="midwords"><u>RSVP Public Program Saturday 9 April 2.00 pm</u></p>
                    		<div class="midgroup">
                    		<input id="rad1" type="radio" name="9april" value="yes"><label class="btnrad" for="rad1"> Yes  </label>
                            <input id="rad2" type="radio" name="9april" value="no"><label class="btnrad" for="rad2"> No  </label><br>
                    		</div><br><br>
                    		<p class="midwords">Please indicate how many guests you are bringing to the opening (if any).</p>
                    		<div class="midgroup1">
                    		<input id="rad1" type="radio" name="guest2" value="male"><label class="btnrad" for="rad1"> 1  </label>
                    		<input id="rad1" type="radio" name="guest2" value="male"><label class="btnrad" for="rad1"> 2  </label>
                    		<input id="rad1" type="radio" name="guest2" value="male"><label class="btnrad" for="rad1"> 3  </label>
                            <input id="rad2" type="radio" name="guest2" value="male"><label class="btnrad" for="rad2"> 4  </label><br>
                    		</div><br><br><br>
                    		<p class="midwords">Keep informed of UQ Art Museum's exhibitions, public programs, and events and subscribe here.</p>
                    		<div class="midgroup">
                    		<input id="rad1" type="radio" name="subscribe" value="yes"><label class="btnrad" for="rad1"> Yes  </label>
                            <input id="rad2" type="radio" name="subscribe" value="no"><label class="btnrad" for="rad2"> No  </label><br>
                            </div>
                            
                    	</div>	
                    	
                    	<div class="btngroup">
                            		<input class="formbtn" type="submit" value="Publish" name="publish" >
                            		<button class="formbtn" type="reset" value="Reset">Reset</button>
                            	</div>
                    	
                    </form>  
                    
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