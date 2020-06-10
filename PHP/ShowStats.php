<?php
include_once "Connection.php";
echo '<link href="Style.css" rel="stylesheet">';

$mysqli = connectToDB($host, $userName, $password, $dbName);
if ($mysqli->connect_errno)
{
    printf('<br/>'."Соединение с БД установить не удалось: %s", $mysqli->connect_error);
    exit();
}

showTableContent($mysqli, 'browse_stats');
echo '<br/><br/><br/><br/>';

$mysqli->close();


/* ----------------------------------------------- */
function showTableContent($db, $table)
{
    $tablesFetch = $db->query("SHOW TABLES");
    while ($row = $tablesFetch->fetch_row())
    {
        foreach($row as $tableName)
        {
            if ($tableName == $table)
            {
                echo '<br/><br/><br/><br/>';
                $query = "SELECT * FROM ".$tableName;
                $result = $db->query($query);
                echo '<h2 class="horizontal-centered-text">'.$tableName.'</h2>';
                echo '<div class="main">';
                showTableRow($result);
                echo '</div>';
                $result->free();
            }
        }
    }
    $tablesFetch->free();
}

function showTableRow($fieldArray)
{
    echo '<table class="table_col">';

    $fInfo = $fieldArray->fetch_fields();

    // Вывод заголовков результата.
    echo "<tr>";
    foreach ($fInfo as $val)
        echo "<th>".$val->name."</th>";
    echo "</tr>";

    // Вывод полей данных.
    while ($row = $fieldArray->fetch_row())
    {
        echo "<tr>";
        foreach($row as $value)
        {
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }
    echo '</table>';
}
