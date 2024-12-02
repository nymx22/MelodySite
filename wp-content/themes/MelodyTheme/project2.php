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
    <h2 style="margin-top: 6%; font-size: 20px; padding-left: 10%; text-transform: uppercase;">Nightmares</h2>
    <p style="font-size: 14px; margin-top: 5px; padding-left: 10%;padding-bottom: 10%">2024</p>
</div>
        <div class="vertical-image_box" style="display: flex; flex-direction: column; align-items: center; width: 100%;">
            <!-- Display each image individually -->
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-14.jpg" alt="Default image description" style="width: 70%; height: auto; margin-bottom: 6%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-13.jpg" alt="Default image description" style="width: 25%; left: 23%; position: relative; height: auto; margin-bottom: -5%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-15.jpg" alt="Default image description" style="width: 35%; height: auto; right: 18%; position: relative; margin-bottom: 6%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-17.jpg" alt="Default image description" style="width: 70%; height: auto; margin-bottom: 6%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-7.jpg" alt="Default image description" style="width: 55%; height: auto; margin-bottom: 12%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-11.jpg" alt="Default image description" style="width: 55%; height: auto; margin-bottom: 20%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-8.jpg" alt="Default image description" style="width: 30%; height: auto; margin-bottom: 14%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-1.jpg" alt="Default image description" style="width: 70%; height: auto; margin-bottom: 12%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-9.jpg" alt="Default image description" style="width: 55%; height: auto; margin-bottom: 12%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-4.jpg" alt="Default image description" style="width: 55%; height: auto; margin-bottom: 9%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-3.jpg" alt="Default image description" style="width: 70%; height: auto; margin-bottom: 7%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-6.jpg" alt="Default image description" style="width: 30%; height: auto; right: 10%; position: relative; margin-bottom: 7%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-5.jpg" alt="Default image description" style="width: 55%; height: auto; margin-bottom: 9%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-18.jpg" alt="Default image description" style="width: 70%; height: auto; margin-bottom: 9%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-2.jpg" alt="Default image description" style="width: 40%; height: auto;  right: 10%; position: relative; margin-bottom: 12%;">
            <img src="http://tianyun-chen.com/wp-content/uploads/2024/11/nightmares-10.jpg" alt="Default image description" style="width: 70%; height: auto; margin-bottom: 15%;">
        </div>

        </div>


<div class="information-link" style="text-align: center; padding-bottom: 10%; background-color: #ffffff; width: 100%;">
    <a href="aasm-gallery" style="text-decoration: none; color: black; font-weight: bold; font-size: 16px; ">More information here</a>
</div>

  <!-- Back to Top Link -->

  <div style="text-align: center; width: 100%; padding-top: 20px;">
        <a href="#" id="back-to-top" style="text-decoration: none; color: black; font-size: 16px; cursor: pointer;">↑</a>
    </div>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>

    <script>
// document.addEventListener('DOMContentLoaded', function() {
//     var backToTopButton = document.getElementById('back-to-top');

//     // Check if the button exists in the DOM
//     if (backToTopButton) {
//         backToTopButton.addEventListener('click', function() {
//             console.log("Back to Top button clicked.");
//             window.scrollTo({
//                 top: 0,
//                 left: 0,
//                 behavior: 'smooth'  // This makes the scroll smoothly to the top
//             });
//         });
//     }
// }
    </script>
</body>
</html>
