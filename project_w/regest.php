
<!DOCTYPE html>
<html>
  <head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="./style/waff.css">
 </head>

<body>
<header>
<h class="logo"> wafaa  </h>
    <ul>
      
      <li><a href="login.php" class="home">Login in</a></li>
      
    </ul>
  </header>
<img class="wave" src="w.svg">
  <div class="login">

  	<h2>Register</h2>
  
	
  <form method="post" action="#">
  
 

  	<div class="input-group">
  	  <input type="text" name="name" placeholder="User name" required>
  	</div>

  	<div class="input-group">
  	  <input type="email" name="email" placeholder="Email" required >
  	</div>

  	<div class="input-group">
  	  <input type="password" name="password" placeholder="Password" required>
  	</div>

  	<div class="input-group">
  	     <input type="password" name="password_2" placeholder="Confirm password" required>
  	</div>

  	<div class="input-group">
        
       <select name="type" required>
       <option selected disabled> user_type</option>
         <option value="1"> Admin </option>
         <option value="2"> Ueser </option>
       </select>

      <div>

   </div>
  	  <button type="submit" class="p" name="submit">Register</button>
  	</div>
    <p class="rem">Already have an account? <a href="login.php">login now</a></p>
  	
  </form>
  </div>
  <footer > Wafaa Emad</footer>
</body>
</html>