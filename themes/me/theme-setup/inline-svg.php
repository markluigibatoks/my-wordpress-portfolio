<?php
function inline_svg($filepath) {
    $path = get_template_directory() . $filepath;
    return file_exists($path) ? file_get_contents($path) : '';
}
