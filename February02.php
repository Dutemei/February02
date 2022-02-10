<!-- 1. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Atspausdinti juos į ekraną. -->
<h3>1 Užduotis</h3>
<?php 

for ($i = 0; $i < 4; $i++) {
  echo "Atsitiktinis skaičius: " .rand(0,100)  ."<br>";
}

echo "<br>";

?>


<!-- 2. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Išvesti juos į ekraną. Visus 
nelyginius skaičius padidinti dvigubai. Išvesti visus skaičius į ekraną.-->
<h3>2 Užduotis</h3>

<?php 

  $a = rand(0,100);
  $b = rand(0,100);
  $c = rand(0,100);
  $d = rand(0,100);
   echo 'a='.$a. 'b='.$b. 'c='.$c. 'd='.$d. '<br>';


if ($a %2 !== 0){
    $a = $a *2;
}
if ($b %2 !== 0){
    $b = $b *2;
}
if ($c %2 !== 0){
    $c = $c *2;
}
if ($d %2 !== 0){
    $d = $d *2;
}
    echo 'a='.$a. 'b='.$b. 'c='.$c. 'd='.$d. '<br>';


echo "<br>";

?>

<h3>3 Užduotis</h3>

<?php 
$rand = rand(1,7);
echo $rand. '<br>';
if ($rand == 1) {
    echo 'pirmadienis';
}
if ($rand == 2) {
    echo 'antradienis';
}
if ($rand == 3) {
    echo 'treciadienis';
}
if ($rand == 4) {
    echo 'ketvirtadienis';
}
if ($rand == 5) {
    echo 'penktadienis';
}
if ($rand == 6) {
    echo 'sestadienis';
}
if ($rand == 7) {
    echo 'sekmadienis';
}

echo "<br>";

?>

<h3>4 Užduotis</h3>

<?php

$m = rand(1,7);
if ($m == 1) {
    echo 'Pirmadienis - darbo diena';
}
if ($m == 2) {
    echo 'Antradienis - darbo diena';
}
if ($m == 3) {
    echo 'Treciadienis - darbo diena';
}
if ($m == 4) {
    echo 'Ketvirtadienis - darbo diena';
}
if ($m == 5) {
    echo 'Penktadienis - darbo diena';
}
if ($m == 6) {
    echo 'Sestadienis - laisva diena';
}
if ($m == 7) {
    echo 'Sekmadienis - laisva diena';
}
echo "<br>";

?>

<h3>5 Užduotis</h3>

<?php 

for ($i=0; $i<4; $i++){
    $num = rand(0,100);
   

    if ($num%3 == 0){
        echo "<span style=\"color: green;\">$num</span>";
    } else if ($num%3 == 1) {
        echo "<span style=\"color: yellow;\">$num</span>";
    } else if ($num%3 == 2) {
        echo "<span style=\"color: red;\">$num</span>";
    }
}




?>
<h3>6 Užduotis</h3>

<?php 
for ($i=0; $i<=100; $i++){
    echo $i;
echo "<br>";
}

?>




<h3>7 Užduotis</h3>

<?php 
for ($i=0; $i<=200; $i+=2) {
    if ($i%2==0){
        echo $i;
    }
}
echo "<br>";

?>

<h3>8 Užduotis</h3>
<?php 
    for ($k=0; $k<201; $k+=2) {
   
    if (($k) %6 ==0){
        echo "<span style=\"color: blue;\">$k</span>";
    } else {
        echo $k;
    }
}
echo "<br>";
?>

<h3>9 Užduotis</h3>

<?php 
$num = -1;
while ($num %5 != 0){
    $num = rand(1,50);
    echo $num.' ';
}
echo "<br>";


?>

<h3>10 Užduotis</h3>
<?php 

$num = -1;

while (($num %5 != 0) && ($num %11 !=0)){
    $num = rand(1,100);
    echo $num.' ';
}
echo "<br>";

?>




