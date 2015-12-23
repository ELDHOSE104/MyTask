<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MyTask - A simple task management application</title>
  <!-- CORE CSS-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
    overflow: hidden;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
    .tag
    {
        color: #F44336;
        font-size: 20px;
        font-family: 'Roboto Mono', 'Consolas', 'Menlo', monospace;
    }
    .login
    {
        font-size: 15px;
        font-family: 'Roboto Mono', 'Consolas', 'Menlo', monospace;
    }
    .google
    {
        height: 50%;
        width: 50%;
    }
</style>

</head>

<body class="red">


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">

        <form class="login-form" method="post" action="validate.php">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="img/taskManager-logo.jpg" alt="" class="responsive-img valign profile-image-login" style="height: 12rem;">
              <p class="center login-form-text tag">Welcome to MyTask - A simple Task Management application.</p>
              <p class="center login-form-text login">Please Login to Continue...</p>
          </div>
        </div>

        <div class="row margin">
            <div align="center">
                <a class="login" href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=http%3A%2F%2Flocalhost%2FMyTask%2F&client_id=492769946544-ktjauuhqughrgre7blu2b6cmuuir1688.apps.googleusercontent.com&scope=email+profile&access_type=online&approval_prompt=auto" target="_blank"><img class="google" src="img/loginButton.png" /></a>
            </div>
        </div>
            <div class="row">

        </div>

      </form>
    </div>
  </div>
    <!-- ================================================
       Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
  <script src="js/materialize.min.js"></script>
</body>

</html>
