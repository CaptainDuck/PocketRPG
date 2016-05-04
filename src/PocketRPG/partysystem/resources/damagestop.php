<?php

namespace PocketRPG\partysystem\resources;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\EntityDamageEvent;
use pocketmine\event\EntityDamageByEntityEvent;
use pocketmine\utils\Config;
use PocketRPG\partysystem\commands\partycreate;
use pocketmine\utils\Config;
use PocketRPG\main;

class damageandtag extends partycreate implements Listener {
  
  public function onFight(EntityDamageEvent $event) {
    if($event instanceof EntityDamageByEntityEvent && $event->getDamager() instanceof Player) {
      $cfglevel = $this->config->get("RPG_LEVEL");
      $hit = $event->getPlayer();
      $damager = $event->getDamager();
      if($hit->getLevel() == $cfglevel) {
        if($hit->getNameTag() == $damager->getNameTag()) {
          $event->setCancelled();
        }
      }
  }
}
