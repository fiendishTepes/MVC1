<?php
class logoutController {
    function __construct() {
        session_destroy();
        header("Location:/".DOMAIN."/");
    }
}
