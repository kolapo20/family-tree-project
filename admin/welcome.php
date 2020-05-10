<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    $Surname = $_REQUEST["Surname"];
    $Name = $_REQUEST["Name"];
    $email = $_REQUEST["email"];
    $religion = $_REQUEST["religion"];
    $number = $_REQUEST["number"];
    $gender =  $_REQUEST["gender"];
    $birthdate = $_REQUEST["birthdate"];
    $title = $_REQUEST["title"];
    $password = $_REQUEST["password"];



    // Create connection
    $conn = new mysqli("localhost", "root", "", "test");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into familytree(Surname, Name, religion, birthdate, number, email, gender, title, password)values(?, ?, ?, ?, ?, ?, ?, ?, ?) ");
        $stmt->bind_param("sssiissss", $Surname, $Name, $religion, $birthdate, $number, $email, $gender, $title, $password);
        $val = $stmt->execute();
         if($val == true){
         echo $val . " registered sucessfully";
         }
        $stmt->close();
        $conn->close();
    }
    <td>
    <form action='../db/crud.php' method='GET'>
          <input hidden name='deleteid' value=" . $row["id"] . " />
          <span class='table-remove'><button type='submit'
          class='btn btn-danger btn-rounded btn-sm my-0'>Delete</button></span>
          
      </form>
        </td>
/*
<br><input type="radio" name="gender" value="m"> <label>Male</label>

<br><input type="radio" name="gender" value="f"> <label>Female</label>

</div>
*/
     ?>


</body>

</html> 