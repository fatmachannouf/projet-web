// Ajouter un gestionnaire d'événement au bouton "Ajouter"
document.querySelector('.add-button').addEventListener('click', function() {
  var input = document.querySelector('.todo-input');
  var taskText = input.value.trim(); // Retirer les espaces avant et après
  
  // Vérifier si la tâche est vide
  if (taskText === "") {
    alert("Please enter a task!"); // Alerte si le champ est vide
  } else {
    // Ajouter la tâche à la liste
    addTask(taskText);
    input.value = ''; // Vider le champ de saisie
  }
});

// Fonction pour ajouter une tâche à la liste
function addTask(taskText) {
  var ul = document.querySelector('.todos');
  var li = document.createElement('li');
  li.textContent = taskText;
  
  // Ajouter un bouton de marquage comme complet/incomplet
  var toggleButton = document.createElement('button');
  toggleButton.textContent = "Complete"; // Au départ, la tâche est marquée comme "incomplete"
  toggleButton.className = "toggle-task"; // Ajout d'une classe pour le style
  
  // Ajouter un événement pour marquer la tâche comme complète/incomplète
  toggleButton.addEventListener('click', function() {
    if (li.classList.contains('completed')) {
      li.classList.remove('completed');
      toggleButton.textContent = "Complete"; // Change le texte du bouton
    } else {
      li.classList.add('completed');
      toggleButton.textContent = "Incomplete"; // Change le texte du bouton
    }
  });
  
  // Ajouter un événement pour supprimer la tâche
  var deleteButton = document.createElement('button');
  deleteButton.textContent = "Delete";
  deleteButton.className = "delete-task"; // Ajout d'une classe pour le style
  
  deleteButton.addEventListener('click', function() {
    ul.removeChild(li); // Supprimer l'élément li (la tâche)
    updateEmptyState(); // Met à jour l'état vide après suppression
  });
  
  // Ajouter les boutons à l'élément li
  li.appendChild(toggleButton);
  li.appendChild(deleteButton);
  
  // Ajouter la tâche à la liste
  ul.appendChild(li);
  
  updateEmptyState(); // Met à jour l'état d'image vide si nécessaire
}

// Fonction pour supprimer toutes les tâches
document.querySelector('.delete-all').addEventListener('click', function() {
  var ul = document.querySelector('.todos');
  ul.innerHTML = ''; // Supprimer toutes les tâches
  updateEmptyState(); // Met à jour l'état vide
});

// Fonction pour filtrer les tâches (complètes ou incomplètes)
document.querySelectorAll('.filter').forEach(function(filterButton) {
  filterButton.addEventListener('click', function() {
    var filterType = this.getAttribute('data-filter');
    var tasks = document.querySelectorAll('.todos li');
    
    tasks.forEach(function(task) {
      if (filterType === 'all') {
        task.style.display = 'block'; // Afficher toutes les tâches
      } else if (filterType === 'completed' && task.classList.contains('completed')) {
        task.style.display = 'block'; // Afficher les tâches complètes
      } else if (filterType === 'pending' && !task.classList.contains('completed')) {
        task.style.display = 'block'; // Afficher les tâches incomplètes
      } else {
        task.style.display = 'none'; // Masquer les autres tâches
      }
    });
  });
});

// Vérifier s'il y a des tâches ou non, et afficher l'image vide si la liste est vide
function updateEmptyState() {
  var ul = document.querySelector('.todos');
  var emptyImage = document.querySelector('.empty-image');
  
  if (ul.children.length === 0) {
    emptyImage.style.display = 'block'; // Afficher l'image vide si aucune tâche
  } else {
    emptyImage.style.display = 'none'; // Cacher l'image vide si des tâches sont présentes
  }
}

// Mettre à jour l'état vide dès le départ (en cas d'initialisation avec des tâches ou non)
updateEmptyState();
