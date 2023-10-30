<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pgwebacara8</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

   
</head>
<body>
                <h2 style="text-align: center;">Kapanewon di Kabupaten Sleman</h2>
                <br>
    <?php
    //sesuaikan dengan setting MySQL
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "pgweb-acara8";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //check connection
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM pgwebacara8";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1px'><tr>
    <th>Kecamatan</th>
    <th>Longitude</th>
    <th>Latitude</th>
    <th>Luas</th>
    <th>Jumlah Penduduk</th>";

    // output data of each row
    while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["Kecamatan"]."</td><td>".
    $row["Longitude"]."</td><td>". 
    $row["Latitude"]."</td><td>". 
    $row["Luas"]."</td><td align='right'>".
    $row["jumlah_penduduk"]."</td></tr>";
    }
     echo "</table>";
    } else {
    echo "0 results";
    }
    $conn->close();

    ?>

</body>
</html>