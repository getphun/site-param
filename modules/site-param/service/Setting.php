<?php
/**
 * setting service
 * @package site-param
 * @version 0.0.1
 * @upgrade true
 */

namespace SiteParam\Service;
use SiteParam\Model\SiteParam;

class Setting {

    private $_settings = [];
    
    public function __construct(){
        $dis = \Phun::$dispatcher;
        
        $cache = $dis->cache->get('setting');
        if(is_dev() || !$cache){
            $settings = SiteParam::get([]);
            
            $cache = [];
            if($settings){
                $cache = [];
                foreach($settings as $set){
                    switch($set->type){
                    case 2:
                        $set->value = new \DateTime($set->value);
                        break;
                    case 3:
                        $set->value = (int)$set->value;
                        break;
                    case 4:
                        $set->value = (bool)$set->value;
                        break;
                    }
                    $cache[$set->name] = $set->value;
                }
            }
            
            $dis->cache->save('setting', $cache, (60*60*24*7));
        }
        
        $this->_settings = $cache;
    }
    
    public function __get($name){
        return $this->_settings[$name] ?? null;
    }
}