<!-- 3. Sugeneruoti atsitiktinį skaičių nuo 1 iki 7. Atitinkamai pagal skaičių parašyti kokia tai 
savaitės diena.
4. Trečią uždavinį perdaryti taip, kad rodytų, kokia tai savaitės diena (1-5 – darbo diena, 6-7 
– savaitgalis).
5. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Skaičiai dalūs iš 3 turi būti 
atvaizduoti žaliai, turintys dalybos iš trijų liekaną vienetą – geltonai, turintys dalybos iš 
trijų liekaną dvejetą – raudonai.
6. Išvesti į ekraną skaičius nuo 0 iki 100.
7. Išvesti į ekraną visus lyginius skaičius nuo 0 iki 200.
8. Septinto uždavinio sąlygoje atspausdintus skaičius „pataisyti“, kad dalūs iš 6 būtų 
atvaizduoti mėlynai.
9. Generuoti atsitiktinius skaičius nuo 1 iki 50 tol, kol sugeneruotas skaičius bus dalus iš 5.+
10. Generuoti atsitiktinius skaičius nuo 1 iki 100 tol, kol sugeneruotas skaičius bus dalus iš 5
arba iš 11 -->

<h3>11 Užduotis</h3>
<!-- 11. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 150. -->

<?php 

$sum = 0;

while ($sum<150){
    $m = rand(1,10);
    $sum = $sum +$m;
    echo $m;
}

echo  "<br>";

?>

<h3>12 Užduotis</h3>
<!-- 12. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 120.
Suskaičiuoti kiek skaičių buvo sugeneruota. -->
<?php 


$sum = 0;
$count = 0;
while ($sum<=120){
    $m = rand(1,10);
    $sum = $sum +$m;
    $count++;
    
}echo $count;

echo  "<br>";

?>

<h3>13 Užduotis</h3>
<!-- 13. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 175.
Surasti didžiausią ir mažiausią skaičių. -->
<?php 

$rand_num=rand(1,15);
$sum = 0;
$min=15;
$max = 0;
while ($sum<175){
    $rand_num = rand(1,15);
    $sum += $rand_num;
    if ($rand_num > $max) {
        $max = $rand_num;
    } 
    if ($rand_num < $min) {
        $min = $rand_num;

        echo "$rand_num<br>";
    }
    
}

echo "Sum: $sum<br>";
echo "Min: $min<br>";
echo "Max: $max<br>";


echo  "<br>";

?>

<h3>14 Užduotis</h3>
<!-- 14. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 200.
Surasti skaičių vidurkį. -->

<?php 
$sum2 = 0;
$kiekis = 0;
$vidurkis = 0;

while ($sum2<=200){
    $i = rand (1, 10);
    $sum2 = $sum2 + $i;
    $kiekis++;
} 
$vidurkis = $sum2/$kiekis;
echo $vidurkis;
echo "<br>";
echo $sum2;
echo "<br>";
echo $kiekis;

?>



<h3>15 Užduotis</h3>
<!-- 15. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – skaičiai nuo 1 iki 100. -->

<?php 

$r_array = [];

for ($i=0; $i<=100; $i++){
    array_push($r_array, $i);
}

echo '<prep>'; print_r($r_array); echo '<perp>';
?>

<h3>16 Užduotis</h3>
<!-- 16. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – atsitiktiniai skaičiai nuo 10 iki 25. -->

<?php 
$r_array = [];

for ($i=0; $i<=100; $i++){
    $ran= rand(10,25);
    array_push($r_array,$ran);
}

// echo '<prep>'; print_r($r_array); echo '<perp>';
print_r($r_array);

?>

<h3>17 Užduotis</h3>
<!-- 17. Sukurti atsitiktinio ilgio masyvą, nuo 40 iki 60, kurio reikšmės būtų skaičiai nuo 1 iki 
masyvo ilgio. -->
<?php 
$r_array =[];


for ($i=0; $i<rand(40,60); $i++){
    array_push($r_array,($i+1));
}
echo '<br>';
var_dump($r_array);
?>

<h3>18 Užduotis</h3>
<!-- 18. Sukurti atsitiktinio ilgio masyva, kurio ilgis nuo 80 iki 120, o reikšmės – atsitiktiniai skaičiai 
nuo 5 iki 47. -->

