<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
            <body>

                <?php

                        include_once('dbh-inc.php');

                        $SQLstring = "SELECT Team,ObstacleRace,Sumo,FollowTheLine,Football FROM Scoreboard";
                        if ($stmt = mysqli_prepare($conn, $SQLstring)) 

                        $SQLstring = "SELECT Team,ObstacleRace,Sumo,FollowTheLine,Football FROM Scoreboard";
                        if ($stmt = mysqli_prepare($conn, $SQLstring))

                        {
                            mysqli_stmt_execute($stmt) OR DIE("Error!");
                            mysqli_stmt_bind_result($stmt, $team,$race,$sumo,$line,$football);
                            mysqli_stmt_store_result($stmt);

                            if (mysqli_stmt_num_rows($stmt) == 0)
                            {

                                 echo "<p>There are no entries!</p>";
                           }

                            else
                            {


                                
                                
                                   

                                    echo "<div id='scoreboard-container'>";
                                    echo "<h1>Scoreboard</h1>";
                                    echo "<table><tr>
                                    <th>Teams</th>
                                    <th>Obstacle Race</th>

                                    <th>Sumo</th>
                                    <th>Follow the line </th>
                                    <th>Football</th>
                                  </tr>";
                                while (mysqli_stmt_fetch($stmt)) {

                                echo "<tr><td>".$team."</td>";
                                echo "<td>".$race."</td>";
                                echo "<td>".$sumo."</td>";
                                echo "<td>".$line."</td>";
                                echo "<td>".$football."</td>
                                </tr>
                                ";
                                }
                                echo "</table>";
                                echo "</div>";
                               

                            }
                                 mysqli_stmt_close($stmt);
                        }
                        else
                        {
                            echo "Error in preparation!";

                        }


                    mysqli_close($conn);


                ?>
            </body>
</html>
