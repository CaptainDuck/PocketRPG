<?php

namespace PocketRPG\partysystem\commands;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;
use pocketmine\utils\config;
use pocketmine\Command;
use pocketmine\command\CommandSender;

class partycreate extends PluginBase implements Listener {
  
  public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
    if($cmd->getName()) == "createparty") {
      if(!isset($args[0])) {
        $p->sendMessage(TF:: RED . "Please specify your party name.");
      } elseif($p->hasPermission("party.joined")) {
        $p->sendMessage(TF:: RED . "You are already in a party!");
      } else {
        $partyname = $this->$args[0];
        $p->sendMessage(TF:: AQUA . "You have started a party named $partyname!");
        $p->setPermission("party.joined");
      }
    }
  }
}
