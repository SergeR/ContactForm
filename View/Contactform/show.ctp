<h1>Kontaktformular</h1>
<?php
echo $this->Html->css('ContactForm.Contactform');

echo $this->Form->create('ContactForm.Contactform');

echo $this->Form->input('ContactForm.Name', array('label' => __d('contactform', 'name')));
echo $this->Form->input('ContactForm.Mail', array('label' => __d('contactform', 'email')));
echo $this->Form->input('ContactForm.Message', array('type' => 'textarea', 'label' => __d('contactform', 'message')));
echo $this->Form->label('ContactForm.Spamprotection', __d('contactform', 'spam protection').' - '.$calculation);
echo $this->Form->input('ContactForm.Spamprotection', array('label' => false, 'autocomplete' => 'off'));

echo $this->Form->submit('Absenden', array('label' => __d('contactform', 'submit')));

echo $this->Form->end();