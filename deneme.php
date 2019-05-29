<?php 
require("./index.php");
$arr = [[3,4],[2,[5]],2,3,1,3,5,[1,[2,5,2,6,[1]]]];
$sayi = new Sayi();
$toplam = $sayi->hepsiniTopla($arr);
echo $toplam."\n";
//echo hepsiniTopla($arr)."\n";
?>