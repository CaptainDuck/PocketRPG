<?php

namespace Sandertv\Quests

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;

class endquest extends PluginBase {

  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    switch($cmd->getName()) {
      case "endquest":
        switch(strtolower(array_shift($args))) {
          case: "1":
            if($p->hasPermission("quest.1.cancomplete") || $p->getInventory()->getId(296)->getCount() > 4) {
              $p->getInventory()->removeItem(296);
              $p->givePermission("quest.1.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount = $this->config->get("GOLD_AMOUNT_QUEST_1")
              $gold_1 = Item::get(Item::GOLD_INGOT, 0, $amount)
              $p->getInventory()->addItem($gold_1);
              break;
              
          case: "2":
            if($p->hasPermission("quest.2.cancomplete") || $p->getInventory()->getId(...)->getCount() > ...) {
              $p->getInventory()->removeItem(...);
              $p->givePermission("quest.2.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "You have been awarded gold Ingots!");
              $amount = $this->config->get("GOLD_AMOUNT_QUEST_2")
              $gold_2 = Item::get(Item::GOLD_INGOT, 0, $amount)
              $p->getInventory()->addItem($gold_2);
              break;
            }
        }
    }
