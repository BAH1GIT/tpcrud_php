document.addEventListener("DOMContentLoaded", () => {
  const btnInscrire = document.getElementById("btnInscrire");
  const formInscription = document.getElementById("formInscription");

  if (btnInscrire && formInscription) {
    // Le formulaire est caché au départ (enlève toute classe active)
    formInscription.classList.remove("active");

    // Quand on clique sur le bouton, on active/désactive le formulaire
    btnInscrire.addEventListener("click", (e) => {
      e.preventDefault(); // empêche un rechargement si c’est un lien
      formInscription.classList.toggle("active");
    });
  }
});

