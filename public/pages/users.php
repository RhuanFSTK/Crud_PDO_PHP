<?php
require "../vendor/autoload.php";
?>

<div class="card">
  <div class="card-header">
    <h5 class="card-title">Users</h5>
  </div>
  <div class="card-body">
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th width="1%">ID</th>
          <th class="align-middle text-center">Name</th>
          <th class="align-middle text-center">Last name</th>
          <th class="align-middle text-center">Email</th>
          <th width="1%" class="align-middle text-center">Edit</th>
          <th width="1%" class="align-middle text-center">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $users = all('users');
          foreach( $users as $user ):
        ?>
          <tr>
            <td><?= $user->id; ?></td>
            <td><?= $user->name; ?></td>
            <td><?= $user->lastName; ?></td>
            <td><?= $user->email; ?></td>
            <form action="?page=edit_user" method="post">
              <input type="hidden" name="id" value="<?= $user->id; ?>">
                <td class="align-middle text-center"><button class="btn" href="?page=edit_user"><i class="fas fa-edit text-primary"></i></button></td>
            </form>
            <form action="delete_user" method="post">
              <input type="hidden" name="id" value="<?= $user->id; ?>">
             <td class="align-middle text-center"><button class="btn" href="?page=delete_user"><i class="fas fa-trash-alt text-danger"></i></button></td>
            </form>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="card-footer">
    
  </div>
</div>