<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Cache-Control: no-cache, must-revalidate");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($name)) {
        $errors['name'] = "Le nom est obligatoire.";
    }

    if (empty($email)) {
        $errors['email'] = "L'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'email n'est pas valide.";
    }

    if (empty($subject)) {
        $errors['subject'] = "Le sujet est obligatoire.";
    }

    if (empty($message)) {
        $errors['message'] = "Le message est obligatoire.";
    }

    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
    } else {
        echo json_encode(['success' => true, 'message' => "Message envoyé avec succès."]);
    }
}
?>
