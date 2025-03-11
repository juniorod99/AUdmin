<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /cadastro-animal');
    exit();
}

if (!auth()) {
    abort(403);
}

$id = $_POST['id'];
$dadosFormulario = $_POST;
$img = $_FILES['imagem'];
$doc = $_FILES['documentos'];
unset($dadosFormulario['id']);

$dadosAdotante = Adotante::get($id);

if (!empty($img['name'])) {
    echo "enviou foto";
}
dd($id, $dadosFormulario, $img, $doc, $dadosAdotante);
// dd($img['name']);
// 1 - pegar dados antigos usuario
