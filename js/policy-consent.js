document.addEventListener('DOMContentLoaded', function() {
    const cookieConsent = document.querySelector('.cookie-consent');
    const acceptButton = document.querySelector('.cookie-consent__button');

    // Проверка уже установленных cookie
    if (!getCookie('cookieConsent')) {
        cookieConsent.classList.add('active');
    }

    // Прослушиваем кнопку принять cookie
    acceptButton.addEventListener('click', function() {
        // устанавливаем cookie на 30 дней
        setCookie('cookieConsent', 'accepted', 30);
        cookieConsent.classList.remove('active');
    });

    // Установка cookie
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Получение cookie
    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    const cookiePolicyLinks = document.querySelectorAll('.cookie-consent__link');
    const cookiePolicyModal = document.getElementById('cookiePolicyModal');
    const closeCookiePolicyModal = document.getElementById('closeCookiePolicyModal');

    const confidencePolicyLinks = document.querySelectorAll('#confidence-policy-link');
    const confidencePolicyModal = document.getElementById('confidencePolicyModal');
    const closeConfidencePolicyModal = document.getElementById('closeConfidencePolicyModal');

    const agreePolicyLinks = document.querySelectorAll('#agree-policy-link');
    const agreePolicyModal = document.getElementById('agreePolicyModal');
    const closeAgreePolicyModal = document.getElementById('closeAgreePolicyModal');

    if (cookiePolicyLinks.length > 0 && cookiePolicyModal && closeCookiePolicyModal) {
        cookiePolicyLinks.forEach(link => {
            policyModalHandle(link, cookiePolicyModal, closeCookiePolicyModal);
        });
    }

    if (confidencePolicyLinks.length > 0 && confidencePolicyModal && closeConfidencePolicyModal) {
        confidencePolicyLinks.forEach(link => {
            policyModalHandle(link, confidencePolicyModal, closeConfidencePolicyModal);
        });
    }

    if (agreePolicyLinks.length > 0 && agreePolicyModal && closeAgreePolicyModal) {
        agreePolicyLinks.forEach(link => {
            policyModalHandle(link, agreePolicyModal, closeAgreePolicyModal);
        });
    }

    function policyModalHandle(link, modal, closeModal) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            modal.style.display = 'flex';
        });
        closeModal.addEventListener('click', function() {
            modal.style.display = 'none';
        });
        // Закрытие по клику вне окна
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    }
}); 