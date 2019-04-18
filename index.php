<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else
    {
        session_destroy();
        session_start(); 
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
             
	</head>

	<body>

            
            <div class="fields">
		
		
		<?php
			//Check if there is a GET parameter
			if(isset($_GET['page']))
                            {
				include($_GET['page']. ".php");
                            }
			else
                            {
				//No GET present -> Check if user is logged in via SESSION
				if(isset($_SESSION['loggedIn']))
                                   {	
                                    include("control.php");
                                   
                                    echo "<p class='logout'><a href='index.php?page=logout'>Click here to Log Out</a></p>";
	
                                    }
				else
                                    {
					
					include("loginForm.php");
                                    }

                            }
		
		?>
            </div>
	</body>
</html>
