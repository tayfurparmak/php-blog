<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function Add($baslik, $icerik, $kullanici_id, $zaman)
{
  global $conn;
  $sql = "INSERT INTO yazi (baslik, icerik,kullanici_id,zaman) VALUES ('$baslik', '$icerik', '$kullanici_id', '$zaman')";
  $conn->query($sql);
}

function Delete($id)
{
  global $conn;
  $sql = "DELETE FROM yazi WHERE id = '$id'";
  $conn->query($sql);
}

function Update($id, $baslik, $icerik, $kullanici_id, $zaman)
{
  global $conn;
  $sql = "UPDATE yazi SET baslik = '$baslik' , icerik = '$icerik',kullanici_id='$kullanici_id',zaman = '$zaman' WHERE id = '$id'";
  $conn->query($sql);
}

function GetAll()
{
  global $conn;
  $sql = "SELECT id, baslik, icerik, kullanici_id, zaman FROM yazi";
  $result = $conn->query($sql);
  return $result;
}

function Get($id)
{
  global $conn;
  $sql = "SELECT id, baslik, icerik,kullanici_id, zaman FROM yazi WHERE id = '$id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      return $row;
    }
  }
}
