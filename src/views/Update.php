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
    <div class="create-user" >
        <form action="" method="post" style="display:flex; flex-direction:column; width: 300px">
                <?php while($rows = mysqli_fetch_array($data["User"])){ ?>
                <label for=""></label>
                <input type="text" name="id" value="<?php echo $rows["id"] ?>">
                <label for="">Username</label>
                <input type="text" name="username" value="<?php echo $rows["username"] ?>">
                <label for="">Password</label>
                <input type="text" name="password" value="<?php echo $rows["password"] ?>">
                <label for="">Email</label>
                <input type="text" name="email" value="<?php echo $rows["email"] ?>">
                <label for="">Phone</label>
                <input type="text" name="phone" value="<?php echo $rows["phone"] ?>">
                <button type="submit">UpdateUser</button>
                <?php } ?>
        </form>
    </div>
    
</body>
</html>