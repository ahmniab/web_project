<?php
function getRowCount($tableName) {

    include 'connection.php';

    $sql = "SELECT COUNT() AS row_count FROM " . $tableName;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $rowCount = $row["row_count"];
        return $rowCount;
    } else {
        return 0;
    }
    $conn->close();
}

function isImageNameExists($imageName)
{

    include 'connection.php';
    $sql = "SELECT FROM  table_name WHERE image_name = '" . $imageName . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
    $conn->close();
}
 
$tableName = "table_name";
$rowCount = getRowCount($tableName);
echo "Number of rows in " . $tableName . ": " . $rowCount . "<br>";

$imageName = "image_name";
$isExists = isImageNameExists($imageName);
if ($isExists) {
    echo "Image name " . $imageName . " already exists in the table";
} else {
    echo "Image name " . $imageName . " does not exist in the table";
}
?>