
    document.addEventListener('DOMContentLoaded', function() {
        const imgElement = document.getElementById('slider-image');
        const leftArrow = document.querySelector('.nav-icon.left');
        const rightArrow = document.querySelector('.nav-icon.right');

        function updateImage() {
            if (imageUrls.length > 0 && imageAlts.length > 0) {
                imgElement.src = imageUrls[currentIndex];
                imgElement.alt = imageAlts[currentIndex];
            }
        }

        leftArrow.addEventListener('click', function() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : imageUrls.length - 1;
            updateImage();
        });

        rightArrow.addEventListener('click', function() {
            currentIndex = (currentIndex < imageUrls.length - 1) ? currentIndex + 1 : 0;
            updateImage();
        });
    });

