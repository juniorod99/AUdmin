<?php
$adotante = Adotante::get($_GET['id']);
view('alterar-adotante', compact('adotante'));
