<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>



    <?php if (is_page_template('project1.php')): ?>
        <div id="custom-header-widget" style="position: fixed; top: 0; left: 0; width: 100%; padding: 20px; background: white; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 style="margin: 0; font-size: 24px;">Site Name</h1>
        <div>
            <a href="/about" style="margin-right: 20px;">About</a>
            <a href="/work">Work</a>
        </div>
    </div>
    <h2 style="margin-top: 10px; font-size: 18px;">Always aching, sometimes mending</h2>
    <p style="font-size: 14px; margin-top: 5px;">2023</p>
</div>
<?php endif; ?>

<h1><?php bloginfo('name'); ?></h1>
        <nav>
            <!-- Navigation goes here -->
        </nav>
    </header>