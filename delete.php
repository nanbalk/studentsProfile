<?php
include_once 'connect_db.php';
$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location:users.php");
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>