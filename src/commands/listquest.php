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
    if($cmd->getName() == "listquest") {
      if(!isset($args[0])) {
        $p->sendMessage(TF::BOLD . "Quests:");
          if($p->hasPermission("quest") || $p->hasPermission("quest.1") || $p->hasPermission("quest.1.completed") || $p->getExperience() == 0 {
              $p->sendMessage(TF::GREEN . "Helping the Farmer - lvl. 0");
          } elseif($p->getExperience()) == 0) {
              $p->sendMessage(TF::YELLOW . "Helping the Farmer - lvl. 0");
          } else {
              $p->sendMessage(TF::RED . "Helping the Farmer - lvl. 0");
          }

          if($p->hasPermission("quest") || $p->hasPermission("quest.2") || $p->hasPermission("quest.2.completed") {
              $p->sendMessage(TF::GREEN . "Not enough Trees - lvl. 1");
          } elseif($p->getExperience()) == 1) {
              $p->sendMessage(TF::YELLOW . "Not enough Trees - lvl. 1");
          } else {
              $p->sendMessage(TF::RED . "Not enough Trees - lvl. 1");
          }
