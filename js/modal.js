document.addEventListener("DOMContentLoaded", function () {
    const contactsButton = document.querySelector('.contacts-button');
    const modal = document.querySelector('.modal');
    const modalOverlay = document.querySelector('.modal-overlay');
    const cancelButton = document.querySelector('.cancel-button');

    contactsButton.addEventListener('click', () => {
        modal.classList.add('show');
        modalOverlay.classList.add('show');
    });

    cancelButton.addEventListener('click', () => {
        modal.classList.remove('show');
        modalOverlay.classList.remove('show');
    });

    modalOverlay.addEventListener('click', () => {
        modal.classList.remove('show');
        modalOverlay.classList.remove('show');
    });
});