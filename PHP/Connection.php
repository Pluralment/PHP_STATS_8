<?php
$host = 'localhost';
$dbName = 'sample_db';
$userName = 'Rookie';
$password = 'grasp0189rob';

// Подключение к базе данных.
function connectToDB($host, $userName, $password, $dbName)
{
    $mysqli = new mysqli($host, $userName, $password);
    if ($mysqli->connect_errno)
    {
        printf('<br/>'."Connection is failed: %s", $mysqli->connect_error);
        return null;
    }

    // Установка кодировки.
    $mysqli->query("SET CHARACTER SET 'UTF8'");
    $mysqli->query("SET CHARSET 'UTF8'");
    $mysqli->query("SET NAMES 'UTF8'");

    $query = "USE $dbName";
    // Отправка запроса на подключение к БД.
    if($mysqli->query($query))
        return $mysqli;
    else
    {
        echo "<br/>Cannot connect to database $dbName";
        return null;
    }
}

function findFieldInTable($mysqli, $tableName, $dbFieldName, $field)
{
    $tableName = $mysqli->real_escape_string($tableName);
    $query = "SELECT * FROM ".$tableName;
    if($tableFields = $mysqli->query($query))
    {
        while($row = $tableFields->fetch_assoc())
            if($field == $row[$dbFieldName])
                return true;
    }
    return false;
}