<?php

use Claims\Framework\Core\CustomController as Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->templateEngine->render('homepage', [
            'page_title' => 'Project Claims',
            'project_name' => 'MyCustomClaims',
            'contact_email' => 'info@domain.xyz',
            'contact_number' => '0912.345.6789'
        ]);
    }

    public function greet($name)
    {
        return "Heya {$name}!";
    }
    
    public function hello()
    {
        return 'Hello World!';
    }
}
