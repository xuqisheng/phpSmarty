<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 20/01/2017
 * Time: 10:59 AM
 */

require 'setup.php';

$smarty = new Smarty_GuestBook();
$smarty->assign("name", "ned");
$smarty->display('index.tpl');


