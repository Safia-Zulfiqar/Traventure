let currentSet = 0;

function showNext() {
  const cards = document.querySelectorAll('.card');
  const totalSets = Math.ceil(cards.length / 4);

  if (currentSet < totalSets - 1) {
    currentSet++;
    updateCards();
  }
}

function showPrevious() {
  if (currentSet > 0) {
    currentSet--;
    updateCards();
  }
}

function updateCards() {
  const cards = document.querySelectorAll('.card');
  cards.forEach((card, index) => {
    if (index >= currentSet * 4 && index < (currentSet + 1) * 4) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}

// Initialize view
updateCards();
