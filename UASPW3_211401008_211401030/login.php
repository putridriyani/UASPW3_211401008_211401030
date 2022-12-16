<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    a {
        text-decoration: none;
    }

    html {
        height: 100%;
    }

    body {
        background-image: url(2.jpg);
        background-size: cover;
        
    }

    label {
        font-family: "Raleway", sans-serif;
        font-size: 12pt;
        margin-bottom: 2px;
    }

    #forgot-pass {
        color: black;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }

    #card {
        background: -webkit-linear-gradient(bottom, #5F95D7, #23528B);
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, .65);
        height: 480px;
        margin: 9.1rem auto 9.1rem auto;
        width: 493px;
    }

    #card-content {
        padding: 44px 44px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 9px;
        padding-bottom: 30px;
        padding-top: px;
        text-align: center;
    }

    #signup {
        color: black;
        font-family: "Raleway", sans-serif;
        font-size: 15pt;
        margin-top: 16px;
        text-align: center;
    }

    #submit-btn {
        background: -webkit-linear-gradient(right, #F2DFD7, #5F95D7);
        border: none;
        border-radius: 21px;
        box-shadow: 0px 1px 8px #FFFFFF;
        cursor: pointer;
        color: white;
        font-family: "Raleway SemiBold", sans-serif;
        height: 42.3px;
        margin: 0 auto;
        margin-top: 50px;
        transition: .25s;
        width: 153px;
    }

    #submit-btn:hover {
        box-shadow: 0px 1px 18px #FFFFFF;
    }

    .form {
        display: flex;
        align-items: left;
        flex-direction: column;
    }

    .form-border {
        background: -webkit-linear-gradient(right, #F2DFD7, #5F95D7);
        height: 1px;
        width: 100%;
    }

    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #F2DFD7, #5F95D7);
        height: 5px;
        margin: 1rem auto 0 auto;
        width: 230px;
    }
    </style>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN APLIKASI</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action="aksi_login.php">
                <label for="user-username" style="padding-top: 0px;">
                    &nbsp;Username
                </label>
                <input id="user-username" class="form-content" type="username" name="username" autocomplete="on"
                    required>
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 5px;">
                    &nbsp;Password
                </label>
                <input id="user-password" class="form-content" type="password" name="password" required>
                <div class="form-border"></div>

                <a href="#">
                    <legend id="forgot-pass">Forgot password?</legend>
                </a>
                <input id="submit-btn" type="submit" name="submit" value="LOGIN">
                <a href="#" id="signup">Don't have account yet?</a>
            </form>
        </div>
    </div>
</body>

</html>