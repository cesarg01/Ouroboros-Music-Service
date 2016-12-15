<?php

class initDB{
  function createDB(){
	//create DB
   $mysql = mysqli_connect(DB_ADDRESS, DB_USER, DB_PASS);
   if (!$mysql) {
     die('Could not connect: ' . mysql_error());
   }

   $select = mysqli_select_db($mysql, DB_USE);

   if (!$select) {
     $sql = 'CREATE DATABASE '.DB_USE;
     if (!mysqli_query($mysql, $sql)) {
      echo 'Error creating database: '. DB_USE . mysql_error() . "\n";
    }
  }
  mysqli_close($mysql);

  
	//create table
  //RecordLabel(labelID: integer, name: string, address: string)
  $mysql2 = mysqli_connect(DB_ADDRESS, DB_USER, DB_PASS, DB_USE);


  $query = "SELECT labelId FROM RecordLabel";
  $result = mysqli_query($mysql2, $query);
  
  if(empty($result)) {
    $query = "CREATE TABLE RecordLabel (
    labelId INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255)
    )";
    $result = mysqli_query($mysql2, $query);
  }

  //Artist(artistID: integer, name: string)
  $query = "SELECT artsitId FROM Artist";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE Artist (
    artistId INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
    )";
    $result = mysqli_query($mysql2, $query);
  }


 //RAHas(labelID: integer, artistID: integer)
  $query = "SELECT labelId FROM RAHas";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE RAHas (
    labelId INT(11) NOT NULL,
    artistId INT(11) NOT NULL,
    FOREIGN KEY (labelId) REFERENCES RecordLabel(labelId) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (artistId) REFERENCES Artist(artistId) ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY(labelId, artistId)
    )";
    $result = mysqli_query($mysql2, $query);
  }

//SoloArtist(artistID: integer, birthdate: date)
  $query = "SELECT artistId FROM SoloArtist";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE SoloArtist (
    artistId INT(11) AUTO_INCREMENT PRIMARY KEY,
    birthdate DATE NOT NULL
    )";
    $result = mysqli_query($mysql2, $query);
  }



//GroupArtist(artistID: integer, formationDate: date)  
  $query = "SELECT artistId FROM GroupArtist";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE GroupArtist (
    artistId INT(11) AUTO_INCREMENT PRIMARY KEY,
    formationDate DATE
    )";
    $result = mysqli_query($mysql2, $query);
  }


  //Album(albumID: integer, name: string, yearPublish: integer)
  $query = "SELECT albumID FROM Album";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE Album (
    albumID INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    yearPublish DATE
    )";
    $result = mysqli_query($mysql2, $query);
  }


//AACreate(artistID: integer, albumID: integer)
  $query = "SELECT artistID FROM AACreate";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE AACreate (
    artistID INT(11) NOT NULL,
    albumID INT(11) PRIMARY KEY,
    FOREIGN KEY (artistID) REFERENCES Artist(artistID) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (albumID) REFERENCES Album(albumID) ON DELETE CASCADE ON UPDATE CASCADE
    )";
    $result = mysqli_query($mysql2, $query);
  }

  //Track(releaseDate: date, trackName: string, length: int, genre: string)
  $query = "SELECT releaseDate FROM Track";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE Track (
    releaseDate DATE NOT NULL,
    trackName VARCHAR(255) NOT NULL,
    length INT(11),
    genre VARCHAR(255),
    PRIMARY KEY (releaseDate, trackName)
    )";
    $result = mysqli_query($mysql2, $query);
  }

  //ATHas(albumID: integer, releaseDate: date, trackName: string)
  $query = "SELECT albumID FROM ATHas";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE ATHas (
    lalbumID INT(11) NOT NULL,
    releaseDate DATE NOT NULL,
    trackName VARCHAR(255) NOT NULL,
    FOREIGN KEY (albumID) REFERENCES Album(albumID) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (releaseDate, trackName) REFERENCES
    )";
    $result = mysqli_query($mysql2, $query);
  }


//Playlist(listID: integer, listName: string)
  $query = "SELECT listID FROM Playlist";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE Playlist (
    istID INT(11) AUTO_INCREMENT PRIMARY KEY,
    listName VARCHAR(255)
    )";
    $result = mysqli_query($mysql2, $query);
  }


  //Users(userID: integer, name: string, gender: string, photo: BLOB)
  $query = "SELECT userID FROM Users";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE Users (
    userID INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    gender VARCHAR(10),
    photo BLOB
    )";
    $result = mysqli_query($mysql2, $query);
  }

  //Listen(userID: integer, listID: integer)
  $query = "SELECT userID FROM Listen";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE Listen (
    userID INT(11) NOT NULL,
    listID INT(11) NOT NULL,
    FOREIGN KEY (userID) REFERENCES Users(userID),
    FOREIGN KEY (listID) REFERENCES Playlist(listID),
    PRIMARY KEY (userID, listID)
    )";
    $result = mysqli_query($mysql2, $query);
  }

  //PTHas(listID: integer, releasedDate:date, trackName:string)
  $query = "SELECT listID FROM PTHas";
  $result = mysqli_query($mysql2, $query);
  if(empty($result)) {
    $query = "CREATE TABLE PTHas (
    listID INT(11) PRIMARY KEY,
    releaseDate DATE,
    trackName VARCHAR(255) NOT NULL,
    FOREIGN KEY (releaseDate, trackName) REFERENCES Track(releaseDate, trackName) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (listID) REFERENCES Playlist(listID) ON DELETE CASCADE ON UPDATE CASCADE
    )";
    $result = mysqli_query($mysql2, $query);
  }
  


  $mysql2->close();
  
  
}


}
?>