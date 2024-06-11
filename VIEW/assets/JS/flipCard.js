document.addEventListener('DOMContentLoaded', (event) => {
    const card = document.getElementsByClassName('card-content')[0];
    const cadastrarText = document.querySelector('.cadastrar-text');
    const voltarText = document.querySelector('.entrar-text');

    function flipCard() {
        card.classList.toggle('is-flipped');
    }



    voltarText.addEventListener('click', flipCard);
    cadastrarText.addEventListener('click', flipCard);
});