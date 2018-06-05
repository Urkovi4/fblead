<?php
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'qwerty12345') {
    echo $challenge;
}