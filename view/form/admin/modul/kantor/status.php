
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Active And Deactive</title>
  </head>
  <body>
    <?php
      include "koneksi.php";
      include "fungsi.php";
      $result = mysqli_query($conn,"SELECT * FROM kantor_cabang");
     ?>
    <table border="1">
      <tr>
        <th>Nama Kantor</th>
        <th>Status Kepemilikan</th>
        <th>Current Status</th>
        <th>Change Status</th>
      </tr>
      <?php
        while($row= mysqli_fetch_assoc($result)){
       ?>
      <tr>
          <td><?php echo $row["nama_kantor"];?></td>
          <td><?php echo $row["status_kepemilikan"];?></td>
          <td>
            <?php
              if($row['status'] == 2)
              {
                echo "<p id=str".$row['id'].">Pending</p>";
              }
              else
              {
                echo "<p id=str".$row['id'].">Sent</p>";
              }
             ?>
          </td>
          <td>
              <select onchange ="active_disactive_user(this.value,<?php echo $row
              ['id'];?>)">
                <option value ="1">Send</option>
                <option value ="2">Pending</option>
              </select>
          </td>
      </tr>
      <?php

    }?>
    </table>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
    function active_disactive_user(val,id)
    {
      $.ajax({
        type:'post',
        // url:'change.php',
        data:{val:val,user_id:user_id},
        success:function(result){
          if(result==1){
            $('#str'+id).html('Send');
          }
          else
          {
            $('#str'+id).html('Pending');
          }
        }
      });
    }
  </script>
</html>
