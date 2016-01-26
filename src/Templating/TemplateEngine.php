<?php
namespace Claims\Templating;

use \Mustache_Engine;
use \Mustache_Loader_FilesystemLoader;

class TemplateEngine extends Mustache_Engine
{
    public function __construct($config = [])
    {
        $templatesLocation = dirname(__FILE__) . '/../../html';
        if (isset($config['templates_base_dir']))
        {
            $templatesLocation = $config['templates_base_dir'];
        }
        parent::__construct([
            'template_class_prefix' => '__Lazarus__',
            'loader' => new Mustache_Loader_FilesystemLoader($templatesLocation, [
                                'extension' => 'html'
                            ])
        ]);
    }
}