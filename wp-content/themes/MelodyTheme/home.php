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
    </style>
</head>

<body <?php body_class(); ?>>

<?php
$image_urls = [];
$image_alts = []; // Assume we have an alt text for each, could be modified similarly

// Generating image URLs dynamically
for ($i = 1; $i <= 10; $i++) {
    $image_urls[] = "http://localhost/mywordpress/wp-content/uploads/2024/09/Home-" . $i . ".jpg";
    $image_alts[] = "Default image description"; // Default alt text, adjust as needed
}

// Randomize index to select a random image each time the page is loaded
$randomIndex = rand(0, 9); // Array index for 10 elements is 0-9

// You can add additional JavaScript or other elements to handle these images as needed
if (!empty($image_urls) && !empty($image_alts)):
?>
<script>
    var imageUrls = <?php echo json_encode($image_urls); ?>;
    var imageAlts = <?php echo json_encode($image_alts); ?>;
    var currentIndex = <?php echo $randomIndex; ?>; // Randomized start index
</script>

<!-- Displaying the randomly selected image on the page -->
<img src="<?php echo esc_url($image_urls[$randomIndex]); ?>" alt="<?php echo esc_attr($image_alts[$randomIndex]); ?>" class="image-fit" />

<?php endif; ?>


<div id="page_box_home">
    <div id="content_box_home">
        <div class="image-slider_home">
            <div class="image_box_home">
                <img src="<?php echo esc_url($image_urls[$randomIndex]); ?>" alt="<?php echo esc_attr($image_alts[$randomIndex]); ?>" class="image-fit" />
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>
