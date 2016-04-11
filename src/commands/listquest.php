<?php

namespace Sandertv\Quests;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\listener;
use pocketmine\command\command;
use pocketmine\command\commandSender;
use pocketmine\command\commandExecutor;
use pocketmine\item\item;

class listquest extends PluginBase implements Listener {
  
  public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
    switch ($cmd->getName()) {
      case "startquest":
        switch(strtolower(array_shift($args))) {
          case "1":
            $p->sendMessage(TF::BOLD . DARK_GREEN . "Quests page 1:");
              if($p->hasPermission("quest") || $p->hasPermission("quest.1") || $p->hasPermission("quest.1.completed") || $p->getExpLevel() == 0 {
                  $p->sendMessage(TF::GREEN . "Helping the Farmer - lvl. 0");
              } elseif($p->getExpLevel()) == 0) {
                  $p->sendMessage(TF::YELLOW . "Helping the Farmer - lvl. 0");
              } else {
                  $p->sendMessage(TF::RED . "Helping the Farmer - lvl. 0");
              }

              if($p->hasPermission("quest") || $p->hasPermission("quest.2") || $p->hasPermission("quest.2.completed") || $p->getExpLevel() == 1 {
                  $p->sendMessage(TF::GREEN . "Not enough Trees - lvl. 1");
              } elseif($p->getExpLevel()) == 1) {
                  $p->sendMessage(TF::YELLOW . "Not enough Trees - lvl. 1");
              } else {
                  $p->sendMessage(TF::RED . "Not enough Trees - lvl. 1");
              }
          
              if($p->hasPermission("quest") || $p->hasPermission("quest.3") || $p->hasPermission("quest.3.completed") || $p->getExpLevel() == 2 {
                  $p->sendMessage(TF::GREEN . "Searching the Stick - lvl. 2");
              } elseif($p->getExpLevel()) == 2) {
                  $p->sendMessage(TF::YELLOW . "Searching the Stick - lvl. 2");
              } else {
                  $p->sendMessage(TF::RED . "Searching the Stick - lvl. 2");
              }
          
              if($p->hasPermission("quest") || $p->hasPermission("quest.4") || $p->hasPermission("quest.4.completed") || $p->getExpLevel() == 3 {
                  $p->sendMessage(TF::GREEN . "Filling the Well - lvl. 3");
              } elseif($p->getExpLevel()) == 3) {
                  $p->sendMessage(TF::YELLOW . "Filling the Well - lvl. 3");
              } else {
                  $p->sendMessage(TF::RED . "Filling the Well - lvl. 3");
              }

              if($p->hasPermission("quest") || $p->hasPermission("quest.5") || $p->hasPermission("quest.5.completed") || $p->getExpLevel() == 4 {
                  $p->sendMessage(TF::GREEN . "The ancient Gem - lvl. 4");
              } elseif($p->getExpLevel()) == 4) {
                  $p->sendMessage(TF::YELLOW . "The ancient Gem - lvl. 4");
              } else {
                  $p->sendMessage(TF::RED . "The ancient Gem - lvl. 4");
              }
            break;
          
          case "2":
            $p->sendMessage(TF::BOLD . DARK_GREEN . "Quests page 2:");
              if($p->hasPermission("quest") || $p->hasPermission("quest.6") || $p->hasPermission("quest.6.completed") || $p->getExpLevel() == 5 {
                  $p->sendMessage(TF::GREEN . "Freezingly cold - lvl. 5");
              } elseif($p->getExpLevel()) == 5) {
                  $p->sendMessage(TF::YELLOW . "Freezingly cold - lvl. 5");
              } else {
                  $p->sendMessage(TF::RED . "Freezingly cold - lvl. 5");
              }
            break;
            
          default:
            $p->sendMessage(TF::BOLD . DARK_GREEN . "Quests page 1:");
              if($p->hasPermission("quest") || $p->hasPermission("quest.1") || $p->hasPermission("quest.1.completed") || $p->getExpLevel() == 0 {
                  $p->sendMessage(TF::GREEN . "Helping the Farmer - lvl. 0");
              } elseif($p->getExpLevel()) == 0) {
                  $p->sendMessage(TF::YELLOW . "Helping the Farmer - lvl. 0");
              } else {
                  $p->sendMessage(TF::RED . "Helping the Farmer - lvl. 0");
              }

              if($p->hasPermission("quest") || $p->hasPermission("quest.2") || $p->hasPermission("quest.2.completed") || $p->getExpLevel() == 1 {
                  $p->sendMessage(TF::GREEN . "Not enough Trees - lvl. 1");
              } elseif($p->getExpLevel()) == 1) {
                  $p->sendMessage(TF::YELLOW . "Not enough Trees - lvl. 1");
              } else {
                  $p->sendMessage(TF::RED . "Not enough Trees - lvl. 1");
              }
          
              if($p->hasPermission("quest") || $p->hasPermission("quest.3") || $p->hasPermission("quest.3.completed") || $p->getExpLevel() == 2 {
                  $p->sendMessage(TF::GREEN . "Searching the Stick - lvl. 2");
              } elseif($p->getExpLevel()) == 2) {
                  $p->sendMessage(TF::YELLOW . "Searching the Stick - lvl. 2");
              } else {
                  $p->sendMessage(TF::RED . "Searching the Stick - lvl. 2");
              }
          
              if($p->hasPermission("quest") || $p->hasPermission("quest.4") || $p->hasPermission("quest.4.completed") || $p->getExpLevel() == 3 {
                  $p->sendMessage(TF::GREEN . "Filling the Well - lvl. 3");
              } elseif($p->getExpLevel()) == 3) {
                  $p->sendMessage(TF::YELLOW . "Filling the Well - lvl. 3");
              } else {
                  $p->sendMessage(TF::RED . "Filling the Well - lvl. 3");
              }

              if($p->hasPermission("quest") || $p->hasPermission("quest.5") || $p->hasPermission("quest.5.completed") || $p->getExpLevel() == 4 {
                  $p->sendMessage(TF::GREEN . "The ancient Gem - lvl. 4");
              } elseif($p->getExpLevel()) == 4) {
                  $p->sendMessage(TF::YELLOW . "The ancient Gem - lvl. 4");
              } else {
                  $p->sendMessage(TF::RED . "The ancient Gem - lvl. 4");
              }
        }  
      return true;
    default:
      return false;
    }
}
          //adding more quests soon...
