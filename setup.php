<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 20/01/2017
 * Time: 11:13 AM
 */
require 'vendor/autoload.php';

define('__SITE_ROOT', getcwd()); // 最后没有斜线

class Smarty_GuestBook extends Smarty {
    function __construct()
    {
        parent::__construct();
        $this->setTemplateDir(__SITE_ROOT.'/templates/');
        $this->setCompileDir(__SITE_ROOT.'/templates_c/');
        $this->setConfigDir(__SITE_ROOT.'/configs/');

        $this->setCacheDir(__SITE_ROOT.'/cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Guest Book');
    }
}