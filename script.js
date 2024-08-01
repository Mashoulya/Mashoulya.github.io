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

    document.getElementById('contactForm').addEventListener('click', function(event){

        let hasErrors = false;
        let nameError = '';
        let fNameError = '';
        let emailError = '';
        let telError = '';
        let msgError = '';


        let lastName = document.getElementById('lastName').value.trim();
        let firstName = document.getElementById('firstName').value.trim();
        let email = document.getElementById('email').value.trim();
        let tel = document.getElementById('tel').value.trim();
        let msg = document.getElementById('message').value.trim();

        // validation du nom
        const nameRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ\-]+$/;
        if (!nameRegex.test(lastName)) {
            nameError = 'Le nom doit contenir uniquement des lettres et des tirets';
            hasErrors = true;
          }
       
        // validation du prénom
        if (!nameRegex.test(firstName)) {
            fNameError = 'Le prénom doit contenir uniquement des lettres et des tirets';
            hasErrors = true;
          }

        // validation d'email
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailRegex.test(email)) {
            emailError = 'Veuillez entrer une adresse email valide';
            hasErrors = true;
          }

        // validation du tél
        const telRegex = /^0[1-9][0-9]{8}$/;
        if (tel && !telRegex.test(tel)) {
          telError = 'Le téléphone doit contenir 10 chiffres';
          hasErrors = true;
        }

        // Validation du message (min 5 mots, max 500 mots)
        const messageWords = msg.split(/\s+/).filter(word => word.length > 0);
        if (messageWords.length < 5 || messageWords.length > 500) {
            msgError = 'Le message doit contenir entre 5 et 500 mots';
            hasErrors = true;
        }

        // Afficher les erreurs
        document.getElementById('nameError').innerText = nameError;
        document.getElementById('fNameError').innerText = fNameError;
        document.getElementById('emailError').innerText = emailError;
        document.getElementById('telError').innerText = telError;
        document.getElementById('msgError').innerText = msgError;
        
        if (hasErrors) {
            event.preventDefault();
        }
    });

});
   