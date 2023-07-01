<?php
include_once 'config.php'; // Memasukkan file config.php untuk koneksi database

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</head>



<body>
    <div class="container">
        <h1 class="text-center">Homepage</h1>
        
        <a href="add.php" class="btn btn-primary mb-3">Add New User</a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user_data = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $user_data['name']; ?></td>
                        <td><?php echo $user_data['mobile']; ?></td>
                        <td><?php echo $user_data['email']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $user_data['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="delete.php?id=<?php echo $user_data['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </body>
</html>
