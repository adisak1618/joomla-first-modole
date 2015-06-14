<?php

defined('_JEXEC') or die;


class ModSmartWelcomeHelper{
	public static function show($params){
		$app = JFactory::getApplication();
		$secret = $app->getCfg('secret');
		$cookie = $app->input->cookie->get('JSW_'.$secret);
		
		if(!$cookie){
			$app->input->cookie->get('JSW_'.$secret);
			return true;
		}elseif ($cookie < $params->get('visit_count','5')) {
			 $app->input->cookie->set('JSW_'.$secret,$cookie+1);
			 return true;
		}else{
			return false;
		}
	}
}

?>