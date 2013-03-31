<?php

@$http_referer = $_SERVER['HTTP_REFERER'];

?>

<html>
<head>
<title>National Youth Party</title>

<meta http-equiv="X-UA-Compatible" content="IE=9" />

<link rel="stylesheet" type="text/css" href="css/template.css" />
<link rel="stylesheet" type="text/css" href="css/youthagenda.css" />

<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
<script>
function appearleft(id)
{

	$("#" + id).show();
	$("#" + id).animate({opacity: 1, display: "block" }, "slow");

}
function disappearleft(id)
{

	  $('#' + id).hide("slow", function(){
  $('#' + id).css('opacity', '0');
	});

}
</script>
<script>
  $(document).ready( function(){
    $(".submenu").hide();
    $(".menu").hover(
	  function(){
	     //$("a", this).animate({ backgroundColor: 'blue'}, "slow");
	     $(".fix", this).animate({ height: 'show',width:'show', opacity: 'show' }, 'slow');
	  }, function(){
	    $(".fix", this).animate({ height: 'hide',width:'show', opacity: 'hide' }, 'fast');
		//$("a", this).animate({ backgroundColor: '#005CE6'}, "slow");
	  }
	);
  }
  );
  
  $(document).ready(
    function(){
	  $('.thumb').hover(
	    function(){
		  $("img", this).animate({height: '60px' , width:'60px', position:'absolute'}, 'fast');
		}, function(){
		  $("img", this).animate({height: '48px', width: '48px'}, 'fast');
		}
	  );
	}
  );
</script>
<script>
  function joinForm(){
    $('#form').show();
	$('#form').animate({opacity: 1 }, 'slow');
	 $.ajaxSetup({
             url: "ajax/form.php"
          });
     $.ajax( {
	         
             success:function(data) {
                $('#form').html(data);
				$("#age, #number").keyup(
	              function(){
		            if(!($.isNumeric($('#age, #number').val())) && $('#age, #number').val() != ""){
					  alert("Please enter numbers only!");
					}
	              }
	            );
             }
          });
     
  }
  
  function formClose(){
    $('#form').hide("slow", function(){
	  $('#form').css('opacity', '0');
	});
  }
  
  function submitForm(){
     if($('.elements input').val() == "" ){
	   alert("Please fill all the fields!");
	 }
	 else if($('#captcha').val() != "HUMAN" ){
	   alert("Please enter the correct captcha!");
	 }
	 else{
	   $.post("ajax/submit.php",{ name: $('#name').val(), fName: $('#fName').val(),sex: $('#sex').val(),age: $('#age').val(),address: $('#address').val(),state: $('#state').val(),district: $('#district').val(),number: $('#number').val() },
            function(data){
			    
                $('fieldset').html(data);
            }, "html");
	 }
	 
  }
</script>
<script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</script>
</head>

<body >
			<div id="askquesdiv">
			<img src="images/close.png" onclick="disappearleft('askquesdiv');"/>
				<div id="askquesheader">
					ASK YOUR QUESTION RELATED TO OUR PARTY OR ON A PARTICULAR AGENDA HERE:
				</div>
				<div id="askquescontent">
					<form action="index.php" method="post">
					<label for="question">Question:</label><br>
					<textarea id="question"  placeholder="enter your question here"></textarea><br>
					<label for="questionname">Name:</label>
					<input type="text" id="questionname" placeholder="Your Name" /><br>
					<label for="questionemail" id="questionemail"  >Email:</label>
					<input type="text" id="questionemail" id="questionemail" placeholder="Your Email" /> 
					<input type="submit" value="Submit Question" id="submitquestion"/>
					</form>
				</div>
			</div>
			<div id="shareideadiv">
			<img src="images/close.png" onclick="disappearleft('shareideadiv');"/>
				<div id="shareideaheader">
					PLACE YOUR IDEAS FOR OUR PARTY HERE:
				</div>
				<div id="shareideacontent">
					<form action="index.php" method="post">
					<label for="idea">Your Ideas:</label><br>
					<textarea id="question"  placeholder="enter your ideas here"></textarea><br>
					<label for="sharename">Name:</label>
					<input type="text" id="sharename" placeholder="Your Name" /><br>
					<label for="shareemail" id="shareemail" placeholder="Your Email" >Email:</label>
					<input type="text" id="questionemail" id="questionemail" placeholder="Your Email" />
					<input type="submit" value="Submit Your Idea" id="sharesubmit"/>
					</form>
				</div>
			</div>
