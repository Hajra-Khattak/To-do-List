

<?php

require_once dirname(__DIR__) . "/layout/header.php";

require_once dirname(__DIR__) . "/layout/nav.php";

?>

<div class="table-responsive container">
    <h1>User List</h1>
    <a href="create.php" class="btn btn-primary">create</a>

    <table class="table table-primary">
      <thead>

     
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>               
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"><a href="" class="btn btn-info"> Action </a></th>
                    </tr>
               
            </thead>
        

<!-- ============================== -->
      </thead>
      <tbody>
        <?php if(empty($users)): ?>
        <?php echo $users; ?>

        <tr class="">
          <td scope="row"> No Users Found</td>
        </tr>
        <?php else: ?>
          <?php foreach ($users as $user) :?>
        <tr class="">
          <td scope="row"> <?= htmlspecialchars($user['name']) ?>  </td>
          <a scope="row"> <?= htmlspecialchars($user['email']) ?>  </td>
          <td>
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-primary">Delete</a>
          </td>  
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>


<!-- <a href="/user/create" class="btn btn-primary">Create New User</a> -->
<!-- <table>
    <thead class="table table-primary">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($users)): ?>
            <tr><td colspan="3">No users found</td></tr>
        <?php else: ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td>
                        <a href="/user/edit/<?= $user['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="/user/delete/<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table> -->

<?php
require_once dirname(__DIR__) . "/layout/footer.php";
?>