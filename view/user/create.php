<?php require_once dirname(__FILE__) . "/../layout/header.php"; ?>
<?php require_once dirname(__FILE__) . "/../layout/nav.php"; ?>

<div class="container">
    <h1>Create User</h1>
    <form action="create.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php require_once dirname(__FILE__) . "/../layout/footer.php"; ?>
