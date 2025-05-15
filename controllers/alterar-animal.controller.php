<?php
$animal = Animal::get($_GET['id']);
view('alterar-animal', compact('animal'));
