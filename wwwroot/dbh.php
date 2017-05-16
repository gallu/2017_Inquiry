<?php
// dbh.php
require_once('db_config.php');

// DB�p�֐�
// ----------------------------
function get_dbh() {
    // �ݒ�l�̎擾
    $db_config = db_config();
    // �f�[�^�̐ݒ�
    $user = $db_config['user'];
    $pass = $db_config['pass'];
    $dsn = "mysql:dbname={$db_config['database']};host={$db_config['host']};charset={$db_config['charset']}";

    // �ڑ��I�v�V�����̐ݒ�
    $opt = array (
        PDO::ATTR_EMULATE_PREPARES => false,
    );
    // �u�����֎~�v���\�Ȃ�t�������Ă���
    if (defined('PDO::MYSQL_ATTR_MULTI_STATEMENTS')) {
        $opt[PDO::MYSQL_ATTR_MULTI_STATEMENTS] = false;
    }

    // �ڑ�
    try {
        $dbh = new PDO($dsn, $user, $pass, $opt);
    } catch (PDOException $e) {
        // XXX �{���͂����������J�ȃG���[�y�[�W���o�͂���
        echo '�V�X�e���ŃG���[���N���܂���';
        exit;
    }
    //
    return $dbh;
}
