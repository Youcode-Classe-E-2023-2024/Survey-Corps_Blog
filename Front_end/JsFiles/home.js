/**
 * animate card
 */

function animateCardOn(pcard) {
    pcard.style.backgroundColor = 'rgb(50, 88, 244)';
    pcard.style.transform = 'translateX(30px)';
}
function animateCardBack(pcard) {
    pcard.style.backgroundColor = 'rgb(0, 0, 100)';
    pcard.style.transform = 'translateX(0px)';
}

const dateCard = document.querySelectorAll('#date');

dateCard.forEach(card => {
    card.addEventListener('mouseover', function() {
        animateCardOn(card);
    });
});
dateCard.forEach(card => {
    card.addEventListener('mouseout', function() {
        animateCardBack(card);
    });
});
