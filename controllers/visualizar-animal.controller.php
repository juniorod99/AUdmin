<?php
$animal = Animal::get($_GET['id']);
view('visualizar-animal', compact('animal'));
