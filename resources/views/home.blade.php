<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Tudu</h1>
    @auth
        <div class="main">
          <h1>Your Logged in</h1>

          <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
          </form>
        </div>
    @else
        <div id="login">
          <h3>Login</h2>
          <form action="/login" method="POST">
            @csrf
            Email :
            <input type="text" name="email" id="email"> <br>
            Password :
            <input type="password" name="password" id="pass"> <br>
            <button>Login</button> <br>
          </form>
        </div>

        <div id="Register">
          <h3>Register</h2>
          <form action="/register" method="POST">
            @csrf
            Name :
            <input type="text" name="name" id="name"> <br>
            Email :
            <input type="text" name="email" id="email"> <br>
            Password :
            <input type="password" name="password" id="pass"> <br>
            <button>Register</button>
          </form>
        </div>

        <div id="loginAsGuest">
          <form action="/loginAsGuest" method="POST">
            @csrf
            <button>Login as Guest</button>
          </form>
        </div>
    @endauth
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>