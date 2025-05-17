<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /animais');
    exit();
}

if (!auth()) {
    abort(403);
}

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    http_response_code(400);
    echo json_encode(['erro' => 'ID inválido']);
    exit();
}

try {
    $animal = Animal::delete($id);

    if ($animal) {
        http_response_code(200);
        echo json_encode(['sucesso' => true]);
        flash()->push('delete', ['animal excluido com sucesso!']);
    } else {
        http_response_code(500);
        echo json_encode(['erro' => 'Falha ao excluir']);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => $e->getMessage()]);
}
