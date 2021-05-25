<?php

echo '<div class="form-login">';

$data=array(
     'class' => 'form-horizental',
     'method' => 'post'
);
echo form_open('',$data);
echo '<div class="form-group">';
$data=array(
      'class' => 'form-control',
      'type' => 'text',
      'placeholder' => 'uername'
);

echo form-input($data);
echo '<div>';

echo '<div class="form-group">';
$data=array(
      'class' => 'form-control',
      'type' => 'password',
      'placeholder' => 'password'
);

echo form-input($data);
echo '<div>';

echo '<div class="form-group">';
$data=array(
      'class' => 'form-control',
      'value' => 'submit',
      'placeholder' => 'login'
);

echo form-input($data);
echo '<div>';


echo form_close();
echo '</div>';
?>