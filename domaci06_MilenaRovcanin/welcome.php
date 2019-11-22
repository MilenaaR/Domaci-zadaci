<?php

    session_start();

    if (isset($_POST['name'])){
        $name = $_POST['name'];
        $_SESSION['name'] = $name;
        header('Location: house.php');
    }

?>

<html>
    <head>
        <title> Harry Potter - Quiz </title>
    </head>

    <body>
        <h1>Welcome to Harry Potter Quiz!</h1>
        
        <div>
            <form action="welcome.php" method="POST"> Please enter your name: <br/>
                <input type="text" name="name"/> <br/><br/>
                <input type="submit" name="submit" value="Continue">
            </form>
        </div>
    </body>
</html>