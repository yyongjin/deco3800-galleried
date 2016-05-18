
object.onreset=function(){myScript};
object.addEventListener("reset", myScript);


$(document).ready(function(){
  setTimeout(function(){
        $.get("check.php", function(data){
        if(data==0) window.location.href="logout.php";
        });
    },1*60);
});


function checkIfTimedOut()
{
	$current = time();// take the current time
	$diff = $current - $_SESSION['loggedAt'];
	if($diff &gt; $_SESSION['timeOut'])
	{
		return true;
	}
	else
	{
		return false;
		$_SESSION['loggedAt']= time();// update last accessed time
	}
}


$(function() { //doc ready
    if (!($.browser == "msie" && $.browser.version < 7)) {
        var target = "#drupal", top = $(target).offset().top - parseFloat($(target).css("margin-top").replace(/auto/, 0));
        $(window).scroll(function(event) {
            if (top <= $(this).scrollTop()) {
                $(target).addClass("fixed");
            } else {
                $(target).removeClass("fixed");
            }
        });
    }
});