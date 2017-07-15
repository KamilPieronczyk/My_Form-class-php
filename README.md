# My_Form-class-php

# Readme
To create new form create new object using class My_Form.
To add new fields to this form use add_field funcion.
To print your form use form_input function. You could also create your own fields and put them in function and give function name as argument to form_input. If you do that, you have to create your update function to these fields and give function name as argument in register_update function. To prints you data you could use get_value(option name) in a while(have_values()) loop. To create edit form you should use My_Form_Edit class and you don't have to create again same fields like in My_Form, they'll be downloaded automaticaly.



# Functions


add_option()
 * option name
 * value
 * form id - optional
 * multiple form [true/false] default(false) - optional

get_option()
 * option name
 * form id - optional

save_option()
 * option name
 * value
 * form id - optional

unset_option()
 * option name
 * form id - optional

unset_options()
 * form id

get_form_field()
 * form id


# class - My_Form


Construct
 * id form (without '-')
 * title - optional
 * multiple default(false) - optional

add_field()
* name
* array (everything is optional)
  - label
  - type default(text)
    ~choices (for radio) (array value => text)
  - save [false/true] default(true)
  - description
  - input_text
  - class
  - placeholder
  - attr

add_text_editor()
* name
* array (everything is optional)
  - label
  - description
  - class
  - priority
  - attr

form_input()
* array (everything is optional)
  - before_form default(div)
  - after_form default(/div)
  - before_title default(h2)
  - after_title default(/h2)
* function callback
  - for example:
    function example()    
    echo '<input type=text value=hello world>';


register_update()
 * function callback - update for yourself inputs created in callback for form_input();

have_values()
 * returns true or false when you have datas for writing or you haven't
 * for example: while(have_values()) : get_option('title');

get_value()
 * option name
 * (working with have_values in while loop or without)

get_form_id()
 * return form id in while loop with have_values() or without it


# class - My_Form_Edit


Construct
 * id form (without '-')
 * title - optional

rest like in My_Form
