<?php

    session_start();

    if (isset($_POST['professorName']) && !empty($_POST['professorName'])) {
        $professorName = $_POST['professorName'];
        $_SESSION['professorName'] = $professorName;
        header('Location: pet.php');
    } else {
        echo "<font color='red'><b>You must select an answer!</b></font>";
    }

?>

<html>
    <head>
        <title> Harry Potter - Professor </title>
    </head>

    <body>
        <h2>Harry Potter Quiz!</h2>
        
        <div>
            <form action="professor.php" method="POST"> Please choose your house: <br/><br/>

            <div>
                <input type="radio" name="professorName" value="Minerva McGonagall"> Minerva McGonagall <br>
                <input type="radio" name="professorName" value="Severus Snape"> Severus Snape <br>
                <input type="radio" name="professorName" value="Albus Dumbledore"> Albus Dumbledore <br>
                <input type="radio" name="professorName" value="Filius Flitwick"> Filius Flitwick <br>
                <input type="radio" name="professorName" value="Alastor Moody"> Alastor Moody <br>
                <input type="radio" name="professorName" value="Remus Lupin"> Remus Lupin <br><br>
                <input type="submit" name="submit" value="Continue">
            </div>
        </div>
    </body>
</html>