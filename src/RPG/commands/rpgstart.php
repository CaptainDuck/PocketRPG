<?php

namespace Sandertv/PocketRPG;

use pocketmine/plugin/PluginBase;
use pocketmine/command/Command;
use pocketmine/command/CommandSender;
use pocketmine/Server;
use pocketmine/Player;

class rpgstart extends PluginBase {
  
  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    switch ($cmd->getName) {
      case "rpgstart":
        switch () {
          
        }
    }
  }
}
