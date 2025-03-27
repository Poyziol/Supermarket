<?php $base_url = Flight::get('flight.base_url'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base_url ?>/assets/css/login.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>/fontawsome/css/all.min.css">
    <title>Login</title>
</head>
<body>

    <div class="container" id="container">
    	<div class="form-container sign-up-container">
    		<form action="<?php echo $base_url ?>/addUser" method="POST">
    			<h1>Create Account</h1>
    			<div class="social-container">
    				<a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
    				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
    				<a href="#" class="social"><i class="fa-brands fa-instagram"></i></a>
    			</div>
				<?php if (!empty($error_message)): ?>
        		<div class="error-message">
        		    <?php echo htmlspecialchars($error_message); ?>
        		</div>
    			<?php endif; ?>
				<div class="label-name">
					<label for="id-name">Enter new name</label>
    				<input type="text" placeholder="Name  ex:Jean" name="name" id="id-name"/>
				</div>
				<div class="label-name"> 
					<label for="id-password">Enter new password</label>
    				<input type="password" placeholder="Password" name="psw"/>
				</div>
    			<button>Sign Up</button>
    		</form>
    	</div>
    	<div class="form-container sign-in-container">
    		<form action="<?php echo $base_url ?>/checkUser" method="POST">
    			<h1>Sign in to your Account</h1>
    			<div class="social-container">
    				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
    				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
    				<a href="#" class="social"><i class="fa-brands fa-instagram"></i></a>
    			</div>
				<?php if (!empty($error_message)): ?>
    			<div class="error-message">
    			    <?php echo htmlspecialchars($error_message); ?>
    			</div>
				<?php endif; ?>
				<div class="label-name">
					<label for="id-name">Name</label>
    				<input type="text" placeholder="Name" name="name" value="Jean" id="id-name"/>
				</div>
				<div class="label-name">
					<label for="id-password">Password</label>
    				<input type="password" placeholder="Password" name="psw" value="123" id="id-password"/>
				</div>
    			<!-- <a href="login/admin">Are you an Admin?</a> -->
    			<button>Sign In</button>
    		</form>
    	</div>
    	<div class="overlay-container">
    		<div class="overlay">
    			<div class="overlay-panel overlay-left">
    				<h1>Welcome Back!</h1>
    				<p>To keep connected with us please login with your personal info</p>
    				<button class="ghost" id="signIn">Sign In</button>
    			</div>
    			<div class="overlay-panel overlay-right">
    				<h1>Hello, Friend!</h1>
    				<p>Enter your personal details and start journey with us</p>
    				<button class="ghost" id="signUp">Sign Up</button>
    			</div>
    		</div>
    	</div>
    </div>

    <footer>
    	<p>
    		ETU003247 - ETU003351
    	</p>
    </footer>

      <script src="<?php echo $base_url ?>/assets/js/login.js"></script>
</body>
</html>
