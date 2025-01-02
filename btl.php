<?php
session_start();
$username = isset($_SESSION['user']) ? htmlspecialchars($_SESSION['user']) : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <link rel="stylesheet" href="Css/btl.css"> <!-- Đường dẫn tới file CSS -->
    <script src="js/btl.js"></script>
    <title>Trang chủ - Cửa hàng game giá rẻ</title>
</head>
<body onload="showSlides()">
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
        
        <!-- Kiểm tra nếu người dùng đã đăng nhập -->
        <div class="form-login">
                <?php if (!empty($username)): ?>
                    <span class="user-info">Chào, <?php echo $username; ?>!</span>
                    <a href="logout.php" class="logout-btn">Đăng xuất</a>
                <?php else: ?>
                    <button type="button" class="login-btn" onclick="window.location.href='login.php';">Đăng nhập</button>
                <?php endif; ?>
        </div>
    </nav>
</div>
<div id="wrapper">
    <div id="main-content">
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
            <div id="picture">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="images/slideshow_1.jpg">
                    </div>
                    <div class="mySlides fade">
                        <img src="images/slideshow_2.webp">
                    </div>
                    <div class="mySlides fade">
                        <img src="images/slideshow_3.webp">
                    </div>
                    <div class="mySlides fade">
                        <img src="images/slideshow_4.webp">
                    </div>
                    <div class="mySlides fade">
                        <img src="images/slideshow_5.jpg">
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
            </div>
            <div id="content">
            <?php if (!empty($username)): ?>
                <p>Chào mừng bạn, <?php echo $username; ?>! Hãy xem danh sách sản phẩm của chúng tôi trong mục sản phẩm.</p>
            <?php else: ?>
        <div class="headline">
        <ul class="products">
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/ea_sports_fc_25_cho_may_ps5_game_da_banh_sieu_chan_thuc_do_hoa_dep_mat_bc560546aaed465b99f6751890cd4de0_master.webp" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">FIFA 25 - EA Sports FC 25 cho PS5</a>
                        <div class="product-price">1,650,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/a4d8918b1eda4ec9b4cac68400ca7047_5c1e305e83ca46eda9de486a5defce32_master.webp" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">Like a Dragon Ishin cho PS5</a>
                        <div class="product-price">1,280,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/astro-bot---ps5-P1763-1726005427186.jpg" alt="">
                        </a>

                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">Astro bot</a>
                        <div class="product-price">600,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/dia-game-myth-wukong---ps5-P859-1734568252866.jpg" alt="">
                        </a>

                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">Black myth wukong</a>
                        <div class="product-price">700,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/dia-game-ps4-horizon-zero-dawn-complete-edition-P330-1512622672320.jpg" alt="">
                        </a>

                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">Horizon zero</a>
                        <div class="product-price">800,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/game-pokemon-lets-go-pikachu---nintendo-switch-2nd-P1359-1732916306741.jpg" alt="">
                        </a>

                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">Pikachu</a>
                        <div class="product-price">900,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/one_piece_pirate_warriors_4_ps4_b605f347a21b4448809ff4678f3d5134_master.webp" alt="">
                        </a>

                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">Onepiece</a>
                        <div class="product-price">1,000,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/it_takes_two_ps4_38c5cb5de360488992de856604558033_master.webp" alt="">
                        </a>

                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">It Take Two</a>
                        <div class="product-price">900,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/h_cho_may_ps5_do_hoa_doc_dao_game_sinh_ton_sang_tao_hay_nhat_dang_choi_2eac2d2f6b6c459a997ac3626603bff6_master.webp" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">Minecraft cho PS5</a>
                        <div class="product-price">1,080,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/gundam_breaker_4_ps5_362a5af4475e403a881b540bd8f79dc1_master.webp" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">Gundam Breaker 4 cho PS5</a>
                        <div class="product-price">1,550,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/6c05bddcc3ba48c19de3e054fec8334c_c6255738a81d46ef99831d19d33040d7_master.webp" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name"> CRISIS CORE FINAL FANTASY VII REUNION cho PS5</a>
                        <div class="product-price">1,200,000 ₫</div>                        
                    </div>
                </div>
            </li>
            <li>
                <div class="products-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/demons_souls_ps5_ceab927a60a3440b8fe9a9ce48dc2caf_master.webp" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Bags</a>
                        <a href="" class="product-name">Demon's Souls cho PS5</a>
                        <div class="product-price">1,350,000 ₫</div>                        
                    </div>
                </div>
            </li>
        </ul>
    </div>
            <?php endif; ?>
        </div>
    </div>
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
</body>
</html>