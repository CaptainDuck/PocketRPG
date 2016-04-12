<?php

namespace Sandertv\Quests

use pocketmine\utils\TextFormat as TF;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class startquest extends PluginBase {
  
  public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
    switch($cmd->getName()) {
      case "startquest":
        switch(strtolower(array_shift($args))) {
          case "1":
            if($p->getExpLevel()) == 0) {
              $p->sendMessage(TF::GRAY . "Quest started: Helping the Farmer");
              $p->sendMessage(TF::AQUA . "Collect 5 pieces of wheat.");
              $p->givePermission("quest.1.complete");
            } else {
              $p->sendMessage(TF::RED . "You can not start this quest yet.");
            }
            break;
          
          case "2":
            if($p->getExpLevel()) == 1) {
              $p->sendMessage(TF::GRAY . "Quest started: Not enough Trees");
              $p sendMessage(TF::AQUA . "Collect 16 Oak Saplings")
              $p->givePermission("quest.2.complete");
            } else {
              $p->sendMessage(TF:: RED . "You can not start this quest yet.");
            }
            break;
            
          case "3":
            if($p->getExpLevel()) == 2) {
              $p->sendMessage(TF::GRAY > "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->givePermission("quest.3.complete");
            } else {
              $p->sendMessage(TF:: RED . "You can not start this quest yet.");
            }
            break;

          case "4":
            if($p->getExpLevel()) == 3) {
              $p->sendMessage(TF::GRAY > "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->givePermission("quest.4.complete");
            } else {
              $p->sendMessage(TF:: RED . "You can not start this quest yet.");
            }
            break;
            
          case "5":
            if($p->getExpLevel()) == 4) {
              $p->sendMessage(TF::GRAY > "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->givePermission("quest.5.complete");
            } else {
              $p->sendMessage(TF:: RED . "You can not start this quest yet.");
            }
            break;
            
          case "6":
            if($p->getExpLevel()) == 5) {
              $p->sendMessage(TF::GRAY > "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->givePermission("quest.6.complete");
            } else {
              $p->sendMessage(TF:: RED . "You can not start this quest yet.");
            }
            break;
            
          case "7":
            if($p->getExpLevel()) == 6) {
              $p->sendMessage(TF::GRAY > "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->givePermission("quest.7.complete");
            } else {
              $p->sendMessage(TF:: RED . "You can not start this quest yet.");
            }
            break;
            
          case "8":
            if($p->getExpLevel()) == 7) {
              $p->sendMessage(TF::GRAY > "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->givePermission("quest.8.complete");
            } else {
              $p->sendMessage(TF:: RED . "You can not start this quest yet.");
            }
            break;
            
          case "9":
            if($p->getExpLevel()) == 8) {
              $p->sendMessage(TF::GRAY > "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->givePermission("quest.9.complete");
            } else {
              $p->sendMessage(TF:: RED . "You can not start this quest yet.");
            }
            break;
            
          case "10":
            if($p->getExpLevel()) == 9) {
              $p->sendMessage(TF::GRAY > "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->givePermission("quest.10.complete");
            } else {
              $p->sendMessage(TF:: RED . "You can not start this quest yet.");
            }
            break;
          
          default:
            return false;
        }
      return true;
    default:
      return false;
    }
  }
}

