<?php
require('connect.php');
session_start();
$id = (int) $_GET['id'];
$sql = "SELECT * FROM sanpham WHERE id = {$id}";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$price = number_format($row['price'], 0, ',', '.') . ' ₫';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM sanpham WHERE id={$id}";
    $result = $conn->query($sql);
    $number = $_POST['amount'];
    $row = $result->fetch_assoc();
    $soluong = $row['quantity'] - $number;
    $sql1 = "UPDATE sanpham SET quantity= '$soluong' WHERE id={$id}";
    $sum += $row['price'];
    $kq = $conn -> query($sql1);
    if ($kq) {
        header('Location:hienthi.php');
}
}
$username = isset($_SESSION['user']) ? htmlspecialchars($_SESSION['user']) : "";
$products = [];

if (!empty($username)) {
    $sql = "SELECT * FROM sanpham";
    if (isset($_POST['search'])) {
        $nd = $conn->real_escape_string($_POST['noidung']);
        $sql = "SELECT * FROM sanpham WHERE name LIKE '%$nd%'";
    }
}
else header("Location:btl.php");
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/products.css">
    <title>Cửa hàng game giá rẻ</title>
</head>
<body>
    <div id="header">
        <nav class="container-menu">
            <div class="head">
                <a href="index.php" id="logomenu">
                    <img src="images/logomenu.png" alt="logomenu">
                </a>
                <!-- Thanh tìm kiếm -->
                <div class="form-search">
                    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px" method="POST" action="index.php">
                        <input type="text" placeholder="Nhập thông tin để tìm kiếm" name="search2">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <ul id="main-menu">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="#">Đĩa</a>
                    <ul class="sub-menu">
                        <li><a href="#">Game Ps4</a></li>
                        <li><a href="#">Game Ps5</a></li>
                        <li><a href="#">Game Nintendo Switch</a></li>
                        <li><a href="#">Game Xbox One</a></li>
                    </ul>
                </li>
                <li><a href="#">Danh sách khách hàng</a></li>
                <li><a href="#">Doanh thu</a></li>
            </ul>
            <div class="form-login">
                <span class="user-info">Chào, <?php echo $username; ?>!</span>
                <a href="logout.php" class="logout-btn">Đăng xuất</a>
            </div>
        </nav>
    </div>
    <div id="wrapper">
        <!-- sp -->
        <section class="product">
            <div class="container">
                <div class="product-content-row">
                    <div class="product-content-left">
                        <div class="product-item">
                            <img src="<?php echo $row["img"]; ?>" alt="ảnh sản phẩm">
                        </div>
                    </div>
                    <div class="product-content-right ">
                        <div class="product-name">
                            <h1><?php echo $row["name"]; ?></h1>
                            <h1>
                                <div id="buy-amount">
                                    <button id="btn-minus" class="minus-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                        </svg>
                                    </button>
                                    <button id="btn-plus" class="plus-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2} stroke="currentColor" className="size-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                    </button>
                                </div>
                        </div>
                        <form  method="post" >
                        <input type="text" name="amount" id="amount" value="1">
                            <h1>Số lượng: <?php echo $row["quantity"]; ?>
                            </h1>
                            <div class="product-price">
                                <p>Giá: <?php echo $price = number_format($row['price'], 0, ',', '.') . " ₫"; ?></p>
                            </div>
                            <div class="product-information">
                                <p>Thông tin sp</p>
                            </div>
                            <div class="information">
                                <div class="information-chitiet">
                                    <?php echo $row['info']; ?>
                                </div>
                            </div>
                            <div class="product-button">
                                <a onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này?')" href="sell.php?id=<?php echo $row["id"];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i>  | Xoá</a>
                                <a href="update.php?id=<?php echo $row["id"]; ?> "><i class="fa-solid fa-wrench"></i> | Sửa</button></a>
                                <button type="input"> Đã Bán</button>
                                </div>
                        </form>
                    </div>
                </div>  
            </div>
        </section>

        <!-- end -->
    </div>
    <div id="footer">
    <div class="col-1">
            <h3>GAME GIÁ RẺ</h3>
            <p align="left">Đây là sản phẩm đầu tay của team bọn em, ít nhiều sẽ có những sai sót.
                Mong sẽ nhận được sự chỉ bào và góp ý của mọi người ạ. Những góp ý của mọi người hãy
                gửi qua số hotline hoặc các nền tảng mạng xã hội ạ!
            </p>
        </div>
        <div class="col-2">
            <h3>HOTLINE</h3>
            <p>0349314078 | 0339844871</p>
        </div>
        <div class="col-3">
            <h3>FOLLOW US</h3>
            <div class="sotical-icons">
                <a href="https://www.facebook.com/profile.php?id=100045314842701"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/hthinh2201/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://discord.com/channels/1237314368417300501/1237314369126400031"><i class="fa-brands fa-discord"></i></a>
            </div>
        </div>
    </div>
    <script>
        function handle(e) {
            console.log(amount);
        }

        let btnplus = document.getElementById('btn-plus');
        let btnminus = document.getElementById('btn-minus');
        let amount = document.getElementById('amount');
        btnplus.addEventListener('click', function(e) {
            let number = parseInt(amount.value);
            if(!isNaN(number))
        {
            number++
            amount.value = number;
        }
        });
        btnminus.addEventListener('click',function(e)
        {
            let number = parseInt(amount.value);
            if (!isNaN(number) && amount.value >1)
        {
            number--
            amount.value = number;
        }
        });
    </script>
</body>

</html>