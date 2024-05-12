<form action="" method="post">
   <h3>Forgot Password</h3>
   <input type="email" name="email" required placeholder="Enter your email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
   <input type="submit" value="Submit" name="submit" class="btn">
</form>

<?php
if(isset($_POST['submit'])){
   $email = $_POST['email'];
   // Validate email address
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $message[] = 'Invalid email address!';
   }else{
      // Check if email exists in the database
      $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
      $select_user->execute([$email]);
      $row = $select_user->fetch(PDO::FETCH_ASSOC);
      if($select_user->rowCount() > 0){
         // Generate a unique token for password reset
         $token = bin2hex(random_bytes(32)); // Use cryptographically secure random bytes
         // Store the token and email in the database
         $update_user = $conn->prepare("UPDATE `users` SET reset_token = ? WHERE email = ?");
         $update_user->execute([$token, $email]);
         // Send a password reset email to the user
         $to = $email;
         $subject = "Password Reset";
         $message = "Click the link below to reset your password:\n\n";
         $message .= "http://localhost/food-website/reset_password.php?token=" . $token;
         $headers = "From: noreply@example.com\r\n";
         $headers .= "Reply-To: noreply@example.com\r\n";
         $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
         mail($to, $subject, $message, $headers);
         $success_message = 'A password reset link has been sent to your email address.';
      }else{
         $message[] = 'Email address not found!';
      }
   }
}
?>
