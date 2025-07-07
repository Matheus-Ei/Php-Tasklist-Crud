<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Update the task</title>
  </head>

  <body class='flex flex-col items-center justify-start h-screen p-4'>
    <div class='relative flex flex-col gap-y-2 w-2/4'>
      <h1 class='text-2xl font-bold'>Update the task</h1>
      <p class='text-gray-600 mb-2'>Update the details below to modify the task.</p>

      <a class='bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded cursor-pointer w-fit mb-6' href='/tasks'>
        Go back
      </a>

      <?php require 'partials/form.php'?> 
    </div>
  </body>
</html>
