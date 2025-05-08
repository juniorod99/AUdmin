<?php
// if (!auth()) {
//     abort(403);
// }

$animais = Animal::all('');
$adotantes = Adotante::all('');
view('home', compact('animais', 'adotantes'));
