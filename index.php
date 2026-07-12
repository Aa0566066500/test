<?php
session_start();
require_once "config/database.php";

$storeName = "Nova Store";

$featuredProducts = [
    [
        "id"=>1,
        "name"=>"iPhone 17 Pro",
        "price"=>"5499",
        "image"=>"assets/images/iphone.jpg"
    ],
    [
        "id"=>2,
        "name"=>"AirPods Pro",
        "price"=>"999",
        "image"=>"assets/images/airpods.jpg"
    ],
    [
        "id"=>3,
        "name"=>"Apple Watch Ultra",
        "price"=>"2899",
        "image"=>"assets/images/watch.jpg"
    ],
    [
        "id"=>4,
        "name"=>"MacBook Pro M5",
        "price"=>"8999",
        "image"=>"assets/images/macbook.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= $storeName ?></title>

<link rel="stylesheet" href="assets/css/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<header>

<div class="logo">

<h2><?= $storeName ?></h2>

</div>

<nav>

<a href="index.php">الرئيسية</a>

<a href="products.php">المنتجات</a>

<a href="cart.php">السلة</a>

<a href="orders.php">طلباتي</a>

<a href="profile.php">حسابي</a>

</nav>

<div class="actions">

<a href="login.php" class="btn">تسجيل الدخول</a>

</div>

</header>

<section class="hero">

<div class="hero-content">

<h1>أحدث المنتجات بأفضل الأسعار</h1>

<p>تسوق بسهولة واستمتع بأفضل العروض.</p>

<a href="products.php" class="shop-btn">ابدأ التسوق</a>

</div>

</section>

<section class="products">

<h2>المنتجات المميزة</h2>

<div class="grid">

<?php foreach($featuredProducts as $product): ?>

<div class="card">

<img src="<?= $product['image'] ?>">

<h3><?= $product['name'] ?></h3>

<h4><?= number_format($product['price']) ?> ريال</h4>

<a href="product.php?id=<?= $product['id'] ?>">عرض المنتج</a>

</div>

<?php endforeach; ?>

</div>

</section>

<footer>

<p>

© <?= date("Y") ?>

<?= $storeName ?>

جميع الحقوق محفوظة

</p>

</footer>

<script src="assets/js/app.js"></script>

</body>

</html>