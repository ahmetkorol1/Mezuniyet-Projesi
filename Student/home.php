<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
        crossorigin="anonymous">
 
    <style>
        body {
            margin: 0;
            font-family: 'Mochiy Pop P One', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        
        .slidebar {
            width: 200px;
            height: 100vh;
            position: fixed;
            background-color: #105F62;
            padding-top: 20px;
            color: #fff;
            transition: width 0.3s;
        }

        .slidebar header {
            padding: 20px 10px;
            text-align: center;
            font-size: 24px;
        }

        .slidebar ul {
            padding: 0;
            list-style: none;
        }

        .slidebar ul li {
            padding: 10px;
            text-align: center;
        }

        .slidebar ul li a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s;
        }

        .slidebar ul li:hover a {
            color: #E0FFFF;
        }

       
        .logout {
            text-align: center;
            margin-top: 20px;
        }

        .logout a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s;
        }

        .logout a:hover {
            color: #E0FFFF;
        }

       
        .mainpart {
            margin-left: 200px;
            padding: 20px;
        }

       
        .infocard {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .infocard h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

       
        .cardspecific {
            background-color: #E0FFFF;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .cardspecific:hover {
            background-color: #C1CDC1;
        }

        .cardspecific a {
            text-decoration: none;
            color: #333;
        }

        .cardspecific .number {
            font-size: 36px;
            margin-top: 10px;
        }

      
        .message-form {
            margin-top: 30px;
        }

        .message-form h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .message-form textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            resize: none;
        }

        .message-form button {
            padding: 10px 20px;
            background-color: #105F62;
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .message-form button:hover {
            background-color: #599956;
        }
    </style>
</head>

<body>
  
    <div class="slidebar">
        <header>
            <i class="fas fa-user-graduate"></i>
            <br>
            OGRENCI
        </header>

        <ul>
            <li>
                <a href="view_halls.php"><i class="fas fa-building"></i> Yurtlar</a>
            </li>
           
            <li>
                <a href="view_staff.php"><i class="fas fa-users"></i> Calisanlar</a>
            </li>
        </ul>

     
        <div class="logout">
            <a href="../logout process.php">
                Cikis
            </a>
        </div>
    </div>

   
    <div class="mainpart">
        <div class="infocard">
            <h1>Ogrenci Portali</h1>

            <a href="view_halls.php">
                <div class="cardspecific">
                    Yurtlar
                    <div class="number">
                        <?php
                        include 'connection.php';
                        $sql = "select count(*) as total from hall";
                        $result = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($result);
                        echo $data['total'];
                        ?>
                    </div>
                </div>
            </a>

            

            <a href="view_staff.php">
                <div class="cardspecific">
                    Calisanlar
                    <div class="number">
                        <?php
                        include 'connection.php';
                        $sql = "select count(*) as total from staff";
                        $result = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($result);
                        echo $data['total'];
                        ?>
                    </div
                                    </div>
            </a>

           
            <div class="message-form">
                <h2>Mesaj Gonder</h2>
                <form action="send_message.php" method="POST">
                    <textarea name="message" placeholder="Isminiz, ogrenci numaraniz ve oda numaranizla beraber mesajinizi buraya yaziniz..." required></textarea>
                    <button type="submit">Gonder</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

