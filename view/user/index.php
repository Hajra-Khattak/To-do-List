<?php require_once dirname(__FILE__) . "/../layout/header.php"; ?>
<?php 
 require_once dirname(__DIR__). '/../config/dbcon.php';

require_once dirname(__FILE__) . "/../layout/nav.php"; ?>

<div class="container">
    <h1>User List</h1>
    <a href="/user/create" class="btn btn-primary">Add User</a>

    <?php 
    $sql = "SELECT * FROM user ";
    $exe = $conn->query($sql);

    if($exe->num_rows > 0){

    
    ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr>
                        <td><?= htmlspecialchars($user['name']); ?></td>
                        <td><?= htmlspecialchars($user['email']); ?></td>
                        <td>
                            <a href="/user/edit/<?= htmlspecialchars($user['id']); ?>">Edit</a>
                            <a href="/user/delete/<?= htmlspecialchars($user['id']); ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
   
        <?php 
        }
        ?>
</div>

<?php require_once dirname(__FILE__) . "/../layout/footer.php"; ?>
