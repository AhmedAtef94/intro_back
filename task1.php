<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            if (empty($_POST['username'])) :
                echo 'please enter your name';
                
            else :

                ?>
                <h1>welcome , <?= $_POST['username'] ?> </h1>
                <?php
            endif ;
            ?>
    </h1>
        <form  method="post">
        Username
            <input type="text" name="username">
            Password
            <input type="password" name="password">
        <input type="submit">
    
</body>
</html>
