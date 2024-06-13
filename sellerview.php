<html>
<head>
    <title>ADD</title>
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

<h2>PRODUCT DATA:</h2>
    <table>
        <thead>
            <tr>
                <th>| PRODUCT ID | </th>
                <th>PRODUCT NAME | </th>
                <th>PRODUCT QUANTITY | </th>
                <th>PRODUCT PRICE |</th>
            </tr>
        </thead>
    </table>
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

    $t1 = "SELECT * FROM PRODUCT";
    $result = $conn->query($t1);

    if($result -> num_rows > 0)
    {
        while($rows=$result->fetch_assoc())
        {
            echo "<tr><td>| " .$rows["PID"]. "</td><td> | ".$rows["PNAME"]." </td><td>| ".$rows["PQUANTITY"]." </td><td>| ".$rows["PPRICE"]." |</td></tr><br>"; 
        }           
    }
    else
    {
        echo "NO RESULT FOUND!!";
    }

    $conn -> close();
?>