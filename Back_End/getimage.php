<?php

include 'config.php';

$keyword = '';
$error = '';

if(isset($_POST['subkey']))
{
	$keyword = $db->real_escape_string($_POST['key']);
	
	if(empty($keyword))
	{
		$error = "Please fill in the fields";
		
	}
	if(empty($error))
	{
		$keywordinp = str_replace(' ','+',$keyword);
		$keywordinput = strtolower($keywordinp);
		$search_query = $keywordinput;

$url  = "https://www.bing.com/images/search?q=$search_query&FORM=HDRSC2";

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$response = curl_exec($ch);
curl_close($ch);

if(!$url)
{
	$error = "Something went wrong while searching,please try again later";
}


preg_match_all('!<a class="thumb" target="_blank" href="(.*?)"!',$response,$url_matches);


for($i=0;$i<sizeof($url_matches[1]);$i++)
{
	$urls = $url_matches[1][$i];
	$sql = "INSERT INTO getimageurls(Search_query,Urls)VALUES('$search_query','$urls')";
	$result = $db->query($sql);
	if(!$result)
	{
		$error = "Something went wrong while inserting the data";
	}
	else
	{
		$error = "Success";
	}
}


	}

}	


?>