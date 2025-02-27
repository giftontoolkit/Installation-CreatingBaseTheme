<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php bloginfo('name'); ?> - Landing Page</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <h1>This is heading in index.php</h1>
    <p>We got blogname by using <b>bloginfo</b> function. This blog name is <span style="color: red;"> <?php bloginfo('name')?> </span>This is set by using</p>
    <p>Styling sheet is placed in below link</p>
    <?php echo get_stylesheet_uri(); ?>
</body>
</html>
