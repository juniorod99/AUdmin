<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /home');
    exit();
}

if (!auth()) {
    abort(403);
}

$id = $_POST['id'];
$dadosFormulario = $_POST;
$img = $_FILES['imagem'];
unset($dadosFormulario['id']);

$dadosAnimal = Animal::get($id);

$camposAlterados = [];
$params = [];

foreach ($dadosFormulario as $campo => $valorForm) {
    if ($valorForm != $dadosAnimal->$campo) {
        $camposAlterados[] = "$campo = :$campo";
        $params[] = trim($valorForm);
    }
}

// dd($camposAlterados, $params);


if (!empty($img['name'])) {
    $novoNome = md5(rand());
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $imagem = "animais/$novoNome.$extensao";
    $camposAlterados[] = "foto = :foto";
    $params[] = $imagem;
    move_uploaded_file($_FILES['imagem']['tmp_name'], __DIR__ . '/../assets/img/' . $imagem);
    if ($dadosAnimal->foto) {
        if (file_exists(__DIR__ . '/../assets/img/' . $dadosAnimal->foto)) {
            unlink(__DIR__ . '/../assets/img/' . $dadosAnimal->foto);
        }
    }
}

$params[] = $id;

$database->query(
    "update animais set " . implode(', ', $camposAlterados) . " where id = ?",
    params: $params
);

header('Location: /animais');
exit();
