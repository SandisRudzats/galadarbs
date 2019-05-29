<?php
require_once 'helper.php';

require_once 'components/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : false ;
switch ($page) {
    case(1);
    require_once 'pages/articles.php';
    break;
    case(2);
    require_once 'pages/article1.php';
    break;
    case(3);
    require_once 'pages/chat.php';
    break;
    case(4);
    require_once 'pages/registration.php';
    break;
    case(5);
    require_once 'pages/aboutUs.php';
    break;
    case(6);
    require_once 'pages/carousel.php';
    break;
    default: 
    require_once 'pages/landing.php';


}

require_once 'components/footer.php';