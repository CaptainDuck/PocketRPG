<?php

namespace Sandertv\Quests

use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class seequest extends PluginBase {
  
  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    switch($cmd->getName()) {
      case "seequest":
        switch(strtolower(array_shift($args))) {
          case "1":
            if($p->hasPermission("quest.1.completed")) {
              $p->sendMessage(TF:: GRAY . "Quest 1 - Helping the Farmer "TF:: GREEN . "- Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 5 pieces of wheat.");
              $p->sendMessage(TF:: GREEN . "lvl. 0");
            } elseif($p->hasPermission("quest.1.cancomplete") || $p->getExpLevel() > 0) {
              $p->sendMessage(TF:: GRAY . "Quest 1 - Helping the Farmer "TF:: YELLOW . "- Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 5 pieces of wheat.");
              $p->sendMessage(TF:: YELLOW . "lvl. 0");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest yet.");
            }
        
        }
    }

  }
}
