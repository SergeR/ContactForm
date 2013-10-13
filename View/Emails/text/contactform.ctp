<?php
echo sprintf(
"%s: %s
%s: %s

%s:
%s
----------------------------
%s %s",
    __d('contact_form', 'name'), Sanitize::clean($data['Name']),
    __d('contact_form', 'email'), Sanitize::clean($data['Mail']),

    __d('contact_form', 'message'),
    Sanitize::stripAll($data['Message']),

    __d('contact_form', 'sent from'), Router::url('/', true)
);