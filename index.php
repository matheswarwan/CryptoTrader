<html>
<head>
	<title></title>
</head>
<body>
<h2>Place Buy Order in Bittrex (BTC)</h2>

<p>&nbsp;</p>

<? php 
$apikey='xxx';
$apisecret='xxx';
$nonce=time();
$uri='https://bittrex.com/api/v1.1/public/getmarketsummaries';
$sign=hash_hmac('sha512',$uri,$apisecret);
$ch = curl_init($uri);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('apisign:'.$sign));
$execResult = curl_exec($ch);
$obj = json_decode($execResult);
?>

<form action="submit" id="buy" name="buyForm">
<table border="0" cellpadding="1" cellspacing="1" style="width:500px;">
	<tbody>
		<tr>
			<td><input checked="checked" name="acc1" type="checkbox" value="acc1" /></td>
			<td>Account #1</td>
			<td><input maxlength="60" name="key1" type="text" value="key1" /></td>
			<td><input maxlength="60" name="secret1" type="text" value="secret1" /></td>
		</tr>
		<tr>
			<td><input name="acc2" type="checkbox" value="acc2" /></td>
			<td>Account #2</td>
			<td><input maxlength="60" name="key2" type="text" value="key2" /></td>
			<td><input maxlength="60" name="secret2" type="text" value="secret2" /></td>
		</tr>
		<tr>
			<td><input name="acc3" type="checkbox" value="acc3" /></td>
			<td>Account #3</td>
			<td><input maxlength="60" name="key3" type="text" value="key3" /></td>
			<td><input maxlength="60" name="secret3" type="text" value="secret3" /></td>
		</tr>
	</tbody>
</table>

<p><input maxlength="10" name="Coin Name" type="text" value="coinName" /></p>

<table border="0" cellpadding="1" cellspacing="1" style="width: 600px;">
	<tbody>
		<tr>
			<td>Entry Point</td>
			<td><input maxlength="15" name="entrypoint1" type="text" value="entry point 1" /></td>
			<td><input maxlength="15" name="ep2" type="text" value="entry point 2" /></td>
			<td><input maxlength="15" name="ep3" type="text" value="entry point 3" /></td>
		</tr>
		<tr>
			<td>Target</td>
			<td><input maxlength="15" name="tg1" type="text" value="target 1" /></td>
			<td><input maxlength="15" name="tg2" type="text" value="target 2" /></td>
			<td><input maxlength="15" name="tg3" type="text" value="target 3" /></td>
		</tr>
		<tr>
			<td>Stop Loss</td>
			<td><input maxlength="15" name="sl" type="text" value="stop loss" /></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>

<p><input name="submit" type="button" value="place buy order" /></p>
</form>

<p>&nbsp;</p>
</body>
</html>
