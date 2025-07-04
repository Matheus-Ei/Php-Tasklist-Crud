<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Task list</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>

  <body>
    <div class="flex flex-col items-center justify-start min-h-screen p-6 w-full">
      <div class='flex justify-between items-center mb-6 w-3/4'>
        <h1 class="text-3xl font-bold">Task Details</h1>
        <a href="/tasks" class="text-blue-500 hover:underline">Back to Task List</a>
      </div>

      <div class="flex justify-between bg-white shadow rounded-lg p-6 w-3/4">
        <div>
          <h2 class="text-2xl font-semibold mb-2"><?= htmlspecialchars($task['title']) ?></h2>

          <p class="text-lg text-gray-700 mb-4"><?= htmlspecialchars($task['description']) ?></p>
          <p class="text-gray-500">Priority: <?= htmlspecialchars($task['priority']) ?></p>
        </div>

        <form action="/tasks/delete" method="POST">
          <input type="hidden" name="id" value="<?= htmlspecialchars($task['id']) ?>">
          <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded cursor-pointer hover:bg-red-600">Delete Task</button>
        </form>
      </div>
    </div>
  </body>
</html>

