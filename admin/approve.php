<?php
include_once "config.php";

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['approve'])) {
    $rowId = $_POST['row_id'];

    // SQL query to insert data from 'requests' into 'partner' table
    $insertSql = "INSERT INTO partner (name, phone, email, aadhar, occupation, experience, address, password)
                  SELECT name, phone, email, aadhar, occupation, experience, address, password
                  FROM requests WHERE id = $rowId";

    // Execute the INSERT query to move data from 'requests' to 'partner'
    if ($con->query($insertSql) === TRUE) {
        // Now, delete the row from 'requests' table
        $deleteSql = "DELETE FROM requests WHERE id = $rowId";

        // Execute the DELETE query
        if ($con->query($deleteSql) === TRUE) {
            echo "
            <script>
                window.location.assign('requests.php?msg=approve successfully&err=0');
            </script>
            ";
        } else {
            echo "Error deleting row: " . $con->error;
        }
    } else {
        echo "Error inserting data: " . $con->error;
    }
}

$conn->close();
?>
