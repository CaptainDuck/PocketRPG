<?php

namespace Sandertv\PocketRPG;

use pocketmine\utils\TextFormat as TF;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;

class startquest extends PluginBase {
  
  public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
    switch($cmd->getName()) {
      case "startquest":
        switch(strtolower(array_shift($args))) {
          case "1":
            if($p->getExpLevel() > -1) {
              $p->sendMessage(TF::GRAY . "Quest started: Helping the Farmer");
              $p->sendMessage(TF::AQUA . "Collect 5 pieces of wheat.");
              $p->givePermission("quest.1.cancomplete");
            } elseif($p->hasPermission("quest.1.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            break;
          
          case "2":
            if($p->getExpLevel() > 0) {
              $p->sendMessage(TF::GRAY . "Quest started: Not enough Trees");
              $p->sendMessage(TF::AQUA . "Collect 16 Oak Saplings");
              $p->givePermission("quest.2.cancomplete");
            } elseif($p->hasPermission("quest.2.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            break;
            
          case "3":
            if($p->getExpLevel() > 1) {
              $p->sendMessage(TF::GRAY . "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->givePermission("quest.3.cancomplete");
            } elseif($p->hasPermission("quest.3.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            break;

          case "4":
            if($p->getExpLevel() > 2) {
              $p->sendMessage(TF::GRAY . "Quest started: Shearing the Sheap");
              $p->sendMessage(TF::AQUA . "Collect 1 shears");
              $p->givePermission("quest.4.cancomplete");
            } elseif($p->hasPermission("quest.4.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            break;
            
          case "5":
            if($p->getExpLevel() > 3) {
              $p->sendMessage(TF::GRAY . "Quest started: The lost Gem");
              $p->sendMessage(TF::AQUA . "Collect 1 Emerald");
              $p->givePermission("quest.5.cancomplete");
            } elseif($p->hasPermission("quest.5.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            break;
            
          case "6":
            if($p->getExpLevel() > 4) {
              $p->sendMessage(TF::GRAY . "Quest started: Freezingly Cold");
              $p->sendMessage(TF::AQUA . "Collect 32 ice blocks");
              $p->givePermission("quest.6.cancomplete");
            } elseif($p->hasPermission("quest.6.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            break;
            
          case "7":
            if($p->getExpLevel() > 5) {
              $p->sendMessage(TF::GRAY . "Quest started: Gravedigger");
              $p->sendMessage(TF::AQUA . "Collect 5 bones and 5 rotten flesh");
              $p->givePermission("quest.7.cancomplete");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            } elseif($p->hasPermission("quest.7.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            }
            break;
            
          case "8":
            if($p->getExpLevel() > 6) {
              $p->sendMessage(TF::GRAY . "Quest started: Fish Galore");
              $p->sendMessage(TF::AQUA . "Collect 16 fishes");
              $p->givePermission("quest.8.cancomplete");
            } elseif($p->hasPermission("quest.8.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            break;
            
          case "9":
            if($p->getExpLevel() > 7) {
              $p->sendMessage(TF::GRAY . "Quest started: Burning Souls");
              $p->sendMessage(TF::AQUA . "Collect 5 blaze powder and 5 blaze rods");
              $p->givePermission("quest.9.cancomplete");
            } elseif($p->hasPermission("quest.9.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            break;
            
          case "10":
            if($p->getExpLevel() > 8) {
              $p->sendMessage(TF::GRAY . "Quest started: The Experiment");
              $p->sendMessage(TF::AQUA . "Collect 10 glowstone dust and 10 redstone");
              $p->givePermission("quest.10.cancomplete");
            } elseif($p->hasPermission("quest.10.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            break;
          
          default:
            $p->sendMessage(TF:: RED . "Please specify the number of a quest.");
        }
      return true;
    default:
      return false;
    }
  }
}


