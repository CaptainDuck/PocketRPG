<?php

namespace Sandertv\Quests;

use pocketmine\plugin\pluginbase;
use pocketmine\utils\config;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\listener;
use pocketmine\command\command;
use pocketmine\command\commandSender;
use pocketmine\command\commandExecutor;
use pocketmine\item\item;

class Quests extends PluginBase implements Listener {
  
  public function onLoad() {
    $this->getLogger()->info("Quests loading!");
  }
  
  public function onEnable() {
    $this->getLogger()->info("Enabling Quests!");
      @mkdir($this->getDataFolder());
      $this->config = new Config ($this->getDataFolder() . "config.yml" , Config::YAML, array());
  }
  
  public function onDisable() {
    $this->getLogger()->info("Disabling Quests!");
  }
  
  public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
    if($cmd->getName() == "listquest") {
      if(!isset($args[0])) {
        $p->sendMessage(TF::BOLD . "Quests:");
          if($p->hasPermission("quest") || $p->hasPermission("quest.1") || $p->hasPermission("quest.1.completed") {
            $p->sendMessage(TF::GREEN . "Helping the Farmer - lvl. 0");
          } elseif($p->
          
          
