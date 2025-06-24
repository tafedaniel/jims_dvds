<?php
require 'core/common.php';


require 'includes/document_head.php';

View::render('dvds/list', [
    "dvds" => DVD::all()
]);

require 'includes/document_tail.php';