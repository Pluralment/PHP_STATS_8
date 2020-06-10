<?php

// Массив, хранящий данные с формы регистрации.
$formData = array();

if(isset($_POST['first-name']))
{
    $formData[] = $_POST['first-name'];
}

if(isset($_POST['last-name']))
{
    $formData[] = $_POST['last-name'];
}

if(isset($_POST['email']))
{
    $formData[] = $_POST['email'];
}

if(isset($_POST['pass']))
{
    $formData[] = $_POST['pass'];
}

showSingularElements($formData);
$arr = [ 1, 2, 3 ];
var_dump( $arr );

// Функция вывода уникальных элементов массива.
function showSingularElements($ar){
    $tmpArray = array();
    foreach($ar as $key => $value){
        if(!in_array($value, $tmpArray))
        {
            $tmpArray[$key] = $value;
            echo $value . '<br>';
        }
    }
}

