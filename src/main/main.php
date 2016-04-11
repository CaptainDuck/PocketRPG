<?php

namespace Sandertv\Quests

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;

class main extends PluginBase {
  
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
