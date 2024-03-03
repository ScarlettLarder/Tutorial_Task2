<div class="pl-5">
	<!-- action is where the form is sent to -->
	<!-- method is how its sent, POST = default -->
	<!-- onsubmit is a JS script run post submit -->
  <form class="" action="scripts\login_script.php" 
	   method="POST" name="form" onsubmit="isValid();">
     <label>What is your first and last name? &#40;28 limit
			&#41;</label><br>
     <input class="rounded-md border-2 border-green-800"  
			type="text" id="name"
		 name="name" required><br><br>
     <label for="lname">Password?</label><br>
     <input class="rounded-md border-2 border-green-800" 
		 type="pass" id="password"
		 name="password" required><br><br>
     <input type="submit" value="submit" name="submit" 
		 class="bg-pink-200 
		  hover:bg-pink-100 px-4 py-1 rounded-lg text-1xl">
     <a class="mt-3 ml-3" href="signup.php">Sign up</a>
  </form>
</div>
<script>
   //Function that validates the user inputs.
   function isValid() {
       var user = document.form.name.value;
       var pass = document.form.password.value;
       if(user === "" || pass === ""){
       alert("Name, application reason, or favorites are empty.");
           return false;
       }
           return true;
       }
</script>