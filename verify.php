<?php
$access_token = 'uH7/FdqH5XQrxB0t4yGuZmgfl92Y7ZpFa45bsGLitYHkE+eqbB+Sind850wztPqItL4WvDJjLW2eozCwS9Scs0dllMVR/wjLDG55+TzIk9/gPH10nYKQogSqbja+x+ZSAx1uR3aFpOfeNhjNplZhhAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
