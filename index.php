<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard | Login</title>
    <!-- 
        Tailwind CSS 
    -->
    <link href="dist/output.css" rel="stylesheet">
    <!-- 
        Bootsrap CDN link    
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="bg-orange-400">
        <div class="row">
            <div class="col">
                <img width="1200px" height="200px" src="https://www.posindonesia.co.id/en/artikel/image/Umrq07UinRfsf5i5.jpg" alt="">
            </div>
            <div class="col">
                <form action="src/function/proses_login.php" method="post">
                    <div class="input-group mb-3">
                        <img src="src/assets/img/logo.png" alt="logo">
                    </div>
                    <div class="input-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" name="email" class="form-control" type="text" placeholder="Enter Email" />
                    </div>
                    <div class="input-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" name="password" class="form-control" type="password" placeholder="Enter Password" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" value="login"> Login </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 
        JS Bootstrap CDN
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>