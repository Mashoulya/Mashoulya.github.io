document.addEventListener('DOMContentLoaded', function () {
    // Récupérer les éléments
    const btnPrice = document.querySelector('.btn-price');
    const prices = document.querySelector('.prices');

    // Fonction pour afficher la modale
    function openModal() {
        prices.style.display = 'flex';
    }

    // Fonction pour fermer la modale
    function closeModal() {
        prices.style.display = 'none';
    }

    // Ajouter un écouteur d'événements pour le clic du bouton
    btnPrice.addEventListener('click', openModal);

    // Ajouter un écouteur d'événements pour fermer la modale en cliquant à l'extérieur
    document.addEventListener('click', function (event) {
        if (event.target !== prices && !prices.contains(event.target) && event.target !== btnPrice) {
            closeModal();
        }
    });
});
   