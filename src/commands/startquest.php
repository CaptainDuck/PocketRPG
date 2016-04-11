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
            }
            break;
          
          case "2":
            if($p->getExpLevel()) == 1) {
              $p->sendMessage(TF::GRAY . "Quest started: ...");
              $p sendMessage(TF::AQUA . "...")
            }
        }
    }
  }

