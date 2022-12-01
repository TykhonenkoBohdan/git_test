<?php

// use App\Calculator;

// spl_autoload_register(function($className){
//     $filePath = str_replace('\\', '/', $className);
//     require_once $filePath.'.php'; 
// });


// try {
//     echo Calculator::add(1,2);
//     echo Calculator::divide(1,0);
// } catch (\Throwable $th) {
//     echo $th;
// }

$conn = new PDO
(
    'mysql:host=localhost;dbname=library',
    'root',
    'root'
);

// $sql = $conn->query('select * from library.authors')->fetchAll(PDO::Ass);

// echo '<pre>';

// var_dump($sql);

echo 'Hello new';

'<h3>Hello GitHub</h3>';


echo "Master";
echo 'Hello branch2';

$test = "for merege branch";

