<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/stylesheets/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body class="b-singnup-body">
    <h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">LOGO</h1>
    <div class="b-signup-form" style="background-color: white;">
      
        <div class="b-signup-form__create-account">
          <h2 class="b-signup-form__title">Create an Account</h2>
          <form>
            <div class="b-signup-form__input-group">
              <label class="control-label">Name</label>
              <input type="text" class="b-signup-form__name" placeholder="e.g., Jane Doe">
            </div>  
            
            <div class="b-signup-form__input-group">
              <label class="control-label">Email</label>
              <input type="text" class="b-signup-form__email" placeholder="e.g., jd@doe.net">
            </div>
            
            <div class="b-signup-form__input-group">
              <label class="control-label">Password</label>
              <input type="password" class="b-signup-form__password" placeholder="e.g., *********">
            </div>  
              
            <div class="b-signup-form__input-group">
              <label class="control-label">Confirm Password</label>
              <input type="password" class="b-signup-form__password-confirm" placeholder="e.g., *********">
            </div>  
              
            <button type="submit" class="b-signup-form__button">Create an Account</button>
          </form>
        </div>  
    
        <div class="b-signup-form__social">
          <h2 class="b-signup-form__title">Or sign up with:</h2>
        </div>

      </div>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
      <script>
        $(".b-signup-form__name").focus();
      </script>  
   </body>
</html>    