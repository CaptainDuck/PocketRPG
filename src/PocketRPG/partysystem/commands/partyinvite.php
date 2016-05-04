<?php

namespace PocketRPG/partysystem/commands;

use pocketmine/plugin/PluginBase;
use pocketmine/command/Command;
use pocketmine/command/CommandSender;
use pocketmine/utils/TextFormat;
use pocketmine/Server;
use pocketmine/Player;
use PocketRPG\main;

class partyinvite extends PluginBase {
  
  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    if($cmd->getName()) == "partyinvite") {
      if(!isset($args[0] && $args[1] || $args[0] || $args[1])) {
        $p->sendMessage(TF:: RED . "usage: /partyinvite <playername> <partyname>.");
      } else {
        $invited = $this->getServer()->getPlayer($args[0]);
        $partyname = $this->$args[1];
        if($p->hasPermission("party." . $args[1] . "")) {
          if($invited instanceof Player) {
            $p->sendMessage(TF:: AQUA . "You have invited" . $invited->getName() . "To the Party!");
            $p->setPermission("party." . $args[0] . "");
          } else {
            $p->sendMessage(TF:: RED . "The player named" . $invited->getName() . "is not online!");
          }
        }
      }
    }
  }
}
