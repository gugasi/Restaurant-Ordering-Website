<form action="" method="post">
   <h3>Reset Password</h3>
   <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
   <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
   <input type="password" name="new_pass" required placeholder="Enter a new password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
   <input type="password" name="confirm_pass" required placeholder="Confirm new password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
   <input type="submit" value="Submit" name="submit" class="btn">
</form>
