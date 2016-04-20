<?php

namespace Quests\main;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\Server;

class main extends PluginBase {
  
  public function onLoad() {
    $this->getLogger()->info("PocketRPG loading!");
  }
  
  public function onEnable() {
    $this->getLogger()->info("Enabling PocketRPG!");
      @mkdir($this->getDataFolder());
      $this->config = new Config ($this->getDataFolder() . "config.yml" , Config::YAML, array());
  }
  
  public function onDisable() {
    $this->getLogger()->info("Disabling PocketRPG!");
  }
}
