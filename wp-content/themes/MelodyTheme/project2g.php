<?php
/*
Template Name: project2-gallery
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <?php wp_head(); ?>

</head>
<body <?php body_class('project2'); ?>>
<div id="custom-header-widget" style="position: relative; top: 0; left: 0; width: 100%; background: white; padding-bottom: 3%; padding-top: 3%;">
    <div style="display: flex; justify-content: space-between; align-items: center; padding-left: 10%; padding-right: 10%;">
        <a href="Home" style="margin: 0; font-size: 30px; font-weight: bold; color: black; text-decoration: none;">TianYun Chen</a>
        <div>
            <a href="index" style="color: black; padding-right: 20px; text-decoration: none;">Work</a>
            <a href="index" style="color: black; text-decoration: none;">About</a>
        </div>
    </div>
    <h2 style="margin-top: 6%; font-size: 20px; padding-left: 10%; text-transform: uppercase;">Emerson Practicum Gallery</h2>
    <p style="font-size: 14px; margin-top: 5px; padding-left: 10%;padding-bottom: 10%">May 2024</p>
</div>
        <div class="vertical-image_box" style="display: flex; flex-direction: column; align-items: center; width: 100%;">
            <!-- Display each image individually -->
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-16.jpg" alt="Default image description" style="width: 70%; height: auto; margin-bottom: 6%;">
    </div>

        </div>




<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>
