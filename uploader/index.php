
	 
		  
	
	
	
	
	
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- saved from url=(0033)https://www.blackpeoplemarketplace.com -->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />

<title>Image Wizard | Downloadable Image Quote Cards</title>
<meta name="description" content= ""/>
<meta name="keywords" content= />


<meta name="Distribution" content="Global" />

<meta name="Rating" content="General" />

<meta name="Robots" content="INDEX,FOLLOW" />

<meta name="Revisit-after" content="1 Day" />
	
	
	

<style type="text/css" media="all">

<!--

@import url("backend/indexCSS.css");

#footer  {
  position: relative !important;
	}   

-->

</style>

</head>
	<?php
	
$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/ImageWizard/Includes/Scripts/Header/index.php";
   include($path); ?>
	
<body>
	
	
	<div id='page_container'>

		
		<div id='page_wapper'>
				  
			<h2>Add Images</h2>
<div id="drop_zone"   ondrop="ddrag_drop(event)" ondragover="return false" ondragenter="ddrag_enter(event)"    ondragleave="ddrag_leave(event)">
	
		  <div id="upload-btn-wrapper"> 
<div id='ul_button_wrap'>
			  <button class="btn">Upload photos</button>
	<input type='file' id="imgInp" name="file" multiple  />
				 	<div id='up_bt_under_text'>Or drag and drop up to 9 photos</div>

	
			  </div>  
 	


</div>
				<div id='item-main_Photo' class="" >

		<div id='xx'> 

	
			 
<div class="pic_container">		
<img class="upload_photos" id="upload0" src=""  ondragstart="drag_start(event)" ondragend="drag_end(event)" ondragover="return false" ondragenter="drag_enter(event)"ondrop="drag_drop(event)" draggable="true">
<div id='main_image_label'>Main Photo</div>
</div>	

<div class="pic_container" >			
<img class="upload_photos" id="upload1" src=""
 ondragstart="drag_start(event)" ondragend="drag_end(event)" ondragover="return false" ondragenter="drag_enter(event)"ondrop="drag_drop(event)" draggable="true">
	<div class='image_label'>Add Another</div>
</div>	
	<div class="pic_container">			
<img class="upload_photos" id="upload2" src=""
 ondragstart="drag_start(event)" ondragend="drag_end(event)" ondragover="return false" ondragenter="drag_enter(event)"ondrop="drag_drop(event)" draggable="true"><div class='image_label'>Add Another</div>
</div>	
	<div class="pic_container">			
<img class="upload_photos" id="upload3" src=""
 ondragstart="drag_start(event)" ondragend="drag_end(event)" ondragover="return false" ondragenter="drag_enter(event)"ondrop="drag_drop(event)" draggable="true"><div class='image_label'>Add Another</div>
</div>	
	<div class="pic_container">			
<img class="upload_photos" id="upload4" src=""
 ondragstart="drag_start(event)" ondragend="drag_end(event)" ondragenter="drag_enter(event)"ondrop="drag_drop(event)" draggable="true"><div class='image_label'>Add Another</div>
</div>	
	<div class="pic_container">			
<img class="upload_photos" id="upload5" src="" ondragenter="drag_enter(event)"ondrop="drag_drop(event)"
 ondragstart="drag_start(event)" ondragend="drag_end(event)" draggable="true"><div class='image_label'>Add Another</div>
</div>	
	<div class="pic_container">			
<img class="upload_photos" id="upload6" src="" ondragenter="drag_enter(event)"ondrop="drag_drop(event)"
 ondragstart="drag_start(event)" ondragend="drag_end(event)" draggable="true"><div class='image_label'>Add Another</div>
</div>	
<div class="pic_container">			
<img class="upload_photos" id="upload7" src="" ondragenter="drag_enter(event)"ondrop="drag_drop(event)"
 ondragstart="drag_start(event)" ondragend="drag_end(event)" draggable="true"><div class='image_label'>Add Another</div>
</div>	
	<div class="pic_container">			
<img class="upload_photos" id="upload8" src="" ondragenter="drag_enter(event)"ondrop="drag_drop(event)"
 ondragstart="drag_start(event)" ondragend="drag_end(event)" draggable="true"><div class='image_label'>Add Another</div>
</div>	
	
				

</div>
	
		  </div>

			
			
	
	
	
	

	
			</div>
			
			

		
	
		
		
		  <div id="buttons_area_containter">
			  			  <div class="buttons_containter_wrap">
<input type="text" id="project_name" required>
<input type="text" id="ip" value="<?php echo $ip; ?>" hidden>
			  </div>			  
			  
			  <div class="buttons_containter_wrap">

			  <div id="cancel_button" class="list_buttons" onClick="location.href='/ImageWizard'">Cancel</div>
		  </div>
		
<div class="buttons_containter_wrap">

			  <div id="save_button" class="list_buttons" onClick="get_orderID_func()">Save</div>
		</div>			  
<div class="buttons_containter_wrap">

			  <div id="post_button" class="list_buttons" onClick="start_project()">Start</div>
		</div>
			  
			  
	</div>		
		
		
		

		  
		  
		  
		  
		  
			
			
	</div>
		
		
			<?php
	
