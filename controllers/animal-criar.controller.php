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
    $imagem = "animais/$novoNome.$extensao";
    move_uploaded_file($_FILES['imagem']['tmp_name'], __DIR__ . '/../assets/img/' . $imagem);
}

$img = !empty($imagem) ? $imagem : null;
$lt = !empty($_POST['lt']) ? $_POST['lt'] : null;
$observacao = !empty($_POST['observacoes']) ? $_POST['observacoes'] : null;

$database->query(
    "insert into animais (nome, faixa_etaria, especie, sexo, foto, vacinado, castrado, local, lar_temp, disp_adocao, docil, local_origem, observacao)
    values (:nome, :faixa, :especie, :sexo, :foto, :vacinado, :castrado, :local, :lar_temp, :disp_adocao, :docil, :local_origem, :observacao)",
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
        'disp_adocao' => $_POST['adocao'],
        'docil' => $_POST['docil'],
        'local_origem' => $_POST['origem'],
        'observacao' => $observacao,
    ]
);

header('Location: /home');
exit();
