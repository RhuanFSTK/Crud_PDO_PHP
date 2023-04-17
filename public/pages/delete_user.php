<?= get('message') ?>
<?php 
/* require "../../../config.php"; */

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$delete = delete('users', 'id', $id);


if($delete){  
  return redirect("users");
  /* return redirect("edit_user&id=".$id); */
}

flash('message', 'Error when delete');
/* Sendo a ultima linha não é nescessario - return */
  return redirect("users");
/* redirect("edit_user&id=".$id); */

return $id

?>