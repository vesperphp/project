<?php

use Formality\Service\FormObject;

function custom_formality_field($object, $result = ''){

    $form = new FormObject($object);

    $form->label();
    $form->field('input');

    $form->template('
    <div class="field is-horizontal {classes}">
      <div class="field-label is-normal">
       {label}
      </div>
      <div class="field-body">
        <div class="field">
          <p class="control">
          {field}
          </p>This is a custom field callback 
        </div>
      </div>
    </div>');

    $build = $form->build();
 
    return $build;

}

/**
 * Add this to your model to use the
 * custom filter for Formality
 * $this->form[] = Formality::custom('custom_formality_field','custom textarea');
 */