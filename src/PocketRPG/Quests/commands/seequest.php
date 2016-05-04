<?php

namespace PocketRPG\Quests\commands;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use PocketRPG\main;

class seequest extends PluginBase {
  
  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    switch($cmd->getName()) {
      case "seequest":
        switch(strtolower(array_shift($args))) {
          case "1":
            if($p->hasPermission("quest.1.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 1 - Helping the Farmer - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 5 pieces of wheat.");
              $p->sendMessage(TF:: GREEN . "lvl. 0");
            } elseif($p->hasPermission("quest.1.cancomplete") && $p->getExpLevel() > -1) {
              $p->sendMessage(TF:: YELLOW . "Quest 1 - Helping the Farmer - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 5 pieces of wheat.");
              $p->sendMessage(TF:: YELLOW . "lvl. 0");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
          case "2":
            if($p->hasPermission("quest.2.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 2 - Not enough Trees - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 16 Saplings.");
              $p->sendMessage(TF:: GREEN . "lvl. 1");
            } elseif($p->hasPermission("quest.1.cancomplete") && $p->getExpLevel() > 0) {
              $p->sendMessage(TF:: YELLOW . "Quest 2 - Not enough Trees - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 16 Saplings.");
              $p->sendMessage(TF:: YELLOW . "lvl. 1");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
          case "3":
            if($p->hasPermission("quest.3.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 3 - Searching the Stick - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 1 stick.");
              $p->sendMessage(TF:: GREEN . "lvl. 2");
            } elseif($p->hasPermission("quest.3.cancomplete") && $p->getExpLevel() > 1) {
              $p->sendMessage(TF:: YELLOW . "Quest 3 - Searching the Stick - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 1 stick.");
              $p->sendMessage(TF:: YELLOW . "lvl. 2");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;

          case "4":
            if($p->hasPermission("quest.4.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 4 - Shearing the Sheep - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 1 shears.");
              $p->sendMessage(TF:: GREEN . "lvl. 3");
            } elseif($p->hasPermission("quest.1.cancomplete") && $p->getExpLevel() > 2) {
              $p->sendMessage(TF:: YELLOW . "Quest 4 - Shearing the Sheep - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 1 shears.");
              $p->sendMessage(TF:: YELLOW . "lvl. 3");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
          case "5":
            if($p->hasPermission("quest.5.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 5 - The lost Gem - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 1 Emerald.");
              $p->sendMessage(TF:: GREEN . "lvl. 4");
            } elseif($p->hasPermission("quest.5.cancomplete") && $p->getExpLevel() > 3) {
              $p->sendMessage(TF:: YELLOW . "Quest 5 - The lost Gem - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 1 Emerald.");
              $p->sendMessage(TF:: YELLOW . "lvl. 4");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
          case "6":
            if($p->hasPermission("quest.6.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 6 - Freezingly Cold - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 32 Ice blocks.");
              $p->sendMessage(TF:: GREEN . "lvl. 5");
            } elseif($p->hasPermission("quest.6.cancomplete") && $p->getExpLevel() > 4) {
              $p->sendMessage(TF:: YELLOW . "Quest 6 - Freezingly Cold - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 32 Ice bocks.");
              $p->sendMessage(TF:: YELLOW . "lvl. 5");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
          case "7":
            if($p->hasPermission("quest.7.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 7 - Gravedigger - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 5 rotten flesh and 5 bones.");
              $p->sendMessage(TF:: GREEN . "lvl. 6");
            } elseif($p->hasPermission("quest.7.cancomplete") && $p->getExpLevel() > 5) {
              $p->sendMessage(TF:: YELLOW . "Quest 7 - Gravedigger - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 5 rotten flesh and 5 bones.");
              $p->sendMessage(TF:: YELLOW . "lvl. 6");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
          case "8":
            if($p->hasPermission("quest.8.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 8 - Fish Galore - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 16 raw fish.");
              $p->sendMessage(TF:: GREEN . "lvl. 7");
            } elseif($p->hasPermission("quest.8.cancomplete") && $p->getExpLevel() > 6) {
              $p->sendMessage(TF:: YELLOW . "Quest 8 - Fish Galore - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 16 raw fish.");
              $p->sendMessage(TF:: YELLOW . "lvl. 7");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
          case "9":
            if($p->hasPermission("quest.9.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 9 - Burning Souls - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 5 blaze powder and 5 blaze rods.");
              $p->sendMessage(TF:: GREEN . "lvl. 8");
            } elseif($p->hasPermission("quest.8.cancomplete") && $p->getExpLevel() > 7) {
              $p->sendMessage(TF:: YELLOW . "Quest 9 - Burning Souls - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 5 blaze powder and 5 blaze rods.");
              $p->sendMessage(TF:: YELLOW . "lvl. 8");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
          case "10":
            if($p->hasPermission("quest.10.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 10 - The Experiment - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect 10 glowstone and 10 redstone.");
              $p->sendMessage(TF:: GREEN . "lvl. 9");
            } elseif($p->hasPermission("quest.8.cancomplete") && $p->getExpLevel() > 8) {
              $p->sendMessage(TF:: YELLOW . "Quest 10 - The Experiment - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 10 glowstone and 10 redstone.");
              $p->sendMessage(TF:: YELLOW . "lvl. 9");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
            break;
            
            return true;
          default:
            $p->sendMessage(TF:: RED . "Please type in a quest number.");
        }
      return true;
    default:
      return false;
    }
  }
}
