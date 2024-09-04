document.addEventListener('DOMContentLoaded', function() {
    const debounce = (func, delay) => {
        let inDebounce;
        return function() {
            const context = this;
            const args = arguments;
            clearTimeout(inDebounce);
            inDebounce = setTimeout(() => func.apply(context, args), delay);
        };
    };

    const updateArrowPositions = () => {
        const pageWidth = window.innerWidth;  // Full width of the viewport
        const pageHeight = window.innerHeight;  // Full height of the viewport
        const sidebarWidth = document.querySelector('#left-sidebar').offsetWidth;  // Actual width of the sidebar

        const slider = document.querySelector('.image-slider');
        const imgBox = document.querySelector('.image_box');
        const leftArrow = document.querySelector('.nav-icon.left');
        const rightArrow = document.querySelector('.nav-icon.right');
        
        // Calculate the middle point of the image box
        const imgBoxRect = imgBox.getBoundingClientRect();
        
        // Position arrows outside the image box
        const leftArrowPos = imgBoxRect.left - sidebarWidth - leftArrow.offsetWidth - 5; // 5px padding from the image
        const rightArrowPos = pageWidth - imgBoxRect.right - rightArrow.offsetWidth - 5; // 5px padding from the image
        
        const verticalCenter = (imgBoxRect.top + imgBoxRect.bottom) / 2; // Vertically center the arrow to the image

        leftArrow.style.left = `${leftArrowPos}px`;
        rightArrow.style.right = `${rightArrowPos}px`;
        leftArrow.style.top = `${verticalCenter}px`;
        rightArrow.style.top = `${verticalCenter}px`;
    };

    // Debounce the resize event
    const debouncedUpdate = debounce(updateArrowPositions, 250);

    window.addEventListener('resize', debouncedUpdate);
    updateArrowPositions();
});
