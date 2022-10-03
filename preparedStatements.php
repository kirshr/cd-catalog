<?php
//CREATE
$add_genre = $conn->prepare("INSERT INTO genre (name) VALUES (?)");
$add_artist = $conn->prepare("INSERT INTO artist (name) VALUES (?)");
$add_label = $conn->prepare("INSERT INTO label (name) VALUES (?)");
$add_album = $conn->prepare
            ("INSERT INTO album (name, genre_id, label_id, artist_id, description, year) 
            VALUES (?,?,?,?,?,?)");


//READ

    //READ ALL ENTRIES
$get_all_labels = $conn->prepare("SELECT * FROM label");
$get_all_genres = $conn->prepare("SELECT * FROM genre");
$get_all_artists = $conn->prepare("SELECT * FROM artist");
$get_all_albums = $conn->prepare("SELECT album.name, album.year, artist.name, artist.artist_id, genre.genre_id, genre.name, label.label_id, label.name
FROM album 
INNER JOIN artist 
ON album.artist_id = artist.artist_id
INNER JOIN genre
ON album.genre_id = genre.genre_id
INNER JOIN label
ON album.label_id = label.label_id");
    //READ SPECIFIC ENTRIES
$get_label = $conn->prepare("SELECT name FROM label WHERE name = '?'");


//Update


//Delete
?>
<!-- 
SELECT album.name, album.year, artist.name, artist.artist_id, genre.genre_id, genre.name, label.label_id, label.name
FROM album 
INNER JOIN artist 
ON album.artist_id = artist.artist_id
INNER JOIN genre
ON album.genre_id = genre.genre_id
INNER JOIN label
ON album.label_id = label.label_id 
-->

