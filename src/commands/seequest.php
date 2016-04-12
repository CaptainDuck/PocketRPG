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
            } elseif($p->hasPermission("quest.1.cancomplete") || $p->getExpLevel() = 0) {
              $p->sendMessage(TF:: GRAY . "Quest 1 - Helping the Farmer "TF:: RED . "- Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 5 pieces of wheat.");
              $p->sendMessage(TF:: YELLOW . "lvl. 0");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
          case "2":
            if($p->hasPermission("quest.2.completed")) {
              $p->sendMessage(TF:: GRAY . "Quest 2 - Not enough Trees "TF:: GREEN . "- Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 16 Saplings.");
              $p->sendMessage(TF:: GREEN . "lvl. 1");
            } elseif($p->hasPermission("quest.1.cancomplete") || $p->getExpLevel() = 1) {
              $p->sendMessage(TF:: GRAY . "Quest 2 - Not enough Trees "TF:: RED . "- Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 16 Saplings.");
              $p->sendMessage(TF:: YELLOW . "lvl. 1");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
          case "3":
            if($p->hasPermission("quest.3.completed")) {
              $p->sendMessage(TF:: GRAY . "Quest 3 - Searching the Stick "TF:: GREEN . "- Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 1 stick.");
              $p->sendMessage(TF:: GREEN . "lvl. 2");
            } elseif($p->hasPermission("quest.3.cancomplete") || $p->getExpLevel() = 2) {
              $p->sendMessage(TF:: GRAY . "Quest 3 - Searching the Stick "TF:: RED . "- Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 1 stick.");
              $p->sendMessage(TF:: YELLOW . "lvl. 2");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;

          case "4":
            if($p->hasPermission("quest.4.completed")) {
              $p->sendMessage(TF:: GRAY . "Quest 4 - Filling the Well "TF:: GREEN . "- Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 1 water bucket.");
              $p->sendMessage(TF:: GREEN . "lvl. 3");
            } elseif($p->hasPermission("quest.1.cancomplete") || $p->getExpLevel() = 3) {
              $p->sendMessage(TF:: GRAY . "Quest 4 - Filling the Well "TF:: RED . "- Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 1 water bucket.");
              $p->sendMessage(TF:: YELLOW . "lvl. 3");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
        }
    }

  }
}
