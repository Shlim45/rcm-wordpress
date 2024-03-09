document.addEventListener('DOMContentLoaded', function () {
    const thumbContainer = document.querySelector('.wp-block-gallery');
    thumbContainer.addEventListener('click', function (e) {
        if (e.target.tagName === 'IMG') {
            const srcset = e.target.getAttribute('srcset');
            const sources = srcset.split(', ');
            let fullSizeSrc = sources[sources.length - 1].split(' ')[0];

            if (fullSizeSrc.length == 0) {
                fullSizeSrc = e.target.getAttribute('src');
            }
            // Update the featured image
            const featuredImage = document.querySelector('.wp-post-image');

            featuredImage.srcset = sources;
            featuredImage.src = fullSizeSrc;
        }
    });
});