$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/ImageWizard/Includes/Scripts/Footer/index.php";
   include($path); ?>



	
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	 <script>
			  	var order_ID;
function _(id){ return document.getElementById(id); }
	

		 function start_project(){
			 
			 
		window.location.href("https://www.blackpeoplemarketplace.com/ImageWizard/designer/index.php?o=" + order_ID);

			 
			 
			 
		 }
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 function get_orderID_func(){
			 
				var project_name =	 _("project_name").value;
				var ip =	 _("project_name").value;
			 
			 		$.post("backend/start_order.php",  {pn:project_name,ip:ip}, function(output) {
console.log(output);
					//	alert(output);
						order_ID = output;
						
						send_media_func();
});				
			 
		 }
		//	<input type="file" name="file" id="file" class="uploadInfo"multiple>
var id_string;
		
		

var fileS = _('imgInp').files;
	var z =document.getElementsByClassName("pic_container");
	var x = document.getElementsByClassName("image_label");
	var s = document.getElementsByClassName("upload_photos");
var t;
var e;
var i;
		
		
						
		var pic_ID_swop; 
		var pic_ID_swop2;
		var pic_ID_swop3; 
 
	  
function drag_start(event) {
// from

	pic_ID_swop = event.target.id;
}


function drag_drop(event) {
    event.preventDefault(); /// Prevent undesirable default behavior while dropping 
	

	pic_ID_swop2 = event.currentTarget.id;

	pic_ID_swop3 = _(pic_ID_swop2).src;

	_(pic_ID_swop2).src = _(pic_ID_swop).src;
		_(pic_ID_swop).src = pic_ID_swop3;
	
}
	
	 
function ddrag_enter(event) {
//	alert("event  2 "+ event);
_("drop_zone").style.borderColor = "rgba(255,240,0,1.00)";
}
function ddrag_leave(event) {
//	alert("event  3 "+ event);
_("drop_zone").style.borderColor = "rgba(193,213,212,1.00)";
}
function ddrag_drop(event) {
    event.preventDefault(); /// Prevent undesirable default behavior while dropping 

	
	if(event.dataTransfer.files.length > 9){
		//   _('ul_button_wrap').style.display = 'none';
				   alert("You are only upload a maximum of 9 files");
		
	}
		//	fileS = event.dataTransfer.files;
		var	fileS = event.dataTransfer;
	
			readURL(fileS);

}
	  
	
		
		
		  </script>
		  
		  	<script>
	
		
		
		
		
		
		
		
		
		
function readURL(input, i) {
	_("upload-btn-wrapper").style.display = "none";

			 //alert("?????????????    "+i);
			// alert("??input.files.length???????    "+input.files.length);

     for( i = 0; i < input.files.length; i++){
			// alert("????????????ffffffffffff?????????    "+i);

         if (input.files[i]) {
			 var reader = new FileReader();
            reader.onload = function (e) {

			i = i - 1;
				 id_string = "upload" +  i;
z[i].style.display = 'inline-block';

	
	_(id_string).src = e.target.result;
// _(id_string).style.display = "inline-block";
			
			}
            reader.readAsDataURL(input.files[i]);

           }
		 				 id_string = "upload" +  i;
	
        }

			// alert("?????????????????????    "+i);


	
for ( t = i; t > 0 && t < 9; t++) {
//alert("?????? worked ???????????????    "+t );
	   s[t].style.opacity = '0';
z[t].style.display = 'inline-block';
	v = t - 1;
x[v].style.display = 'inline-block';

}	
	 

	
    }




    $("#imgInp").change(function(){
		readURL(this);
    });



  $(function(){
             $("#imgInp").change(function(){
				 
               var $fileUpload = $("input[type='file']");
				 
               if (parseInt($fileUpload.get(0).files.length) > 9){
                  
				   _('ul_button_wrap').style.display = 'none';
				   alert("You are only upload a maximum of 9 files");
				   
               }

            });
         });
		
		
	
		
	
		
		var i = 0;
    var count = 0;
		var upload_ID ;
		
    for (i = 0; i < 9; i++) 
    {
			upload_ID = "upload" +  i;
		upload_ID = _(upload_ID);
        if (upload_ID.style.display == 'inline-block') count++;
    }
	
	
	

</script>
			

				
	
		  
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<script>
			
			// Jquery Dependency

	
		
  
  	function displayMessage(){
		_('error_message_area').style.display = "Block";
		
			//	setTimeout(removeMessage, 3000);

	}
      
	function removeMessage(){
		_('error_message_area').style.display = "none";
		
	}

	

	var ints;
 function dataURLtoFile(dataurl, filename) {
 
        var arr = dataurl.split(','),
            mime = arr[0].match(/:(.*?);/)[1],
            bstr = atob(arr[1]), 
            n = bstr.length, 
            u8arr = new Uint8Array(n);
            
        while(n--){
            u8arr[n] = bstr.charCodeAt(n);
        }
        
        return new File([u8arr], filename, {type:mime});
    }
    

	
