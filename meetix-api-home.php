<?php
header("Content-type:application/json"); 
 
$koneksi = mysqli_connect("localhost", "root", "","meetix");
 
$query = "SELECT * from event  ORDER BY jadwal_event DESC limit 8";
$result = mysqli_query($koneksi,$query);
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
    	"id_Event" => $row["id_Event"],
    	"nama_event" => $row["nama_event"],
    	"jadwal_event" => $row["jadwal_event"],
    	"lokasi_event" => $row["lokasi_event"],
    	"gambar_event" => $row["image_event"],
    	"harga_tiket" => $row["harga_tiket"],
    	"kategori_event" => $row["kategori_event"]);
   
     array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"data\":" . $data . "}";
?>