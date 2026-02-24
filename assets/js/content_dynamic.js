document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const contentBox = document.querySelector('#content_box');
    
    function adjustPadding() {
        const headerHeight = header.offsetHeight;
        contentBox.style.paddingTop = `${headerHeight}px`;
    }

    adjustPadding();  // Set initially
    window.addEventListener('resize', adjustPadding);  // Adjust on window resize
});

