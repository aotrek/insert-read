<?php
include 'contected.php';
$id = $_GET['updateid'];
$sql = "Select * from  `user` where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "update  `user` set id=$id, name='$name', email='$email' where id='$id'";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
        <div class="container my-5">
            <form method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">User Name</label>
                        <input type="text" name="name" class="form-control" id="name"  aria-describedby="emailHelp" autocomplete="off" value=<?php echo $name ?>>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email"  aria-describedby="emailHelp" autocomplete="off" value=<?php echo $email ?>>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
</body>
</html>