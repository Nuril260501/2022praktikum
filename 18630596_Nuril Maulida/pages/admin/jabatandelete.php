<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $database = new Database();
    $db = $database->getConnection();

    $deleteSQL = "DELETE FROM jabatan where id=?";
    $stmt = $db->prepare($deleteSQL);
    $stmt->bindParam(1, $_GET['id']);
    if ($stmt->execute()) {
        $_SESSION['hasil'] = true;
    } else {
        $_SESSION['hasil'] = false;
    }
}
echo "<meta http-equiv='refresh' content='0;url=?page=jabatanread'>";
