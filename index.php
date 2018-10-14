<!DOCTYPE html>
<html>
<head>
	<title>Welcome to PHP Website</title>
</head>
<body>

<?php
$curl_handle=curl_init();
curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);


curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/public-ipv4');
$pubip = curl_exec($curl_handle);
curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/local-ipv4');
$privip = curl_exec($curl_handle);

curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/mac');
$mac = curl_exec($curl_handle);

curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/network/interfaces/macs/'.$mac.'/subnet-id');
$snid = curl_exec($curl_handle);
curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/network/interfaces/macs/'.$mac.'/subnet-ipv4-cidr-block');
$snidr = curl_exec($curl_handle);

curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/network/interfaces/macs/'.$mac.'/security-groups');
$sgs = curl_exec($curl_handle);

curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/network/interfaces/macs/'.$mac.'/vpc-id');
$vpc = curl_exec($curl_handle);
curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/network/interfaces/macs/'.$mac.'/vpc-ipv4-cidr-block');
$vpcr = curl_exec($curl_handle);

curl_setopt($curl_handle,CURLOPT_URL,'http://169.254.169.254/latest/meta-data/placement/availability-zone');
$az = curl_exec($curl_handle);

?>
<h1>Hello From Apache+PHP October 14, 2018</h1>
<h2>Public IP: <?php echo $pubip;?></h2> 
<h2>Private IP: <?php echo $privip;?></h2> 
<h2>VPC: <?php echo $vpc.'('.$vpcr.')';?></h2> 
<h2>Subnet: <?php echo $snid.'('.$snidr.')';?></h2> 
<h2>Security Groups: <?php echo $sgs;?></h2> 
<h2>AZ: <?php echo $az;?></h2> 
<h2>Date: <?php print date("g:i:s A l, F j Y.");?></h2>
<h2>ENV</h2>
<pre>
<?php echo file_get_contents("/file1.txt");?>
</pre>
<html><body>
