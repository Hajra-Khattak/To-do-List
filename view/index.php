<?php
error_reporting(E_ALL);
ini_set('display_errors', value: 1);


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
    <table class="table table-primary">
      <thead>
      <?php if (isset($users) && !empty($users)) { ?>
    <div class="table-responsive">
    <?php
echo "<pre>";
print_r($users);
echo "</pre>";
?>
        <table class="table table-primary">
            <thead>
                <?php foreach ($users as $user) { ?>
                    <tr>
  

                        <th scope="col"><?= htmlspecialchars($user['name']) ?></th>
                        <th scope="col"><?= htmlspecialchars($user['email']) ?></th>
                        <th scope="col"><a href="/user/show<?= htmlspecialchars($user['id']); ?>"> View </a></th>
                    </tr>
                <?php } ?>
            </thead>
        </table>
    </div>
<?php } else { ?>
    <p>No users found</p>
<?php } ?>

      </thead>
      <tbody>
        <tr class="">
          <td scope="row">R1C1</td>
          <td>R1C2</td>
          
        </tr>
        <tr class="">
          <td scope="row">Item</td>
          <td>Item</td>
          
        </tr>
      </tbody>
    </table>
  </div>



  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum similique adipisci aliquid asperiores iusto sint odit itaque molestiae fugiat voluptate? Adipisci accusamus quaerat aliquid necessitatibus!</p>
</div>
<?php
require_once dirname(__FILE__) . "/layout/footer.php";
?>