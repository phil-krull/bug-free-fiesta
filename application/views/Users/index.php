<html>
<head>
  <title>Login/Registration</title>
</head>
<body>
  <div id="wrapper">
  <h2>Welcome!</h2>
    <div id="main_content">
      <div id="left_content">
        <fieldset>
          <legend>Register</legend>
          <form action="/users" method="post">
            <table>
              <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
              </tr>
              <tr>
                <td>Alias:</td>
                <td><input type="text" name="alias"></td>
              </tr>
              <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
              </tr>
              <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
              </tr>
              <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="password_confirmation"></td>
              </tr>
              <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob"></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
              </tr>
            </table>
          </form>
        </fieldset>
      </div><!-- end of left_content -->
      <div id="right_content">
        <fieldset>
          <legend>Login</legend>
          <form action="/sessions" method="post">
            <table>
              <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
              </tr>
              <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
              </tr>
            </table>
          </form>
        </fieldset>
      </div><!-- end of right_content -->
      <div class="errors">
        <? if ($this->session->flashdata('errors')) { ?>
          <?= $this->session->flashdata('errors') ?>
        <? } ?>
      </div>
    </div><!-- end of main_content -->
  </div><!-- end of wrapper -->
</body>
</html>