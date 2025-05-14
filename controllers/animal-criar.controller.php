<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /cadastro-animal');
    exit();
}

if (!auth()) {
    abort(403);
}

// dd($_POST);

if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $novoNome = md5(rand());
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $imagem = "animais/$novoNome.$extensao";
    move_uploaded_file($_FILES['imagem']['tmp_name'], __DIR__ . '/../assets/img/' . $imagem);
}

$img = !empty($imagem) ? $imagem : null;
$lt = !empty($_POST['lt']) ? $_POST['lt'] : null;
$causa_obito = !empty($_POST['causa_obito']) ? $_POST['causa_obito'] : null;
$observacao = !empty($_POST['observacoes']) ? $_POST['observacoes'] : null;

$database->query(
    "insert into animais (nome, faixa_etaria, especie, sexo, foto, vacinado, castrado, local, lar_temp, status, causa_obito, docil, abandono, local_origem, data_encontro, observacao)
    values (:nome, :faixa, :especie, :sexo, :foto, :vacinado, :castrado, :local, :lar_temp, :status, :causa_obito, :docil, :abandono, :local_origem, :data_encontro, :observacao)",
    params: [
        'nome' => $_POST['nome'],
        'faixa' => $_POST['faixa'],
        'especie' => $_POST['especie'],
        'sexo' => $_POST['sexo'],
        'foto' => $img,
        'vacinado' => $_POST['vacinado'],
        'castrado' => $_POST['castrado'],
        'local' => $_POST['local'],
        'lar_temp' => $lt,
        'status' => $_POST['status'],
        'causa_obito' => $causa_obito,
        'docil' => $_POST['docil'],
        'abandono' => $_POST['abandono'],
        'local_origem' => $_POST['origem'],
        'data_encontro' => $_POST['data_encontro'],
        'observacao' => $observacao,
    ]
);

header('Location: /animais');
exit();
