<?php
include_once "Connection.php";
if ($mysqli = connectToDB($host, $userName, $password, $dbName))
{
    $tableName = "browse_stats";
    $dbFieldName = "browser";
    $browserArray =  get_browser($_SERVER['HTTP_USER_AGENT'], true);
    $browser = $browserArray['browser'];
    if (findFieldInTable($mysqli, $tableName, $dbFieldName, $browser))
    {
        $query = "SELECT used FROM $tableName WHERE browser = '$browser'";
        if ($countField = $mysqli->query($query))
        {
            $count = $countField->fetch_array(MYSQLI_ASSOC);
            $newCount = $count['used'] + 1;
            $query = "UPDATE $tableName SET used = $newCount WHERE browser = '$browser'";
            $mysqli->query($query);
        }
    }
    else
    {
        $query = "INSERT INTO $tableName VALUES('$browser', 1)";
        $mysqli->query($query);
    }
}
