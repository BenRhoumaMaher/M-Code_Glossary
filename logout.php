<?php
session_start();
session_unset(); //unset the current session
session_destroy();
require('app/app.php');
redirect('login.php');
die();
