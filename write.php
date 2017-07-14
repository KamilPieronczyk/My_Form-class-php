<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});
require_once 'connect.php';
require_once 'funcions.php';

$form_2 = new My_Form_Edit('first-8','EDIT');
echo $form_2->get_value('title');
