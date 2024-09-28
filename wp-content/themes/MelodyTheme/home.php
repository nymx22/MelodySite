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
</head>



<body <?php body_class(); ?>>

<?php
$image_ids = range(11, 43);
$image_urls = array();
$image_alts = array();

foreach ($image_ids as $id) {
    $url = wp_get_attachment_url($id);
    $alt = get_post_meta($id, '_wp_attachment_image_alt', true);

    if ($url) { // Ensure the URL is valid
        $image_urls[] = $url;
        $image_alts[] = $alt ? $alt : "Default image description"; // Provide a default alt if none is found.
    }
}

if (!empty($image_urls) && !empty($image_alts)):
?>
<script>
    var imageUrls = <?php echo json_encode($image_urls); ?>;
    var imageAlts = <?php echo json_encode($image_alts); ?>;
    var currentIndex = 0; // Start at the first image
</script>
<?php endif; ?>
<div id="page_box_home">
    <div id="content_box_home">
        <div class="image-slider_home">
            <div class="image_box_home">
                <img src="<?php echo esc_url($image_urls[0]); ?>" alt="<?php echo esc_attr($image_alts[0]); ?>" id="slider-image_home" class="centered-resize_home">
            </div>
        </div>
    </div>

</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>


</body>
</html>
