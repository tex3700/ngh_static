document.addEventListener("DOMContentLoaded", function () {
    const contactsButton = document.querySelector('.contacts-button');
    const modal = document.querySelector('.modal');
    const modalOverlay = document.querySelector('.modal-overlay');
    const cancelButton = document.querySelector('.cancel-button');
    const contactForm = document.getElementById('contactForm');
    const responseMessage = document.getElementById('responseMessage');

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

    contactForm.addEventListener('submit', function (e) {
        e.preventDefault(); // Отменяем стандартную отправку формы
        // Создаем объект FormData для сериализации данных формы
        const formData = new FormData(this);
        // Отправляем данные через Fetch API
        fetch('../src/send_email.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                contactForm.style.display = 'none';
                responseMessage.innerHTML = data;
                responseMessage.style.display = 'block';
                // Закрываем модальное окно через 5 секунд
                setTimeout(function () {
                    modal.classList.remove('show');
                    modalOverlay.classList.remove('show');
                    location.reload();
                }, 3000);
            })
            .catch(error => {
                responseMessage.innerHTML = 'Ошибка при отправке сообщения.';
                responseMessage.style.display = 'block';
                console.error('Ошибка:', error);
            });
    });

});
