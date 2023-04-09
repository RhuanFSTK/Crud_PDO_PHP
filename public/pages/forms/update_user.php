<?php 
require "../../../config.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if(isEmpty()){
  flash('message', 'Fill in all fields');

   return redirect("users");
  /* return redirect("/edit_user&id=".$id); */
} 

$validate = validate([
  'name' => 's',
  'lastName' => 's',
  'email' => 'e',
]);

$update = update('users', $validate,['id', $id]);

if($update){  
  flash('message', 'Successfully updated','success');
  return redirect("users");
  /* return redirect("/edit_user&id=".$id); */
}

flash('message', 'Error when updating');
/* Sendo a ultima linha não é nescessario - return */
return redirect("users");
/* redirect("/edit_user&id=".$id); */

return $id;
?>