<?php
// perulangan / looping
//for, while, do while, foreach
//counted loop | uncounted loop

//perulangan for
for($i = 6; $i >= 1; $i--){
    echo "<h$i>Heading $i</h$i>";
}

//perulangan while
$nilai = 15;
while($nilai <= 20){
    echo "<p>Nilai while $nilai</p>";
    $nilai++;
}

//perulangan do while
$nilai1 = 21;
do{
    echo "<p>Nilai do while $nilai1</p>";
    $nilai1++;
} while($nilai1 <= 25);

//perulangan foreach
$students = ["Syifa", "Herta", "Ayas", "Farhan"]; //array numerik
foreach($students as $student){
    echo "Nama siswa : $student <br>";
}
echo "<br>";

$syifa = [
    'Fullname' => 'Nurul Asyifa',
    'NIM' => '2411082018',
    'Phone Number' => '082200000000',
    'isActive' => TRUE
];

$herta = [
    'Fullname' => 'Herta Soleha',
    'NIM' => '2411082018',
    'Phone Number' => '082200000000',
    'isActive' => TRUE
];

$ayas = [
    'Fullname' => 'Ayas Tampan',
    'NIM' => '2411082018',
    'Phone Number' => '082200000000',
    'isActive' => TRUE
];

$farhan = [
    'Fullname' => 'Farhan Kebab',
    'NIM' => '2411082018',
    'Phone Number' => '082200000000',
    'isActive' => TRUE
]; // array assosiative (key => value)

foreach($syifa as $key => $value){
    echo "$key : $value <br>";
}
echo "<br>";
foreach($herta as $key => $value){
    echo "$key : $value <br>";
}
echo "<br>";
foreach($ayas as $key => $value){
    echo "$key : $value <br>";
}
echo "<br>";
foreach($farhan as $key => $value){
    echo "$key : $value <br>";
}

?>