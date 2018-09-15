<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AVメイカー</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="title" href="recomendation.php">Home</a>
        </header>
        <header class="header">
        </header>
        <div class="container">
            <h1 class="theme">名前を入力してください！</h1>
            <p class="theme">(名前を入力すると、後から履歴を確認できます。)</p>

            <form method="POST" action="signup.php">
                <div class="section">

                    <h3>
                        <label for="name">ユーザー名</label>
                        <input type="text" name="input_name" class="form-control" id="name" placeholder="cote de pablo">
                        
                    </h3>
                    <h3>
                        <label for="name">パスワード</label>
                        <input type="password" name="password" class="form-control" id="name" placeholder="4~16文字">
                        
                    </h3>

                </div><br>
                <input type="submit" class="btn btn-primary" value="チャレンジ!!">
                <a href="signin.php" style="float: right;padding-top: 6px;" class="text-success">
                    サインイン
                </a>
            </form>


        </div>
        <footer class="header">
            <p>Quiz, PHP practice 2018.</p>
        </footer>
    </div>
</body>

</html>