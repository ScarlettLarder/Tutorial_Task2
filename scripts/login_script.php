<?php
    include ("connection.php");
		// Checks the POST type has submit inside it. If not fail
    if (isset($_POST['submit'])) {
				//Assigns varibles using POST
        $username = $_POST["name"];
        $password = $_POST["password"];
				//This the SQL, using the conn from earlier to 
				//Connect it to the database.
        $stmt = $conn->prepare("SELECT id, pass FROM user
				WHERE name = ?");
				//Bind ? to username
        mysqli_stmt_bind_param($stmt,"s", $username);
				//Execute and store.
        $stmt->execute(); $stmt->store_result(); 
        //If request isn't empty
        if ($stmt->num_rows > 0){
            $stmt->bind_Result($id, $hash_pass);
            $stmt->fetch();
            setcookie("user", $username, time() + 3000, 
						"/", "", true, true);
            setcookie("pass", $pass_hash, time() + 3000, 
						"/", "", true, true);
            setcookie("id", $id, time() + 3000, "/", "", 
						true, true);
            header("Location: ../page.php");
          }else {
             echo"Password couldn't be verified";
          };
        };
        mysqli_stmt_execute($stmt);
    
