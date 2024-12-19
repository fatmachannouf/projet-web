document.addEventListener("DOMContentLoaded", function () {
  var titleElement = document.getElementById("titre");
  var descriptionElement = document.getElementById("description");
  var dureeElement = document.getElementById("duree");
  var form = document.getElementById("myForm");

  function validateTitle() {
    var titleErrorElement = document.getElementById("titre_error");
    var titleErrorValue = titleElement.value;
    if (titleErrorValue.length < 3) {
      titleErrorElement.innerHTML =
        "Le titre doit contenir au moins 3 caractères";
      titleErrorElement.style.color = "red";
      return false; // Validation échouée
    } else {
      titleErrorElement.innerHTML = "Correct";
      titleErrorElement.style.color = "green";
      return true; // Validation réussie
    }
  }

  function validateDescription() {
    var descriptionErrorElement = document.getElementById("description_error");
    var descriptionErrorValue = descriptionElement.value.trim(); // enlever les espaces au debut et à la fin
    var pattern = /^[A-Za-z\s]{3,}$/; // Lettres et espaces, minimum 3 caractères

    if (!pattern.test(descriptionErrorValue)) {
      descriptionErrorElement.innerHTML =
        "La description doit contenir uniquement des lettres et des espaces et au moins 3 caractères";
      descriptionErrorElement.style.color = "red";
      return false; // Validation échouée
    } else {
      descriptionErrorElement.innerHTML = "Correct";
      descriptionErrorElement.style.color = "green";
      return true; // Validation réussie
    }
  }
  function validateDuree() {
    var dureeErrorElement = document.getElementById("duree_error");
    var dureeErrorValue = dureeElement.value.trim();
    const regex = /^\d+( jour| jours| mois| année| années)$/i;

    if (regex.test(dureeErrorValue)) {
      dureeErrorElement.innerHTML = "Correct";
      dureeErrorElement.style.color = "green";
      return true; // Validation réussie
    } else {
      dureeErrorElement.innerHTML =
        "Durée invalide. Veuillez entrer un nombre suivi de 'jour(s)' ou 'mois' ou 'année(s)'.";
      dureeErrorElement.style.color = "red";
      return false; // Validation échouée
    }
  }

  // Ajouter les événements "keyup" pour la validation en temps réel
  titleElement.addEventListener("keyup", validateTitle);
  descriptionElement.addEventListener("keyup", validateDescription);
  dureeElement.addEventListener("keyup", validateDuree);

  // Empêcher la soumission si les validations échouent
  form.addEventListener("submit", function (event) {
    var isTitleValid = validateTitle();
    var isDescriptionValid = validateDescription();
    var isDureeValid = validateDuree();

    if (!isTitleValid || !isDescriptionValid || !isDureeValid) {
      event.preventDefault(); // Bloque la soumission du formulaire
      alert("Veuillez corriger les erreurs avant de soumettre le formulaire.");
    }
  });
});
