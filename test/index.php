<?php

require_once "vendor/autoload.php";

use Smarty\Smarty;

$template = new Smarty();


$template->display( template: "templates/layout.tpl");


$page = $_GET['page'] ?? null;
switch($page){
    case 'home':
        $template->display( template: "templates/form.tpl");
        break;
    case 'about':
        $template->display( template: "templates/result.tpl");
        break;
    case 'test':

        break;
    default:
        $template->display( template: "templates/home.tpl");
}