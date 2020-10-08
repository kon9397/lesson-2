<?php

// 4.1
echo '<h1>4.1</h1>';

$x = rand(0,100);

if($x > 0) {
    $y = sin($x)**2;
} else {
    $y = 1 - sin($x**2);
};

echo '$y = ' . $y;

echo '<hr>';

// 4.2
echo '<h1>4.2</h1>';

$x = rand(0,100);

if($x > 0) {
    $y = sin($x**2);
} else {
    $y = 1 + sin($x)**2;
}

echo '$y = ' . $y;

echo '<hr>';

// 4.3
echo '<h1>4.3</h1>';
$x = rand(0, 10);

if($x > 4) {
    echo 'II';
} else {
    echo 'I';
}

echo '<hr>';

// 4.4
echo '<h1>4.4</h1>';

$y = rand(0, 10);

if($y > 3) {
    echo 'I';
} else {
    echo 'II';
}
echo '<hr>';
// 4.5
echo '<h1>4.5 (а)</h1>';
$x = rand(0, 10);

if($x < 2) {
    $y = $x;
} else {
    $y = 2;
}

echo $y;

echo '<br><br>';

// 4.5
echo '<h1>4.5 (б)</h1>';
$x = rand(0, 10);

if($x < 3) {
    $y = $x;
} else {
    $y = -3;
}

echo $y;

echo '<hr>';

// 4.6
echo '<h1>4.6</h1>';
$a = rand(0, 100);
$b = rand(0, 100);

if($a < $b) {
    echo 'Число $b больше $a';
} else if($a > $b) {
    echo 'Число $а больше $b';
} else {
    echo 'Числа равны';
}

echo '<hr>';

// 4.7
echo '<h1>4.7</h1>';
$a = rand(0, 100);
$b = rand(0, 100);

if($a < $b) {
    echo 'Минимальное число $a = ' . $a . '<br>';
    echo 'Максимальное число $b = ' . $b;
} else {
    echo 'Минимальное число $b = ' . $b . '<br>';
    echo 'Максимальное число $a = ' . $a;
}

echo '<hr>';

// 4.8
echo '<h1>4.8</h1>';
$km = rand(0, 100);
$pounds = rand(0, 100);

const POUND = 0.305;

$distance1 = $km * 1000;
$distance2 = POUND * $pounds;

if($distance1 > $distance2) {
    echo 'Км больше чем футов';
} else {
    echo 'Футов больше чем километров';
}

echo '<hr>';

// 4.20
echo '<h1>4.20</h1>';

$m = rand(0, 100);
$n = rand(1, 10);

if($m % $n === 0) {
    echo $m / $n;
} else {
    echo "m на n нацело не делится";
}


echo '<hr>';

// 4.21
echo '<h1>4.21</h1>';

$a = rand(1, 100);
$b = rand(1, 10);

if($b % $a === 0) {
    echo '$a является делителем';
} else {
    echo '$a не является делителем';
}

echo '<hr>';

// 4.22
echo '<h1>4.22</h1>';

$number = rand(0, 100);
echo 'Число: ' . $number . '<br>';

if($number % 2 === 0) {
    echo 'Число четное<br>';
} else {
    echo 'Число не четное<br>';
}

$lastNumber = substr((string)$number, -1);

if($lastNumber == 7) {
    echo 'Оканчивается на цифру 7';
} else {
    echo 'Не оканчивается на цифру 7';
}

echo '<hr>';

// 4.23
echo '<h1>4.23</h1>';
$number = rand(10, 99);
echo 'Число:' . $number . '<br>';
$firstDigit = +substr((string)$number, 0, 1);
$secondDigit = +substr((string)$number, -1);

if($firstDigit > $secondDigit) {
    echo 'Первая цифра больше<br>';
} else if($firstDigit < $secondDigit){
    echo 'Вторая цифра больше<br>';
} else {
    echo 'Они равны';
}

echo '<hr>';

