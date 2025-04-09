document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-icon');

        question.addEventListener('click', () => {
            // Close all other answers
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-answer').style.maxHeight = '0px';
                    otherItem.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current item
            const isActive = item.classList.contains('active');
            item.classList.toggle('active');
            
            if (!isActive) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(45deg)';
            } else {
                answer.style.maxHeight = '0px';
                icon.style.transform = 'rotate(0deg)';
            }
        });
    });
});