<?php
require('connect.php');
session_start();

$product_id = isset($_GET['id']) ? $_GET['id'] : '';

// Truy vấn chi tiết sản phẩm
$sql = "SELECT * FROM sanpham WHERE id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/product_detail.css">
    <title><?php echo htmlspecialchars($product['name']); ?></title>
</head>
<body>
    <div id="header">
        <nav class="container-menu">
            <ul id="main-menu">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="all_products.php?category=PS5">Đĩa PS5</a></li>
                <li><a href="all_products.php?category=PS4">Đĩa PS4</a></li>
                <li><a href="all_products.php?category=Switch">Đĩa Nintendo Switch</a></li>
            </ul>
        </nav>
    </div>

    <div id="wrapper">
        <h1><?php echo htmlspecialchars($product['name']); ?></h1>
        <div class="product-detail">
            <img src="<?php echo $product['img']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            <div class="product-info">
                <p><strong>Giá:</strong> <?php echo number_format($product['price'], 0, ',', '.') . ' ₫'; ?></p>
                <p><strong>Mô tả:</strong> <?php echo htmlspecialchars($product['description']); ?></p>
            </div>
        </div>
    </div>
</body>
</html> 
