<?php

?>

<?php

require_once dirname(__FILE__) . "/layout/header.php";

require_once dirname(__FILE__) . "/layout/nav.php";

?>

<div class="container">


  <h1>To Do List App </h1>


  <!-- <form action="" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">todo Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form> -->

  <h2> User List </h2>
  <div class="table-responsive">
    <a href="" class="btn btn-primary">create</a>

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

        <tr class="">
          <td scope="row">No Users Found</td>
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



  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum similique adipisci aliquid asperiores iusto sint odit itaque molestiae fugiat voluptate? Adipisci accusamus quaerat aliquid necessitatibus!</p>
</div>
<?php
require_once dirname(__FILE__) . "/layout/footer.php";
?>