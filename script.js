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
});
   