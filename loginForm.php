<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
		<body>
			<header>
	        <div class="container">
	        		<a href="index.html"><p class="logo"> Battle<span>Bot</span></p></a>
	        </div>
	    </header>
                    <div id="login-container">
                   <h1> Login Page</h1>
			 <form action="login-inc.php" method="POST">
				 		<label>Team</label><br />
            <input type="text" name="team" /><br /><br />
						<label>Password</label><br />
            <input type="text" name="un" /><br /><br />
            <input class="btn" type="submit" name="submit" />
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
