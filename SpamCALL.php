<?php
// Limit 3x Telpon Setiap Satu Nomor
echo " \e[1;34m____            _       _      ____    _    _     _ \n";
echo "\e[1;34m/ ___|  ___ _ __(_)_ __ | |_   / ___|  / \  | |   | |\n";
echo "\e[1;34m\___ \ / __| '__| | '_ \| __| | |     / _ \ | |   | |\n";
echo " \e[1;31m___) | (__| |  | | |_) | |_  | |___ / ___ \| |___| |___\n";
echo "\e[1;31m|____/ \___|_|  |_| .__/ \__|  \____/_/   \_\_____|_____|\n";
echo "                  |_|\n";
echo "\e[1;92mScript Created By /N3S7E4MCyber\n\n";
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

echo " NB ! Hanya Bisa 3x Untuk 1 Nomor ";
echo " Masukan Nomor\nEx.08xx\nNomor : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
