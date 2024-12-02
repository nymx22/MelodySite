document.addEventListener('DOMContentLoaded', function() {
    var lastScrollTop = 0;
    var header = document.getElementById('custom-header-widget');

    window.addEventListener('scroll', function() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        // Adjust header position based on scroll direction
        if (scrollTop > lastScrollTop) {
            header.style.transform = "translateY(-100%)"; // Hide the header by moving it up
            header.style.transition = "transform 0.3s ease-in-out"; // Smooth transition
        } else {
            header.style.transform = "translateY(0)"; // Show the header by moving it back to position
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Negative value doesn't count
    });
});