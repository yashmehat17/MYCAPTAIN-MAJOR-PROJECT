<html>
<head>
    <title>ADD</title>
    <link rel="stylesheet"  href="main.css"/>
</head>

<body>
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

    <h3>ADD PRODUCT DATA</h3>
    <form method="post" action="selleradd.php">
        PRODUCT ID:<br>
        <input type="text" name="pid" value="" required><br>
        PRODUCT NAME:<br>
        <input type="text" name="pname" value="" required><br>
        PRODUCT QUANTITY:<br>
        <input type="number" name="pquantity" value="" required><br>
        PRODUCT PRICE:<br>
        <input type="number" name="pprice" value="" required><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $pid=$_POST["pid"];
        $pname=$_POST["pname"];
        $pquantity=$_POST["pquantity"];
        $pprice=$_POST["pprice"];
        
        $servername = "localhost";
        $username = "tee_practice";
        $password = "password";
        $dbname = "tee_prac";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die("ERROR OCCURED: " . $conn->connect_error);
        }
    
        $t1 = "INSERT INTO PRODUCT(PID, PNAME, PQUANTITY, PPRICE) VALUES('$pid','$pname','$pquantity','$pprice')";
    
        if($conn->query($t1) === TRUE)
        {
            echo "<BR>PRODUCT ADDED WITH ID: ".$pid." ADDED!!";
        }
        else
        {
            echo "<BR>ERROR OCCURED: " . $conn->error;
        }
    
        $conn -> close();
    }
?>