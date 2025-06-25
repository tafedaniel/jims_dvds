<?php
require 'core/common.php';


require 'includes/document_head.php';

View::show('dvds/list', [
    "dvds" => DVD::all()
]);

require 'includes/document_tail.php';