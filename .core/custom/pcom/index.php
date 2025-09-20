<?php

# it is a blade like template

function renderTemplate($template, $variables) {
    return preg_replace_callback('/{{\s*\$(\w+)\s*}}/', function ($matches) use ($variables) {
        return isset($variables[$matches[1]]) ? htmlspecialchars($variables[$matches[1]]) : '';
    }, $template);
}

?>