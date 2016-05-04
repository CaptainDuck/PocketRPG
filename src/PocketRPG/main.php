<?php

namespace PocketRPG;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\Server;

class main extends PluginBase {
  
  public function onLoad() {
    $this->getLogger()->info("PocketRPG loading!");
  }
  
  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents;
    $this->getLogger()->info("Enabling PocketRPG!");
    @mkdir($this->getDataFolder());
    $this->saveResource("config.yml");
    $this->config = new Config($this->getDataFolder(). "config.yml", Config::YAML);
  }
  
  public function onDisable() {
    $this->getLogger()->info("Disabling PocketRPG!");
  }
  
  public function __construct(PocketRPG $plugin, Player $player, Arena $arena){
    parent::__construct($plugin);
    $this->player = $player;
    $this->arena = $arena;
    }
    
  public function getPlayer(){
    return $this->player;
  }
}
