<style type="text/css" media="all">

<!--

@import url("https://www.blackpeoplemarketplace.com/ImageWizard/Includes/Scripts/Header/indexCSS.css");




-->

</style>
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/ImageWizard/Includes/db/db_MainConx.php";
   include($path);


session_start();

$user_ok = fasle;

// Set your timezone!!
date_default_timezone_set('America/Chicago');

// GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));




	$uName = $_SESSION["username"];
	$userid = $_SESSION["userid"];

?>


<link rel='icon' href='https://www.blackpeoplemarketplace.com/assets/media/images/logo/logo.png' type='image/png' sizes='16x16'>

<meta charset='UTF-8'>

<meta name='Distribution' content='Global' />

<meta name='Rating' content='General' />

<meta name='Robots' content='INDEX,FOLLOW' />
<meta name='robots' CONTENT='all'>
<meta name='Revisit-after' content='1 Day' />
<meta name='copyright' content='blackpeoplemarketplace.com'>  
<meta name='googlebot' content='noarchive'>
<meta name='googlebot' content='INDEX,FOLLOW'>
<meta name='language' content='English'> 
<meta name='reply-to' content='contactus@blackpeoplemarketplace.com'>
<meta name='robots' content='noydir'>
<meta name='generator' content='Adobe Dreamweaver'>
<meta name='Developer' content='LRPinc'>



	<script src='/Includes/plugin_scripts/js/2.1.4-jquery.min.js'></script>





  
	
<div id='header'><div id='logo'><span class='websiteName'><a href='/ImageWizard'>Image Wizard</a></span></div>
<div id='headerLeft'>


<ul>
 

  <ul style='list-style-type:none;'>
  
  
	
	  
	<li><a onclick="main_header_door()"; >Menu</a></li>
    <li><a href='../../../../ImageWizard/Includes/Scripts/Header/$tab_2_Link'>$tab_2_Title</a></li>

 

  </ul>

</ul>

</div>
</div>

<noscript>
<center>
<div class='alert'>
  <span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;</span> 
  Please Enable Javascript.
</div>
</center>
</noscript> 










	
	
<div id='Main_Header_dropdown_wrap'>
	<div id='MHeader_view_profile' onclick='main_header_links("profile")'  class='Main_Header_dropdown'>
	View Profile
	</div>
	<div id='MHeader_view_ListItem' onclick='main_header_links("ListItem")'  class='Main_Header_dropdown'>
	List Item
	</div>	
<div id='MHeader_view_Messages' onclick='main_header_links("Messages")'  class='Main_Header_dropdown'>
	Messages
	</div>
	<div id='MHeader_view_Stats' onclick='main_header_links("Stats")'  class='Main_Header_dropdown'>
	Stats
	</div>
	<div id='MHeader_view_Referral' onclick='main_header_links("Referral")'  class='Main_Header_dropdown'>
	Referral
	</div>
		<div id='MHeader_view_Setting' onclick='main_header_links("Setting")'  class='Main_Header_dropdown'>
	Setting
	</div>
		<div id='MHeader_view_Contact' onclick='main_header_links("Contact")'  class='Main_Header_dropdown'>
	Contact Us
	</div>
	<div id='MHeader_view_Help' onclick='main_header_links("Help")'  class='Main_Header_dropdown'>
	Help
	</div>
	<div id='MHeader_LogOut' onclick='main_header_links("LogOut")'  class='Main_Header_dropdown'>
	Log Out
	</div>
	
	
</div></body>

<script>

function main_header_links(xxx){

	
	
	
				//alert(xxx);


							if(xxx == 'profile'){
			
window.location.href = "https://www.blackpeoplemarketplace.com/user/index.php?u=<?php echo $userid; ?>";
		
	}		
							if(xxx == 'Stats'){
			
window.location.href = "https://www.blackpeoplemarketplace.com/Stats/index.php?u=<?php echo $userid; ?>";
		
	}		
	
	
						if(xxx == 'ListItem'){
			
window.location.href = "https://www.blackpeoplemarketplace.com/AddItem/index.php?u=<?php echo $userid; ?>";
		
		
	}		if(xxx == 'Referral'){
			
window.location.href = "https://www.blackpeoplemarketplace.com/Referral/index.php?u=<?php echo $userid; ?>";
		
		
	}		
	

	
	if(xxx == 'Messages'){
			
window.location.href = "https://www.blackpeoplemarketplace.com/Messages/index.php?u=<?php echo $userid; ?>";
		
	}

	if(xxx == 'Setting'){
			
window.location.href = "https://www.blackpeoplemarketplace.com/Settings/index.php?u=<?php echo $userid; ?>";
		
	}		
	if(xxx == 'Contact'){
			
window.location.href = "https://www.blackpeoplemarketplace.com/Contact";
		
	}
	if(xxx == 'Help'){
			
window.location.href = "https://www.blackpeoplemarketplace.com/Help";
		
	}
	if(xxx == 'LogOut'){
			
window.location.href = "https://www.blackpeoplemarketplace.com/Login/logout.php";
		
	}
	

	main_header_door();
	
}

	
		function main_header_door(){
			var container = document.getElementById("Main_Header_dropdown_wrap");
	
var object_visibility = container.style.visibility;
			if(object_visibility == 'hidden' || object_visibility == '' ){
						container.style.visibility = 'visible';
}else{
								container.style.visibility = 'hidden';
}
				
				
	}

	window.addEventListener('scroll', () => {
		close_header();
	});

	

	

	function close_header(){
			var container = document.getElementById("Main_Header_dropdown_wrap");
		
		var object_visibility = container.style.visibility;
		if(object_visibility == 'visible'){
			container.style.visibility = 'hidden';
		} 
		
	}


</script>