<!--------------------------invisible---------------------------->
<div class="right">
<div id="staticlinks">
<a class="thumb" href="https://www.facebook.com/" target="_blank"><div class="sIfix"><img src="images/60/facebook.png"/></div></a>
<a class="thumb" href="https://www.twitter.com/" target="_blank"><img src="images/60/twitter.png" /></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="images/60/youtube.png" /></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="images/60/feed.png" /></a>
<a class="thumb" href="https://www.google.com/" target="_blank"><img src="images/60/google.png" /></a>

</div>
<div id="leftPanel">
  
  <a href="JavaScript:void(0);" onclick="appearleft('askquesdiv');"><img src="images/left/ask.png"  /></a><br>
  <a href="JavaScript:void(0);" ><img src="images/left/share.png" onclick="appearleft('shareideadiv')"/></a><br>
  <a href="http://google.com"><img src="images/left/developer.png" alt="Developers"/></a>
</div>
</div>
<div id="indexwebsite">
  <div id="imageheaderdiv" class="center"> 
		<img src="./images/header.png">
		</div>
	<div id="indexwebsite2" style="background-color:#ffffff" class="center">
	
		
		<div id="navmenudiv"  style="z-index:10;">
		<ul class="navmenu" style="margin-left:0.3%;">
			<li class="menu" style="border-left:2px solid #E65C00;"><a href="index.php">Home</a></li>
			<li class="menu"><a href="about.php">About</a></li>
			<li class="menu"><a href="JavaScript:void(0);">Our Agenda&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu fix">
					<li style="padding-top:1.16em;line-height:2.5em;" class="submenufirst"><a href="generalagenda.php">General</a></li>
					<li><a href="youthagenda.php">Youth</a></li>
					<li><a href="JavaScript:void(0);">Deprived Section</a></li>
					<li><a href="JavaScript:void(0);">Common Man</a></li>
				</ul>
			</li>
			<li class="menu"><a href="JavaScript:void(0);">Organistion&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu fix">
					<li style="padding-top:1.16em;line-height:2.5em;" class="submenufirst"><a href="JavaScript:void(0);">Our President</a></li>
					<li><a href="JavaScript:void(0);">Our Core Committee</a></li>
					<li><a href="JavaScript:void(0);">Our State Committee</a></li>
				</ul>
			</li>
			<li class="menu"><a href="JavaScript:void(0);">Centres&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu fix">
					<li style="padding-top:1.16em;line-height:2.5em;" class="submenufirst"><a href="JavaScript:void(0);">North India</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Jammu & Kashmir</a></li>
							<li><a href="centrenotavailable.php">Himachal Pradesh</a></li>
							<li><a href="centrenotavailable.php">Uttarakhand</a></li>
							<li><a href="centrenotavailable.php">Punjab</a></li>
							<li><a href="centrenotavailable.php">Haryana</a></li>
							<li><a href="centrenotavailable.php">Delhi</a></li>
							<li><a href="centrenotavailable.php">Uttar Pradesh</a></li>
							<li><a href="centrenotavailable.php">Bihar</a></li>
						</ul>
					</li>
					<li><a href="JavaScript:void(0);">West</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Rajasthan</a></li>
							<li><a href="centrenotavailable.php">Gujarat</a></li>
						</ul>
					</li>
					<li><a href="JavaScript:void(0);">East</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Sikkim</a></li>
							<li><a href="centrenotavailable.php">Assam</a></li>
							<li><a href="centrenotavailable.php">West Bengal</a></li>
							<li><a href="centrenotavailable.php">Mizoram</a></li>
							<li><a href="centrenotavailable.php">Meghalaya</a></li>
							<li><a href="centrenotavailable.php">Arunachal Pradesh</a></li>
							<li><a href="centrenotavailable.php">Tripura</a></li>
							<li><a href="centrenotavailable.php">Nagaland</a></li>
							<li><a href="centrenotavailable.php">Manipal</a></li>
						</ul>
					</li>
					<li><a href="JavaScript:void(0);">South</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Maharashtra</a></li>
							<li><a href="centrenotavailable.php">Karnataka</a></li>
							<li><a href="centrenotavailable.php">Goa</a></li>
							<li><a href="centrenotavailable.php">Orrisa</a></li>
							<li><a href="centrenotavailable.php">Andhra Pradesh</a></li>
							<li><a href="centrenotavailable.php">Kerela</a></li>
							<li><a href="centrenotavailable.php">Tamil Nadu</a></li>
						</ul></li>
					<li><a href="JavaScript:void(0);">Central</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Madhya Pradesh</a></li>
							<li><a href="centrenotavailable.php">Jharkhand</a></li>
							<li><a href="centrenotavailable.php">Chattisgarh</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="menu"><a href="JavaScript:void(0);">News</a></li>
			<li class="menu"><a href="gallery.php">Gallery</a></li>
			<li class="menu"><a href="JavaScript:void(0);">Contact Us</a></li>
		</ul>
		
		</div>
		<div id="content">
		<center><h2>Our Youth Agenda</h2></center>
		
		<p>Today, Youth look for inspiration to Ideals, at the time of taking important decisions. National Youth Party has chosen Youth Icon Swami Vivekananda, who never fails to inspire the Indian Youth and Guru Govind Singh Ji, who made unparalleled sacrifice as its Ideals and Inspiring Leaders.</p>
		
		<p>National Youth Party has chosen these two great souls as Inspiring Ideals of the Party:</p>
		
		<p><strong>Swami Vivekananda</strong>, in his youth made India proud all over the world by his deep knowledge, character and progressing Nationalism and inspired Indians to a new Renaissance. He made the Youth of his day look at their despair, dependency, illiteracy n customs, suggesting ways and means to counter them.</p>
		
		<p><strong>Guru Govind Singh Ji Maharaj</strong> did not accept the sovereignty of the Moguls nor forsook his society and sacrificed his sons before his own eyes. Our history is full of people, who sacrificed every thing for their country, but Guru Govind Singh Ji made the supreme sacrifice of his sons for the noble cause. Today, we can just imagine about a father, who has such a big heart and who was so full of Nationalism. Such sacrifice of Shri Guru Govind Singh Ji will keep on inspiring Indian Youth always.</p>

		Work culture of National Youth Party is based on clarity of thought and friendship. Whosoever is elder in age and responsibility in the party should be respected, so that the younger in the part get love, affection and cooperation in return. Making this as guiding principle, National Youth Party is working from a small village to the National level. With the expansion of this work culture, we are trying to unite the Youth of this great Country. Youth are friendly, who to-gather can solve every problem facing the Nation. The youth can work towards party�s goal of forming a Young Parliament. Party is committed to achieve its target within the given time frame. Whole of the Party work is based on designated target, designated time and designated person. Party has named this work culture as �Friendly, Frankly, Time Bound and Result Oriented�.
		<center><img src="images/youthagenda/flag.jpg" height="200" width="200"></center><br>
		</div>
	    
	</div>
<div id="footerdiv">
	<div id="footercontactus">
		<p>Contact Us at:</p>
		<p>Mobile: +91-9415424370</p>
		<p>Email:nyp@nationalyouthparty.co.in<br>
		nationalyouthparty@gmail.com</p>
	</div>
	<div id="footerlinks">
	<p>Links:</p>
		<ul>
		<li><a href="JavaScript:void(0);">Home</a></li>
		<li><a href="JavaScript:void(0);">About</a></li>
		<li><a href="JavaScript:void(0);">News</a></li>
		<li><a href="JavaScript:void(0);">Gallery</a></li>
		</ul>
	</div>
	<div id="footercopyright">
		<center>All Rights Reserved by NationalYouthParty  &#169; Copyrights 2013<br>
		Designed By <a href="JavaScript:void(0);">Developers</a></center>
	</div>
</div>


</body>


</html>