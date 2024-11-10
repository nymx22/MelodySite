<?php
/*
Template Name: project2
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
    <style>
    .image-fit {
        width: 100%; /* Adjust width as per container size */
        height: 100%; /* Fixed height, or use 'auto' for natural height */
        object-fit: cover; /* Cover the container without losing aspect ratio */
    }
    .nav-bar {
        display: flex;
        justify-content: space-around; /* Evenly distribute content across the horizontal space */
        align-items: center;
        width: 100%;
        background-color: rgba(244, 244, 244, 0.0); /* Fully transparent background */
        padding: 10px 0; /* Vertical padding */
        position: fixed; /* Make navigation bar fixed at the top of the viewport */
        top: 0; /* Align at the top of the viewport */
        left: 0; /* Align to the left of the viewport */
        z-index: 300; /* Higher z-index to ensure it stays on top of other content */
    }
    .nav-bar a {
        font-weight: bold;
        color: #fff; /* White text for readability */
        text-decoration: none; /* No underlines on links */
        padding: 10px 20px; /* Padding for touch targets */
        transition: color 0.3s; /* Smooth color transition on hover */
    }
    .nav-bar a:not(:first-child):after {
        content: '';
        display: block;
        margin-top: 2px;
        height: 1.2px;
        background-color: #000; /* Black underline */
        width: 100%; /* Full width of the text */
    }
    .nav-bar a:hover {
        color: #000; /* Black color on hover for interaction feedback */
    }

</style>

</head>
<body <?php body_class('project2'); ?>>

        <div class="vertical-image_box" style="display: flex; flex-direction: column; align-items: center; width: 100%;">
            <!-- Display each image individually -->
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-14.jpg" alt="Default image description" style="width: 75%; height: auto; margin-bottom: 6%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-13.jpg" alt="Default image description" style="width: 30%; left: 25%; position: relative; height: auto; margin-bottom: -12%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-15.jpg" alt="Default image description" style="width: 40%; height: auto; right: 20%; position: relative; margin-bottom: 6%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-17.jpg" alt="Default image description" style="width: 75%; height: auto; margin-bottom: 6%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-7.jpg" alt="Default image description" style="width: 60%; height: auto; margin-bottom: 12%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-11.jpg" alt="Default image description" style="width: 60%; height: auto; margin-bottom: 20%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-8.jpg" alt="Default image description" style="width: 35%; height: auto; margin-bottom: 14%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-1.jpg" alt="Default image description" style="width: 75%; height: auto; margin-bottom: 12%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-9.jpg" alt="Default image description" style="width: 60%; height: auto; margin-bottom: 12%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-4.jpg" alt="Default image description" style="width: 60%; height: auto; margin-bottom: 9%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-3.jpg" alt="Default image description" style="width: 75%; height: auto; margin-bottom: 7%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-6.jpg" alt="Default image description" style="width: 42%; height: auto; right: 10%; position: relative; margin-bottom: 7%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-5.jpg" alt="Default image description" style="width: 60%; height: auto; margin-bottom: 9%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-18.jpg" alt="Default image description" style="width: 75%; height: auto; margin-bottom: 9%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-2.jpg" alt="Default image description" style="width: 45%; height: auto;  right: 10%; position: relative; margin-bottom: 12%;">
            <img src="http://localhost/mywordpress/wp-content/uploads/2024/11/nightmares-10.jpg" alt="Default image description" style="width: 75%; height: auto; margin-bottom: 20px;">
        </div>


<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>
