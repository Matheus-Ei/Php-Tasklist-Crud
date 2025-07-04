<li class="py-2 flex flex-col gap-x-2 border border-gray-300 rounded-lg p-4 w-full">
  <div class='flex justify-between items-center'>
    <h2 class='text-xl font-semibold'><?= htmlspecialchars($task['title']) ?></h2>

    <p class='text-lg text-gray-400'><?= htmlspecialchars($task['priority']) ?></p>
  </div>

  <p class='text-gray-600'><?= htmlspecialchars($task['description']) ?></p>

  <div class='flex w-full justify-start items-center gap-x-2 mt-2'>
    <form method="GET" action="tasks/view">
      <input type="hidden" name="id" value="<?= htmlspecialchars($task['id']) ?>">

      <button type="submit" class="bg-blue-500 text-white px-4 py-1 rounded mt-2 cursor-pointer">View</button>
    </form>

    <form method="POST" action="tasks/delete">
      <input type="hidden" name="id" value="<?= htmlspecialchars($task['id']) ?>">

      <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded mt-2 cursor-pointer">Delete</button>
    </form>

    <form method="GET" action="tasks">
      <input type="hidden" name="id" value="<?= htmlspecialchars($task['id']) ?>">
      <input type="hidden" name="action" value="edit">

      <button type="submit" class="bg-green-500 text-white px-4 py-1 rounded mt-2 cursor-pointer">Edit</button>
    </form>
  </div>
</li>

