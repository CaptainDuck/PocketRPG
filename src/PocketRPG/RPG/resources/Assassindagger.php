<?php

namespace PocketRPG\RPG\neededstuff;

/////////////////////
// Assassin Dagger //
/////////////////////

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\entity\Living;
use pocketmine\math\Vector3;
use pocketmine\level\Position;
use pocketmine\level\particle\CriticalParticle;
use pocketmine\Player;
use pocketmine\Server;
use PocketRPG\main;

class knightknive extends PluginBase implements Listener {
    
    public function onFight(EntityDamageEvent $event) {  
      if($event instanceof EntityDamageByEntityEvent && $event->getDamager() instanceof Player) {
        $hit = $event->getEntity();
        $damager = $event->getDamager();
        $level = $this->config->get("RPG_LEVEL");
        if($damager->getLevel() == $configlevel) {
          if($damager->getItemInHand()->getId() == 388) {
            $x = $hit->x;
            $y = $hit->y;
            $z = $hit->z;
            $hitpos = $hit->getPosition(new Vector3($x, $y, $z));
            $level->addParticle(new CriticalParticle($hitpos));
            $this->setDamage(getDamage() + 3);
          }
        }
      }
  }
    public function onItemHeld(PlayerItemHeldEvent $event2) {
        $p = $event2->getPlayer();
        if($p->getItemInHand()->getId() == 347) {
            $effect = Effect::getEffect(14)->setDuration(5)->setAmplifier(1)->setVisible(true);
            $p->addEffect($effect);
        }
    }
}
