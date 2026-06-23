<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "resume_db"
);

if ($conn->connect_error) {
    die("Connection Failed");
}