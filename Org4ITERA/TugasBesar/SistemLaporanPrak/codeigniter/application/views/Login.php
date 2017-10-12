<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form method="POST" action="<?=base_url()?>index.php/login/procLogin">
    <legend><b><big>Form Login</big></b></legend>
    <table border=3>
      <tr>
        <td><b>Username</b></td><td><input type="text" name="username" required size="25" placeholder="Username"></td>
      </tr>
      <tr>
        <td><b>Password</b></td><td><input type="password" name="password" required size="25" placeholder="Password"></td>
      </tr>
    </table>
      <input type="submit" value="Login" name="Login">
    </form>
  </body>
</html>
