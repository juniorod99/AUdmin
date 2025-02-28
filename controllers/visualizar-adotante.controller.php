<?php
$adotante = Adotante::get($_GET['id']);
view('visualizar-adotante', compact('adotante'));
