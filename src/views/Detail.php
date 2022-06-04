<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["Title"] ?></title>
</head>
<body>
    <div class="nav-bar">
        <div class="nav-bar">
            <a href="/PHPCRUD/Home">Home</a>
        </div>
    </div>
    <div class="render">
        <?php while($rows = mysqli_fetch_array($data["User"])){ ?>
            <h2>ID: <?php echo $rows["id"] ?></h2>
            <h2>Username: <?php echo $rows["username"] ?></h2>
            <h2>Password: <?php echo $rows["password"] ?></h2>
            <h2>Email: <?php echo $rows["email"] ?></h2>
            <h2>Phone: <?php echo $rows["phone"] ?></h2>
        <?php }?>
    </div>
    
</body>
</html>