document.addEventListener('DOMContentLoaded', function () {
   
    // Modale
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


    // Vérification du formulaire

    let contactForm = document.getElementById('contactForm');
    let formError = document.getElementById('formError');

    contactForm.addEventListener('click', function(event){
        let lastName = document.getElementById('lastName').value.trim();
        let firstName = document.getElementById('firstName').value.trim();
        let email = document.getElementById('email').value.trim();
        let tel = document.getElementById('tel').value.trim();
        let msg = document.getElementById('message').value.trim();

        formError.textContent = '';

        let isValid = true;

        // validation du nom
        let nameRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ\-]+$/;

        if (lastName.length < 2 || lastName > 30 ){
            formError.textContent += 'Le nom doit comporter entre 2 et 30 caractères';
            isValid = false;
        }else if(!nameRegex.test(lastName)){
            formError.textContent = 'Le nom est invalide (utilisez uniquement des lettres et des tirets)';
            isValid = false;
        }

        // if (firstName.length < 2){
        //     formError.textContent = 'Le prénom est trop court';
        //     isValid = false;
        // }
        
let phoneRegex = /^0[1-9][0-9]{8}$/;
let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    });




});
   