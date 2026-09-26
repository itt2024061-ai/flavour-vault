<?php
function secure_session_start() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}

function sanitize_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}
?>