<?php

namespace PocketRPG/partysystem/commands;

use pocketmine/plugin/PluginBase;
use pocketmine/command/Command;
use pocketmine/command/CommandSender;
use pocketmine/utils/TextFormat;
use pocketmine/Server;
use pocketmine/Player;

class partyinvite extends PluginBase {
  
  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    if($cmd->getName()) == "partyinvite") {
      if(!isset($args[0])) {
        $p->sendMessage(TF:: RED . "Please specify a player in the game");
      } else {
        $invited = $this->getServer()->getPlayer($args[0]);
        if($invited instanceof Player) {
          $p->sendMessage(TF:: AQUA . "You have invited" . $invited->getName() . "To the Party!");
        } else {
          $p->sendMessage(TF:: RED . "The player named" . $invited->getName() . "is not online!");
        }
      }
    }
  }
}
