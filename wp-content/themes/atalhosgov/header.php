<?php include "config.php";
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>

<head profile="http://gmpg.org/xfn/11">
    <title>
        <?php if (is_front_page() || is_home()) {
            echo 'Atalhos GOV';
        } else {
            echo wp_title('') . ' - Atalhos GOV';
        } ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
    <!-- Css -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/main.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class('CustomContainer'); ?>>

<header class="header">
    <h1>Atalhos Gov</h1>
    <a href="#">Sugerir inclusão de um novo link</a>
</header>
