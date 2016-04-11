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
            }
            break;
          
          case "2":
            if($p->getExpLevel()) == 1) {
              $p->sendMessage(TF::GRAY . "Quest started: Not enough Trees");
              $p sendMessage(TF::AQUA . "Collect 16 Oak Saplings")
              $p->givePermission("quest.2.complete");
            }
            break;
            
          case "3":
            if($p->getExpLevel()) == 2) {
              $p->sendMessage(TF::GRAY > "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->givePermission("quest.3.complete");
            }
            break;
        }
    }
  }

