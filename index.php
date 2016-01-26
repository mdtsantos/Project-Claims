<?php
include_once('vendor/autoload.php');
use Claims\Templating\TemplateEngine;

$engine = new TemplateEngine();

$params = [
	'page_title' => 'Project Claims',
    'project_name' => 'MyCustomClaims',
    'contact_email' => 'info@domain.xyz',
    'contact_number' => '0912.345.6789'
];

$output = $engine->render('homepage', $params);

echo $output;