// 4.24
echo '<h1>4.24</h1>';
$number = rand(10, 99);
echo 'Число:' . $number . '<br>';
$firstDigit = +substr((string)$number, 0, 1);
$secondDigit = +substr((string)$number, -1);

$numberSquare = $number**2;

$sum = 4*($firstDigit ** 3 + $secondDigit ** 3);

if($numberSquare === $sum) {
    echo 'Квадрат числа ' . $number . ' равен учетверенной сумме кубов его чисел';
} else {
    echo 'Квадрат числа ' . $number . ' не равен учетверенной сумме кубов его чисел';
}

echo '<hr>';

echo '<h1>4.25</h1>';
$number = rand(10, 99);
echo 'Число:' . $number . '<br>';

$firstDigit = floor($number / 10);
$secondDigit = $number % 10;

$sum = (string)($firstDigit+$secondDigit);

if(strlen($sum) === 2) {
    echo 'Сумма цифр двузначная<br>';
} else {
    echo 'Сумма цифр недвузначная<br>';
}

if((int)$sum > $number) {
    echo 'Сумма его чисел больше';
} else {
    echo 'Сумма его чисел меньше или равна';
}

echo '<hr>';

echo '<h1>4.26</h1>';
$number = rand(10, 99);
echo 'Число:' . $number . '<br>';

$firstDigit = floor($number / 10);
$secondDigit = $number % 10;

$sum = $firstDigit+$secondDigit;

if($sum % 3 === 0) {
    echo 'Сумма цифр кратна 3<br>';
} else {
    echo 'Сумма цифр не кратна 3<br>';
}

$a = rand(1, 100);

if($sum % $a === 0) {
    echo 'Сумма кратна a';
} else {
    echo 'Сумма не кратна a';
}

echo '<hr>';

echo '<h1>4.37</h1>';

$number = rand(-10, 10);

echo $number;
echo '<br>';

if($number >= -5 and $number <= 3) {
    echo 'Число принадлежит интервалу (-5, 3)';
} else {
    echo 'Число не принадлежит интервалу (-5, 3)';
}

echo '<hr>';

echo '<h1>4.38(а)</h1>';

$x = rand(-10, 10);
$y = rand(-10, 10);

echo '$x ' . $x . '<br>';
echo '$y ' . $y;
echo '<br>';

if($x >= 3 and $y >= 2) {
    echo 'Точка попадает в область I';
} else {
    echo 'Точка не попадает в область I';
}

echo '<h1>4.38(б)</h1>';

if($x <= -2 and $y <= -4) {
    echo 'Точка попадает в область I';
} else {
    echo 'Точка не попадает в область I';
}

echo '<hr>';

//4.39
echo '<h1>4.39</h1>';

$x = rand(-10, 10);

if($x >= -1) {
    echo 'Точка попадает на III область';
} else {
    echo 'Точка попадает на I область';
}

echo '<hr>';

//4.40
echo '<h1>4.40</h1>';

$x = rand(-10, 10);

if($x >= -2.4 and $x <= 5.7) {
    echo 'f(x) = ' . $x**2;
} else {
    echo 'f(x) = ' . 4;
}

echo '<hr>';

echo '<h1>4.41</h1>';

$x = rand(0, 10)/10;

if($x >= 0.2 and $x <= 0.9) {
    echo 'f(x) = ' . sin($x);
} else {
    echo 'f(x) = ' . 1;
}

echo '<hr>';

echo '<h1>4.42(а)</h1>';

$a = rand(1, 100);
$b = rand(1, 100);
$c = rand(1, 100);

echo '$a = ' . $a . '<br>';
echo '$b = ' . $b . '<br>';
echo '$c = ' . $c . '<br>';


if(($a < $b AND $a < $c) AND ($b > $a AND $b < $c) AND ($c > $a AND $c > $b)) {
    echo 'Выполняется';
} else {
    echo 'Не выполняется';
}

echo '<h1>4.42(б)</h1>';

$a = rand(1, 100);
$b = rand(1, 100);
$c = rand(1, 100);

