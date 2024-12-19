<?php 
session_start();


// Mélanger les pièces du puzzle
$puzzlePieces = [
    ['id' => 'piece-1', 'image' => '1.jpg'],
    ['id' => 'piece-2', 'image' => '2.jpg'],
    ['id' => 'piece-3', 'image' => '3.jpg'],
    ['id' => 'piece-4', 'image' => '4.jpg']
];
shuffle($puzzlePieces); // Mélange aléatoire
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .puzzle-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin: 20px auto;
        }
        .puzzle-piece {
            width: 100px;
            height: 100px;
            background-size: cover;
            border: 1px solid #000;
            cursor: pointer;
        }
        .drop-zone {
            width: 100px;
            height: 100px;
            border: 2px dashed #aaa;
            margin: 5px;
        }
        #finish-btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            display: none;
        }
    </style>
</head>
<body>
    <h1>Assemble the Puzzle!</h1>
    <div class="puzzle-container">
        <?php foreach ($puzzlePieces as $piece): ?>
            <div 
                id="<?= $piece['id'] ?>" 
                class="puzzle-piece" 
                style="background-image: url('<?= $piece['image'] ?>');" 
                draggable="true" 
                ondragstart="drag(event)"
            ></div>
        <?php endforeach; ?>
    </div>

    <div class="puzzle-container">
        <div id="zone-1" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="zone-2" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="zone-3" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="zone-4" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    </div>

    <button id="finish-btn" onclick="finish()">Finish</button>

    <script>
        function allowDrop(event) {
            event.preventDefault();
        }

        function drag(event) {
            event.dataTransfer.setData("text", event.target.id);
        }

        function drop(event) {
            event.preventDefault();
            const data = event.dataTransfer.getData("text");
            const draggedElement = document.getElementById(data);

            if (!event.target.hasChildNodes()) {
                event.target.appendChild(draggedElement);
            }

            checkCompletion();
        }

        function checkCompletion() {
            const zones = document.querySelectorAll(".drop-zone");
            let completed = true;
            let order = [];

            zones.forEach((zone) => {
                if (zone.firstChild) {
                    order.push(zone.firstChild.id.replace('piece-', ''));
                } else {
                    completed = false;
                }
            });

            if (completed) {
                document.getElementById("finish-btn").style.display = "block";
                sessionStorage.setItem("order", JSON.stringify(order));
            }
        }

        function finish() {
            const order = JSON.parse(sessionStorage.getItem("order"));
            const correctOrder = ["1", "2", "3", "4"];

            if (JSON.stringify(order) === JSON.stringify(correctOrder)) {
    window.location.href = "http://localhost/projet/view/frontoffice/indexp.php";
} else {
                window.location.href = "robot.php";
            }
        }
    </script>
</body>
</html>
