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
        $camposAlterados[] = "$campo = :$campo";
        $params[] = trim($valorForm);
    }
}

if (!empty($doc['name'])) {
    echo "enviou documento";
    $novoNomeDoc = md5(rand());
    $extensaoDoc = pathinfo($_FILES['documentos']['name'], PATHINFO_EXTENSION);
    $documentos = "adotantes-docs/$novoNomeDoc.$extensaoDoc";
    $camposAlterados[] = "documentos = :documentos";
    $params[] = $documentos;
    move_uploaded_file($_FILES['documentos']['tmp_name'], __DIR__ . '/../assets/img/' . $documentos);
    if ($dadosAdotante->documentos) {
        if (file_exists(__DIR__ . '/../assets/img/' . $dadosAdotante->documentos)) {
            unlink(__DIR__ . '/../assets/img/' . $dadosAdotante->documentos);
        }
    }
}

// dd($camposAlterados, $params, $doc);

if (!empty($img['name'])) {
    $novoNome = md5(rand());
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $imagem = "adotantes/$novoNome.$extensao";
    $camposAlterados[] = "foto = :foto";
    $params[] = $imagem;
    move_uploaded_file($_FILES['imagem']['tmp_name'], __DIR__ . '/../assets/img/' . $imagem);
    if ($dadosAdotante->foto) {
        if (file_exists(__DIR__ . '/../assets/img/' . $dadosAdotante->foto)) {
            unlink(__DIR__ . '/../assets/img/' . $dadosAdotante->foto);
        }
    }
}

$params[] = $id;

$database->query(
    "update adotantes set " . implode(', ', $camposAlterados) . " where id = ?",
    params: $params
);

header('Location: /adotantes');
exit();
