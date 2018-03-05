<?php 

function getPageTitle() {
    $uri = $_SERVER['REQUEST_URI'];
    $result = '';

    if ($pos = strpos($uri, 'index')) {
        $result = 'Home';
    } elseif ($pos = strpos($uri, 'about')) {
        $result = 'About us';
    } elseif ($pos = strpos($uri, 'service')) {
        $result = 'Services';
    } else {
        $result = 'Contact';
    }

    return $result;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Quantum Wealth Group was founded by a group of veteran Wall Street financiers with the sole intention of assisting private investors, trusts, institutions and pensions which manage less than $50 billion in assets">
    <title>Quantum Wealth Group | <?php echo getPageTitle(); ?></title>
    <meta name="keywords" content="cryptocurrency, wealth, investiments, gold, silver, bitcoin">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="style.css">        
</head>
<body>   

    <main class="page">
        <?php include('partials/navbar.php'); ?>