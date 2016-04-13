<?php

namespace Sandertv\Quests

use pocketmine\utils\Config;
use pocketmine\utils\textFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class endquest extends PluginBase {

  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
