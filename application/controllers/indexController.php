<?php

Class Index extends Controller {

    function index() {
        return false;
    }

    function index_action() {
        echo "<script>window.location='http://" . SITE . LANGUAGE . "/admin/'</script>";
        exit();
    }

}
