<?php
 
/*
Author : Magelang1337
Project : Bing Subdomain Scanner
Website : Https://magelang1337.com
 
*/
//No Max Execution Time
set_time_limit(0);
 
//Curl Function
function curlreq($domain)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_URL, $domain);
    $result = curl_exec($curl);
 
    return $result;
}
 
//Url Cleaning
function cleanme($url)
{
    if(preg_match("/^(http(?:s)://)(www.)?([^/]+)/i",$url, $matches))
    {
        $host = $matches[3];
 
    }
    else
    {
    $url = $url;
    preg_match("/^(www.)?([^/]+)/i",$url, $matches);
    $host = $matches[2];
    }   
    return trim($host);
}
 
 
// Enter Domain Name http://google.com
$web = "yahoo.com";
 
$i = 1;
$subdomains = array();
while (true)
{   
 
    $website = curlreq("http://www.bing.com/search?q=domain%3a".$web."&first=".$i);
    $searchme  =    '#<cite>(.*?)</cite>#si';
    preg_match_all($searchme, $website, $matches);
    array_push($subdomains, $matches[1]);
    if($i == 1)
    {
        $i = 11;
    }
    else
    {
        $i = $i +12;
    }
    if(!preg_match('/Next/',$website)){break;}
}
 
 
//print_r($subdomains);
//get Unique Results
array_unique($subdomains);
sort($subdomains);
 
//Result
echo "<textarea rows="10" cols="50">";
    $countotal = 1;
foreach ($subdomains as $value)
{
    foreach ($value as $name)
    {
        echo cleanme($name)."n";
 
        $countotal++;
    }
}
echo "</textarea>
";
echo "Number of Subdomains : $countotal";
 
?>