<?php
session_start();
require('../app/app.php');
ensure_user_is_authenticated();
if (is_get()) {
    $key = sanitize($_GET['key']);
    if (empty($key)) {
        view('not_found');
        die();
    }
    $term = Data::get_term($key);
    if ($term === false) {
        view('not_found');
        die();
    }
    view('admin/edit', $term);
}
if (is_post()) {
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);
    $originalTerm = sanitize($_POST['originalTerm']);

    if (empty($term) || empty($definition) || empty($originalTerm)) {
    } else {
        Data::update_term($originalTerm, $term, $definition);
        redirect('index.php');
    }
}
