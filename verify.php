<?php
$access_token = 'y21E/lcOxq4ZF/kHu6VIDejcq7qOscI8bCIifzD0Cq24bFd0Z71wn9CGeswZxoymLKtKtIJ+wp6hG4LXkT2Tk+eUr95/Xo7+T5Df2fgH5EAlgFPji16ToHUlsZWVjjFBdlQtE+E+UEDLVPEwmBQVWAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
