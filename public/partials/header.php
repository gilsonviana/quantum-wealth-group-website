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
    <title>Quantum Wealth Group | <?php echo getPageTitle(); ?></title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>   

    <main class="page">