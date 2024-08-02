document.addEventListener('DOMContentLoaded', function () {
   
    // MODALE
    const btnPrice = document.querySelector('.btn-price');
    const prices = document.querySelector('.prices');
    const overlay = document.querySelector('.overlay');

    function openModal() {
        prices.style.display = 'flex';
        overlay.style.display = 'block';
    }

    function closeModal() {
        prices.style.display = 'none';
        overlay.style.display = 'none';
    }

    btnPrice.addEventListener('click', openModal);

    document.addEventListener('click', function (event) {
        if (event.target === overlay) { // Fermer la modale si l'overlay est cliqué
            closeModal();
        }
    });


    // VÉRIFICATION DU FORMULAIRE

    const form = document.getElementById('contactForm');
  
    const validateName = (name) => {
        return /^[A-Za-zÀ-ÿ-]+$/.test(name) && name.length >= 2 && name.length <= 30;
    };
    const validateEmail = (email) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    const validateTel = (tel) => /^\d{10}$/.test(tel);
    const validateMessage = (message) => {
    const words = message.trim().split(/\s+/);
    
    return words.length >= 5 && words.length <= 500;
    };
  
    // Montrer/cacher erreur
    const showError = (input, message) => {
    const errorDiv = document.getElementById(message);
        errorDiv.style.display = 'block';
    };

    const hideError = (input, message) => {
    const errorDiv = document.getElementById(message);
        errorDiv.style.display = 'none';
    };

    // Ajout évenement
    document.getElementById('firstName').addEventListener('input', function() {
        if (validateName(this.value)) {
        hideError(this, 'fNameError');
        } else {
        showError(this, 'fNameError');
        }
    });
    
    document.getElementById('lastName').addEventListener('input', function() {
        if (validateName(this.value)) {
        hideError(this, 'nameError');
        } else {
        showError(this, 'nameError');
        }
    });

    document.getElementById('email').addEventListener('input', function() {
        if (validateEmail(this.value)) {
        hideError(this, 'emailError');
        } else {
        showError(this, 'emailError');
        }
    });

    document.getElementById('tel').addEventListener('input', function() {
        if (validateTel(this.value)) {
        hideError(this, 'telError');
        } else {
        showError(this, 'telError');
        }
    });

    document.getElementById('message').addEventListener('input', function() {
        if (validateMessage(this.value)) {
        hideError(this, 'msgError');
        } else {
        showError(this, 'msgError');
        }
    });

    // Soumission du form
    form.addEventListener('submit', function(event) {
        let valid = true;

        if (!validateName(form.firstName.value)) {
        showError(form.firstName, 'fNameError');
        valid = false;
        }

        if (!validateName(form.lastName.value)) {
            showError(form.lastName, 'nameError');
            valid = false;
            }

        if (!validateEmail(form.email.value)) {
        showError(form.email, 'emailError');
        valid = false;
        }

        if (form.tel.value && !validateTel(form.tel.value)) {
        showError(form.tel, 'telError');
        valid = false;
        }

        if (!validateMessage(form.message.value)) {
        showError(form.message, 'msgError');
        valid = false;
        }

        if (!valid) {
        event.preventDefault();
        }
    });

});
   