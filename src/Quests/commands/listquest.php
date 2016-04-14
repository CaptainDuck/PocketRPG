<?php

namespace Quests\commands;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\command;
use pocketmine\command\commandSender;

class listquest extends PluginBase implements Listener {
  
  public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
    switch ($cmd->getName()) {
      case "startquest":
        switch(strtolower(array_shift($args))) {
          case "1":     // QUEST PAGE 1
            $p->sendMessage(TF::BOLD . DARK_GREEN . "Quests page 1:");
              if($p->hasPermission("quest.1.completed") || $p->getExpLevel() > -1) {
                  $p->sendMessage(TF::GREEN . "1 - Helping the Farmer - lvl. 0");
              } elseif($p->getExpLevel()) > -1) {
                  $p->sendMessage(TF::YELLOW . "1 - Helping the Farmer - lvl. 0");
              } else {
                  $p->sendMessage(TF::RED . "1 - Helping the Farmer - lvl. 0");
              }

              if($p->hasPermission("quest.2.completed") || $p->getExpLevel() > 0) {
                  $p->sendMessage(TF::GREEN . "2 - Not enough Trees - lvl. 1");
              } elseif($p->getExpLevel()) > 0) {
                  $p->sendMessage(TF::YELLOW . "2 - Not enough Trees - lvl. 1");
              } else {
                  $p->sendMessage(TF::RED . "2 - Not enough Trees - lvl. 1");
              }
          
