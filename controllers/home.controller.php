<?php
// if (!auth()) {
//     abort(403);
// }

$animais = Animal::all('');
view('home', compact('animais'));
