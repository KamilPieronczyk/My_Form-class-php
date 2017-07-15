<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});
require_once 'connect.php';
require_once 'funcions.php';

$form = new My_Form ('first','Formularz',true);
$form->add_field('title',array(
  'priority' => 1,
  'label' => 'Tytuł',
));


$form->form_input();
while ($form->have_values()) {
  echo $form->get_value('title');
  echo '<br>';
  echo $form->get_value('ilosc');
  echo '<br>';
  echo $form->get_value('check');
  echo '<br>';
  echo $form->get_value('ilosc2');
  echo '<br>';
  echo $form->get_form_id();
  echo '<br>';
}
