const cards = document.querySelectorAll('.room-card--available');

cards.forEach((card) => {
  const button = card.querySelector('.room-card__button');
  let pendingSelect = false;

  button.addEventListener('click', (event) => {
    event.stopPropagation();
    pendingSelect = true;
  });

  card.addEventListener('mouseleave', () => {
    if (pendingSelect) {
      card.classList.add('room-card--selected');
      pendingSelect = false;
    }
  });

  card.addEventListener('click', () => {
    if (card.classList.contains('room-card--selected')) {
      card.classList.remove('room-card--selected');
    }
  });
});
