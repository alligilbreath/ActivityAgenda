<?php
// File name controller.php
// Acts as the go between the view and the model
include "DatabaseAdapter.php"; // Make theDBA available in this PHP file
$theDBA = new DatabaseAdaptor();
echo json_encode($theDBA->getAllUsers());

?>