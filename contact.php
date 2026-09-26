<?php
require_once 'includes/db.php';
$contactMsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name = trim($_POST['contactName']);
    $email = trim($_POST['contactEmail']);
    $message = trim($_POST['contactMessage']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $pdo->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $message]);
        $contactMsg = "Thank you for contacting us!";
    }
}
?>