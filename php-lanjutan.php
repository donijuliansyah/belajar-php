<?php

$nama = "DONI" ;
/*
echo $nama ;
echo "<br/>" ;
echo $nama ;
echo "<br/>" ;
echo $nama ;
echo "<br/>" ;
echo $nama ;
echo "<br/>" ;
echo $nama ;
*/
/*
$nomor = 10;


for($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ". $nama. "<br/>";
}
*/

/*
$no = 10;
$i = 0 ;

while ($i < $no) {
    $n = $i + 1;
echo $n." ". $nama. "<br/>";
    $i++;
}
*/


/*
$no = 10;
$i = 0 ;

do {
    $n = $i + 1;
    echo $n." ". $nama. "<br/>";
    $i++;
} while ($i < $no)
*/
/*
$data = array('Avanza','Tesla','Honda','Ayla','XPander','Panther');

foreach ($data as $value){
    echo $value."<br>";
}
*/










// PERCABANGAN
/*
if ($nama = "Hida"){
    echo $nama." adalah orang Lampung";
} else if{
    echo $nama. " berasal orang Lampung";
} else {
    echo $nama. " Darimana ya?";
}
*/

switch ($nama) {
    case "Doni":
        $pesan = $nama. " adalah orang lampung";
    break;
    case "Budi";
        $pesan = $nama. " berasal dari pulau jawa";
    break;
    default;
    $pesan = $nama. " darimana ya?";

}
echo $pesan;
?>