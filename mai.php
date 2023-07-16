<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
</head>
<body>
    <?php
        $name= $_POST['name']
        $address=$_POST['address']
        $zip_code=$_POST['zip_code']
        $web_t=$_POST['web_t']
        $math=$_POST['math']
        $OS=$_POST['OS']
        $matrix=$_POST['matrix']
        $payment=$_POST['$payment']

        $number=$web_t + $math + $OS + $matrix

        COST_WEB=5.0
        COST_MATH=6.2
        COST_OS=10
        COST_MATRIX=7.8
        
        SUM_WEB=COST_WEB * $web_t
        SUM_MATH=COST_MATH * $math
        SUM_OS=COST_OS * $OS
        SUM_MATRIX+COST_MATRIX * $matrix

        $Total=$web_t*COST_WEB+$math*COST_MATH+$OS*COST_OS+$matrix*COST_MATRIX

        echo("Your name is $name. <br>Your address is $address. <br>Your zip code is $zip_code.")
    ?>
    <Table border="border">
        <thead>
            <th>book</th><th>publisher</th><th>price</th><th>quantity</th>
        </thead>
        <tbody align="center">
            <tr><td>Web technology</td><td>Spring press</td><td>$5.0</td><td><?php echo "$SUM_WEB"?></td></tr>
            <tr><td>mathematics</td><td>ACM press</td><td>$6.2</td><td><?php echo "$SUM_MATH"?></td></tr>
            <tr><td>principle of OS</td><td>Science press</td><td>$10</td><td><?php echo "$SUM_OS"?></td></tr>
            <tr><td>Theory of matrix</td><td>High education press</td><td>$7.8</td><td><?php echo "$SUM_MATRIX"?></td></tr>
        </tbody>
    </Table>
        

    <br>
    <?php
        print("$name has bought $number books.");
        print("$name paid $total .");
        print("paid by $payment");
    ?>
</body>
</html>