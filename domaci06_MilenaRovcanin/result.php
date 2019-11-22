<?php

    session_start();

    // if($_SESSION['houseName'] == 'Gryffindor') {
    //     "<img src='HPHouses/Gryffindor_ClearBG.png' width='100'/>";
    // } elseif($_SESSION['houseName'] == 'Slytherin') {
    //     "<img src='HPHouses/Slytherin_ClearBG.png' width='100'/>";
    // } elseif($_SESSION['houseName'] == 'Ravenclaw') {
    //     "<img src='HPHouses/RavenclawCrest.png' width='100'/>";
    // } elseif($_SESSION['houseName'] == 'Hufflepuff') {
    //     "<img src='HPHouses/Hufflepuff_ClearBG.png' width='100'/>";
    // }

?>

<html>
    <head>
        <title>Harry Potter - results</title>
    </head>
    <body>

        <h1>Harry Potter quiz</h1>

        <h3>Result</h3>
        
        <div>
            <table border="1" style="width:400">
                <thead>
                    <tr>
                        <th>Name</th> 
                        <td> <?= $_SESSION['name'] ?> </td>
                    </tr>

                    <tr>
                        <th>House</th> 
                        <td>
                            <?php
                                if($_SESSION['houseName'] == 'Gryffindor') {
                                    echo $_SESSION['houseName'] . "<br>" . "<img src='HPHouses/Gryffindor_ClearBG.png' width='100'/>";
                                } elseif($_SESSION['houseName'] == 'Slytherin') {
                                    echo $_SESSION['houseName'] . "<br>" . "<img src='HPHouses/Slytherin_ClearBG.png' width='100'/>";
                                } elseif($_SESSION['houseName'] == 'Ravenclaw') {
                                    echo $_SESSION['houseName'] . "<br>" . "<img src='HPHouses/RavenclawCrest.png' width='100'/>";
                                } elseif($_SESSION['houseName'] == 'Hufflepuff') {
                                    echo $_SESSION['houseName'] . "<br>" . "<img src='HPHouses/Hufflepuff_ClearBG.png' width='100'/>";
                                }
                            ?>
                        </td>
                    </tr> 

                    <tr> 
                        <th>Favourite professor</th>
                        <td> <?= $_SESSION['professorName'] ?> </td>
                    </tr>

                    <tr>
                        <th>Pet</th>
                        <td> <?= $_SESSION['petName'] ?> </td>
                    </tr>
                </thead>
            </table>
        </div>
    </body>
</html>