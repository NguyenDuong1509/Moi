<?php
require('connect.php'); // Kết nối cơ sở dữ liệu

session_start();
$username = isset($_SESSION['user']) ? htmlspecialchars($_SESSION['user']) : "";
$products = [];

if (empty($username)) {
    header("Location: btl.php");
    exit();
}

// Kiểm tra giá trị của 'type' từ URL
$type = isset($_GET['type']) ? (int)$_GET['type'] : ''; // Chuyển type thành số nguyên

// Truy vấn danh sách sản phẩm
$sql = "SELECT * FROM sanpham";
if ($type !== '') {  // Kiểm tra nếu type không rỗng
    $sql .= " WHERE type = $type"; // Thêm điều kiện lọc theo type
}
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/products.css">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <div id="header">
        <nav class="container-menu">
            <ul id="main-menu">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="all_products.php">Đĩa</a></li>
                <li><a href="#">Danh sách khách hàng</a></li>
                <li><a href="#">Doanh thu</a></li>
            </ul>
            <div class="form-login">
                <span class="user-info">Chào, <?php echo $username; ?>!</span>
                <a href="logout.php" class="logout-btn">Đăng xuất</a>
            </div>
        </nav>
    </div>
    
    <!-- Lọc theo loại sản phẩm -->
    <div class="product-filters">
        <a href="all_products.php?type=0">PS5</a>
        <a href="all_products.php?type=1">PS4</a>
        <a href="all_products.php?type=2">Nintendo Switch</a>
        <a href="all_products.php?type=3">Xbox One</a>
    </div>
<div wrapper>
    <div id="sidebar">
                <h2>SẢN PHẨM NỔI BẬT</h2>
                <div class="canle">
                <div class="product-item" style="box-sizing: border-box;">
                    <li><a class="item-1" href="products.php?id=1"><img src="images/6c05bddcc3ba48c19de3e054fec8334c_c6255738a81d46ef99831d19d33040d7_master.webp" alt="Game nổi bật" height="200px" width="100%"></a></li>
                    <li><a class="item-2" href="products.php?id=1"> CRISIS CORE FINAL FANTASY VII REUNION cho PS5</a></li>
                    <p class="item-3"><b>1,200,000 ₫</b></p>
                </div>
                <div class="product-item" style="box-sizing: border-box;">
                    <li><a class="item-1" href="products.php?id=35">
                        <img src="images/dia-game-myth-wukong---ps5-P859-1734568252866.jpg" alt="Game nổi bật" height="200px" width="100%">
                    </a></li>
                    <li><a class="item-2" href="products.php?id=35">BLACK MYTH: WUKONG DELUX EDITION</a></li>
                    <p class="item-3"><b>1,580,000 ₫</b></p>
                </div>
                <div class="product-item" style="box-sizing: border-box;">
                    <li><a class="item-1" href="products.php?id=38">
                        <img src="images/game-pokemon-lets-go-pikachu---nintendo-switch-2nd-P1359-1732916306741.jpg" alt="Game nổi bật" height="200px" width="100%">
                    </a></li>
                    <li><a class="item-2" href="products.php?id=38">POKEMON: LET'S GO, PIKACHU! - Nintendo Switch</a></li>
                    <p class="item-3"><b>748,000 ₫</b></p>
                </div>
                <div class="product-item" style="box-sizing: border-box;">
                    <li><a class="item-1" href="products.php?id=38">
                        <img src="images/one_piece_pirate_warriors_4_ps4_b605f347a21b4448809ff4678f3d5134_master.webp" alt="Game nổi bật" height="200px" width="100%">
                    </a></li>
                    <li><a class="item-2" href="products.php?id=38">One Piece Pirate Warriors 4 cho PS4 PS5</a></li>
                    <p class="item-3"><b>990,000 ₫</b></p>
                </div>
                <div class="product-item" style="box-sizing: border-box;">
                    <li><a class="item-1" href="products.php?id=38">
                        <img src="images/it_takes_two_ps4_38c5cb5de360488992de856604558033_master.webp" alt="Game nổi bật" height="200px" width="100%">
                    </a></li>
                    <li><a class="item-2" href="products.php?id=38">It Takes Two cho PS4</a></li>
                    <p class="item-3"><b>880,000 ₫</b></p>
                </div>
                </div>
            </div>
    <div id="wrapper">
        <h1>Danh sách sản phẩm</h1>
        <div class="products">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="product-item">
                    <a href="product_detail.php?id=<?php echo $row['id']; ?>">
                        <img src="<?php echo $row['img']; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                    </a>
                    <div class="product-name"><?php echo htmlspecialchars($row['name']); ?></div>
                    <div class="product-price"><?php echo number_format($row['price'], 0, ',', '.') . ' ₫'; ?></div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
</body>
</html>
