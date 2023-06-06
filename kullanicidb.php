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

function Add($ad, $soyad)
{
  global $conn;
  $sql = "INSERT INTO kullanici (ad, soyad) VALUES ('$ad', '$soyad')";
  $conn->query($sql);
}

function Delete($id)
{
  global $conn;
  $sql = "DELETE FROM kullanici WHERE id = '$id'";
  $conn->query($sql);
}

function Update($id, $ad, $soyad)
{
  global $conn;
  $sql = "UPDATE kullanici SET ad = '$ad' , soyad = '$soyad' WHERE id = '$id'";
  $conn->query($sql);
}

function GetAll()
{
  global $conn;
  $sql = "SELECT id, ad, soyad FROM kullanici";
  $result = $conn->query($sql);
  return $result;
}

function Get($id)
{
  global $conn;
  $sql = "SELECT id, ad, soyad FROM kullanici WHERE id = '$id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      return $row;
    }
  }
}
