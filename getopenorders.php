
print_r ("\n---------------START------------------");
$apikey='xxx';
$apisecret='xxx';
$nonce=time();
//$uri='https://bittrex.com/api/v1.1/public/getticker';
$uri='https://bittrex.com/api/v1.1/market/getopenorders?apikey='.$apikey.'&nonce='.$nonce;

//$uri='https://bittrex.com/api/v1.1/public/getcurrencies';
$sign=hash_hmac('sha512',$uri,$apisecret);
$ch = curl_init($uri);
curl_setopt($ch, CURLOPT_HTTPHEADER,  array('apisign:'.$sign));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //This is needed to return all the data. Use other forms of error handlings as well.

$obj = json_decode(curl_exec($ch),true);
print_r ($obj);
//foreach ($obj["result"] as $o) {
    //print("\n");
    //echo $o["Currency"];
    //$i = $i + 1;
//}

print_r ("\n----------------END-----------------");
