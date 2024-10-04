<?php
/*
Template Name: Home Page
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
    body {
        padding-top: 50px; /* Add padding to the top of the body to ensure content is not hidden under the nav bar */
    }
</style>

</head>

<body <?php body_class(); ?>>

<div class="nav-bar">
    <a>TianYun Chen</a>
    <a href="index">Work</a>
    <a href="#contact">About</a>
</div>

<?php
$image_urls = [];
$image_alts = [];

// Generating image URLs dynamically
for ($i = 1; $i <= 10; $i++) {
    $image_urls[] = "http://localhost/mywordpress/wp-content/uploads/2024/09/Home-" . $i . ".jpg";
    $image_alts[] = "Default image description"; // Default alt text, adjust as needed
}

$randomIndex = rand(0, 9); // Randomize index

if (!empty($image_urls) && !empty($image_alts)):
?>
<script>
    var imageUrls = <?php echo json_encode($image_urls); ?>;
    var imageAlts = <?php echo json_encode($image_alts); ?>;
    var currentIndex = <?php echo $randomIndex; ?>;
</script>

<img src="<?php echo esc_url($image_urls[$randomIndex]); ?>" alt="<?php echo esc_attr($image_alts[$randomIndex]); ?>" class="image-fit" />

<div id="page_box_home">
    <div id="content_box_home">
        <div class="image-slider_home">
            <div class="image_box_home">
                <img src="<?php echo esc_url($image_urls[$randomIndex]); ?>" alt="<?php echo esc_attr($image_alts[$randomIndex]); ?>" class="image-fit" />
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>
