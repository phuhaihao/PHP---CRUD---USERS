<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["Title"] ?></title>
    <style>
        table, th, td {
            border:1px solid black;
            text-align: center;
            width: 700px;
        }
    </style>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script>
      $(document).ready(() => {
        $('.btn-delete').click(() => {
          const deleteQuest = window.confirm('Bạn có muốn xóa người dùng này không?');
          if(deleteQuest){
            return true
          }else{
            return false
          }
        })
      })
    </script>
</head>
<body>
    <div>
        <div class="nav-bar">
            <a href="/PHPCRUD/Home">Home</a>
        </div>
    </div>

    <div>
    <table>
        <tr>
            <th>STT</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Detail</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
            <?php while($rows = mysqli_fetch_array($data["Users"])){ ?>
            <tr>
                <td><?php echo $rows["id"] ?></td>
                <td><?php echo $rows["username"] ?></td>
                <td><?php echo $rows["password"] ?></td>
                <td><?php echo $rows["email"] ?></td>
                <td><?php echo $rows["phone"] ?></td>
                <td>
                    <a href="Home/Detail/<?php echo $rows["id"] ?>">
                        <button type="button" style="border-radius: 5px">Detail</button>
                    </a>
                </td>
                <td>
                    <a href="Home/UpdateUser/<?php echo $rows["id"] ?>">
                        <button type="button" style="border-radius: 5px">Update</button>
                    </a>
                </td>
                <td>
                    <a href="Home/DeleteUser/<?php echo $rows["id"] ?>" class="btn-delete">
                        <button type="button" style="border-radius: 5px">Delete</button>
                    </a>
                </td>
            </tr>
            <?php }?>
    </table>
    </div>
    <div class="create-user" >
        <form action="Home/CreateUser" method="post" style="display:flex; flex-direction:column; width: 300px">
                <label for="">Username</label>
                <input type="text" name="username">
                <label for="">Password</label>
                <input type="text" name="password">
                <label for="">Email</label>
                <input type="text" name="email">
                <label for="">Phone</label>
                <input type="text" name="phone">
                <button type="submit">CreateUser</button>
        </form>
    </div>
    
    
</body>
</html>