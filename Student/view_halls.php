 <!DOCTYPE html>
 <html>

 <head>

   <title> Yurtlar </title>

   <style>
     .tdr {
       text-align: center;
     }

     body {
       background-image: url(../images/sea.jpg);
       background-repeat: no-repeat;
       background-size: cover;
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

     .table1 {
       margin-top: 70px;
     }

     #delete {
       background-color: #f44336;
       color: black;
       border-radius: 9px 9px;

     }

     #link1 {
       color: black;
       text-decoration: none;
       font-size: 15px;
     }

     #update {
       background-color: blue;
       color: black;
       border-radius: 9px 9px;
     }
   </style>
 </head>

 <body>
   <table align="center" class="table1" border="3px solid black" style="width:1000px; line-height:40px;">
     <tr>
       <th colspan="8">
         <h2>Yurtlar</h2>
       </th>
     </tr>
     <th> Yurt no </th>
     <th> Yurt Adi </th>
     <th> Toplam Oda </th>
     <th> Musait Oda </th>
     <th> Ogrenci Sayisi </th>
     </tr>

     <?php
      include 'connection.php';
      $sql = "select * from hall ";
      $query = mysqli_query($conn, $sql);
      while ($row1 = mysqli_fetch_array($query)) {
      ?>
       <tr>
         <td class="tdr"><?php echo $row1['H_ID']; ?></td>
         <td class="tdr"><?php echo $row1['H_Name']; ?></td>
         <td class="tdr"><?php echo $row1['T_Seat']; ?></td>
         <td class="tdr"><?php echo $row1['A_Seat']; ?></td>
         <td class="tdr"><?php echo $row1['N_Student']; ?></td>
       </tr>
     <?php
      }
      ?>

   </table>

   <center>
  
     <button class="button"> <a href="../dashboard/home.php" style="text-decoration: none;">Ana Sayfa</a> </button>
   </center>
 </body>

 </html>