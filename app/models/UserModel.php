<?php 

class UserModel{

    public function login($username,$password){
        

        
     
 
 



        // Query to check if the user exists
        $query = "SELECT * FROM User WHERE username = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify user credentials
        if ($user && password_verify($password, $user['password'])) {
            // Store user info in session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to a protected page
            header("Location: ../../views/dashboard.php");
            exit();
        } else {
            // Invalid credentials
            $_SESSION['error'] = "Invalid username or password.";
            header("Location: ../../views/auth/login.php");
            exit();
        }
    } catch (PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessage();
    }
} else {
    // Redirect if accessed without form submission
    // header("Location: ../../views/auth/login.php");
    // exit();
}
    }
}

?>


