<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_sewakantor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM kantor_cabang";
$sql = "SELECT
          a.id,a.nama_kantor,a.id_regional,b.nama_regional,
          a.periode_awal,a.periode_akhir,a.masa_sewa,
          a.status_kepemilikan,a.status,
          concat( ( SELECT TIMESTAMPDIFF( MONTH, CURDATE( ), a.periode_akhir ) ), ' Bulan' ) AS sisa_sewa,
          a.email_cabang,a.nama_bm,b.email_rm,b.nama_rm
      FROM
          kantor_cabang a
          join regional b on b.id = a.id_regional
      WHERE
          a.status_kepemilikan = '2' AND a.status in ('1','2')
          AND ( SELECT TIMESTAMPDIFF( MONTH, CURDATE( ), a.periode_akhir ) ) <=12";
$result = $conn->query($sql);

echo $result->num_rows;
/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Notification: " . $row["description"];
    }
} else {
    echo "0 results";
}
*/
$conn->close();

?>
