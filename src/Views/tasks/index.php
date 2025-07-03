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

      <form method='POST' action='tasks/create' class='mb-4 flex flex-col gap-y-2'>
        <input type='text' class='border border-gray-300 outline-none px-2 rounded-md' placeholder='title' name='title'>
        <input type='text' class='border border-gray-300 outline-none px-2 rounded-md' placeholder='description' name='description'>
        <input type='number' class='border border-gray-300 outline-none px-2 rounded-md' placeholder='priority' name='priority'>

        <button type='submit' class="bg-blue-500 text-white py-1 rounded cursor-pointer">Create</button>
      </form>

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

            <form method="POST" action="?action=edit">
              <input type="hidden" name="id" value="<?= htmlspecialchars($task['id']) ?>">
              <input type="hidden" name="title" value="<?= htmlspecialchars($task['title']) ?>">
              <input type="hidden" name="description" value="<?= htmlspecialchars($task['description']) ?>">
              <input type="hidden" name="priority" value="<?= htmlspecialchars($task['priority']) ?>">

              <button type='submit' class="bg-green-500 text-white px-4 py-2 rounded mt-2 cursor-pointer">Edit</button>
            </form>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <?php if(isset($_REQUEST['action']) && $_REQUEST['action'] === 'edit'):?>
    <div class='fixed top-0 left-0 z-40 flex items-center justify-center w-screen h-screen'>
      <div class='z-50 w-[30rem] border border-gray-300 rounded-lg bg-white h-fit overflow-y-scroll p-4'>
        <form method='POST' action='tasks/update' class='flex flex-col gap-y-2'>
          <input type="hidden" name="id" value="<?= htmlspecialchars($_POST['id']) ?>">
          <input type='text' class='border border-gray-300 outline-none px-2 rounded-md' placeholder='title' name='title' value=<?= htmlspecialchars($_POST['title'])?>>
          <input type='text' class='border border-gray-300 outline-none px-2 rounded-md' placeholder='description' name='description' value=<?= htmlspecialchars($_POST['description'])?>>
          <input type='number' class='border border-gray-300 outline-none px-2 rounded-md' placeholder='priority' name='priority' value=<?= htmlspecialchars($_POST['priority'])?>>

          <button type='submit' class="bg-green-500 text-white py-1 rounded cursor-pointer">Update</button>
        </form>
      </div>
    </div>
    <?php endif?>
  </body>
</html>
