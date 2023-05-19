<!DOCTYPE html>

<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
   <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>

<body>
   <?php
   include "koneksi.php";
   $query = mysqli_query($conn, "SELECT * FROM customer");
   ?>

   <br /><br /><a href="tambah.php">Tambah</a><br /><br />

   <form action="" method="POST">
      <table id="data" class="display">
         <thead>
            <tr>
               <th>No</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>email</th>
               <th>telepon</th>
               <th>alamat</th>
               <th>aksi</th>
            </tr>
         </thead>
         <?php if (mysqli_num_rows($query) > 0) {
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
         ?>
               <tbody>
                  <tr>
                     <td>
                        <?php echo $no ?>
                     </td>
                     <td>
                        <?php echo $data["first_name"]; ?>
                     </td>
                     <td>
                        <?php echo $data["last_name"]; ?>
                     </td>
                     <td>
                        <?php echo $data["email"]; ?>
                     </td>
                     <td>
                        <?php echo $data["phone"]; ?>
                     </td>
                     <td>
                        <?php echo $data["address"]; ?>
                     </td>
                     <td>
                        <a href="#"> Delete </a> |
                        <a href="#"> Edit </a>
                     </td>
                  </tr>
               </tbody>
         <?php
               $no++;
            }
         }
         ?>
      </table>
   </form>
</body>
<script type="text/javascript">
   $(document).ready(function() {
      $('#data').DataTable();
   });
</script>

</html>