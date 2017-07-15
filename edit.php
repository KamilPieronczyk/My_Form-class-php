<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});
require_once 'connect.php';
require_once 'funcions.php';

$form_2 = new My_Form_Edit('first-10','EDIT');
$form_2->add_field('delete',array(
  'type' => 'submit',
  'input_text' => 'Delete',
  'save'  => false,
  'priority' => 10
));
function callback()
{
  if ($_POST['delete'] == "Delete") {
    unset_options('first-8');
  }
}
$form_2->register_update('callback');
$form_2->form_input();
