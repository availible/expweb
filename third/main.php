<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order Summary</title>
</head>
<body>
    <h1>Order Summary</h1>

    <?php
    // 获取用户输入的值
    $name = $_POST['name'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $quantity = $_POST['quantity'];
    $payment = $_POST['payment'];

    // 输出顾客信息
    printf("<p>Customer Name: %s</p>", $name);
    printf("<p>Customer Address: %s</p>", $address);
    printf("<p>Customer Zip: %s</p>", $zip);

    // 书籍信息
    $books = [
        ['Web technology', 'Spring press', 5.0],
        ['Mathematics', 'ACM press', 6.2],
        ['Principle of OS', 'Science press', 10.0],
        ['Theory of matrix', 'High education press', 7.8]
    ];

    // 显示订购的图书信息
    echo '<table>';
    echo '<thead><tr><th>Book</th><th>Publisher</th><th>Price</th><th>Total Cost</th></tr></thead>';
    echo '<tbody>';

    $totalBooks = 0;
    $totalCost = 0.0;

    foreach ($books as $book) {
        $bookName = $book[0];
        $publisher = $book[1];
        $price = $book[2];

        // 获取对应书籍的数量
        $bookQuantity = $quantity[$bookName];

        // 如果数量大于0则显示
        if ($bookQuantity > 0) {
            // 计算总花费
            $total = $price * $bookQuantity;
            $totalBooks += $bookQuantity;
            $totalCost += $total;

            // 显示订单行
            printf(
                '<tr><td>%s</td><td>%s</td><td>$%.2f</td><td>$%.2f</td></tr>',
                $bookName,
                $publisher,
                $price,
                $total
            );
        }
    }

    echo '</tbody>';
    echo '</table>';

    // 显示购买的书籍数量和总花费
    printf('<p>%s has bought %d books.</p>', $name, $totalBooks);
    printf('<p>%s paid $%.2f.</p>', $name, $totalCost);
    printf('<p>Paid by %s.</p>', $payment);
    ?>
</body>
</html>