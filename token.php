<?php

# © 2021 Techie Sneh DO NOT EDIT ANYTHING TO KEEP RUNNING

# Here I Put Token which Available Publicly I Recommended Use Your Own Token Here 
# For Suppport techiesneh@protonmail.com



$jctBase = "cutibeau2ic";

$ssoToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWUiOiI4NTY0ZTgxYS1hZGFkLTQyOGYtYjZlOC04NTZmZGFhMDI5ZWMiLCJ1c2VyVHlwZSI6IlJJTHBlcnNvbiIsImF1dGhMZXZlbCI6IjEwIiwiZGV2aWNlSWQiOm51bGwsImp0aSI6ImJhOTcwZTM4LTM3NDQtNDc4Mi1hOGQyLTFlNGI1ZmQzYjQwNyIsImlhdCI6MTYzMDA4MzcwM30.miE_LrdNfK3hvEzaNS34RiqQuVLewsOCHYtFVY7s9N8"; 
function tokformat($str)
{
$str= base64_encode(md5($str,true));
return str_replace("\n","",str_replace("\r","",str_replace("/","_",str_replace("+","-",str_replace("=","",$str)))));
}
function generateJct($st, $pxe) 
{
 global $jctBase;
 return trim(tokformat($jctBase . $st . $pxe));
}
function generatePxe() {
return time() + 6000000;
}
function generateSt() {
global $ssoToken;
return tokformat($ssoToken);
}
function generateToken() {
$st = generateSt();
$pxe = generatePxe();
$jct = generateJct($st, $pxe);
return "?jct=" . $jct . "&pxe=" . $pxe . "&st=" . $st;
}

# © 2021 Techie Sneh DO NOT EDIT ANYTHING TO KEEP RUNNING


echo generateToken();
?>
