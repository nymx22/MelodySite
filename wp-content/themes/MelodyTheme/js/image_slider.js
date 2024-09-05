document.addEventListener('DOMContentLoaded', function() {
    const imgElement = document.getElementById('slider-image');
    const leftArrow = document.querySelector('.nav-icon.left');
    const rightArrow = document.querySelector('.nav-icon.right');

    // Update to check if imgElement exists
    if (!imgElement) {
        console.error('Slider image element not found');
        return;
    }

    function updateImage() {
        if (imageUrls && imageAlts && imageUrls.length > 0) {
            imgElement.src = imageUrls[currentIndex];
            imgElement.alt = imageAlts[currentIndex] || 'Image description not available';
        }
    }

    // Ensure arrows are present before adding event listeners
    if (leftArrow && rightArrow) {
        leftArrow.addEventListener('click', function() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : imageUrls.length - 1;
            updateImage();
        });

        rightArrow.addEventListener('click', function() {
            currentIndex = (currentIndex < imageUrls.length - 1) ? currentIndex + 1 : 0;
            updateImage();
        });
    } else {
        console.error('Navigation arrows not found');
    }

    // Call updateImage initially to set the first image
    updateImage();
});
