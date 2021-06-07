<?php

session_start();
$baseurl = "http://localhost/morella";

// koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "morella";

$conn = new mysqli($servername, $username, $password, $dbname);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// ambil data dari tabel file
$artikel = mysqli_query($conn, "SELECT * FROM artikel ORDER BY id DESC");

function space($key)
{
    for ($i = 0; $i < $key; $i++) {
        echo "&nbsp;";
    }
}

function get($key)
{
    $key = htmlspecialchars($key);
    $method = $_GET[$key];
    return  query("SELECT * FROM artikel WHERE $key = $method")[0];
}

function insert($data)
{
    global $conn;

    $filename = $_FILES["gambar"]["name"];
    $filename = explode(".", $filename);
    $filekstensi = strtolower(end($filename));
    $newfilename = uniqid();
    $newfilename = $newfilename . "." . $filekstensi;

    move_uploaded_file($_FILES["gambar"]["tmp_name"], "asset/img/" . $newfilename);

    $judul = $data['judul'];
    $subjek = $data['subjek'];
    $detail = $data['detail'];

    // query insert data
    $query = "INSERT INTO artikel
                    VALUES
                    ('', '$judul', '$subjek',  '$detail', '$newfilename')
                    ";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

// search
if (isset($_POST['search'])) {
    $artikel = cari($_POST['cari']);
    if (empty($_POST['cari'])) {
        $artikel = mysqli_query($conn, "SELECT * FROM artikel ORDER BY id DESC");
    }
}
function cari($key)
{
    $query = "SELECT * FROM artikel WHERE judul LIKE '%$key%' ORDER BY id DESC";
    return query($query);
}
