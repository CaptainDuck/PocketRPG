<?php

namespace PocketRPG/classchat;

use pocketmine/plugin/PluginBase;
use pocketmine/utils/TextFormat as TF;
use pocketmine/event/Listener;
use pocketmine/event/PlayerChatEvent;
use pocketmine/Server;
use pocketmine/Player;

class classchat extends PluginBase implements Listener {
  
  public function onChat(PlayerChatEvent $event) {
    $p = $event->getPlayer();
    if($p->hasPermission("class.mage")) {
      $this->getServer()->broadcastMessage("<$player->getName()> Mage > $event->getMessage()");
      $event->setCancelled();
    } elseif($p->hasPermission("class.warrior"))
  }
}
