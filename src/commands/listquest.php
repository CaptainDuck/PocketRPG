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

          if($p->hasPermission("quest") || $p->hasPermission("quest.2") || $p->hasPermission("quest.2.completed") || $p->getExperience() == 1 {
              $p->sendMessage(TF::GREEN . "Not enough Trees - lvl. 1");
          } elseif($p->getExperience()) == 1) {
              $p->sendMessage(TF::YELLOW . "Not enough Trees - lvl. 1");
          } else {
              $p->sendMessage(TF::RED . "Not enough Trees - lvl. 1");
          }
          
          if($p->hasPermission("quest") || $p->hasPermission("quest.3") || $p->hasPermission("quest.3.completed") || $p->getExperience() == 2 {
              $p->sendMessage(TF::GREEN . "Searching the Stick - lvl. 2");
          } elseif($p->getExperience()) == 2) {
              $p->sendMessage(TF::YELLOW . "Searching the Stick - lvl. 2");
          } else {
              $p->sendMessage(TF::RED . "Searching the Stick - lvl. 2");
          }
          
          if($p->hasPermission("quest") || $p->hasPermission("quest.4") || $p->hasPermission("quest.4.completed") || $p->getExperience() == 3 {
              $p->sendMessage(TF::GREEN . "Filling the Well - lvl. 3");
          } elseif($p->getExperience()) == 3) {
              $p->sendMessage(TF::YELLOW . "Filling the Well - lvl. 3");
          } else {
              $p->sendMessage(TF::RED . "Filling the Well - lvl. 3");
          }

          if($p->hasPermission("quest") || $p->hasPermission("quest.5") || $p->hasPermission("quest.5.completed") || $p->getExperience() == 4 {
              $p->sendMessage(TF::GREEN . "Growing the Crops - lvl. 4");
          } elseif($p->getExperience()) == 4) {
              $p->sendMessage(TF::YELLOW . "Growing the Crops - lvl. 4");
          } else {
              $p->sendMessage(TF::RED . "Growing the Crops - lvl. 4");
          }
          
      } elseif(isset)
