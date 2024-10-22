<?php

require_once dirname(__FILE__). "/layout/header.php";

require_once dirname(__FILE__). "/layout/nav.php";

?>
<h1>To Do List App </h1>


<form action="" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">todo Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum similique adipisci aliquid asperiores iusto sint odit itaque molestiae fugiat voluptate? Adipisci accusamus quaerat aliquid necessitatibus!</p>

<?php
require_once dirname(__FILE__). "/layout/footer.php";
?>

