<?php 
include '../Model/ModelTache.php';
    $Tache = LoadTacheFromDb();
    $Cours = LoadCoursFromDB();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['action'] == 'add'){
            echo 'Add';
            AddTache($_POST);
            header("Location:tache.php");
        }else if($_POST['action'] == 'edit'){
            echo 'Edit';
            ModifierTache($_POST);
            header("Location:tache.php");
        }else if($_POST['action'] =='delete'){
            DeleteTache($_POST['id']);
            header("Location:tache.php");
        }
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des taches</title>
    <style>
        /* Définition de la police générale */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #4c6ef5;
        }

        /* Style général du tableau */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        /* En-têtes du tableau */
        th {
            background-color: #4c6ef5;
            color: #fff;
            padding: 12px;
            font-size: 16px;
            text-align: left;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        /* Lignes du tableau */
        td {
            padding: 10px;
            border-bottom: 1px solid #f2f2f2;
            font-size: 14px;
        }

        /* Style des lignes paires (pour un effet de ligne alternée) */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Effet de survol sur les lignes */
        tr:hover {
            background-color: #e2e8f0;
            transition: background-color 0.3s ease;
        }

        /* Style des boutons */
        button {
            padding: 8px 16px;
            margin: 5px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .edit-btn {
            background-color: #4caf50;
            color: white;
        }

        .edit-btn:hover {
            background-color: #45a049;
            transform: scale(1.1);
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
        }

        .delete-btn:hover {
            background-color: #e53935;
            transform: scale(1.1);
        }

        /* Ajouter une bordure arrondie au tableau et une ombre douce */
        table, th, td {
            border-radius: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <h2>Liste des taches</h2>
    
    <table>
        <thead>
            <tr>
                <th>Tache</th>
                <th>Cours</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if($Tache): ?>
                <?php foreach($Tache as $task): ?>
                    <tr>
                        <td><?php echo($task['DES_TACHE']);?></td>
                        <td><?php echo($task['NOM_COURS']); ?></td>
                        <td>
                            <form action="tache.php" method="POST" id="form-edit">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php echo($task['ID_TACHE']);?>" id="id-tache-saved-<?php echo $task['ID_TACHE']; ?>">
                                <button name="edit" class="edit-btn" type="button" onclick="LoadDatatoform('<?php echo($task['DES_TACHE']);?>', '<?php echo($task['NOM_COURS']); ?>', '<?php echo($task['ID_TACHE']); ?>')">Modifier</button>
                                <button name="delete" class="delete-btn" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else :?>
                <tr>
                    <td colspan="3">Aucune donnée disponible.</td>
                </tr>
            <?php endif; ?>
            <td colspan="3">
                <button type="button" style="display: flex;" onclick="ShowForm('from-add-task')">Ajouter une tache</button>
            </td>
        </tbody>
    </table>
    <hr>
    <br><br><br>
    <form action="tache.php" method="POST" id="from-add-task" style="display:none;">
        <input type="hidden" name="action" value="add" id="action">
        <input type="hidden" name="id" value="0" id="id-tache">
        <label for="description">Description:</label>
        <input type="text" id="description" name="description">
        <br><br>
        <select name="cours" id="cours">
            <option value="0">Selectioner un cour</option>
            <?php foreach($Cours as $cour):?>
                <option value="<?php echo $cour["ID_COURS"];?>"><?php echo($cour["NOM_COURS"]);?></option>
            <?php endforeach;?>
        </select>
        <br><br>
        <button type="submit" id="submit-button">Ajouter une tâche</button>
        <button type="button" id="cancel-button" onclick="HideForm('from-add-task')">Cancel</button>
    </form>

    <script>
        function LoadDatatoform(description, coursName, taskId) {
            document.getElementById('description').value = description;
            const form = document.getElementById('from-add-task');
            const submitButton = document.getElementById('submit-button');
            
            let coursSelect = document.getElementById('cours');
            for (let i = 0; i < coursSelect.options.length; i++) {
                if (coursSelect.options[i].text === coursName) {
                    coursSelect.selectedIndex = i;
                    break;
                }
            }

            document.getElementById('id-tache').value = taskId;
            document.getElementById('action').value = 'edit';
            form.style.display = 'block';
            submitButton.innerText = 'Modifier la tâche';
        }

        function HideForm(formId) {
            const form = document.getElementById(formId);
            form.style.display = 'none';
             // Reset the form fields
            document.getElementById('id-tache').value = 0;
            document.getElementById('action').value = 'add';
            document.getElementById('description').value = '';
            document.getElementById('cours').selectedIndex = 0;
            document.getElementById('submit-button').innerText = 'Ajouter une tâche';
        }

        function ShowForm(formId) {
            const form = document.getElementById(formId);
            const submitbutton = document.getElementById('submit-button');

           
            form.style.display = 'block';
            submitButton.innerText = 'Ajouter une tâche';

        }
    </script>

</body>
</html>

<?php 
    
?>
