-- CS157A
-- Part 2 (25 Points)
--	Team Members:
--	Paul Vu
--	1
--	1
--	1
--	1

-- IMPORTANT: ALL THESE FILES NEED TO COPY INTO C:\MAMP\bin\mysql\bin
-- AND THEN RUN THIS COMMAND BELOW
-- SOURCE cs157a.sql;





DROP DATABASE cs157a;
CREATE DATABASE IF NOT EXISTS cs157a;
USE cs157a;




-- 1. RecordLabel(labelID: integer, name: string, address: string)
CREATE TABLE IF NOT EXISTS RecordLabel(
	labelId INT(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	address VARCHAR(255));

-- 3. Artist(artistID: integer, name: string)
CREATE TABLE IF NOT EXISTS Artist (
	artistId INT(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL);

-- 2. RAHas(labelID: integer, artistID: integer)
-- This table must be created after table RecordLabel and Artist
CREATE TABLE IF NOT EXISTS RAHas(
	labelId INT(11) NOT NULL,
	artistId INT(11) NOT NULL,
	FOREIGN KEY (labelId) REFERENCES RecordLabel(labelId) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (artistId) REFERENCES Artist(artistId) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY(labelId, artistId));



-- 4. SoloArtist(artistID: integer, birthdate: date)
CREATE TABLE IF NOT EXISTS SoloArtist (
	artistId INT(11) AUTO_INCREMENT PRIMARY KEY,
	birthdate DATE NOT NULL
);

-- 5. GroupArtist(artistID: integer, formationDate: date)
CREATE TABLE IF NOT EXISTS GroupArtist (
	artistId INT(11) AUTO_INCREMENT PRIMARY KEY,
	formationDate DATE
);

-- 7. Album(albumID: integer, name: string, yearPublish: integer)
CREATE TABLE IF NOT EXISTS Album (
	albumID INT(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	yearPublish DATE);

-- 6. AACreate(artistID: integer, albumID: integer)
CREATE TABLE IF NOT EXISTS AACreate (
	artistID INT(11) NOT NULL,
	albumID INT(11) PRIMARY KEY,
	FOREIGN KEY (artistID) REFERENCES Artist(artistID) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (albumID) REFERENCES Album(albumID) ON DELETE CASCADE ON UPDATE CASCADE);


-- 9. Track(releaseDate: date, trackName: string, length: int, genre: string)
CREATE TABLE IF NOT EXISTS Track (
	releaseDate DATE NOT NULL,
	trackName VARCHAR(255) NOT NULL,
	length INT(11),
	genre VARCHAR(255),
	PRIMARY KEY (releaseDate, trackName));


-- 8. ATHas(albumID: integer, releaseDate: date, trackName: string)
CREATE TABLE IF NOT EXISTS ATHas(
	albumID INT(11) NOT NULL,
	releaseDate DATE NOT NULL,
	trackName VARCHAR(255) NOT NULL,
	FOREIGN KEY (albumID) REFERENCES Album(albumID) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (releaseDate, trackName) REFERENCES Track(releaseDate, trackName) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY (albumID, releaseDate, trackName)
	);


-- 10. Playlist(listID: integer, listName: string)
CREATE TABLE IF NOT EXISTS Playlist (
	listID INT(11) AUTO_INCREMENT PRIMARY KEY,
	listName VARCHAR(255));


-- 11. Users(userID: integer, name: string, gender: string, photo: BLOB)
CREATE TABLE IF NOT EXISTS Users (
	userID INT(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	gender VARCHAR(10),
	photo BLOB);

-- 12. Listen(userID: integer, listID: integer)
CREATE TABLE IF NOT EXISTS Listen (
	userID INT(11) NOT NULL,
	listID INT(11) NOT NULL,
	FOREIGN KEY (userID) REFERENCES Users(userID),
	FOREIGN KEY (listID) REFERENCES Playlist(listID),
	PRIMARY KEY (userID, listID)
	);

-- 13. PTHas(listID: integer, releasedDate:date, trackName:string)
 CREATE TABLE IF NOT EXISTS PTHas (
    listID INT(11) PRIMARY KEY,
    releaseDate DATE,
	trackName VARCHAR(255) NOT NULL,
 FOREIGN KEY (releaseDate, trackName) REFERENCES Track(releaseDate, trackName) ON DELETE CASCADE ON UPDATE CASCADE,
 FOREIGN KEY (listID) REFERENCES Playlist(listID) ON DELETE CASCADE ON UPDATE CASCADE);



LOAD DATA INFILE '/Applications/XAMPP/xamppfiles/htdocs/cs157/data/RecordLabel.csv' INTO TABLE RecordLabel FIELDS TERMINATED BY ',' ENCLOSED BY '"' LINES TERMINATED BY '\r\n' (name, address);
LOAD DATA INFILE '/Applications/XAMPP/xamppfiles/htdocs/cs157/data/Artist.csv' INTO TABLE Artist FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (name);
LOAD DATA INFILE '/Applications/XAMPP/xamppfiles/htdocs/cs157/data/RAHas.csv' INTO TABLE RAHas FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (labelId, artistId);
LOAD DATA INFILE '/Applications/XAMPP/xamppfiles/htdocs/cs157/data/SoloArtist.csv' INTO TABLE SoloArtist FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (birthdate);
LOAD DATA INFILE '/Applications/XAMPP/xamppfiles/htdocs/cs157/data/GroupArtist.csv' INTO TABLE GroupArtist FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (formationDate);
LOAD DATA INFILE '/Applications/XAMPP/xamppfiles/htdocs/cs157/data/Album.csv' INTO TABLE Album FIELDS TERMINATED BY ',' ENCLOSED BY '"' LINES TERMINATED BY '\r\n' (name, yearPublish);

-- LOADING DATA FOR TRACK TABLE
SOURCE Track.sql;
LOAD DATA INFILE '/Applications/XAMPP/xamppfiles/htdocs/cs157/data/AACreate.csv' INTO TABLE AACreate FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' (artistId, albumID);
SOURCE ATHas.sql;
--	IN ORDER TO MAKE IT WORKS, WE NEED TO COPY THE photo.jpg INTO THE FOLDER C:\MAMP\bin\mysql\bin
--	ALSO, I JUST USE THE SAMPLE PHOTO ... NOTHING REAL HERE.
SOURCE Users.sql;
SOURCE Playlists.sql;
SOURCE Listen.sql;
SOURCE PTHas.sql;
