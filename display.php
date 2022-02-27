<?php
include 'contected.php';
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
        <a href="index.php">
            <button class="btn btn-primary">Add user</button>
        </a>
        <div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "Select * from `user`";
                        $result = mysqli_query($con, $sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['id'];
                                $name=$row['name'];
                                $email=$row['email'];
                                echo '<tr>
                                                <th scope="row">'.$id.'</th>
                                                <td>'.$name.'</td>
                                                <td>'.$email.'</td>
                                            </tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>