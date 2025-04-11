document.addEventListener('DOMContentLoaded', function() {
    const tags = document.querySelectorAll('.tag');
    const galleryItems = document.querySelectorAll('.gallery-item');
    let activeFilters = new Set();

    tags.forEach(tag => {
        tag.addEventListener('click', function() {
            const tagName = this.textContent.toLowerCase();
            
            if (activeFilters.has(tagName)) {
                activeFilters.delete(tagName);
                this.classList.remove('active');
            } else {
                activeFilters.add(tagName);
                this.classList.add('active');
            }

            filterGallery();
        });
    });

    function filterGallery() {
        if (activeFilters.size === 0) {
            galleryItems.forEach(item => item.style.display = 'block');
            return;
        }

        galleryItems.forEach(item => {
            const itemTags = Array.from(item.querySelectorAll('.tag'))
                                .map(tag => tag.textContent.toLowerCase());
            const hasAllTags = Array.from(activeFilters)
                                  .every(filter => itemTags.includes(filter));
            
            item.style.display = hasAllTags ? 'block' : 'none';
        });
    }
});