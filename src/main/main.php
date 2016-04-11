<?php

namespace Sandertv\Quests

use pocketmine\plugin\pluginbase;
use pocketmine\utils\config;
use pocketmine\utils\TextFormat as TF;

class listquest extends PluginBase implements Listener {
  
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
