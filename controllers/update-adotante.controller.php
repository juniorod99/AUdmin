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

$camposAlterados = [];
$params = [];

foreach ($dadosFormulario as $campo => $valorForm) {
    if ($valorForm != $dadosAdotante->$campo) {
        $camposAlterados[] = "$campo = ?";
        $params[] = trim($valorForm);
    }
}

if (!empty($img['name'])) {
    echo "enviou foto <br>";
    $novoNome = md5(rand());
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $imagem = "adotantes/$novoNome.$extensao";
    $camposAlterados[] = "foto = ?";
    $params[] = $imagem;
    // move_uploaded_file($_FILES['imagem']['tmp_name'], __DIR__ . '/../assets/img/' . $imagem);
    if ($dadosAdotante->foto) {
        echo "ele ja tinha foto <br>";
        if (file_exists(__DIR__ . '/../assets/img/' . $dadosAdotante->foto)) {
            echo "arquivo existe";
            // unlink(__DIR__ . '/../assets/img/' . $dadosAdotante->foto);
        }
    }
}

$params[] = $id;

dd($camposAlterados, $params);
$database->query(
    "update adotantes set" . implode(', ', $camposAlterados) . "where id = ?",
    params: $params
);
