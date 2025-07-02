<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Task list</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="flex flex-col items-center min-h-screen p-4">

        <ul>
            <h1 class='font-bold text-2xl'>My tasks</h1>
            <p class='mb-4'>Here you can see all your tasks.</p>

            <?php if (empty($tasks)): ?>
              <p class='text-gray-500'>No tasks available.</p>
            <?php endif; ?>

            <?php foreach ($tasks as $task): ?>
                <li class="py-2 flex flex-col gap-x-2 border border-gray-300 rounded-lg p-4 mb-4 w-fit">
                  <h2 class='text-lg font-semibold'><?= htmlspecialchars($task['title']) ?></h2>

                  <p><?= htmlspecialchars($task['description']) ?></p>

                  <div class='flex w-full justify-start items-center gap-x-2 mt-2'>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2 cursor-pointer">View</button>
                    <button class="bg-red-500 text-white px-4 py-2 rounded mt-2 cursor-pointer">Delete</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded mt-2 cursor-pointer">Edit</button>
                  </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
