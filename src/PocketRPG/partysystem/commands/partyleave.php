<?php

namespace PocketRPG\partysystem\commands;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command/CommandSender;
use PocketRPG\main;

class partyleave extends PluginBase {
  
  public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
    if($cmd->getName() == "partyleave") {
      $cfglevel = $this->config->get("RPG_LEVEL");
      if($p->getLevel() == $cfglevel) {
        if(!isset($args[0])) {
          $p->sendMessage(TF:: RED . "Usage: /partyleave <partyname>");
        } elseif($p->hasPermission("party. " . $args[0] . "")) {
          $p->sendMessage(TF:: GREEN . "You have left the party " . $args[0] . "");
          $p->unsetPermission("party.joined" & "party." . $args[0] . "");
        } else {
          $p->sendMessage(TF:: RED . "You have to join a guild before being able to leave one.");
        }
      }
    }
  }
}
