<?php

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\event\BlockBreakEvent;
use pocketmine\event\BlockPlaceEvent;
use pocketmine\utils\TextFormat as TF;
use pocketmine\utils\Config;

class preventing extends PluginBase implements Listener {
  
  public function onBreak(BlockBreakEvent $event) {
    $cfglevel = $this->config->get("RPG_LEVEL");
    $p = $event->getPlayer();
    if($p instanceof Player) {
      if($p->getLevel() == $cfglevel) {
        $event->setCancelled();
        $p->sendMessage(TF:: RED . "You are not allowed to do that here.");
      }
    }
  }
  
  public function onPlace(BlockPlaceEvent $event2) {
    $p = $event2->getPlayer();
    if($p instanceof Player) {
      if($p->getLevel() == $cfglevel) {
        $event2->setCancelled();
        $p->sendMessage(TF:: RED . "You are not allowed to do that here.")
      }
    }
  }
}
