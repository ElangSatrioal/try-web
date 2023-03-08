<?php
$a = date('l, d m Y') . "<br>";
echo $a;
$a=1;
$b=1;
while ($a<=4){
    if($b<=4){
        echo   " skomda ";
        $b++;
    } else {
        $b=1;
        echo "<br>";
        $a++;
    }
}

function hitung1(){
    $n=5;
    $m=6;
    echo "<br>".$m+$n;
}hitung1();

function hitung2($w , $r ){
    echo "<br>" . $w + $r;
} hitung2(10,10);

function hitung3( $angka1,$angka2){
    $hasil=$angka1+$angka2;
    return $hasil;
} echo hitung3(5,7);
?>
