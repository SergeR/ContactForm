<h1>Kontaktformular</h1>
<?php
echo $this->Html->css('ContactForm.Contactform');

echo $this->Form->create('ContactForm.Contactform');

echo $this->Form->input('ContactForm.Name', array('label' => __d('contact_form', 'name')));
echo $this->Form->input('ContactForm.Mail', array('label' => __d('contact_form', 'email')));
echo $this->Form->input('ContactForm.Message', array('type' => 'textarea', 'label' => __d('contact_form', 'message')));
echo $this->Form->label('ContactForm.Spamprotection', __d('contact_form', 'spam protection').' - '.$calculation);
echo $this->Form->input('ContactForm.Spamprotection', array('label' => false, 'autocomplete' => 'off'));

echo $this->Form->submit(__d('contact_form', 'submit'));

echo $this->Form->end();