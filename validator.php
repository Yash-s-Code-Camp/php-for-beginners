<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_POST["username"]=="kailash" && $_POST["password"]=="123"){

            // echo "Valid User";

            // redirect to dashboard.
           header('location:dashboard.php/?name='.$_POST["username"]);

        }else{

            // echo "Invalid User";
           
            // redirect to dashboard.
            header('location:index.php');
        }
    
    ?>

    
    <!-- 
        valid username: yashdesai
        password:123
     -->

</body>
</html>