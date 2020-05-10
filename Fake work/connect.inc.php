<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, Surname, Name, number FROM familytree";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Surname</th><th>Name</th><th>Number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["Surname"]."</td><td> ".$row["Name"]."</td><td> ".$row["number"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

<table border="1" style="width:100% ;">
            <thead>
                <tr>
                    <th>
                        <h3>SURNAME</h3>
                    </th>
                    <th> FIRST NAME</th>
                    <th> RELATIONSHIP</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($name); $i++) { ?>
                    <tr style="background-color:gray; color: white;">
                        <td> <?php echo $surname[$i] ?> </td>
                        <td> <?php echo $name[$i] ?> </td>
                        <td> <?php echo $relationship[$i] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        id="orangeForm-name"
        for="orangeForm-name"

        <!-- <div class="row"> -->
        value="<?php echo $title; ?>"
        value="<?php echo $Surname; ?>"
<!--Grid column-->
<!-- <div class="col-md-12">

    <br><input type="hidden" name="id" value="<?php// echo $id; ?>">
</div>
</div> -->
<?php //if ($update == true):  ?>
                              <!-- <input class="btn btn-primary" type="submit" name="update"> -->
                            <?php// else: ?>
                                <?php //endif 
                            ?>