<?php
namespace Claims\Framework\Core;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use \Illuminate\Routing\Controller;
use Claims\Templating\TemplateEngine;

class CustomController extends Controller
{
    protected $templateEngine;
    
    public function __construct() {
        $this->templateEngine = new TemplateEngine([
            'templates_base_dir' => dirname(__FILE__) . '/../../../html'
        ]);
    }
}