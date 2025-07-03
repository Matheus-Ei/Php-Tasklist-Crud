<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Task list</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>

  <body>
    <div class="flex flex-col items-center min-h-screen p-4">
      <h1 class='font-bold text-2xl'>My tasks</h1>
      <p class='mb-4'>Here you can see all your tasks.</p>

      <?php $action='tasks/create'; require 'partials/form.php' ?>

      <?php if (empty($tasks)): ?>
      <p class='text-gray-500'>No tasks available.</p>
      <?php endif; ?>

      <ul>
        <?php foreach ($tasks as $task): ?>
        <li class="py-2 flex flex-col gap-x-2 border border-gray-300 rounded-lg p-4 mb-4 w-fit">
          <div class='flex justify-between items-center'>
            <h2 class='text-lg font-semibold'><?= htmlspecialchars($task['title']) ?></h2>

            <p><?= htmlspecialchars($task['priority']) ?></p>
          </div>

          <p><?= htmlspecialchars($task['description']) ?></p>

          <div class='flex w-full justify-start items-center gap-x-2 mt-2'>
            <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2 cursor-pointer">View</button>

            <form method="POST" action="tasks/delete">
              <input type="hidden" name="id" value="<?= htmlspecialchars($task['id']) ?>">
              <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mt-2 cursor-pointer">Delete</button>
            </form>

            <a href=<?= "?action=edit" . "&id=" . htmlspecialchars($task['id']) ?> class="bg-green-500 text-white px-4 py-2 rounded mt-2 cursor-pointer">Edit</a>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <?php if(isset($_GET['action']) && $_GET['action'] == 'edit'):?>
    <div class='fixed top-0 left-0 z-40 flex items-center justify-center w-screen h-screen'>
      <div class='z-50 w-[30rem] border border-gray-300 rounded-lg bg-white h-fit overflow-y-scroll p-4'>
        <?php $title='Update'; $action='tasks/update'; require 'partials/form.php' ?>
      </div>
    </div>
    <?php endif?>
  </body>
</html>
