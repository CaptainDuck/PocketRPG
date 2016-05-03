<?php

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\PlayerQuitEvent;

class partyleaveonquit extends PluginBase implements Listener {
  
  public function onQuit(PlayerQuitEvent $event) {
    $p = $event->getPlayer();
    if($p->hasPermission("party.joined") {
      $p->unsetPermission("party.joined");
    }
  }
}
