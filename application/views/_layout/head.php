<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Moch Fiqih Burhanuddin">
    <meta name="generator" content="">
    <title><?= (isset($page_title)) ? $page_title : ""; ?></title>

    <link href="<?= base_url('assets/bootstrap-5.0.2-dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <?php
        if(isset($css_custom)){
            foreach($css_custom as $item){ ?>
                <link href="<?= base_url('assets/'. $item); ?>" rel="stylesheet">
            <?php }
        }
        
    ?>


    <!-- Favicons
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3"> -->
    
</head>