<?php 
$rand_array = [];


for($i=0; $i<=rand(80,120); $i++){
    $rand_array[]= rand(5,47);
}

echo '<pre>' .print_r($rand_array).'<pre>'; 

?>

<h3>19 Užduotis</h3>
<!-- 19. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės D, E, F, G, H. -->

<?php

$arr= [];
$letters = ['D', 'E', 'F', 'G', 'H'];

for ($i=0; $i<101; $i++){
    array_push($arr, $letters[rand(0,4)]);
}

echo '<pre>' . print_r($arr, true) .'<pre>';
?>

<h3>20 Užduotis</h3>
<!-- 20. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės M,N,O,P. Suskaičiuoti, kurios raidės 
buvo daugiausia -->

<?php

$c_array=[];
$letterz = ['M', 'N', 'O', 'P'];

for ($i=0; $i<101; $i++){
    array_push($c_array, $letterz[rand(0,3)]);

}
var_dump($c_array);

$M = $N = $O = $P = 0;

for ($i=0; $i<count($c_array); $i++){
    if($c_array[$i] == "M") {
        $M++;
    } else if($c_array[$i] == "N"){
        $N++;
    } else if($c_array[$i] == "O"){
        $O++;
    } else {
        $P++;
    }
}

echo "M-".$M." "."N-".$N." "."O-".$O." "."P -".$P." ";
echo "<br>";

if ($M > $N && $M > $O && $M > $P){
    echo 'dazniausiai pasikartojanti' .$M. 'M ';
}
if ($N > $M && $N > $O && $N > $P){
    echo 'dazniausiai pasikartojanti' .$N. 'N ';
} 
if ($O > $M && $O > $N && $O > $P){
    echo 'dazniausiai pasikartojanti' .$O. 'O ';
}
if ($P > $M && $P > $N && $P > $O){
    echo 'dazniausiai pasikartojanti' .$P. 'P ';
}
?>


<h3>21 Užduotis</h3>
<!-- 21. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės 
skaičiai nuo 1 iki 10 ([1,2,3,4,5,6,7,8,9,10]) -->

<?php 

$masyvai = [];
for ($i=0; $i<101; $i++){
    for($s=0; $s<10; $s++){
        $masyvai[$i][$s] = $s+1;
    }
}
echo '<prep>';
print_r($masyvai);


?>

<h3>22 Užduotis</h3>
<!-- 22. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės 
atsitiktiniai skaičiai nuo 1 iki 17. -->

<?php
$masyvas = [];

for ($i=0; $i<101; $i++){
    for ($a=0; $a<10; $a++){
        $masyvas[$i][$a] = rand(1,17);
    }
}
 print_r($masyvas);
   
?>








<!-- 
23. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 
18, o reikšmės – skaičiai nuo 1 iki masyvo ilgio.
24. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 
18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 30.
25. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 
18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti didžiausią skaičių visame didžiajame 
masyve.
26. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 
18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti mažiausią skaičių visame didžiajame 
masyve ir kiek kartų jis pasikartojo.
27. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės 
atsitiktiniai skaičiai nuo 1 iki 17. Išrykiuoti vidinių masyvų reikšmes didėjančia tvarka.
28. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės 
atsitiktiniai skaičiai nuo 1 iki 17. Perrikiuoti vidinius masyvus pagal vidinių masyvų reikšmių 
sumas didėjančia tvarka.
29. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės 
atsitiktiniai skaičiai nuo 1 iki 17. Iš dvimačio masyvo sukurti vieną vienmatį masyvą – visas 
dvimačio masyvo masyvų reikšmes perkelti į naują masyvą.
30. Papildyti 29 uždavinį taip, kad surastų skaičių vidurkį ir palygintų jį su vidurinia reikšme, 
kuris didesnis. Jei elementų yra nelyginis skaičius, pvz 9, tai vidurinė reikšmė bus 5-as 
elementas, jei elementų yra lyginis skaičius, pvz 8, tai vidurinė reikšmė bus 4-os ir 5-os reikšmės 
aritmetinis vidurkis -->
