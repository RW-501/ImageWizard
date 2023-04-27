<?php 


$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/ImageWizard/Includes/db/db_MainConx.php";
   include($path);
// Set your timezone!!
date_default_timezone_set('America/Chicago');
	    $now =date('Y-m-d H:i:s');
	// GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));

function imageCreateFromAny($filepath) {
    $type = exif_imagetype($filepath); // [] if you don't have exif you could use getImageSize()
    $allowedTypes = array(
        1,  // [] gif
        2,  // [] jpg
        3,  // [] png
        6   // [] bmp
    );
    if (!in_array($type, $allowedTypes)) {
        return false;
    }
    switch ($type) {
        case 1 :
            $im = imageCreateFromGif($filepath);
        break;
        case 2 :
            $im = imageCreateFromJpeg($filepath);
        break;
        case 3 :
            $im = imageCreateFromPng($filepath);
        break;
        case 6 :
            $im = imageCreateFromBmp($filepath);
        break;
    }   
    return $im; 
}


if(isset($_FILES["file"]) 
  
  ){
	$tmp_name_array  = $_FILES["file"]["tmp_name"];
    for($i = 0; $i < count($tmp_name_array); $i++){

		//echo"totalFiles = $totalFiles <br>";
		//echo"totalSpaceUseds = $totalSpaceUseds <br>";
	
	
            //if there was an error uploading the file
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

        }
        else {
			
				$fileName = basename($_FILES["file"]["name"]);
				//echo "<br> basename fileName $fileName <br>";
			$fileName = preg_replace('/\s+/', '_', $fileName);

			
		/*
$maxDim = 800;
$file_name = $_FILES['file']['tmp_name'];
list($width, $height, $type, $attr) = getimagesize( $file_name );
if ( $width > $maxDim || $height > $maxDim ) {
    $target_filename = $file_name;
    $ratio = $width/$height;
    if( $ratio > 1) {
        $new_width = $maxDim;
        $new_height = $maxDim/$ratio;
    } else {
        $new_width = $maxDim*$ratio;
        $new_height = $maxDim;
    }
    $src = imagecreatefromstring( file_get_contents( $file_name ) );
    $dst = imagecreatetruecolor( $new_width, $new_height );
    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
	 imagepng( $dst, $target_filename ); // adjust format as needed

    //imagedestroy( $src );
   // imagedestroy( $dst );
}			
			
			$tNpathDB = "$dst xxxxxxx  $target_filename xxxxxxx   $src   ";
			
		*/
			
			
			
			
			
		
			
			
			
			
			
			
//$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
//$FileExtension = strtolower($fileExtension);
				echo "<br> FileExtension $FileExtension <br>";

			
                 //Print file details
             echo "Name: " . $_FILES["file"]["name"] . "<br />";
             echo "Type: " . $_FILES["file"]["type"] . "<br />";
             echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
             echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

	

			$fileType = $_FILES["file"]["type"];
			$fileSize = $_FILES["file"]["size"];
	$FileExtension = $_POST['ext'];

			
			$orderID = $_POST['oID'];
			$ogImagePlacementNumber = $_POST['p'];

	
	
// Check file size
if ($_FILES["file"]["size"] < 10000000) {


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 1) {
    echo"Sorry, your file was not uploaded.";
exit();

// if everything is ok, try to upload file
} else {
	//$randomNum = (rand(10,100));

		$path0 = $_SERVER['DOCUMENT_ROOT'];
   $path0 .= "/ImageWizard/storage/$orderID";

			// Create directory(folder) to hold each user's files(pics, MP3s, etc.)
		if (!file_exists("$path0")) {
			mkdir("$path0", 0755);
		}

	

	
	
	
			 // $newUserID = str_pad($orderID,  3, "0",STR_PAD_LEFT);           
		  $newFileName = substr( md5(rand()), 0, 6);
		  $newFileName  .= $orderID;
		  $newFileName = str_pad($newFileName, 10, $newFileName, STR_PAD_LEFT); 
	

	

	
	
		$Fpath = $_SERVER['DOCUMENT_ROOT'];
   $Fpath .= "/ImageWizard/storage/$orderID";

   		$mMpath = $Fpath . "/$newFileName.$FileExtension";
	
	
   		$tNpath = $Fpath . "/TN$newFileName.$FileExtension";
   	

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $mMpath)) {
        echo"<br> The file $newFileName has been uploaded <Br>";
	 		

			  
$tNpathDB = "https://www.blackpeoplemarketplace.com/ImageWizard/storage/$orderID/TN$newFileName.$FileExtension";
			  
		$tNpathfile = $_SERVER['DOCUMENT_ROOT'];
   $tNpathfile .= "/ImageWizard/storage/$orderID/TN$newFileName.$FileExtension";
		
		$pathfile = $_SERVER['DOCUMENT_ROOT'];

   $pathfile .= "/ImageWizard/storage/$orderID/$newFileName.$FileExtension";
		
		
			  
			  $save =  $tNpathfile;
			  $file = $pathfile;


          //thumbnail image making part
       //   $save = "images/thumb/" . $imagepath; //This is the new file you saving
         // $file = "images/" . $imagepath; //This is the original file   
          list($width, $height) = getimagesize($file) ;
          $modwidth = 150;
          $diff = $width / $modwidth;
          $modheight = $height / $diff;
          $tn = imagecreatetruecolor($modwidth, $modheight) ;
		
		$image = imageCreateFromAny($file);
      //    $image = imagecreatefromjpeg($file) ;
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
      //  echo "Thumbnail: <img src='images/sml_".$imagepath."'>";
          imagejpeg($tn, $save, 100) ;
			
			
	//	  }
			
		
		
		
		
		
		
		
		
		
	$mMpathDB = "https://www.blackpeoplemarketplace.com/ImageWizard/storage/$orderID/$newFileName.$FileExtension";

		
$ogImageFileSize= str_replace(".","","$fileSize");	
	$sql1 = "INSERT INTO OriginalImageTable
        			(ogImageOrderID, ogImagePath, ogImageFileExtension, ogImageFileSize, ogImageFileType, ogImageFileName , ogImageDeleteBool , ogImagePlacementNumber, ogImageTnPath , ogImageHeight, ogImageWidth ) VALUES
        			('$orderID' ,'$mMpathDB' ,'$FileExtension' ,'$ogImageFileSize' ,'$fileType','$newFileName','NO', '$ogImagePlacementNumber','$tNpathDB','$height','$width' )";
					
			$query1 = mysqli_query($db_conx, $sql1);
		if($query1){
		echo "success";

	} else {
        echo  "Sorry,1 there was an error uploading your file. <BR> $sql1";
			//echo($sql);
exit();

	}
	
	}
		

	}




}


}


		}
		
   }


?>