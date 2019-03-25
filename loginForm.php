<!DOCTYPE html>
<html>
	<head>
	</head>
		<body>	
                    
                   <h1> Login page</h1>
			 <form action="login-inc.php" method="POST">
            <p>Team: <input type="text" name="team" /></p>
            <p>Password: <input type="text" name="un" /></p>
            <input type="submit" name="submit" />
        </form>
        <?php
            if (isset($_GET['login'])) 
                {
                    $error = $_GET['login']; 
                    if ($error == 'empty') 
                    {
                        echo "<b>Please fill all the inputs.</b>";
                    }
                    elseif ($error == 'error2') 
                    {
                        echo "<b>Password doesn't match.</b>";    
                    }
                }
              
            ?> 
		
		</body>
</html>	