<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Task list</title>
</head>

<body>
    <div class="container">
        <h1>My tasks</h1>

        <ul>
            <?php foreach ($tarefas as $tarefa): ?>
                <li>
                    <?= htmlspecialchars($tarefa['id']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
