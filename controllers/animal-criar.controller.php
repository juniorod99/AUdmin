<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /cadastro-animal');
    exit();
}

if (!auth()) {
    abort(403);
}

dd($_POST, $_FILES);
