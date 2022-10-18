<?php

use Formality\Service\FormObject;

function custom_formality_field($object, $result = ''){

    $form = new FormObject($object);

    $form->label();
    $form->field('input_text');

    $form->template('CUSTOM FIELD: <div class="form {classes}">{field}{label}</div>');

    $build = $form->build();
 
    return $build;

}

/**
 * Add this to your model to use the
 * custom filter for Formality
 * $this->form[] = Formality::custom('custom_formality_field','custom textarea');
 */