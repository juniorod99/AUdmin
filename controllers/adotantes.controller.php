<?php
if (!auth()) {
    abort(403);
}

$adotantes = Adotante::all('');

view('adotantes', compact('adotantes'));
