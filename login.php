<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <style>
        body {
            background: #f0f8ff; 
            margin-left: 30px;
            font-family: Arial, sans-serif;
        }

        .loginbtn {
            width: 50%;
            height: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
        }

        .loginbtn h1 {
            color: #0066ff;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .loginbtn form {
            text-align: center;
        }

        .loginbtn input[type="text"],
        .loginbtn input[type="password"] {
            width: 80%;
            height: 30px;
            margin-bottom: 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .loginbtn button {
            width: 40%;
            height: 40px;
            background-color: #4CAF50;
          
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .loginbtn button:hover {
            background-color: #45a049;
        }

        h1.student-title {
            color: #0066ff;
            font-size: 28px;
            text-align: center;
            margin-top: 50px;
        }

        button.signup-btn {
            width: 100px;
            height: 40px;
            background-color: #0066ff;
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button.signup-btn:hover {
            background-color: #0052cc;
        }

        button.home-btn {
            width: 150px;
            height: 40px;
            background-color: #ffa500; 
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        button.home-btn:hover {
            background-color: #cc8400;
        }
    </style>
</head>

<body>
    <center>
        
        <div class="loginbtn">
            <h1>ADMIN GIRISI</h1>
            <form action="login_process.php" method="POST">
                <input type="text" id="user" name="username" placeholder="Kullanici Adi" /><br><br>
                <input type="password" id="pass" name="password" placeholder="Sifre" /><br><br>
                <button type="submit" name="login">Giris</button>
            </form>
        </div>

      
        <div class="loginbtn">
            <h1>OGRENCI GIRISI</h1>
            <form action="student_login_process.php" method="POST">
                <input type="text" id="student_user" name="usern" placeholder="Ogrenci Numarasi" /><br><br>
                <input type="password" id="student_pass" name="passw" placeholder="Sifre" /><br><br>
                <button type="submit" name="student_login">Giris</button>
            </form>
        </div>

        <h1 class="student-title">Ogrenci olarak</h1>
        <button class="signup-btn"><a href="../Student/signup.html" style="color: white; text-decoration: none;">Kayit ol</a></button>

       
        <button class="home-btn"><a href="./index.php" style="color: white; text-decoration: none;">Anasayfa</a></button>
    </center>
</body>

</html>
