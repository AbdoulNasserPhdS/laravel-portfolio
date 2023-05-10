require('./bootstrap');

function selectLink(event, link) {
    event.preventDefault();

    const links = document.querySelectorAll(".my-styled-link");

    // Retire la classe .selected de tous les liens
    links.forEach(otherLink => {
      otherLink.classList.remove("selected");
    });

    // Ajoute la classe .selected au lien cliqué
    link.classList.add("selected");

    // Redirige vers le lien href après une pause de 100 ms
    setTimeout(() => {
      window.location.href = link.href;
    }, 100);
  }








  window.addEventListener('scroll', function() {
    var revealables = document.querySelectorAll('.revealable');
    for (var i = 0; i < revealables.length; i++) {
      var bounding = revealables[i].getBoundingClientRect();
      if (
        bounding.top >= 0 &&
        bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight)
      ) {
        revealables[i].classList.add('revealed');
      } else {
        revealables[i].classList.remove('revealed');
      }
    }
  });