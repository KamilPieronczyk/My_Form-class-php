# My_Form-class-php
Add main files

===============================================
        Functions
===============================================

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

====================================================
    class - My_Form
====================================================

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

====================================================
 class - My_Form_Edit
====================================================

Construct
 * id form (without '-')
 * title - optional

rest like in My_Form
