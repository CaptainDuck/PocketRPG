<?php

namespace PocketRPG\RPG\neededstuff;

///////////////////
// Tanker shield //
///////////////////

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use PocketRPG\main;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\entity\Living;
use pocketmine\math\Vector3;
use pocketmine\level\Position;
use pocketmine\level\particle\ExplodeParticle;
use pocketmine\Player;
use pocketmine\Server;

class knightknive extends PluginBase implements Listener {
    
    public function onFight(EntityDamageEvent $event) {  
      if($event instanceof EntityDamageByEntityEvent && $event->getDamager() instanceof Player) {
        $hit = $event->getEntity();
        $damager = $event->getDamager();
        $level = $this->config->get("RPG_LEVEL");
        if($damager->getLevel() == $configlevel) {
          if($damager->getItemInHand()->getId() == 328) {
            $x = $hit->x;
            $y = $hit->y;
            $z = $hit->z;
            $hitpos = $hit->getPosition(new Vector3($x, $y, $z));
            $level->addParticle(new ExplodeParticle($hitpos));
            $this->setKnockBack(3);
            $this->setDamage(getDamage() + 2);
          }
        }
      }
  }
    public function onItemHeld(PlayerItemHeldEvent $event2) {
        $p = $event2->getPlayer();
        if($p->getItemInHand()->getId() == 328) {
            $effect = Effect::getEffect(11)->setDuration(5)->setAmplifier(2)->setVisible(true);
            $p->addEffect($effect);
        }
    }
}

