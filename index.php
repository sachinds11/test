<?php
echo "hello";

echo "test1";
$ch = curl_init();  
 
 $url="https://login.salesforce.com/services/oauth2/token";
 
//$url="google.com";
 curl_setopt($ch,CURLOPT_URL,$url);
    //curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);	
curl_setopt($ch, CURLOPT_POSTFIELDS, array('grant_type' => 'password', 'client_id' => '3MVG9ZL0ppGP5UrBAVbNvoDXanSXhKC2ptOA5_PhZ9dfXVmxD5TlFpud1xcncj4bKdubR_nKD1Hy_aS8icQjP','client_secret' => '4695938263465200539','username' => 'manoj_kmwt@hotmail.com','password' => 'tiya1122','redirect_uri' =>'http://localhost/sd/index.php'));	
  //curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);
	echo curl_error($ch);
 
    curl_close($ch);
    echo "::". $output;

?>