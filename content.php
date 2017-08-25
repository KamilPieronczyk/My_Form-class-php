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
  'label_size' => 'col-md-2',
  'input_size' => 'col-md-6'
));
$form->add_field('is_it',array(
  'type' => 'checkbox',
  'priority' => 3,
  'label' => 'Click?',
  'label_size' => 'col-md-2',
  'input_size' => 'col-md-10'
));
$form->add_field('sex',array(
  'type' => 'radio',
  'priority' => 4,
  'choices' => array(
              'male' => 'Mężczyzna',
              'female' => 'Kobieta',

  )
));
$form->add_text_editor('text',array(
  'priority' => 2,
  'label' => 'Text',
  'attr' => 'style="width: 500px"'
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
