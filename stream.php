<?php
$p= @file_get_contents("https://tv.aravindnc.com/token.php"); # Change This Path According to Your Server and Folder


# © 2021 Techie Sneh DO NOT EDIT ANYTHING TO KEEP RUNNING


if(@$_REQUEST["key"]!="")
{
	$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: plaYtv/5.8.1 (Linux;Android 9) ExoPlayerLib/2.8.0\r\n" .
		"lbcookie: 300\r\n" .
"devicetype: Kodi\r\n" .
"os: android\r\n" .
"appkey: NzNiMDhlYzQyNjJm\r\n" .
"deviceId: 2f5f4c6443fe0800\r\n" .
"versionCode: 226\r\n" .
"osVersion: 9\r\n" .
"isott: true\r\n" .
"languageId: 6\r\n" .
"uniqueId: 8564e81a-adad-428f-b6e8-856fdaa029ec\r\n" . 
"srno: 200206173037\r\n" .
"usergroup: tvYR7NSNn7rymo3F\r\n" .
"channelid: 472\r\n" .
"ssotoken: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWUiOiI4NTY0ZTgxYS1hZGFkLTQyOGYtYjZlOC04NTZmZGFhMDI5ZWMiLCJ1c2VyVHlwZSI6IlJJTHBlcnNvbiIsImF1dGhMZXZlbCI6IjEwIiwiZGV2aWNlSWQiOm51bGwsImp0aSI6ImJhOTcwZTM4LTM3NDQtNDc4Mi1hOGQyLTFlNGI1ZmQzYjQwNyIsImlhdCI6MTYzMDA4MzcwM30.miE_LrdNfK3hvEzaNS34RiqQuVLewsOCHYtFVY7s9N8\r\n"
	    
    ]
];


$cache=str_replace("/","_",$_REQUEST["key"]);

if(!file_exists($cache)){

$context = stream_context_create($opts);
$haystack = file_get_contents("https://tv.media.jio.com/streams_live/"  . $_REQUEST["key"] . $p,false,$context);

}
else
{
$haystack=file_get_contents($cache);

}
echo $haystack;
}


if(@$_REQUEST["ts"]!="")
{
header("Content-Type: video/mp2t");
header("Connection: keep-alive");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length,Content-Range");
header("Access-Control-Allow-Headers: Range");
header("Accept-Ranges: bytes");
	$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: plaYtv/5.3.2 (Linux;Android 5.1.1) ExoPlayerLib/2.3.0/2.3.0\r\n" 


    ]
];

$context = stream_context_create($opts);
$haystack = file_get_contents("http://mumsite.cdnsrv.jio.com/jiotv.live.cdn.jio.com/"  . $_REQUEST["ts"],false,$context);
echo $haystack;

}

# © 2021 Techie Sneh DO NOT EDIT ANYTHING TO KEEP RUNNING
# DON'T CHANGE ANY JIO SERVER LINK and USERAGENT
# DON'T REMOVE CREDITS

?>
