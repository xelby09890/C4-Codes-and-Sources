<?php
$page = basename($_SERVER['PHP_SELF']);
// header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure');
// header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
// header("Pragma: no-cache"); // HTTP 1.0.
// header("Expires: 0"); // Proxies.

$ver = time();

switch ($page) {
    case 'index.php':
        $page_title = "Connect & Convert College Consulting";
        $page_description = 'Connect & Convert College Consulting';
        $page_keywords = '';
      break;                              
    default:
        $page_title = '';
        $page_description = '';
        $page_keywords = '';
    break;
  }
  $pagetab = isset($_GET['pagetab']) ? $_GET['pagetab'] : '';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title><?php echo $page_title; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>">
        <meta name="keywords" content="<?php echo $page_keywords; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/png" href="">
        <link rel="icon" type="image/png" href="">
        <!-- light 300 font style -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700;800&family=Raleway:wght@300&display=swap" rel="stylesheet" /> -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> -->

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap" rel="stylesheet">

        <link rel="stylesheet" href="style.css?ver=<?php echo $ver; ?>">
        <link rel="stylesheet/less" type="text/css" href="styles.less" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap Font Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Bpptstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/css/lightgallery.min.css'>
        <!-- <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.15.4/css/all.css'> -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- data table style cdn -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <!-- jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <!-- data table cdn -->
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


        <script src="includes/navbar.js"></script>
        <!-- <?php //if ($page == 'certain-page.php') { ?> -->
        <!-- <style>
            body:before {
                content: "";
                background-image: url('images/bg.png') !important;
                background-size: contain;
                position: absolute;
                background-repeat:repeat;
                background-attachment: fixed;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                opacity: 0.2;
                height: 100%;
                z-index: 0;
                height: 100%;
            }
        </style> -->
        <?php //} ?>
    </head>
    <body id="top" class="container-fluid p-0">