echo '$a = ' . $a . '<br>';
echo '$b = ' . $b . '<br>';
echo '$c = ' . $c . '<br>';


if(($a < $b AND $a > $c) AND ($b > $a AND $b > $c) AND ($c < $a AND $c < $b)) {
    echo 'Выполняется';
} else {
    echo 'Не выполняется';
}

echo '<hr>';

echo '<h1>4.43</h1>';

$a = rand(1, 100);
$b = rand(1, 100);

if($a % $b === 0 or $b % $a === 0) {
    echo 'Да, одно из чисел является делителем другого';
} else {
    echo 'Нет, ни одно из чисел не является делителем другого';
}

echo '<hr>';

echo '<h1>4.44</h1>';

$a = rand(-100, -1);
$b = rand(1, 100);
$c = rand(1, 100);
$d = rand(1, 100);

$result = $a % $b;

if($result === $c or $result === $d) {
    echo 'Да, является';
} else {
    echo 'Нет, не является';
}

echo '<hr>';

echo '<h1>4.45</h1>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo '$a = ' . $a . '<br>';
echo '$b = ' . $b . '<br>';
echo '$c = ' . $c . '<br>';

if(($a === $b or $a === $c) or ($b === $c)) {
    echo 'Да, есть парные числа';
} else {
    echo 'Нет парных чисел';
}

echo '<hr>';

echo '<h1>4.46</h1>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo '$a = ' . $a . '<br>';
echo '$b = ' . $b . '<br>';
echo '$c = ' . $c . '<br>';

if(($a === $b and $a === $c) and ($b === $c)) {
    echo 'Треугольник равносторонний';
} else {
    echo 'Треугольник неравносторонний';
}

echo '<hr>';

echo '<h1>4.47</h1>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo '$a = ' . $a . '<br>';
echo '$b = ' . $b . '<br>';
echo '$c = ' . $c . '<br>';

if(($a === $b and $a === $c) and ($b === $c)) {
    echo 'Треугольник равносторонний';
} else {
    echo 'Треугольник неравносторонний';
}

echo '<hr>';

echo '<h1>4.48</h1>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo '$a = ' . $a . '<br>';
echo '$b = ' . $b . '<br>';
echo '$c = ' . $c . '<br>';

if(($a === $b or $a === $c) or ($b === $c)) {
    echo 'Треугольник равнобедренный';
} else {
    echo 'Треугольник неравнобедренный';
}

echo '<hr>';

echo '<h1>5.1</h1>';

for($i = 0; $i < 10; $i++) {
    echo '20 ';
}

echo '<hr>';

echo '<h1>5.2</h1>';

$number = rand(0, 100);
$iterations = rand(0, 20);
for($i = 0; $i < $iterations; $i++) {
    echo $number . ' ';
}

echo '<hr>';

echo '<h1>5.3 (а)</h1>';

for($i = 20; $i <= 35; $i++) {
    echo $i . ' ';
}

echo '<hr>';

echo '<h1>5.3 (б)</h1>';

$b = rand(10, 40);

for($i = 10; $i <= $b; $i++) {
    echo $i**2 . '<br>';
}

echo '<hr>';

echo '<h1>5.3 (в)</h1>';

$a = rand(1, 50);

for($i = $a; $i <= 50; $i++) {
    echo $i**3 . '<br>';
}

echo '<hr>';

echo '<h1>5.3 (г)</h1>';

$a = rand(1, 50);
$b = rand(1, 50);

if($a < $b) {
    for($i = $a; $i <= $b; $i++) {
        echo $i . '<br>';
    }
}

echo '<hr>';

echo '<h1>5.4 (а)</h1>';

for($i = 10; $i <= 25; $i++) {
    echo $i . ' ';
    echo $i+0.4 . '<br>';
}

echo '<hr>';

echo '<h1>5.4 (б)</h1>';

for($i = 25; $i <= 35; $i++) {
    echo $i . ' ';
    echo $i+0.5 . ' ';
    echo $i-0.2 . '<br>';
}

