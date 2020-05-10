<?php
require "../db/connect.php";

if (isset($_POST['Surname'])) {
    submitForm();
} else if (isset($_GET['deleteid'])) {
    deleteUser($_GET['deleteid']);
} elseif ($_GET['action'] = 'editMe') {
    getEditUsers($_GET['editId']);
}
//$status = "";
//if (isset($_POST['new']) && $_POST['new']==1)
//{
//else if (isset($_GET['action']) == "editUser") {
//  geteditUsers($_GET['editid']);
//}

function submitForm()
{
    $conn = connectDB();

    $Surname = $_REQUEST["Surname"];
    $Name = $_REQUEST["Name"];
    $email = $_REQUEST["email"];
    $religion = $_REQUEST["religion"];
    $number = $_REQUEST["number"];
    $gender =  $_REQUEST["gender"];
    $birthdate = $_REQUEST["birthdate"];
    $title = $_REQUEST["title"];
    $password = $_REQUEST["password"];
    $time = date("Y-m-d h:i:sa");


    $stmt = $conn->prepare("insert into familytree(Surname, Name, religion, birthdate, number, email, gender, title, password, time)values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
    $stmt->bind_param("sssiisssss", $Surname, $Name, $religion, $birthdate, $number, $email, $gender, $title, $password, $time);
    $val = $stmt->execute();
    if ($val == true) {
        echo $val . " registered sucessfully";
        header('location: ../admin/project.php');
    } else {
        echo $val . "Error";
    }
    $stmt->close();
    $conn->close();
}

function getAllUsers()
{
    $conn = connectDB();
    $sql = "SELECT id, title, Surname, Name, number, time FROM familytree";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
    $conn->close();
}
//delete user


function deleteUser($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM familytree WHERE id=$id";
    $result = $conn->query($sql);
    if ($result) {
        header('location: ../admin/project.php');
    }
    $conn->close();
}

//edit user
function getEditUsers($id)
{
    $conn = connectDB();
    $sql = "SELECT id, title, Surname, number, time FROM familytree where id =$id ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo  "Congrats";

        while ($row = $result->fetch_assoc()) {
           return($row);
        }
    }
    $conn->close();
    // }
    // }  //
}


function editUser($id)
{
    $conn = connectDB();
    $sql = "UPDATE familytree WHERE id=$id";
    $result = $conn->query($sql);
    // if ($result) {
    //header('location: ../admin/project.php');
    // }

    // var_dump($result);
    // die();
    $conn->close();
}
// if (isset($_GET['edit'])) {
//     $id = $_GET['edit'];
//     $update = true;
//     $sql = "SELECT id, title, Surname FROM familytree where id =$id ";

//     $value = getEditUsers($id);
//     if ($row = $value->fetch_assoc()) {
//         // $n =fetch_assoc($sql); 
//         $Surname = ['Surname'];
//         $title = ['title'];
//     }
// }
// if (isset($_POST['update'])) {
//     $id = $_POST['id'];
//     $Surname = $_POST['Surname'];
//     $title = $_POST['title'];


//     $sql = "UPDATE familytree  SET Surname='$Surame', title='$title' WHERE id=$id";
//     $_SESSION['message'] = "Address updated!";
//     header('location: ../admin/project.php');
// }
