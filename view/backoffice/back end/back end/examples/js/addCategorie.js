document.addEventListener("DOMContentLoaded", function () {
  var typeElement = document.getElementById("type");
  var descriptionElement = document.getElementById("description");
  var form = document.getElementById("myForm");

  function validateType() {
    var typeerrorElement = document.getElementById("type_error");
    var typeErrorValue = typeElement.value;
    if (typeErrorValue.length < 3) {
      typeerrorElement.innerHTML =
        "Le type doit contenir au moins 3 caractères";
      typeerrorElement.style.color = "red";
      return false; // Validation échouée
    } else {
      typeerrorElement.innerHTML = "Correct";
      typeerrorElement.style.color = "green";
      return true; // Validation réussie
    }
  }
  function validateDescription() {
    var descriptionErrorElement = document.getElementById("description_error");
    var descriptionErrorValue = descriptionElement.value.trim(); // Retirer les espaces en début/fin
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

  // Ajouter les événements "keyup" pour la validation en temps réel
  typeElement.addEventListener("keyup", validateType);
  descriptionElement.addEventListener("keyup", validateDescription);

  // Empêcher la soumission si les validations échouent
  form.addEventListener("submit", function (event) {
    var isTypeValid = validateType();
    var isDescriptionValid = validateDescription();
    if (!isTypeValid || !isDescriptionValid) {
      event.preventDefault(); // Bloque la soumission du formulaire
      alert("Veuillez corriger les erreurs avant de soumettre le formulaire.");
    }
  });
});