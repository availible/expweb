<html>
    <head>
    <title>process the seller.html form</title>
    </head>
    <body>
    <?php
        $web = $_POST["web"];
        $mathematics  = $_POST["mathematics"];
        $OS = $_POST["OS"];
        $matrix = $_POST["matrix"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $city = $_POST["zip"];
        $payment = $_POST["payment"];
    
        if($web == "") $web = 0;
        if($mathematics == "") $mathematics = 0;
        if($OS == "") $OS = 0;
        if($matrix == "") $matrix = 0;
    
        $web_cost = 5.0 * $web;
        $mathematics_cost = 6.2 * $mathematics;
        $OS_cost = 10 * $OS;
        $matrix_cost = 7.8 * $matrix;
    
        $total_price = $web_cost + $mathematics_cost + $OS_cost + $matrix_cost;
        $total_items = $web + $mathematics + $OS + $matrix;
    ?>
    <h4>costomer:</h4>
    <?php
    print("$name<br/> $address<br/> $city<br/>");
    ?>
    
    <table border = "border">
        <caption>Order information</caption>
        <tr>
            <th>book</th>
            <th>publisher</th>
            <th>price</th>
            <th>total cost</th>
        </tr>
        <tr align = "center">
            <td>Web technology</td>
            <td>Springer</td>
            <td>$5.0</td>
            <td><?php printf("$%4.2f",$web_cost)?></td>
        </tr>
        <tr align = "center">
            <td>mathematics</td>
            <td>ACM press</td>
            <td>$6.2</td>
            <td><?php printf("$%4.2f",$mathematics_cost)?></td>
        </tr>
        <tr align = "center">
            <td>principle of OS</td>
            <td>Science press</td>
            <td>$10</td>
            <td><?php printf("$%4.2f",$OS_cost)?></td>
        </tr>
        <tr align = "center">
            <td>Theory of matrix</td>
            <td>High education press</td>
            <td>$7.8</td>
            <td><?php printf("$%4.2f",$matrix_cost)?></td>
        </tr>
    </table>
    
    <?php print "$name has bought $total_items books<br/>";
            printf("$name paid $%5.2f<br/>",$total_price);
            print "paid by $payment<br/>";
    ?>
</body>
</html>
