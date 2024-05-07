<?php
  $dir_name = explode('/', $_SERVER['REQUEST_URI']);
?>

<?php if($dir_name[1] === "mockup") : ?>
  <base href="//<?= $_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']."/mockup/".$dir_name[2] ?>/">
<?php else : ?>
  <base href="/">
<?php endif; ?>