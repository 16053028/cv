<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Moch Fiqih Burhanuddin">
    <meta name="generator" content="">
    <title><?= (isset($page_title)) ? $page_title : ""; ?></title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">


    <?php
    if (isset($css_custom)) {
        foreach ($css_custom as $item) { ?>
            <link href="<?= base_url('assets/' . $item); ?>" rel="stylesheet">
    <?php }
    }

    ?>
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>


<?php

$this->load->view($content);

if (isset($js_custom)) {
    foreach ($js_custom as $item) { ?>
        <script src="<?= base_url('assets/' . $item); ?>"></script>
<?php }
}

?>
</body>

</html>