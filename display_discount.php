<?php
    //get the data from the from
    $product_description = $_POST['product_description'];
    $lish_price = $_POST['lish_price'];
    $discount_percent = $_POST['discount_percent'];
    
    $product_description = filter_input(INPUT_POST, $product_description);
    $lish_price = filter_input(INPUT_POST, $lish_price);
    $discount_percent = filter_input(INPUT_POST, $discount_percent);
    
    //calulate the discount
    $discount = $lish_price * $discount_percent * 01;
    $discount_price = $lish_price - $discount;
    
    //apply curency formatting to the dollar and precent amounts
    $list_price_f = "$".number_format($list_price, 2);
    $discount_percent_f = $discount_percent."%";
    $discount_f = "$".number_format($discount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
    </main>
</body>
</html>