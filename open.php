<?php

@system("clear"); 
@system("rm -rf caping");
@system("git clone https://github.com/Khairil2203/caping");
@system("clear"); 
//warna 
$biru="\033[1;34m"; 
$turkis="\033[1;36m"; 
$ijo="\033[92m"; 
$putih="\033[1;37m"; 
$pink="\033[1;35m"; 
$red="\033[1;31m"; 
$kuning="\033[1;33m"; 
$t="\n"; 
$r="\n\n";
system("clear"); 

echo$red."
▒█░░░▄░░▒█░░▄█▀▄─▒▐█▀▀▄▒██▄░▒█▌▐██▒██▄░▒█▌░▐█▀▀▀─$ijo
▒█░░▒█░░▒█░▐█▄▄▐█▒▐█▒▐█▒▐█▒█▒█░░█▌▒▐█▒█▒█░░▐█░▀█▌$kuning
░▒▀▄▀▒▀▄▀░░▐█─░▐█▒▐█▀▄▄▒██░▒██▌▐██▒██░▒██▌░▐██▄█▌".$r;

echo $putih."[".$red.">".$putih."]".$red." Ini Adalah Program Ilegal ".$t; echo $putih."[".$red.">".$putih."]".$red." Resiko Harap Di Tanggung Pengguna ".$t; echo $putih."[".$red.">".$putih."]".$red." Kami Tidak Mau Menanggung Resiko Ini ".$t; echo $putih."[".$red.">".$putih."]".$red." Harap Di Mengerti.....!".$r;

echo$putih."[".$kuning."+".$putih."]".$ijo." Anda Yakin Ingin Menjalankan Program Ini?".$r;
echo$putih."[".$kuning."1".$putih."]".$putih." Yakin".$t;
echo$putih."[".$kuning."2".$putih."]".$putih." Tidak".$r;

$skip=$putih."[".$red."?".$putih."] pilihan anda :$ijo ";
$konf=readline($skip);
sleep(0);
  if($konf=="1"OR$konf=="1"){
sleep(0);
echo $putih."[".$ijo."W".$putih."] Waiting..............!!!".$t;
sleep(0);
echo $kuning."[";
$tu=0;
while($tu<5){
sleep(0);
$tu++;
echo $putih."—";
}
echo $kuning."[";
sleep(0);
echo $ijo." Banned Mampus ";
sleep(0);
echo $kuning."]";
$ri=0;
while($ri<5){
sleep(0);
$ri++;
echo $putih."—";
}
echo $kuning."]".$r;
sleep(0);
@system("clear");
echo$putih."[".$ijo."+".$putih."]".$turkis."Silahkan Ketik cd caping".$t;
}
else{
sleep(0);
echo $putih."[".$ijo."W".$putih."] Waiting..............!!!".$t;
sleep(0);
echo $kuning."[";
$tu=0;
while($tu<5){
sleep(0);
$tu++;
echo $putih."—";
}
echo $kuning."[ ";
sleep(0);
echo $red."GOOD BYE ";
sleep(0);
echo $kuning."]";
$oi=0;
while($oi<5){
sleep(0);
$oi++;
echo $putih."—";
}
echo $kuning."]".$r;
@system("clear");

echo$putih."[".$ijo."+".$putih."]".$turkis."Takut Banned Jangan Nuyul Asu".$t;

exit;
}

