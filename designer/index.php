
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




-->

</style>

</head>
	<?php
	
$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/ImageWizard/Includes/Scripts/Header/index.php";
   include($path); ?>
	
<body>
	
	
	<div id='page_container'>

		
		
		
		<?php

	
				$orderID =  3;

		
		
			$query = " SELECT  * FROM  OriginalImageTable INNER JOIN OrderTable on OriginalImageTable.ogImageOrderID = OrderTable.orderID   WHERE OriginalImageTable.ogImageOrderID = $orderID AND OriginalImageTable.ogImageDeleteBool ='NO'  order by OriginalImageTable.ogImagePlacementNumber ASC";
			$result0 = mysqli_query($db_conx, $query);
//        $row = mysqli_fetch_row($query0);
	$numrows0 = mysqli_num_rows($result0);
if($numrows0 > 0){
		while ($row0 = mysqli_fetch_array($result0, MYSQLI_ASSOC)) {

	
		$ogImageOrderID =  $row0['ogImageOrderID'];
		$ogImagePath =  $row0['ogImagePath'];
			
		$ogImageFileExtension =  $row0['ogImageFileExtension'];
		$ogImageFileSize =  $row0['ogImageFileSize'];
		$ogImageFileType =  $row0['ogImageFileType'];
		$ogImageFileName =  $row0['ogImageFileName'];
		$ogImagePlacementNumber =  $row0['ogImagePlacementNumber'];
		$ogImageTnPath =  $row0['ogImageTnPath'];
		$ogImageHeight =  $row0['ogImageHeight'];
		$ogImageWidth =  $row0['ogImageWidth'];
	
				}
}
		

?>
		

					
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<div id='canvas_wrap'>
	<div id='canvas'>
		 
		
		<img id='main_photo' src='<?php echo "$ogImagePath"; ?>' alt='main_photo' >
<div class='Position' id="bottom-left"  onClick="position_placer_func('bottom-left')">Bottom Left</div>
  <div class='Position' id="top-left" onClick="position_placer_func('Top-left')">Top Left</div>
  <div class='Position' id="top-right" onClick="position_placer_func('Top-Right')">Top Right</div>
  <div class='Position' id="bottom-right" onClick="position_placer_func('bottom-Right')">Bottom Right</div>
  <div class='Position' id="centered" onClick="position_placer_func('Centered')">Centered</div>
		
<div class='Position' id="bottom"  onClick="position_placer_func('bottom')">Bottom</div>
  <div class='Position' id="left" onClick="position_placer_func('left')">Left</div>
  <div class='Position' id="top" onClick="position_placer_func('Top')">Top</div>
  <div class='Position' id="right" onClick="position_placer_func('right')">Right</div>		
		
			</div>
			</div>
		
		
	
			<?php
$path = $_SERVER['DOCUMENT_ROOT'];
		
		$path .= "/ImageWizard/Includes/Scripts/Footer/index.php";
		 // echo($path);

   include($path); ?>
	</div>
		
		
</body>
</html>
