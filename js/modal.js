document.addEventListener("DOMContentLoaded", function () {
    const contactsButton = document.querySelector('.contacts-button');
    const modal = document.querySelector('.modal');
    const modalOverlay = document.querySelector('.modal-overlay');
    const cancelButton = document.querySelector('.cancel-button');
    const contactForm = document.getElementById('contactForm');
    const responseMessage = document.getElementById('responseMessage');
    const formInputPhone = document.getElementById('phone');
    const spanPhoneError = document.getElementById('phone-error');
    const formTextarea = document.getElementById('text');

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

    formInputPhone.addEventListener('input', function(e) {
        let phoneInput = e.target;
        const errorSpan = document.getElementById('phone-error');
        let phoneValue = phoneInput.value.trim();

        // Удаляем все символы кроме цифр и +
        let cleaned = phoneValue.replace(/[^\d+]/g, '');

        // Проверяем, чтобы + был только в начале
        if (cleaned.includes('+')) {
            // Если + не в начале, удаляем его
            if (cleaned.indexOf('+') > 0) {
                cleaned = cleaned.replace('+', '');
            }
            // Оставляем только один + в начале
            cleaned = '+' + cleaned.replace(/\+/g, '');
        }

        // Обновляем значение
        if (phoneValue !== cleaned) {
            phoneInput.value = cleaned;
        }

        // Очищаем предыдущие классы
        phoneInput.classList.remove('valid', 'invalid');
        errorSpan.style.display = 'none';

        // Если поле пустое, не показываем ошибку
        if (phoneValue === '') {
            return;
        }

        // Простая валидация телефона
        const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,15}$/;

        if (!phoneRegex.test(phoneValue)) {
            phoneInput.classList.add('invalid');
            errorSpan.textContent = 'Введите корректный номер телефона';
            errorSpan.style.display = 'block';
        } else {
            phoneInput.classList.add('valid');
        }
    });

    // Дополнительная защита на случай вставки
    formInputPhone.addEventListener('paste', function(e) {
        e.preventDefault();
        let pastedText = (e.clipboardData || window.clipboardData).getData('text');

        // Очищаем вставленный текст
        let cleaned = pastedText.replace(/[^\d+]/g, '');

        // Проверяем + только в начале
        if (cleaned.includes('+') && cleaned.indexOf('+') > 0) {
            cleaned = cleaned.replace('+', '');
        }
        cleaned = cleaned.replace(/\+/g, '');
        if (cleaned.length > 0) {
            cleaned = '+' + cleaned;
        }

        // Вставляем очищенный текст
        document.execCommand('insertText', false, cleaned);
    });

// Валидация при потере фокуса
    formInputPhone.addEventListener('blur', function(e) {
        const phoneInput = e.target;
        if (phoneInput.value.trim() === '' && phoneInput.hasAttribute('required')) {
            phoneInput.classList.add('invalid');
            spanPhoneError.textContent = 'Поле обязательно для заполнения';
            spanPhoneError.style.display = 'block';
        }
    });

    function validateTextarea(textarea) {
        const errorSpan = document.getElementById('text-error');
        const charCount = document.getElementById('char-count');
        const charMax = document.getElementById('char-max');
        const charCounter = textarea.parentElement.querySelector('.char-counter');

        const value = textarea.value.trim();
        const length = value.length;

        // Обновляем счетчик символов
        charCount.textContent = length;

        // Сбрасываем классы
        textarea.classList.remove('valid', 'invalid');
        errorSpan.style.display = 'none';
        charCounter.classList.remove('warning', 'error');

        // Валидация при пустом поле (только если required)
        if (textarea.hasAttribute('required') && value === '') {
            textarea.classList.add('invalid');
            errorSpan.textContent = 'Поле обязательно для заполнения';
            errorSpan.style.display = 'block';
            return false;
        }

        // Валидация минимальной длины
        const minLength = parseInt(textarea.getAttribute('minlength')) || 10;
        if (value !== '' && length < minLength) {
            textarea.classList.add('invalid');
            errorSpan.textContent = `Минимальная длина сообщения: ${minLength} символов`;
            errorSpan.style.display = 'block';
            return false;
        }

        // Валидация максимальной длины
        const maxLength = parseInt(textarea.getAttribute('maxlength')) || 500;
        if (length > maxLength) {
            textarea.classList.add('invalid');
            errorSpan.textContent = `Превышена максимальная длина: ${maxLength} символов`;
            errorSpan.style.display = 'block';
            charCounter.classList.add('error');
            return false;
        }

        // Визуальные подсказки для счетчика
        if (length > maxLength * 0.9) {
            charCounter.classList.add('warning');
        }

        // Если все проверки пройдены
        if (value !== '' && length >= minLength && length <= maxLength) {
            textarea.classList.add('valid');
            return true;
        }

        return true;
    }

// Валидация при потере фокуса
    formTextarea.addEventListener('blur', function() {
        validateTextarea(this);
    });

// Валидация при загрузке страницы (для предзаполненных полей)
    document.addEventListener('DOMContentLoaded', function() {
        validateTextarea(formTextarea);
    });

// Функция для проверки валидности перед отправкой формы
    function isTextareaValid() {
        return validateTextarea(formTextarea);
    }

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
