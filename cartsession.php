<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="3" align="center" width="75%" height="100%">
        <?php
            echo "<tr><td colspan='3' align='center'><h1>PURCHASE SUCCESSFUL..</h1></td></tr>";
            echo "<tr><td colspan='3' align='center'><h2>YOUR BILL</h2></td></tr>";

            session_start();
            $product1 = $_POST["qp1"];
            $_SESSION["p1"] = $product1;
            $product2 = $_POST["qp2"];
            $_SESSION["p2"] = $product2;

            $total_product1 = $product1 * 100000;
            $total_product2 = $product2 * 200000;

            $total_amount = $total_product1 + $total_product2;

            echo "<tr><td>PRODUCT NAME</td><td>PRODUCT QUANTITY</td><td>PRICE</td></tr>";
            echo "<tr><td>Product 1</td><td>".$_SESSION["p1"]."</td><td>$total_product1*".$_SESSION["p1"]."</td></tr>";
            echo "<tr><td>Product 2</td><td>".$_SESSION["p2"]."</td><td>$total_product2*".$_SESSION["p2"]."</td></tr>";
            echo "<tr><td colspan='2' align='right'><h4>TOTAL AMOUNT: </h4></td><td>$total_amount</td></tr>";
        ?>
    </table>
</body>
</html>
