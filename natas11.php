<?php


$defaultdata =json_encode( array( "showpassword"=>"no", "bgcolor"=>"#ffffff"));

$cookie= base64_decode("MGw7JCQ5OC04PT8jOSpqdmkgJ25nbCorKCEkIzlscm5oKC4qLSgubjY=");


function xor_encrypt($in,$d) {
    $key = $d;
    $text = $in;
    $outText = '';

    // Iterate through each character
    for($i=0;$i<strlen($text);$i++) {
    $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }

    return $outText;
}


$key =xor_encrypt($cookie,$defaultdata);
$key =str_split($key,4);
$key =$key[0];
echo $key;

$defaultdata=json_encode(array("showpassword"=>"yes", "bgcolor"=>"#ffffff"));
$xor_code= xor_encrypt($defaultdata,$key);
$cookie =base64_encode($xor_code);
echo $cookie;

?>
