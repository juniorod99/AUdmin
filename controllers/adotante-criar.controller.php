<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /cadastro-animal');
    exit();
}

if (!auth()) {
    abort(403);
}

if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $novoNome = md5(rand());
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $imagem = "adotantes/$novoNome.$extensao";
    move_uploaded_file($_FILES['imagem']['tmp_name'], __DIR__ . '/../assets/img/' . $imagem);
}

if (isset($_FILES['documentos']) && $_FILES['documentos']['error'] === UPLOAD_ERR_OK) {
    $novoNome = md5(rand());
    $extensao = pathinfo($_FILES['documentos']['name'], PATHINFO_EXTENSION);
    $documento = "adotantes-docs/$novoNome.$extensao";
    move_uploaded_file($_FILES['documentos']['tmp_name'], __DIR__ . '/../assets/img/' . $documento);
}

$img = !empty($imagem) ? $imagem : null;
$doc = !empty($documento) ? $documento : null;
$rede = !empty($_POST['rede_social']) ? $_POST['rede_social'] : null;
$observacao = !empty($_POST['observacao']) ? $_POST['observacao'] : null;

$database->query(
    "insert into adotantes (nome, sexo, idade, bairro, rua, telefone, email, rede_social, observacao, foto, documentos)
    values (:nome, :sexo, :idade, :bairro, :rua, :telefone, :email, :rede_social, :observacao, :foto, :documentos)",
    params: [
        'nome' => $_POST['nome'],
        'sexo' => $_POST['sexo'],
        'idade' => $_POST['idade'],
        'bairro' => $_POST['bairro'],
        'rua' => $_POST['rua'],
        'telefone' => $_POST['telefone'],
        'email' => $_POST['email'],
        'rede_social' => $rede,
        'observacao' => $observacao,
        'foto' => $img,
        'documentos' => $doc,
    ]
);

header('Location: /home');
exit();
