document.addEventListener('DOMContentLoaded', function() {
    const imgElement = document.getElementById('slider-image');
    const leftArrow = document.querySelector('.nav-icon.left');
    const rightArrow = document.querySelector('.nav-icon.right');
    let autoScrollInterval;

    // Function to update the displayed image
    function updateImage() {
        console.log(`Updating image to index: ${currentIndex}`); // Log the current index
        if (!imageUrls || !imageAlts || imageUrls.length === 0) {
            console.error('Image data is not properly initialized.');
            console.log('imageUrls:', imageUrls); // Log the content of imageUrls
            console.log('imageAlts:', imageAlts); // Log the content of imageAlts
            return;
        }
        imgElement.src = imageUrls[currentIndex];
        imgElement.alt = imageAlts[currentIndex] || 'Image description not available';
        console.log(`Image set to: ${imgElement.src}`); // Log the new image source
    }

    function advanceImage() {
        currentIndex = (currentIndex < imageUrls.length - 1) ? currentIndex + 1 : 0;
        updateImage();
    }

    // Event listener for the left navigation arrow
    if (leftArrow) {
        leftArrow.addEventListener('click', function() {
            console.log('Left arrow clicked.');
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : imageUrls.length - 1;
            updateImage();
            resetAutoScroll(); // Reset the interval when manually interacted
        });
    } else {
        console.error('Left navigation arrow not found');
    }

    // Event listener for the right navigation arrow
    if (rightArrow) {
        rightArrow.addEventListener('click', function() {
            console.log('Right arrow clicked.');
            currentIndex = (currentIndex < imageUrls.length - 1) ? currentIndex + 1 : 0;
            updateImage();
            resetAutoScroll(); // Reset the interval when manually interacted
        });
    } else {
        console.error('Right navigation arrow not found');
    }

    // Initialize the first image and set the auto-scroll
    console.log('Initializing the image slider.');
    updateImage();
    setAutoScroll();

    // Sets up the auto-scrolling interval
    function setAutoScroll() {
        autoScrollInterval = setInterval(advanceImage, 3000); // Change image every 3000 ms (3 seconds)
    }

    // Resets the auto-scrolling interval
    function resetAutoScroll() {
        clearInterval(autoScrollInterval);
        setAutoScroll();
    }
});

