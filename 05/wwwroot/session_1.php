<?php
// session_1.php

// �Z�b�V�����J�n
ob_start();
session_start();
//
var_dump($_SESSION);
// �f�[�^��������
$_SESSION['rand'] = mt_rand(0, 1000);
//
var_dump($_SESSION);
