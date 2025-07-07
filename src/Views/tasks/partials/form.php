<!DOCTYPE html>
<html lang="pt-br">
  <body>
    <form method='POST' action=<?=$action ?> class='flex flex-col gap-y-2 w-full'>
      <input type="hidden" name="id" value="<?=$id?>">

      <div class='flex w-full items-center gap-x-2'>
        <input 
          type='text' 
          class='w-full border border-gray-300 outline-none py-1 px-2 rounded-md'
          placeholder='Title'
          name='title'
          value="<?=$title?>"
        >

        <input 
          type='number' 
          class='w-32 border border-gray-300 outline-none py-1 px-2 rounded-md'
          placeholder='Priority'
          name='priority'
          value="<?=$priority?>"
        >
      </div>

      <input 
        type='text' 
        class='border border-gray-300 outline-none py-1 px-2 rounded-md'
        placeholder='Description'
        name='description'
        value="<?=$description?>"
      >

      <button type='submit' class="bg-blue-500 text-white py-1 rounded cursor-pointer">
        <?=$submitText?>
      </button>
    </form>
  </body>
</html>
