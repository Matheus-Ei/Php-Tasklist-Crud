<!DOCTYPE html>
<html lang="pt-br">
  <body>
    <form method='POST' action=<?=$action ?> class='mb-4 flex flex-col gap-y-2'>
      <input type="hidden" name="id" value="<?= htmlspecialchars(isset($_GET['id']) ? $_GET['id'] : null) ?>">

      <input type='text' class='border border-gray-300 outline-none px-2 rounded-md' placeholder='title' name='title'>
      <input type='text' class='border border-gray-300 outline-none px-2 rounded-md' placeholder='description' name='description'>
      <input type='number' class='border border-gray-300 outline-none px-2 rounded-md' placeholder='priority' name='priority'>

      <button type='submit' class="bg-blue-500 text-white py-1 rounded cursor-pointer"><?= $title ?? 'Create'?></button>
    </form>
  </body>
</html>