echo '<hr>';

echo '<h1>5.5 (а)</h1>';

for($i = 21; $i >= 10; $i--) {
    echo $i . ' ';
    echo $i-1.8 . '<br>';
}

echo '<hr>';

echo '<h1>5.5 (б)</h1>';

for($i = 45; $i >= 25; $i--) {
    echo $i . ' ';
    echo $i-0.5 . ' ';
    echo $i-0.8 . '<br>';
}

echo '<hr>';

echo '<h1>5.6(а)</h1>';

for($i = 21; $i <= 35; $i++) {
    echo $i . ' ';
    echo $i-0.6 . '<br>';
}

echo '<br>';

echo '<h1>5.6(б)</h1>';

for($i = 16; $i <= 24; $i++) {
    echo $i . ' ';
    echo $i-0.5 . ' ';
    echo $i+0.8 . '<br>';
}

echo '<hr>';

echo '<h1>5.7</h1>';

$price = 20.4;

echo '<h3>Таблица товара</h3>';
echo '<table border="1">';
echo '<tr><th>Кол-во</th><th>Цена</th></tr>';
for($i = 1; $i <= 20; $i++) {
    echo '<tr>' . '<td> ' . $i . '</td>' . '<td>' . $i * $price . '</td>' . '</tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.8</h1>';

$pound = 0.453;

echo '<h3>Фунты в килограммы</h3>';
echo '<table border="1">';
echo '<tr><th>Кол-во фунтов</th><th>Килограммы</th></tr>';
for($i = 1; $i <= 10; $i++) {
    echo '<tr>' . '<td> ' . $i . '</td>' . '<td>' . $i * $pound . '</td>' . '</tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.9</h1>';

$diuym = 25.4;

echo '<h3>Дюймы в сантиметрах</h3>';
echo '<table border="1">';
echo '<tr><th>Кол-во дюймов</th><th>Сантиметры</th></tr>';
for($i = 10; $i <= 22; $i++) {
    echo '<tr>' . '<td> ' . $i . '</td>' . '<td>' . $i * $diuym . '</td>' . '</tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.10</h1>';

$dollar = 28.28;

echo '<h3>Доллар в гривны</h3>';
echo '<table border="1">';
echo '<tr><th>Кол-во долларов</th><th>Гривны</th></tr>';
for($i = 1; $i <= 20; $i++) {
    echo '<tr>' . '<td> ' . $i . '</td>' . '<td>' . $i * $dollar . '</td>' . '</tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.11</h1>';

$radius = 6350;

echo '<h3>Доллар в гривны</h3>';
echo '<table border="1">';
echo '<tr><th>Высота</th><th>Расстояние</th></tr>';
for($i = 1; $i <= 10; $i++) {
    echo '<tr>' . '<td> ' . $i . '</td>' . '<td>' . sqrt($i * (2 * $radius + $i)) . '</td>' . '</tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.12</h1>';

$p0 = 1.29;
$z = 1.25 * (10**-4);

echo '<h3>Плотность воздуха</h3>';
echo '<table border="1">';
echo '<tr><th>h</th><th>Расстояние</th></tr>';
for($h = 0; $h <= 1000; $h+=100) {
    $m = -($h * $z);
    $p = $p0*(exp($m));
    echo '<tr>' . '<td> ' . $h . '</td>' . '<td>' . $p . '</td>' . '</tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.13</h1>';

echo '<table border="1">';
for($i = 1; $i <= 10; $i++) {
    echo '<tr><td>';
    echo $i . ' * 7' . ' = ' . $i * 7;
    echo '</td></tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.14</h1>';

echo '<table border="1">';
for($i = 1; $i <= 10; $i++) {
    echo '<tr><td>';
    echo '9 * ' . $i . ' = ' . $i * 9;
    echo '</td></tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.15</h1>';
$n = rand(1, 9);
echo '<table border="1">';
for($i = 1; $i <= 10; $i++) {
    echo '<tr><td>';
    echo $i . ' * ' . $n . ' = ' . $i * $n;
    echo '</td></tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.16</h1>';

for($i = 2; $i <= 20; $i++) {
    echo sin($i) . '<br>';
}

echo '<hr>';

echo '<h1>5.17</h1>';

for($x = 4; $x <= 28; $x++) {
    $t = $x + 2;
    $y = 2 * ($t**2) + 5.5 * $t - 2;

    echo $y . '<br>';
}

echo '<hr>';

echo '<h1>5.18</h1>';

for($a = 2; $a <= 17; $a++) {
    $t = 4 * $a;
    $z = 3.5 * ($t**2) - 7 * $t + 16;

    echo $z . '<br>';
}

echo '<hr>';

echo '<h1>5.19</h1>';

for($i = 0.1; $i <= 1.1; $i+=0.1) {
    echo sin($i) . '<br>';
}

echo '<hr>';

echo '<h1>5.20</h1>';

for($i = 0.1; $i <= 0.9; $i+=0.1) {
    echo sqrt($i) . '<br>';
}

echo '<hr>';

echo '<h1>5.21</h1>';

echo '<h3>Сыр</h3>';

$kg = rand(30, 60);
echo 'Стоимость 1 кг сыра = ' . $kg . ' гривен';

echo '<table border="1">';
echo '<tr><th>Граммы</th><th>Стоимость</th></tr>';
for($i = 50; $i <= 1000; $i+=50) {
    echo '<tr>' . '<td> ' . $i . '</td>' . '<td>' . $i * $kg / 1000 . '</td>' . '</tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.22</h1>';

echo '<h3>Стоимость</h3>';

$kg = rand(30, 60);
echo 'Стоимость 1 кг конфет = ' . $kg . ' гривен';

echo '<table border="1">';
echo '<tr><th>Граммы</th><th>Стоимость</th></tr>';
for($i = 100; $i <= 2000; $i+=100) {
    echo '<tr>' . '<td> ' . $i . '</td>' . '<td>' . $i * $kg / 1000 . '</td>' . '</tr>';
}
echo '</table>';

echo '<hr>';

echo '<h1>5.23</h1>';

for($i = 2.1; $i < 2.9; $i+=0.1) {
    echo $i . '<br>';
}

echo '<hr>';

echo '<h1>5.24</h1>';

for($i = 3.2; $i < 4; $i+=0.1) {
    echo $i . '<br>';
}

echo '<hr>';

echo '<h1>5.25</h1>';

for($i = 2.2; $i < 4.3; $i+=0.2) {
    echo $i . '<br>';
}

echo '<hr>';

echo '<h1>5.26</h1>';

for($i = 4.4; $i < 6.5; $i+=0.2) {
    echo $i . '<br>';
}

echo '<hr>';

echo '<h1>5.27 (а)</h1>';

$sum = 0;

for($i = 100; $i < 500; $i++) {
    $sum += $i;
}

echo $sum;

echo '<h1>5.27 (б)</h1>';

$a = rand(0, 500);
$sum = 0;

for($i = $a; $i < 500; $i++) {
    $sum += $i;
}

echo $sum;

echo '<h1>5.27 (в)</h1>';

$a = rand(-10, 10);
$sum = 0;

for($i = $a; $i < 10; $i++) {
    $sum += $i;
}

echo $sum;

echo '<h1>5.27 (г)</h1>';

$a = rand(1, 50);
$b = rand(51, 100);
$sum = 0;

for($i = $a; $i < $b; $i++) {
    $sum += $i;
}

echo $sum;

echo '<hr>';

echo '<h1>5.28 (а)</h1>';

$multiple = 1;

for($i = 8; $i < 16; $i++) {
    $multiple *= $i;
}

echo $multiple;

echo '<br>';

echo '<h1>5.28 (б)</h1>';

$a = rand(1, 20);
$multiple = 1;
for($i = $a; $i < 21; $i++) {
    $multiple *= $i;
}

echo $multiple;

echo '<br>';

echo '<h1>5.28 (в)</h1>';

$a = rand(1, 20);
$multiple = 1;
for($i = 1; $i < $a; $i++) {
    $multiple *= $i;
}

echo $multiple;

echo '<br>';

echo '<h1>5.28 (г)</h1>';

$a = rand(1, 50);
$b = rand(51, 100);
$multiple = 1;

for($i = $a; $i < $b; $i++) {
    $multiple *= $i;
}

echo $multiple;

echo '<hr>';

echo '<h1>5.29 (а)</h1>';

$sum = 0;
for($i = 1; $i < 1000; $i++) {
    $sum += $i;
}
$average = $sum / 1000;

echo $average;

echo '<br>';

echo '<h1>5.29 (б)</h1>';

$b = rand(100, 200);
$sum = 0;

for($i = 100; $i < $b; $i++) {
    $sum += $i;
}
$average = $sum / $b;

echo $average;

echo '<h1>5.29 (в)</h1>';

$a = rand(1, 200);
$sum = 0;

for($i = $a; $i < 200; $i++) {
    $sum += $i;
}
$average = $sum / 200;

echo $average;

echo '<h1>5.29 (г)</h1>';

$a = rand(1, 50);
$b = rand(51, 100);
$sum = 0;

for($i = $a; $i < $b; $i++) {
    $sum += $i;
}

$average = $sum / $b;

echo $average;

echo '<hr>';

echo '<h1>5.30 (а)</h1>';

$sum = 0;
for($i = 20; $i < 40; $i++) {
    $sum += $i**3;
}

echo $sum;

echo '<br>';

echo '<h1>5.30 (б)</h1>';

$a = rand(0, 50);
$sum = 0;

for($i = $a; $i <= 50; $i++) {
    $sum += $i ** 2;
}

echo $sum;

echo '<h1>5.30 (в)</h1>';

$n = rand(1, 100);
$sum = 0;

for($i = 1; $i <= $n; $i++) {
    $sum += $i ** 2;
}

echo $sum;

echo '<h1>5.30 (г)</h1>';

$a = rand(1, 50);
$b = rand(51, 100);
$sum = 0;

for($i = $a; $i < $b; $i++) {
    $sum += $i ** 2;
}

echo $sum;

echo '<hr>';

echo '<h1>5.31</h1>';

$n = rand(1, 10);
$s = $n * $n;

for($i = 1; $i <= $n; $i++) {
    $s = $s + ($n + $i)*($n + $i);
}

echo $s;

echo '<hr>';

echo '<h1>5.48</h1>';

$a = rand(1, 10);
$b = rand(11, 20);

$sum = 0;

for($i = $a; $i <= $b; $i++) {
    $sum += $i ** 2;
}

echo $sum;

echo '<hr>';

echo '<h1>6.88</h1>';

$i = 10;

echo '<h3>С предусловием</h3>';
while($i <= 30) {
    echo $i . '<br>';
    $i++;
}

echo '<br><br>';

echo '<h3>С постусловием</h3>';
$i = 10;
do {
    echo $i . '<br>';
    $i++;
} while($i <= 30);

echo '<hr>';

echo '<h1>6.89</h1>';

$i = 100;

echo '<h3>С предусловием</h3>';
while($i >=80) {
    echo $i . '<br>';
    $i--;
}

echo '<br><br>';

echo '<h3>С постусловием</h3>';
$i = 100;
do {
    echo $i . '<br>';
    $i--;
} while($i >= 80);

echo '<hr>';

echo '<h1>6.90</h1>';

$a = rand(11, 20);
$b = rand(1, 10);

echo '<h3>С предусловием</h3>';
while($a <= $b) {
    echo sqrt($a) . '<br>';
    $a++;
}

echo '<br><br>';

echo '<h3>С постусловием</h3>';
$a = rand(11, 20);
$b = rand(1, 10);
do {
    echo sqrt($a) . '<br>';
    $a++;
} while($a <= $b);

echo '<hr>';