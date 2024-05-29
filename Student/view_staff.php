<!DOCTYPE html> 
<html> 
<head> 
    <title>Calisanlar</title> 
    <style>
        body{
            background-image: url(../images/g1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .tdr{
            text-align:center;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            margin-top: 60px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        #delete{
            background-color: #f44336;
            color: black;
            border-radius: 9px 9px;
        }
        #link1{
            color: black;
            text-decoration: none;
            font-size: 15px;
        }
        #update{
            background-color: blue;
            color: black;
            border-radius: 9px 9px;
        }
    </style>
</head> 
  
<body bgcolor="lightgreen"> 
    <table align="center" border="1px" style="width:1000px; line-height:40px; margin-top:80px"> 
        <tr> 
            <th colspan="6"><h2>CALISANLAR</h2></th> 
        </tr> 
        <tr> 
            <th>Calisan No </th> 
            <th>Isim Soyisim</th> 
            <th> Adres </th> 
            <th> E-mail </th> 
            <th> Gorevi </th> 
        </tr> 
        <?php 
            include 'connection.php';
            $sql = "select * from Staff ";
            $query = mysqli_query($conn, $sql);
            while($row1=mysqli_fetch_array($query)) { 
        ?> 
        <tr> 
            <td class="tdr"><?php echo $row1['S_ID']; ?></td> 
            <td class="tdr"><?php echo $row1['Name']; ?></td> 
            <td class="tdr"><?php echo $row1['Address']; ?></td> 
            <td class="tdr"><?php echo $row1['Email']; ?></td>
            <td class="tdr"><?php echo $row1['Designation']; ?></td>

        </tr> 
        <?php } ?> 
    </table>
</body> 
</html>
