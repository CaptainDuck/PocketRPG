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
    $rpglevel = $this->config->get("RPG_LEVEL");
    if($p->getLevel() == $rpglevel) {
      if($p->hasPermission("class.mage")) {
        $this->getServer()->broadcastMessage("<$player->getName()> Mage > $event->getMessage()");
        $event->setCancelled();
      } elseif($p->hasPermission("class.warrior")) {
        $this->getServer()->broadcastMessage("<$player->getName()> Warrior > $event->getMessage()");
        $event->setCancelled();
      } elseif($p->hasPermission("class.tanker")) {
        $this->getServer()->broadcastMessage("<$player->getName()> Tanker > $event->getMessage()");
        $event->setCancelled();
      } elseif($p->hasPermission("class.assassin")) {
        $this->getServer()->broadcastMessage("<$player->getName()> Assassin > $event->getMessage()");
        $event->setCancelled();
      } else {
        $this->getServer()->broadcastMessage("<$player->getName()> $event->getMessage()");
        $event->setCancelled();
      }
    }
  }
}
