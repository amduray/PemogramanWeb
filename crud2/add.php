<html>
    <head>
        <title>Add Users</title>
    </head>

    <body>
        <a href="index.php">Go to Home</a>
        <br/><br/>

        <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
        </form>
        
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];

            include_once("config.php");
            $result = mysqli_query($mysqli, "INSERT INTO users (name, email, mobile) VALUES ('$name', '$email', '$mobile')");
            
            if ($result) {
                echo "User added successfully. <a href='index.php'>View Users</a>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
        ?>
    </body>
</html>
