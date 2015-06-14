<?php

defined('_JEXEC') or die;
require_once __DIR__ . '/helper/helper.php';
$show = ModSmartWelcomeHelper::show($params);


if($show){
	require JModuleHelper::getLayoutPath('mod_smart_welcome',$params->get('layout','default'));
}



?>