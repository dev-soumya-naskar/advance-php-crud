<?php
include_once ('class/config.php');
include_once ('class/database.php');

$objDB = new DB();

$first_name = $_POST['first_name']; 
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$id = $_POST['id'];


if($_POST['submit']=="submit"){
    if(isset($id) && !empty($id)){
        $insertQuery = "UPDATE users"
                . " SET"
                . " first_name = '".$first_name."', "
                . " last_name = '".$last_name."', "
                . " email = '".$email."', "
                . " phone = '".$phone."' WHERE id = '".$id."'";

        $objDB->setQuery($insertQuery);
        $objDB->execute();
        $_SESSION['suss_msg'] = "Data Update...";
    }else{
        $insertQuery = "INSERT INTO users"
                . " SET"
                . " first_name = '".$first_name."', "
                . " last_name = '".$last_name."', "
                . " email = '".$email."', "
                . " phone = '".$phone."'";

        $objDB->setQuery($insertQuery);
        $objDB->execute();
        $_SESSION['suss_msg'] = "Data Inserted...";
    }
    header("location:index.php");
}

if($_GET['action']=="delete" && !empty($_GET['id'])){
    $deleteValue = $_GET['id'];
    $deleteQuery = "DELETE FROM users WHERE id ='".$deleteValue."' ";
    $objDB->setQuery($deleteQuery);
    $objDB->execute();
    $_SESSION['suss_msg'] = "Data Deleted...";
    header("location:index.php");
}

