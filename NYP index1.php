<?php

if(mysql_connect("localhost","root","") && mysql_select_db("nyp"))
{
	if(isset($_POST['emailregupdates']))
	{
		if(!empty($_POST['emailregupdates']))
		{
			$email=$_POST['emailregupdates'];
			
			$query = "SELECT id FROM regupdates WHERE email='".$email."'";
			if($result=mysql_query($query))
			{
				
				$num_rows = mysql_num_rows($result);
				if($num_rows==0)
				{
					$query = "INSERT INTO regupdates VALUES(NULL,'".$email."')";
					mysql_query($query);
				}
				else if($num_rows>=1)
				{
					echo "already registered";
				}
			}
			else
			{
				echo mysql_error();
			}
		}
	}
	
}
else
{
	echo mysql_error();
}
?>

<html>
<head>
<style>
*
{
	-webkit-transition-property:top,left,width,height;
	-webkit-transition-duration:5s;
	-moz-transition-property:top,left,width,height;
	-moz-transition-duration:5s;
	
	-webkit-transition-property:opacity;
	-webkit-transition-duration:5s;
	-moz-transition-property:opacity;
	-moz-transition-duration:5s;
}
body
{
margin:0px;padding:0px;
overflow-x:hidden;
}
div#staticlinks
{
	position:fixed;
	top:200px;
	right:0px;
	width:3.5%;height:80%;
	z-index:20;
	
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	opacity:1;
}
div#thumbwrap {
	margin:75px auto;
	width:252px; height:252px;
}
.thumb {
	float:left; 
	position:relative;
	margin:3px;
}
.thumb img { 
	border:0 solid #000;
	vertical-align:bottom;
}
.thumb:hover {
	border:0; 
	z-index:1;
}
.thumb span { 
	position:absolute;
	visibility:hidden;
}
.thumb:hover span { 
	visibility:visible;
	top:0px; right:0px; 
}

