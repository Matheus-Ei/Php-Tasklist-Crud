<?php if(isset($_GET['action']) && $_GET['action'] == 'edit'):?>
<div class='fixed top-0 left-0 z-30 flex items-center justify-center w-screen h-screen'>
  <div class='z-40 w-screen h-screen absolute top-0 left-0 bg-black opacity-30' ></div>

  <div class='z-50 w-[30rem] border border-gray-300 rounded-lg bg-white h-fit overflow-y-scroll p-4'>
    <h1 class='text-2xl font-bold mb-4'>Update Task</h1>

    <?php $title='Update'; $action='tasks/update'; require 'form.php' ?>
  </div>
</div>
<?php endif?>

