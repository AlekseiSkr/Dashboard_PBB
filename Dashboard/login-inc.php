<?php

session_start();

if (isset($_POST['submit'])) 
    {
        include('dbh-inc.php');
        $team = filter_input(INPUT_POST,'team',FILTER_SANITIZE_STRING);
        $pw = filter_input(INPUT_POST,'un',FILTER_SANITIZE_STRING);
        
   


        if (empty($team) || empty($pw) ) 
            {
        
                header("Location:loginForm.php?login=empty");
                exit();
            } 
        else 
            {
                $sql = "SELECT * FROM Groups WHERE  Team ='$team'";

                $result = mysqli_query($conn,$sql); 
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck < 1) 
                    {
                
                         header("Location:loginForm.php?login=error2");
                         exit();
                    } 
                else 
                    {
                        while ($row = mysqli_fetch_assoc($result)) 
                            {
                                //de-hashing
                               if($pw == $row['Password'])
                                   {
                                       
                                       $_SESSION['id'] = $row['ID'];
                                       $_SESSION['uname'] = $row['Password'];
                                       $_SESSION['team'] = $row['Team'];

                                       $_SESSION['loggedIn'] = true;
                                       //header("Location:index.php");
                                       header("Location:index.php");
                                   }
                               else 
                                   {
                                       header("Location:loginForm.php?login=error2");
                                    
                                       exit();
                                   }        
                            }
                            mysqli_stmt_close($result);
                                       exit();
                    }
            }
    }
 else 
     {
        echo "!!!!";
       // header("Location:index.php?login=error1");
        exit();
    }


