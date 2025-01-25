<?php

require __DIR__ . '/inc/db-connect.php';
require __DIR__ . '/inc/functions.php';

// Sicherheit falls ein Angreifer seine Eingaben entfernt übers Quellcode
if (!empty($_POST)) {

    $title = '';
    if (isset($_POST['title'])) {
        $title = @(string) $_POST['title'];  // Überschreibung des Arrays in einem String
    } // @-Zeichen unterdrückt Warnungen hier ist ok da es Bei array to String Konvertierungen Warnungen ignoriert werden können
      // Und da der Nutzer keine Array Eingaben hat kann dies ignoriert werden

    $name = '';
    if (isset($_POST['name'])) {
        $name = @(string) $_POST['name'];
    }

    $content = '';
    if (isset($_POST['content'])) {
        $content = @(string) $_POST['content'];
    }

    if (!empty($title) && !empty($name) && !empty($content)) { // und wenn Eingaben vorhanden sind dann soll in DB
        $stmt = $pdo->prepare('INSERT INTO entries (`name`, `title`, `content`) VALUES (:name, :title, :content)');
        $stmt->bindValue('name', $name);
        $stmt->bindValue('title', $title);
        $stmt->bindValue('content', $content);
        $stmt->execute();

        echo '<a href="index.php">Zurück zum Gästebuch...</a>';
        die();
    }
}
$errorMessage = 'Ein Fehler ist aufgetreten';

require __DIR__ . '/index.php';