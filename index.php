<?php
session_start();
include_once "./db/connectDB.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.css">
    <link rel="stylesheet" href="./public/assets/css/base.css" />
    <link rel="stylesheet" href="./public/assets/fonts/themify-icons/themify-icons.css" />
    <link rel="stylesheet" href="./public/assets/css/magnify.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="./shared/img/logo-icon.png" rel="shortcut icon" type="image/x-icon">

    <?php
    // $pageTitle = "electroTech - Trang chủ";
    $pageTitle = "ElectroTech";
    ?>

    <title><?php echo $pageTitle ?></title>

</head>

<body>
    <?php include "./public/components/header.php"; ?>

    <?php
    if (isset($_GET['page'])) {
        $tam = $_GET['page'];
    } else {
        $tam = '';
    }

    if ($tam == 'authentication') {
        include('./public/views/authentication.php');
    } 
    elseif ($tam == 'category') {
        include('./public/views/category.php');
    } 
    elseif ($tam == 'product') {
        include('./public/views/product.php');
    }
    elseif($tam=='cart') {
        include('./public/views/cart.php');
    }
    elseif ($tam == 'purchase-history') {
        include('./public/views/purchase-history.php'); 
    }
    elseif ($tam == 'purchase-history-detail') {
        include('./public/views/purchase-history-detail.php');
    }
    elseif ($tam == 'checkout') {
        include('./public/views/checkout.php');
    }
    elseif ($tam == 'order') {
        include('./public/views/order.php');
    }
    elseif ($tam == 'order-detail') {
        include('./public/views/order-detail.php');
    }
    elseif ($tam == 'info') {
        include('./public/views/info.php');
    }

    else {
        include('./public/views/home.php');
    }
    ?>

    <?php include "./public/components/footer.php" ?>

    <script>
        // Hàm để cuộc nhảy đến mục tiêu và chạy xuống chân mục tiêu
        function scrollToTarget(targetId) {
            var targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        }
    </script>    
</body>

</html>