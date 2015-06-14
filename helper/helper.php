<?php

defined('_JEXEC') or die;


class ModSmartWelcomeHelper{
	public static function show($params){
		$app = JFactory::getAppplication();
		$secret = $app->getCfg('secret');
		$cookie = $app->input->cookie->get('JSW_'.$secret);
		echo $secret;
		return true;
	}
}

?>