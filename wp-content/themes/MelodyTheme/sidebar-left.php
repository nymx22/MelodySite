<?php
// Check if the 'left-sidebar' is active
if ( ! is_active_sidebar( 'left-sidebar' ) ) {
    dynamic_sidebar( 'left-sidebar' );
}
?>
<aside id="left-sidebar" class="widget-area">
    <ul>
    <li><a href="http://localhost/mywordpress/home/">Home</a></li>
        <li><a href="http://localhost/mywordpress/always-aching-sometimes-mending">Always Aching, Sometimes Mending</a></li>
        <li><a href="http://localhost/mywordpress/nightmares">Nightmares</a></li>
        <div class="spacer"></div> <!-- Spacer element -->
        <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
        <!-- Add the Instagram link here -->
        <li><a href="https://www.instagram.com/melo.imaging/" target="_blank">Instagram</a></li>
    </ul>
    <?php
    // You can still use dynamic sidebar below the links if needed
    dynamic_sidebar( 'left-sidebar' );
    ?>

</aside>