function send_media_func(){
				var project_name =	 _("project_name").value;			

		displayMessage();

	var completed;
	

		console.log("project_name    "+project_name);

	
	var media0 =	 _("upload0").src;			

	if(media0){
	_("post_button").disabled = true;
	_("message_area_status").innerHTML = 'please wait ...';

		
						//alert('xxx');
//var imgCount;

	//var imgCount = $("#xx img").length;

						//	alert(imgCount);
//   $('#content').find("div:visible").length
		console.log("media0    "+ media0);

		
var i = 0;
    var count = 0;
		var upload_ID ;
		
    for (i = 0; i < 8; i++) 
    {
			upload_ID = "upload" +  i;
		upload_ID = _(upload_ID);
		
        if (upload_ID.style.opacity == '0') count++;
		
		
	
		
    }

  //  alert(count);
				
		
		
		
			for(var i = 0; i < count; i++) {

	//_("message_area_status").innerHTML = i +' Sending';

			
					var upload_ID = "upload" +  i;
					var media_File = "media" +  i;
				
							
				//alert('upload_ID '+   upload_ID );

		ints = i;
		console.log("upload    "+upload_ID+"  med    "+media_File);
				if(media_File){
					
								//	alert('???upload_ID??' + upload_ID);


				
					
	var stringFile = _(upload_ID).src;
					
					
					
					
					
/*
					
			//make_thumbnail_Func(img);
					
var canvas = document.getElementById(upload_ID);
const ctx = canvas.getContext('2d')
var img = new Image();

					
					
//img.onload = 
	
	//function make_thumbnail_Func(img) {
//img.onload = function(){
					
			 img.src = _(upload_ID).src;		

    // set size proportional to image
    canvas.height = canvas.width * (img.height / img.width);

    // step 1 - resize to 50%
    var oc = document.createElement('canvas'),
        octx = oc.getContext('2d');

    oc.width = img.width * 0.5;
    oc.height = img.height * 0.5;
    octx.drawImage(img, 0, 0, oc.width, oc.height);

    // step 2
    octx.drawImage(oc, 0, 0, oc.width * 0.5, oc.height * 0.5);

    // step 3, resize to final size
    ctx.drawImage(oc, 0, 0, oc.width * 0.5, oc.height * 0.5,
    0, 0, canvas.width, canvas.height);
		
 }
				
					
			var smallStringFile = canvas.src;	
					
		
		var smallStringFile =		compress(event);
*/
					
					
					
					
					
									//	alert(ints + '   stringFile '+   stringFile);

	   //Usage example:
    var file = dataURLtoFile(stringFile);
   // var small_file = dataURLtoFile(smallStringFile);
    console.log(file);
   // console.log(small_file);
	

			/*		
var base64_string = "/9j/4AAQSkZJRgABAgAAAQABAAD//...";
var img = document.createElement("img");
// added `width` , `height` properties to `img` attributes
img.width = "250px";
img.height = "250px";
img.src = "data:image/png;base64," + base64_string;
var preview = document.getElementById("img_preview");
preview.appendChild(img);
			*/		
					
 // var test2  =   $('#'upload_ID).val(data['result']);
                
const body2 = {profilepic:stringFile};
let mimeType2 = body2.profilepic.match(/[^:/]\w+(?=;|,)/)[0];

//alert(mimeType2);
					
					var formdata = new FormData();
	formdata.append("file", file);
	//formdata.append("small_file", small_file);
	formdata.append( "p", ints );
	formdata.append( "ext", mimeType2 );
	formdata.append( "oID", order_ID );

				


	var ajax = new XMLHttpRequest(); 
				
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
													//	alert('?????  3');


	ajax.open( "POST", "backend/upload_images.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
						
		//displayMessage();
			if(ajax.responseText == "success"){

				
				_("message_area_status").innerHTML = ajax.responseText;
				_("post_button").disabled = false;
			}else{
				_("message_area_status").innerHTML = ajax.responseText;

			}

		}
	}
	ajax.send( formdata );
			
					
				}else{
						_("message_area_status").innerHTML = ints + '   DONE';

					
				}
			}
				
			}else{
		// no media
				_("message_area_status").innerHTML = '   No media';
	}
	
}
			
		var percent;
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("percent_status").innerHTML = Math.round(percent)+"% uploaded... please wait";
	
	

	
}
function completeHandler(event){
	_("message_area_status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
	
	
}
function errorHandler(event){
	_("percent_status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("percent_status").innerHTML = "Upload Aborted";
}
	
		
</script>
  		
		
		
	





	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
</body>
	
	
	
	
	<div id='error_message_area'>
	<div id='message_area_status'  class="uploadInfo">Message</div>
	<div id='percent_status' class="uploadInfo">Percent</div>
  	<div id='loaded_n_total' class="uploadInfo">Total</div>
			
	<progress id="progressBar" class="uploadInfo" value="0" max="100" ></progress>
		 <div id="close_button" onClick="removeMessage()">close</div>
	</div>
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</html>