div#indexopen , div#indexwebsite
{
	background: -webkit-gradient(linear,left top, left bottom,from( #00cbac),to(#ffd672));
	background: -moz-linear-gradient(top , #FF7519, #FFE0CC);
}

div#indexopen 
{
	margin:0px;
	padding:0px;
	opacity:1;
	height:100%;
}  
div#imageopen
{
	background:url('All India Trinamool Congress   Official Party Website   TMC Chairperson Mamata Banerjee   Trinamul.png') -75px 0px;
	position:relative;
	top:55px;
	left:125px;
	width:85%;height:85%;
	border:1px solid gray; 

	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
}
div#regupdatesdiv
{
	padding:5px;
	position:relative;
	top:35px;
	left:10px;
	width:33%;height:12%;
	border:1px solid gray;
	color:#000;
	
	background-color:#996633;
	opacity:0.8;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
}
#submitregupdates
{
	height:30px;
}
div#enterWebsite , #submitregupdates
{
	border:0px;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	background: -webkit-gradient(linear,left top, left bottom,from( #0066FF),to(#99C2FF));
	background: -moz-linear-gradient(top ,  #0066FF,#99C2FF);
}
div#enterWebsite:hover , #submitregupdates:hover
{
	background: -webkit-gradient(linear,left top, left bottom,from( #99FF33),to(#99C2FF));
	background: -moz-linear-gradient(top , #99FF33,#99C2FF);
}
div#enterwebsite
{
	line-height:25px;
	padding:5px;
	position:relative;
	top:400px;
	left:850px;
	width:200px;height:30px;
	display:block; 
	
}
div#emailregupdateshelp
{
	display:none;
}
/*--------------------------------------*/


div#indexwebsite
{
	display:none;
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:1250px;
	//border:1px solid red;
	opacity:0;
	
}
div#indexwebsite2
{
	position:relative;
	margin-left:auto;
	margin-right:auto;
	padding:0px;
	width:85%;
	height:100%;
	
}
div#indexwebsite2 div
{
	position:relative;
	float:left;
	margin-bottom:5px;
}
div#headerdiv
{
	border:1px solid gray;
	background-image:url('bg1.png');
	opacity:0.8;
	display:none;
	padding-left:2px;
	position:absolute;
	top:0px;
	left:0px;
	width:99.8%;height:30px;
}
div#imageheaderdiv
{
	padding:0px;
	border:1px solid gray;
	padding-left:0px;
	top:3px;
	left:0px;
	width:99.8%;height:300px;
	//background-image:url('Party_Header.png');
	border-radius:12px;
	-webkit-border-radius:12px;
	-moz-border-radius:12px;
	-webkit-box-shadow:1px 2px 2px #888888 ;
}
div#imageheaderdiv img
{
	width:100%;
	height:100%;
	border-radius:12px;
	-webkit-border-radius:12px;
	-moz-border-radius:12px;
}
div#navmenudiv
{
	padding:0px;
	padding-top:20px;
	padding-left:0px;
	top:-20px;
	left:10px;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	background: -webkit-gradient(linear,left top, left bottom,from( #005CE6),to(#005CE6));
	background: -moz-linear-gradient(top , #005CE6,#005CE6);
	width:98%;height:70px;
	//overflow-x:hidden;
}
div#newsflashdiv
{
border:1px solid gray;
	padding-left:2px
	left:0px;
	width:70.5%;height:300px;
	margin-right:12px;
	margin-left:0px
}
div#joinformdiv
{
border:1px solid gray;
	padding-left:2px
	left:0px;
	width:27%;height:300px;
}
div#footerdiv
{
	padding-top:5px;
	border:1px solid gray;
	padding-left:2px;
	top:300px;
	left:0px;
	width:99.8%;height:18.5%;
	background-image:url('bg2.png');
	opacity:1;
}
div#footerdiv div
{
	float:left;
	position:relative;
	width:30%;height:99%;
	color:white;
	text-indent:50px;
	padding-left:5px;
}
div#footerdiv div li
{
	list-style-type:none;
}


/*--------------------------------------navMenu---------------------------*/
ul.navMenu ,ul.submenu ,ul.subsubmenu
{
	margin:0px;
	padding:0px;
	list-style-type:none;
}
ul.navmenu li
{
	//outline:1px solid green;
	position:relative;
	float:left;
	width:128px;height:45px;
	line-height:40px;
	
}
ul.navmenu > li
{
	height:55px;
	border-right:2px solid gray;
}
ul.navmenu a
{
	display:block;
	width:125px;height:45px;
	text-decoration:none;
	color:white;
	font-family:"Constantia",Serif;
	font-weight:bold;
	margin-top:3px;
	text-align:center;
}
ul.submenu a
{
	width:200px;
	background: -webkit-gradient(linear,left top, left bottom,from( #005CE6),to(#005CE6));
	background: -moz-linear-gradient(top , #005CE6,#005CE6);
	border-top:1px solid gray;
	border-radius:5px;
	margin-top:3px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
}
ul.subsubmenu 
{
	position:relative;
	top:-47px;
	left:200px;
}
ul.subsubmenu li
{
	padding-left:5px;
}

ul.submenu , ul.subsubmenu
{
	display:none;
}
ul.navmenu  li:hover ul.submenu
{
	display:block;
}

ul.navmenu  ul.submenu li:hover ul.subsubmenu
{
	display:block;
}

/*--------------------------------------navMenu---------------------------*/

</style>
<script>
function resize()
{
	
}
function loadwebsite()
{
	document.getElementById('indexopen').style.display="none";
	document.getElementById('indexwebsite').style.display="block";
	document.getElementById('indexwebsite').style.opacity="1";
	
}
function regexcheckemail()
{
	email = document.getElementById('emailregupdates').value;
	var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z]+.[a-zA-Z.]+/;
	if(email.match(regex))
	{
		document.getElementById('emailregupdateshelp').style.display="none";
		document.getElementById('regupdatesdiv').style.height="12%";
		
	}
	else
	{
		document.getElementById('emailregupdateshelp').style.display="block";
		document.getElementById('regupdatesdiv').style.height="15%";
	}
}

document.captureEvents(Event.MOUSEMOVE);
document.onmousemove=mouseCoord;

var mouseX,mouseY;
function mouseCoord(e)
{
	mouseX=e.pageX;
	mouseY=e.pageY;
	
	if(mouseY<=10)
	{
		document.getElementById('headerdiv').style.display="block";
		
	}
	else if(mouseY>=50)
	{
		document.getElementById('headerdiv').style.display="none";
	}
	
}
</script>
</head>

<body onresize="resize();">
<div id="staticlinks">
</div><div id="staticlinks">
<a class="thumb" href="https://www.facebook.com/" target="_blank"><img src="facebook.png"><span><img src="icon\60 X 60\facebook.png" alt=""></span></a>
<a class="thumb" href="https://www.twitter.com/" target="_blank"><img src="twitter.png"><span><img src="icon\60 X 60\twitter.png" alt=""></span></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="youtube.png"><span><img src="icon\60 X 60\youtube.png" alt=""></span></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="feed.png"><span><img src="icon\60 X 60\feed.png" alt=""></span></a>
<a class="thumb" href="https://www.google.com/" target="_blank"><img src="google.png"><span><img src="icon\60 X 60\google.png" alt=""></span></a>

</div>

<div id="indexopen" >
	<div id="imageopen">
		<div id="regupdatesdiv">
		
		<form  name="regupdatesform" action="NYP index1.php" method="post">
		<label for="emailredupdates">Please Enter your valid email address for constant updates from our party :<br></label>
		<input type="text" name="emailregupdates" id="emailregupdates" onblur="regexcheckemail();"/>
		<input type="submit" name="submitregupdates" id="submitregupdates" value="Add to our Mailling List" />
		<form>
		<div id="emailregupdateshelp">
		invalid email entered
		</div>
		</div>
		
		<div id="enterwebsite" onclick='loadwebsite();'><center>Enter Website </center></div>
	</div>

</div>
<div id="indexwebsite">
	<div id="indexwebsite2">
		<div id="headerdiv">
		header div
		</div>
		<div id="imageheaderdiv"> 
		<img src="Party_Header.png">
		</div>
		<div id="navmenudiv" style="z-index:10">
		<ul class="navmenu">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Our Agenda&nbsp;&#8595;</a>
				<ul class="submenu">
					<li style="padding-top:5px;"><a href="#">General</a></li>
					<li><a href="#">Youth</a></li>
					<li><a href="#">Deprived Section</a></li>
					<li><a href="#">Common Man</a></li>
				</ul>
			</li>
			<li><a href="#">Organistion&nbsp;&#8595;</a>
				<ul class="submenu">
					<li ><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News</a></li>
				</ul>
			</li>
			<li><a href="#">Centres&nbsp;&#8595;</a>
				<ul class="submenu">
					<li ><a href="#">North India</a>
						<ul class="subsubmenu">
							<li><a href="#">Jammu & Kashmir</a></li>
							<li><a href="#">Himachal Pradesh</a></li>
							<li><a href="#">Uttarakhand</a></li>
							<li><a href="#">Punjab</a></li>
							<li><a href="#">Haryana</a></li>
							<li><a href="#">Delhi</a></li>
							<li><a href="#">Uttar Pradesh</a></li>
							<li><a href="#">Bihar</a></li>
						</ul>
					</li>
					<li><a href="#">West</a>
						<ul class="subsubmenu">
							<li><a href="#">Rajasthan</a></li>
							<li><a href="#">Gujarat</a></li>
						</ul>
					</li>
					<li><a href="#">East</a>
						<ul class="subsubmenu">
							<li><a href="#">Sikkim</a></li>
							<li><a href="#">Assam</a></li>
							<li><a href="#">West Bengal</a></li>
							<li><a href="#">Mizoram</a></li>
							<li><a href="#">Meghalaya</a></li>
							<li><a href="#">Arunachal Pradesh</a></li>
							<li><a href="#">Tripura</a></li>
							<li><a href="#">Nagaland</a></li>
							<li><a href="#">Manipal</a></li>
						</ul>
					</li>
					<li><a href="#">South</a>
						<ul class="subsubmenu">
							<li><a href="#">Maharashtra</a></li>
							<li><a href="#">Karnataka</a></li>
							<li><a href="#">Goa</a></li>
							<li><a href="#">Orrisa</a></li>
							<li><a href="#">Andhra Pradesh</a></li>
							<li><a href="#">Kerela</a></li>
							<li><a href="#">Tamil Nadu</a></li>
						</ul></li>
					<li><a href="#">Central</a>
						<ul class="subsubmenu">
							<li><a href="#">Madhya Pradesh</a></li>
							<li><a href="#">Jharkhand</a></li>
							<li><a href="#">Chattisgarh</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#">News</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
		</div>
		<div id="newsflashdiv">
		news
		</div>
		<div id="joinformdiv">
		joinform
		</div>
		<div id="footerdiv">
			<div >
				<span style="color:#FFFFCC;text-align:center;position:relative;width:99%;display:block;">AGENDA</span>
				<ul>
					<li>Jan lokpal</li>
					<li>Right to reject</li>
					<li>Right to recall</li>
					<li>Political decentralization</li>
					<li>Rising Prices</li>
					<li>Others</li>
				</ul>
			</div>
			<div>
				<span style="color:#FFFFCC;text-align:center;position:relative;width:99%;display:block;">OFFFICE BEARERS</span>
				<ul>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
				</ul>
			</div>
			<div>
				<span style="color:#FFFFCC;text-align:center;position:relative;width:99%;display:block;">AGENDA</span>
				<ul>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>


</html>