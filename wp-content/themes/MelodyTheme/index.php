

<?php
// Example of image IDs to display. Ensure these are valid attachment IDs.
$image_ids = range(11, 43);

// Fetch URLs and alt text for each image, ensuring arrays are properly initialized.
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

// Only proceed if we have images
if (!empty($image_urls) && !empty($image_alts)):
    ?>
    <script>
        var imageUrls = <?php echo json_encode($image_urls); ?>;
        var imageAlts = <?php echo json_encode($image_alts); ?>;
        var currentIndex = 0; // Start at the first image
    </script>
    <!-- Further HTML and JS -->
<?php endif; ?>

<body>
<div id="page_box">
    <?php get_header(); ?>
    <div id="content_box"> <!-- This div will act as the flex container -->
    <?php get_sidebar('left'); // This includes the sidebar-left.php you created ?>
            <div class="image-slider">
            <div class="nav-icon left">&#10094;</div>
                    <div class="image_box">
                        <img src="<?php echo esc_url($image_urls[0]); ?>" alt="<?php echo esc_attr($image_alts[0]); ?>" id="slider-image" class="centered-resize">
                </div>
            <div class="nav-icon right">&#10095;</div>  <!-- Right arrow -->
        </div>
    </div>

</div>
</body>

