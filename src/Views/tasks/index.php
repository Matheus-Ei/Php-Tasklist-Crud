<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Task list</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>

  <body class='flex flex-col items-center justify-start min-h-screen py-6 w-full'>
    <div class="flex flex-col items-center min-h-screen p-4 w-2/4 gap-y-4">
      <?php require 'partials/header.php' ?>

      <?php if (empty($tasks)): ?>
      <p class='text-gray-500'>No tasks available.</p>
      <?php endif; ?>

      <ul class='flex flex-col w-full gap-y-2'>
        <?php foreach ($tasks as $task): ?>
        <?php require 'partials/card.php'; ?>
        <?php endforeach; ?>
      </ul>
    </div>

    <?php require 'partials/updateModal.php'; ?>
  </body>
</html>
