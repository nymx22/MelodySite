<?php
/*
Template Name: project1
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('project1'); ?>>

        <div class="vertical-image_box" style="display: flex; flex-direction: column; align-items: center; width: 100%;">
            <!-- Display each image individually -->
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-3.jpg" alt="Default image description" style="width: 45%; right: 15%; position: relative; height: auto; margin-bottom: 9%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-12.jpg" alt="Default image description" style="width: 60%; left: 7.5%; position: relative; height: auto; margin-bottom: 9%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-9.jpg" alt="Default image description" style="width: 75%; height: auto; margin-bottom: 12%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-7.jpg" alt="Default image description" style="width: 60%; height: auto; margin-bottom: 12%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-2.jpg" alt="Default image description" style="width: 75%; height: auto; margin-bottom: 9%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-6.jpg" alt="Default image description" style="width: 50%; right: 10%; position: relative; height: auto; margin-bottom: 3%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-5.jpg" alt="Default image description" style="width: 50%; left: 10%; position: relative;height: auto; margin-bottom: 9%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-1.png" alt="Default image description" style="width: 52%; height: auto; margin-bottom: 20%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-13.jpg" alt="Default image description" style="width: 75%; height: auto; margin-bottom: 9%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-1.jpg" alt="Default image description" style="width: 47%; left: 5%; position: relative; height: auto; margin-bottom: 9%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-4.jpg" alt="Default image description" style="width: 65%; height: auto; margin-bottom: 12%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-10.jpg" alt="Default image description" style="width: 75%; height: auto; margin-bottom: 12%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-8.jpg" alt="Default image description" style="width: 60%; height: auto; margin-bottom: 25%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/aasm-11.jpg" alt="Default image description" style="width: 45%; height: auto; margin-bottom: 20px;">
        </div>


<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>
