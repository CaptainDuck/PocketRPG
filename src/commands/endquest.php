<?php

namespace Sandertv\Quests

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class endquest extends PluginBase {

  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    switch($cmd->getName()) {
      case "endquest":
        switch(strtolower(array_shift($args))) {
          case: "1":
            if($p->hasPermission("quest.1.cancomplete") || $p->) 
        }
    }
