<?php

/**
 * Settings form for 500px api module
 */
function photo500px_settings_form(){
  

  $form = array();
  $form['photo500px_cosumer_key'] = array(
      '#title' => t('500px Consumer Key'), 
      '#type' => 'textfield', 
      '#description' => t('<p>Enter the 500px cosumer key.Get the key from <a href="http://www.developers.500px.com/">500px</a></p>'), 
      '#default_value' => variable_get('photo500px_cosumer_key', '') 
  );
  
    $form['photo500px_username'] = array(
      '#title' => t('500px Username'), 
      '#type' => 'textfield', 
      '#description' => t('<p>Enter the username of 500px.</p>'), 
      '#default_value' => variable_get('photo500px_username', '') 
  );
  
  $form['photo500px_count'] = array(
      '#title' => t('How many Photo to display?'), 
      '#type' => 'textfield', 
      '#description' => t('<p>Enter the number of photo to display.</p>'), 
      '#default_value' => variable_get('photo500px_count', '') 
  );
  

  $form = system_settings_form($form);
  return $form;
}
