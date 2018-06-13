<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <link type='image/x-icon' href='Client/images/favicon.ico' rel='shortcut icon' />
    <title>Liverpool F.C - Đăng nhập</title>
</head>
<body>
    <link rel="stylesheet" href="Login/css/login.css" />

    <div class="background"></div>

    <div class="crest"></div>

    <div class="boxContainer cms">

        <div class="title">
            Đăng nhập
        </div>

        <form action="#" method="post">

            <div class="inputFields">


                <input type="hidden" name="_csrf_token" value="4OEfdOuFd2YreFGgTipRMnV7BUi-oUZ8v8wNORL4xOQ" />

                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="username" value="" required="required" />
                <div class="helpText"></div>

                <br>

                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required="required" />
                <div class="helpText password"> </div>
                <br>


            </div>
            
            <div class="buttonPlaceholder">
                <input type="submit" id="_submit" name="_submit" class="btn right metroButton" value="Đăng nhập" />
                <span class="buttonIcon"></span>
            </div>


        </form>

        <div class="bottomText">
        </div>

    </div>
</body>
</html>
