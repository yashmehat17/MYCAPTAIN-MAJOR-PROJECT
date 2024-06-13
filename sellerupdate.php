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

<h3>UPDATE SECTION</h3>

<h3>UPDATE EMPLOYEE DATA</h3>
<form method="post" action="sellerupdate.php">
        PRODUCT ID FOR WHICH DETAILS ARE TO BE CHANGED:<br>
        <input type="number" name="upid" value="" required><br>
        NEW PRODUCT NAME:<br>
        <input type="text" name="upname" value="" required><br>
        NEW PRODUCT QUANTITY:<br>
        <input type="number" name="upquantity" value="" required><br>
        NEW PRODUCT PRICE:<br>
        <input type="number" name="upprice" value="" required><br>
        <input type="submit">
    </form>

</html>

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $upid=$_POST["upid"];
        $upname=$_POST["upname"];
        $upquantity=$_POST["upquantity"];
        $upprice=$_POST["upprice"];

        $servername = "localhost";
        $username = "tee_practice";
        $password = "password";
        $dbname = "tee_prac";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die("ERROR OCCURED: " . $conn->connect_error);
        }

        $t1 = "UPDATE PRODUCT SET PNAME='$upname', PQUANTITY='$upquantity', PPRICE=' $upprice' WHERE PID='$upid'";

        if($conn->query($t1) === TRUE)
        {
            echo "PRODUCT DETAILS UPDATED!!";
        }
        else
        {
            echo "ERROR OCCURED: " . $conn->error;
        }

        $conn -> close();
    }
?>