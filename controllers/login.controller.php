<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'oi, estou no login controller';
}

view('login');
