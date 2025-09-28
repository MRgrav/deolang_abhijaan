<?php

function get_env($string) {
    $env = parse_ini_file('.env');
    echo $env[$string];
}

// function install() {
//     echo
// }