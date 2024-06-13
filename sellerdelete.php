<html>
<head>
    <title>DELETE</title>
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

<h3>DELETE SECTION</h3>

<form method="post" action="sellerdelete.php">
    ENTER PRODUCT ID TO BE DELETED:<br>
    <input type="text" name="pid" value="" required><br><br>
    <input type="submit">
</form>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $pid=$_POST["pid"];

        $servername = "localhost";
        $username = "tee_practice";
        $password = "password";
        $dbname = "tee_prac";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die("ERROR IS ".$conn->connect_error);
        }

        $t1 = "DELETE FROM PRODUCT WHERE PID=$pid";

        if($conn->query($t1) === TRUE)
        {
            echo "PRODUCT DELETED WITH ID: ".$pid."<br>";
        }
        else
        {
            echo "ERROR IS " . $conn->error;
        }

        $conn->close();
    }
?>