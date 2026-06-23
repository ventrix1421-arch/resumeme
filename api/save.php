<?php

include "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$stmt = $conn->prepare("
INSERT INTO resumes
(fullname,role,email,phone,location,website,summary)
VALUES (?,?,?,?,?,?,?)
");

$stmt->bind_param(
    "sssssss",
    $data['name'],
    $data['role'],
    $data['email'],
    $data['phone'],
    $data['location'],
    $data['link'],
    $data['summary']
);

$stmt->execute();

echo json_encode([
    "success" => true
]);