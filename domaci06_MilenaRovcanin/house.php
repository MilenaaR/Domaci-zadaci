<?php

    session_start();

    if (isset($_POST['houseName']) && !empty($_POST['houseName'])) {
        $houseName = $_POST['houseName'];
        $_SESSION['houseName'] = $houseName;
        header('Location: professor.php');
    } else {
        echo "<font color='red'><b>You must select an answer!</b></font>";
    }

?>

<html>
    <head>
        <title> Harry Potter - House </title>
    </head>

    <body>
        <h2>Harry Potter Quiz!</h2>
        
        <div>
            <form action="house.php" method="POST"> Please choose your house: <br/><br/>

                <div>
                    <table>
                        <tr>
                            <td>
                                <input type="radio" name="houseName" value="Gryffindor"> Gryffindor <br>
                                <img src="HPHouses/Gryffindor_ClearBG.png" alt="Gryffindor" width="100"/>
                            </td>

                            <td>
                                <input type="radio" name="houseName" value="Slytherin"> Slytherin <br/>
                                <img src="HPHouses/Slytherin_ClearBG.png" alt="Slytherin" width="100"/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="radio" name="houseName" value="Ravenclaw"> Ravenclaw <br>
                                <img src="HPHouses/RavenclawCrest.png" alt="Ravenclaw" width="100"/>
                            </td>

                            <td>
                                <input type="radio" name="houseName" value="Hufflepuff"> Hufflepuff <br>
                                <img src="HPHouses/Hufflepuff_ClearBG.png" alt="Hufflepuff" width="100"/>
                            </td>
                        </tr>
                    </table>
                </div>

                <br/>

                <input type="submit" name="submit" value="Continue"> 

            </form>
        </div>
    </body>
</html>