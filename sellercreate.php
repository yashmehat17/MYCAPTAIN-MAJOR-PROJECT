<html>
<head>
    <title>CREATE</title>
    <link rel="stylesheet"  href="main.css"/>
</head>

<center>
<h1>DASHBOARD</h1>
<table border="3">
    <tr>
        <td><a href="sellercreate.php">CREATE</a></td>
        <td><a href="selleradd.php">ADD PRODUCT</a></td>
        <td><a href="sellerdelete.php">DELETE PRODUCT</a></td>
        <td><a href="sellerupdate.php">UPDATE PRODUCT</a></td>
        <td><a href="sellerview.php">VIEW PRODUCT</a></td>
    </tr>
</table>
</center>

</html>

<?php
    $servername = "localhost";
    $username = "tee_practice";
    $password = "password";
    $dbname = "tee_prac";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error)
    {
        die("ERROR OCCURED: " . $conn->connect_error);
    }

    $t1 = "CREATE TABLE PRODUCT 
    (
        PID INT(20) PRIMARY KEY,
        PNAME VARCHAR(50)  NOT NULL,
        PQUANTITY INT(50)  NOT NULL,
        PPRICE FLOAT(9) NOT NULL
    )";

    if($conn->query($t1) === TRUE)
    {
        echo "TABLE CREATED!!";
    }
    else
    {
        echo "ERROR OCCURED: " . $conn->error;
    }

    $conn->close();
?>