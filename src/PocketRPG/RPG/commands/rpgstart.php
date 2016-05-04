<?php

namespace PocketRPG\RPG\commands;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use PocketRPG\main;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;

class rpgstart extends PluginBase {
  
  $level = $p->getLevel();
  $cfglevel = $this->config->get("RPG_LEVEL");
  
  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    switch($cmd->getName) {
      case "rpgstart":
        switch(strtolower(array_shift($args))) {
          case "mage":
            if($p->hasPermission("class.chosen")) {
              $p->sendMessage(TF:: RED . "You have already picked a class!");
            } else {
              $p->sendMessage(TF:: AQUA . "You have joined the world as a mage!");
              $wand = Item::get(Item::STICK, 0, 1);
              $p->getInventory->addItem($wand);
              $p->setPermission("class.chosen");
              $p->setPermission("class.mage");
              $p->switchLevel($level $cfglevel);
            }
            break;
            
          case "warrior":
            if($p->hasPermission("class.chosen")) {
              $p->sendMessage(TF:: RED . "You have already picked a class!")
            } else {
              $p->sendMessage(TF:: AQUA . "You have joined the world as a warrior!");
              $sword = Item::get(Item::IRON_SWORD, 0, 1);
              $p->getInventory->addItem($sword);
              $p->setPermission("class.chosen");
              $p->setPermission("class.warrior");
              $p->switchLevel($level $cfglevel);
            }
            break;
            
          case "tanker":
            if($p->hasPermission("class.chosen")) {
              $p->sendMessage(TF:: RED . "You have already picked a class!");
            } else {
              $p->sendMessage(TF:: AQUA . "You have joined the world as a tanker!");
              $shield = Item::get(Item::MINECART, 0, 1);
              $p->getInventory->addItem($shield);
              $p->setPermission("class.chosen");
              $p->setPermission("class.tanker");
              $p->switchLevel($level $cfglevel);
            }
            break;
            
          case "assassin":
            if($p->hasPermission("class.chosen")) {
              $p->sendMessage(TF:: RED . "You have already picked a class!");
            } else {
              $p->sendMessage(TF:: AQUA . "You have joined the world as an assassin!");
              $cloak = Item::get(Item::CLOCK, 0, 1);
              $knive = Item::get(Item::FEATHER, 0, 1);
              $p->getInventory->addItem($knive, $cloak);
              $p->setPermission("class.chosen");
              $p->setPermission("class.assassin");
              $p->switchLevel($level $cfglevel);
            }
            break;
          
          case "archer":
            if($p->hasPermission("class.chosen")) {
              $p->sendMessage(TF:: RED . "You have already picked a class!");
            } else {
              $p->sendMessage(TF:: AQUA . "You have joined the world as an assassin!");
              $bow = Item::get(Item::BOW, 0, 1);
              $p->getInventory->addItem($bow);
              $p->setPermission("class.chosen");
              $p->setPermission("class.archer");
              $p->switchLevel($level $cfglevel);
            }
            break;
        }
    }
  }
}
