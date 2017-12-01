<html>
<head>
<title>Get Ticker</title>

</head>
<body>
<h1> hello </h1>
<? php
print_r ("\n---------------START------------------");
$apikey='';
$apisecret='';
$nonce=time();

$uri='https://bittrex.com/api/v1.1/public/getticker?market=BTC-LTC&apikey='.$apikey.'&nonce='.$nonce;

//$uri='https://bittrex.com/api/v1.1/public/getcurrencies';
$sign=hash_hmac('sha512',$uri,$apisecret);
$ch = curl_init($uri);
curl_setopt($ch, CURLOPT_HTTPHEADER,  array('apisign:'.$sign));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$obj = json_decode(curl_exec($ch),true);
//print_r ($obj);
echo "<table border = 1><tr><td>Bid</td><td>Ask</td><td>Last</td><tr><td>";
echo $obj["result"]["Bid"];
echo "</td><td>";
echo $obj["result"]["Ask"];
echo "</td><td>";
echo $obj["result"]["Last"];
echo "</td></tr></table>";


?>
</body>
</html>


