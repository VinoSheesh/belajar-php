<?php
echo "<h2>perulangan for PHP </h2><br>";
for($i=1;$i<=10;$i++){
    echo $i."<br>";
}
echo "<h2>perulangan naik for PHP </h2><br>";
for($j=15;$j>=0;$j--){
    echo $j."<br>";
}

echo "<h2>perulangan naik for PHP </h2><br>";
for($z=30;$z>=10;$z--){
    echo $z."<br>";
}

echo "<hr>";
echo "Perulangan While dengan PHP.<br>";
echo "Perulangan Naik.<br>";
$i=5;
while ($i<14){
    echo $i."<br>";
    $i++;
}
echo "<br>";
$j=50;
while ($j>0){
    $j--;
    echo $j."<br>";
}
echo "<br>";
$z=0;
while ($z<100){ 
    echo $z."<br>";
    $z+=10;
}
echo "<br>";
$z=0;
while ($z<100){ 
    $z+=10;
    echo $z."<br>";
}

echo "perulangan naik <br>";
$y=5;
do{
    echo $y."";
    $y++;
}while ($y<14);

echo "<br>";

$x=0;
do {
    $x+=10;
    echo $x."";
}while ($x<100);
echo "perulangan menurun<br>";

$v=60;
do {
    echo $v."";
    $v--;
} While ($v>0);

echo "<br>";

$b=60;
do {
    $b-=20;
    echo $b ."";
} while ($b>0);



