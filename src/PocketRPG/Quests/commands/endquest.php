<?php

namespace PocketRPG\Quests\commands;

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\Server;

class endquest extends PluginBase {

  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    switch($cmd->getName()) {
      case "endquest":
        switch(strtolower(array_shift($args))) {
          case "1":
            if($p->hasPermission("quest.1.cancomplete") && $p->getInventory()->getId(296)->getCount() > 4) {
              $p->getInventory()->removeItem(296);
              $p->setPermission("quest.1.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount_1 = $this->config->get("GOLD_AMOUNT_QUEST_1");
              $gold_1 = Item::get(Item::GOLD_INGOT, 0, $amount_1);
              $p->getInventory()->addItem($gold_1);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.1.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
              break;
              
          case "2":
            if($p->hasPermission("quest.2.cancomplete") && $p->getInventory()->getId(6)->getCount() > 15) {
              $p->getInventory()->removeItem(6);
              $p->setPermission("quest.2.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount_2 = $this->config->get("GOLD_AMOUNT_QUEST_2");
              $gold_2 = Item::get(Item::GOLD_INGOT, 0, $amount_2);
              $p->getInventory()->addItem($gold_2);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.2.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
              break;
              
          case "3":
            if($p->hasPermission("quest.3.cancomplete") && $p->getInventory()->getId(280)->getCount() > 0) {
              $p->getInventory()->removeItem(280);
              $p->setPermission("quest.3.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount_3 = $this->config->get("GOLD_AMOUNT_QUEST_3");
              $gold_3 = Item::get(Item::GOLD_INGOT, 0, $amount_3);
              $p->getInventory()->addItem($gold_3);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.3.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
              break;
              
          case "4":
            if($p->hasPermission("quest.4.cancomplete") && $p->getInventory()->getId(359)->getCount() > 0) {
              $p->getInventory()->removeItem(359);
              $p->setPermission("quest.4.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount_4 = $this->config->get("GOLD_AMOUNT_QUEST_4");
              $gold_4 = Item::get(Item::GOLD_INGOT, 0, $amount_4);
              $p->getInventory()->addItem($gold_4);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.4.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
              break;
              
          case "5":
            if($p->hasPermission("quest.5.cancomplete") && $p->getInventory()->getId(388)->getCount() > 0) {
              $p->getInventory()->removeItem(388);
              $p->setPermission("quest.5.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount_5 = $this->config->get("GOLD_AMOUNT_QUEST_5");
              $gold_5 = Item::get(Item::GOLD_INGOT, 0, $amount_5);
              $p->getInventory()->addItem($gold_5);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.5.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
              break;
              
          case "6":
            if($p->hasPermission("quest.6.cancomplete") && $p->getInventory()->getId(79)->getCount() > 31) {
              $p->getInventory()->removeItem(79);
              $p->setPermission("quest.6.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount_6 = $this->config->get("GOLD_AMOUNT_QUEST_6");
              $gold_6 = Item::get(Item::GOLD_INGOT, 0, $amount_6);
              $p->getInventory()->addItem($gold_6);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
              break;
              
          case "7":
            if($p->hasPermission("quest.7.cancomplete") && $p->getInventory()->getId(352)->getCount() > 4 || $p->getInventory()->getId(367)->getCount() > 4) {
              $p->getInventory()->removeItem(79);
              $p->setPermission("quest.7.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount_7 = $this->config->get("GOLD_AMOUNT_QUEST_7");
              $gold_7 = Item::get(Item::GOLD_INGOT, 0, $amount_7);
              $p->getInventory()->addItem($gold_7);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
              break;
              
          case "8":
            if($p->hasPermission("quest.8.cancomplete") && $p->getInventory()->getId(349)->getCount() > 15) {
              $p->getInventory()->removeItem(349);
              $p->setPermission("quest.8.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount_8 = $this->config->get("GOLD_AMOUNT_QUEST_8");
              $gold_8 = Item::get(Item::GOLD_INGOT, 0, $amount_8);
              $p->getInventory()->addItem($gold_8);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          case "9":
            if($p->hasPermission("quest.9.cancomplete") && $p->getInventory()->getId(369)->getCount() > 4 || $p->getInventory()->getId(377)->getCount() > 4) {
              $p->getInventory()->removeItem(369, 377);
              $p->setPermission("quest.9.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount_9 = $this->config->get("GOLD_AMOUNT_QUEST_9");
              $gold_9 = Item::get(Item::GOLD_INGOT, 0, $amount_9);
              $p->getInventory()->addItem($gold_9);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          case "10":
            if($p->hasPermission("quest.10.cancomplete") && $p->getInventory()->getId(348)->getCount() > 9 || $p->getInventory()->getId(331)->getCount() > 9) {
              $p->getInventory()->removeItem(348, 331);
              $p->setPermission("quest.10.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount_10 = $this->config->get("GOLD_AMOUNT_QUEST_10");
              $gold_10 = Item::get(Item::GOLD_INGOT, 0, $amount_10);
              $p->getInventory()->addItem($gold_10);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          default:
            $p->sendMessage(TF:: RED . "Please specify a quest number.");
            return true;
        
        }
        return true;
      default:
        return false;
     }
  }
