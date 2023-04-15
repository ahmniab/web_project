<?php 

    function countRows($table_name)
    {
    include 'connection.php';

    $sql = "SELECT COUNT(*) as count FROM $table_name";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $count = $row["count"];
    } 

    else {
    $count = 0;
    }

    mysqli_close($conn);
    return $count;
    } 

    $table_name = "users";
    $row_count = countRows($table_name);
    echo "Number of rows in $table_name table: " . $row_count;

?>
