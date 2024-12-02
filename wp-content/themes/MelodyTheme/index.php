<?php
/*
Template Name: index
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
<body <?php body_class(); ?>>

<?php
$image_urls = [];
$image_alts = [];

for ($i = 1; $i <= 8; $i++) {
    $image_urls[] = "http://tianyun-chen.com/wp-content/uploads/2024/11/index-" . $i . ".jpg";
    $image_alts[] = "Default image description";
}
$randomIndex = rand(0, 8); // Randomize index

if (!empty($image_urls) && !empty($image_alts)):
?>
<script>
    var imageUrls = <?php echo json_encode($image_urls); ?>;
    var imageAlts = <?php echo json_encode($image_alts); ?>;
    var currentIndex = 0; // Start at the first image
</script>
<?php endif; ?>

<div id="page_box">
<?php get_header(); ?>
<div class="nav-icon left">&#10094;</div>


    <div id="content_box">
    <?php get_sidebar('left'); ?>

        <div class="image-slider">
            <div class="image_box">

                <img src="<?php echo esc_url($image_urls[$randomIndex]); ?>" alt="<?php echo esc_attr($randomIndex); ?>" id="slider-image" class="centered-resize">

            </div>
        </div>
    </div>
    <div class="nav-icon right">&#10095;</div>

</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>


<script>
window.addEventListener('load', function() {
    var navLeft = document.querySelector('.nav-icon.left');
    var navRight = document.querySelector('.nav-icon.right');
    if (navLeft) {
        navLeft.style.left = '15vw'; // Set according to your layout needs
        navLeft.style.top = '50%';
        navLeft.style.transform = 'translateY(-50%)';
    }
    if (navRight) {
        navRight.style.right = '3vw'; // Adjust as needed
        navRight.style.top = '50%';
        navRight.style.transform = 'translateY(-50%)';
    }
});
</script>

<script>
window.addEventListener('load', function() {
    var navLeft = document.querySelector('.nav-icon.left');
    var navRight = document.querySelector('.nav-icon.right');
    function adjustNavIcons() {
        if (window.innerWidth <= 768) {
            navLeft.classList.add('medium-screen');
            navRight.classList.add('medium-screen');
        } else {
            navLeft.classList.remove('medium-screen');
            navRight.classList.remove('medium-screen');
        }

        if (window.innerWidth <= 480) {
            navLeft.classList.add('small-screen');
            navRight.classList.add('small-screen');
        } else {
            navLeft.classList.remove('small-screen');
            navRight.classList.remove('small-screen');
        }
    }

    // Initial adjust on load
    adjustNavIcons();

    // Adjust on resize
    window.addEventListener('resize', adjustNavIcons);
});
</script>

</body>
</html>