              if($p->hasPermission("quest.3.completed") || $p->getExpLevel() > 1) {
                  $p->sendMessage(TF::GREEN . "3 - Searching the Stick - lvl. 2");
              } elseif($p->getExpLevel()) > 1) {
                  $p->sendMessage(TF::YELLOW . "3 - Searching the Stick - lvl. 2");
              } else {
                  $p->sendMessage(TF::RED . "3 - Searching the Stick - lvl. 2");
              }
          
              if($p->hasPermission("quest.4.completed") || $p->getExpLevel() > 2) {
                  $p->sendMessage(TF::GREEN . "4 - Shearing the Sheep - lvl. 3");
              } elseif($p->getExpLevel()) > 2) {
                  $p->sendMessage(TF::YELLOW . "4 - Shearing the Sheep - lvl. 3");
              } else {
                  $p->sendMessage(TF::RED . "4 - Shearing the Sheep - lvl. 3");
              }

              if($p->hasPermission("quest.5.completed") || $p->getExpLevel() > 3) {
                  $p->sendMessage(TF::GREEN . "5 - The lost Gem - lvl. 4");
              } elseif($p->getExpLevel()) > 3) {
                  $p->sendMessage(TF::YELLOW . "5 - The lost Gem - lvl. 4");
              } else {
                  $p->sendMessage(TF::RED . "5 - The lost Gem - lvl. 4");
              }
            break;
                              //QUEST PAGE 2
          case "2":
            $p->sendMessage(TF::BOLD . DARK_GREEN . "Quests page 2:");
              if($p->hasPermission("quest.6.completed") || $p->getExpLevel() > 4) {
                  $p->sendMessage(TF::GREEN . "6 - Freezingly cold - lvl. 5");
              } elseif($p->getExpLevel()) > 4) {
                  $p->sendMessage(TF::YELLOW . "6 - Freezingly cold - lvl. 5");
              } else {
                  $p->sendMessage(TF::RED . "6 - Freezingly cold - lvl. 5");
              }
              break;
              
            $p->sendMessage(TF::BOLD . DARK_GREEN . "Quests page 2:");
              if($p->hasPermission("quest.7.completed") || $p->getExpLevel() < 5) {
                  $p->sendMessage(TF::GREEN . "7 - Gravedigger - lvl. 6");
              } elseif($p->getExpLevel()) > 5) {
                  $p->sendMessage(TF::YELLOW . "7 - Gravedigger - lvl. 6");
              } else {
                  $p->sendMessage(TF::RED . "7 - Gravedigger - lvl. 6");
              }
            break;
            
            $p->sendMessage(TF::BOLD . DARK_GREEN . "Quests page 2:");
              if($p->hasPermission("quest.8.completed") || $p->getExpLevel() < 6) {
                  $p->sendMessage(TF::GREEN . "8 - Fish Galore - lvl. 7");
              } elseif($p->getExpLevel()) > 6) {
                  $p->sendMessage(TF::YELLOW . "8 - Fish Galore - lvl. 7");
              } else {
                  $p->sendMessage(TF::RED . "8 - Fish Galore - lvl. 7");
              }
              break;
      
            $p->sendMessage(TF::BOLD . DARK_GREEN . "Quests page 2:");
              if($p->hasPermission("quest.9.completed") || $p->getExpLevel() < 7) {
                  $p->sendMessage(TF::GREEN . "9 - Burning Souls - lvl. 8");
              } elseif($p->getExpLevel()) > 7) {
                  $p->sendMessage(TF::YELLOW . "9 - Burning Souls - lvl. 8");
              } else {
                  $p->sendMessage(TF::RED . "9 - Burning Souls - lvl. 8");
              }
              break;

            $p->sendMessage(TF::BOLD . DARK_GREEN . "Quests page 2:");
              if($p->hasPermission("quest.10.completed") || $p->getExpLevel() < 8) {
                  $p->sendMessage(TF::GREEN . "10 - The Experiment - lvl. 9");
              } elseif($p->getExpLevel()) > 8) {
                  $p->sendMessage(TF::YELLOW . "10 - The Experiment - lvl. 9");
              } else {
                  $p->sendMessage(TF::RED . "10 - The Experiment - lvl. 9");
              }
              break;
              
                            //QUEST PAGE 1
          default:
            $p->sendMessage(TF::BOLD . DARK_GREEN . "Quests page 1:");
              if($p->hasPermission("quest.1.completed") || $p->getExpLevel() < -1) {
                  $p->sendMessage(TF::GREEN . "1 - Helping the Farmer - lvl. 0");
              } elseif($p->getExpLevel()) > -1) {
                  $p->sendMessage(TF::YELLOW . "1 - Helping the Farmer - lvl. 0");
              } else {
                  $p->sendMessage(TF::RED . "1 - Helping the Farmer - lvl. 0");
              }

              if($p->hasPermission("quest.2.completed") || $p->getExpLevel() < 0) {
                  $p->sendMessage(TF::GREEN . "2 - Not enough Trees - lvl. 1");
              } elseif($p->getExpLevel()) > 0) {
                  $p->sendMessage(TF::YELLOW . "2 - Not enough Trees - lvl. 1");
              } else {
                  $p->sendMessage(TF::RED . "3 - Not enough Trees - lvl. 1");
              }
          
              if($p->hasPermission("quest.3.completed") || $p->getExpLevel() < 1) {
                  $p->sendMessage(TF::GREEN . "3 - Searching the Stick - lvl. 2");
              } elseif($p->getExpLevel()) > 1) {
                  $p->sendMessage(TF::YELLOW . "3 - Searching the Stick - lvl. 2");
              } else {
                  $p->sendMessage(TF::RED . "3 - Searching the Stick - lvl. 2");
              }
          
              if($p->hasPermission("quest.4.completed") || $p->getExpLevel() < 2) {
                  $p->sendMessage(TF::GREEN . "4 - Shearing the Sheep - lvl. 3");
              } elseif($p->getExpLevel()) > 2) {
                  $p->sendMessage(TF::YELLOW . "4 - Shearing the Sheep - lvl. 3");
              } else {
                  $p->sendMessage(TF::RED . "4 - Shearing the Sheep - lvl. 3");
              }

              if($p->hasPermission("quest.5.completed") || $p->getExpLevel() < 3) {
                  $p->sendMessage(TF::GREEN . "5 - The lost Gem - lvl. 4");
              } elseif($p->getExpLevel()) > 3) {
                  $p->sendMessage(TF::YELLOW . "5 - The lost Gem - lvl. 4");
              } else {
                  $p->sendMessage(TF::RED . "5 - The lost Gem - lvl. 4");
              }
        }  
      return true;
    default:
      return false;
    }
}
          //adding more quests soon...
