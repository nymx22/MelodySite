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
<div id="custom-header-widget" style="position: relative; top: 0; left: 0; width: 100%; background: white; padding-bottom: 3%; padding-top: 3%;">
    <div style="display: flex; justify-content: space-between; align-items: center; padding-left: 10%; padding-right: 10%;">
    <a href="Home" style="margin: 0; font-size: 30px; font-weight: bold; color: black; text-decoration: none;">TianYun Chen</a>
    <div>
            <a href="index" style="color: black; padding-right: 20px; text-decoration: none;">Work</a>
            <a href="index" style="color: black; text-decoration: none;">About</a>
        </div>
    </div>
    <h2 style="margin-top: 6%; font-size: 18px; padding-left: 10%; text-transform: uppercase;">Always aching, sometimes mending</h2>
    <p style="font-size: 14px; margin-top: 5px; padding-left: 10%;">2023</p>
</div>



        <div class="vertical-image_box" style="display: flex; flex-direction: column; align-items: center; width: 100%;">
            <!-- Display each image individually -->
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-3.jpg" alt="Default image description" style="width: 35%; right: 15%; position: relative; height: auto; margin-bottom: 9%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-12.jpg" alt="Default image description" style="width: 50%; left: 7.5%; position: relative; height: auto; margin-bottom: 9%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-9.jpg" alt="Default image description" style="width: 65%; height: auto; margin-bottom: 12%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-7.jpg" alt="Default image description" style="width: 50%; height: auto; margin-bottom: 12%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-2.jpg" alt="Default image description" style="width: 65%; height: auto; margin-bottom: 9%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-6.jpg" alt="Default image description" style="width: 40%; right: 10%; position: relative; height: auto; margin-bottom: 3%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-5.jpg" alt="Default image description" style="width: 40%; left: 10%; position: relative;height: auto; margin-bottom: 9%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-1.png" alt="Default image description" style="width: 42%; height: auto; margin-bottom: 20%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-13.jpg" alt="Default image description" style="width: 65%; height: auto; margin-bottom: 9%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-1.jpg" alt="Default image description" style="width: 37%; left: 5%; position: relative; height: auto; margin-bottom: 9%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-4.jpg" alt="Default image description" style="width: 55%; height: auto; margin-bottom: 12%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-10.jpg" alt="Default image description" style="width: 65%; height: auto; margin-bottom: 12%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-8.jpg" alt="Default image description" style="width: 50%; height: auto; margin-bottom: 25%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/aasm-11.jpg" alt="Default image description" style="width: 35%; height: auto; margin-bottom: 10%;">
        </div>

        

<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>
