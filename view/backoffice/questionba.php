
<!-- views/question_list.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Questions</title>
    <link rel="stylesheet" href="questionba.css">
</head>
<body>
    <h1>Liste des Questions</h1>
    <a href="index.php?controller=question&action=create">Ajouter une question</a>
    <table>
        <thead>
            <tr>
                <th>idquestion</th>
                <th>texte</th>
                <th>Type</th>
                <th>reponsepossible</th>
                <th>reponsecorrecte</th>
                <th>note</th>
                <th>Actions</th>
            </tr>
        </thead>
      <!-- <tbody>
            <?php foreach ($questions as $question): ?>
                <tr>
                    <td><?= htmlspecialchars($question['idquestion']); ?></td>
                    <td><?= htmlspecialchars($question['texte']); ?></td>
                    <td><?= htmlspecialchars($question['type']); ?></td>
                    <td>
                        <a href="index.php?controller=question&action=edit&id=<?= $question['idquestion']; ?>">Modifier</a>
                        <a href="index.php?controller=question&action=delete&id=<?= $question['idquestion']; ?>" onclick="return confirm('Supprimer cette question ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>-->
    </table>
</body>
</html>
