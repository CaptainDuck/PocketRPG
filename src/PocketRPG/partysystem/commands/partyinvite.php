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
        
      }  
    }
  }
}
