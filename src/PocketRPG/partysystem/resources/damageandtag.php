<?php

namespace PocketRPG\partysystem\resources;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\EntityDamageEvent;
use pocketmine\event\EntityDamageByEntityEvent;
use pocketmine\utils\Config;
use PocketRPG\partysystem\commands\partycreate;

class damageandtag extends partycreate implements Listener {
  
  public function onFight(EntityDamageEvent $event) {
    
  }
}
