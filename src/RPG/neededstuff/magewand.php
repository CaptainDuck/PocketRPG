<?php

namespace RPG/neededstuff;

use pocketmine/plugin/PluginBase;
use pocketmine/event/Listener;
use pocketmine/event/player/PlayerInteractEvent;
use pocketmine/event/entity/EntityDamageByEntityEvent;
use pocketmine/entity/Living;
use pocketmine/math/Vector3;
use pocketmine/Player;
use pocketmine/Server;

class magewand extends PluginBase implements Listener {
  
  public function onPlayerInteract(PlayerInteractEvent $interactevent) {
    $p = $interactevent->getPlayer();
    $configlevel = $this->config->get("RPG_LEVEL");
    if($p->getLevel() == $configlevel) {
      if($p->getItemInHand()->getId() == 280) {
        $b = $interactevent->getBlock();
        $bx = $b->x;
        $by = $b->y;
        $bz = $b->z;
        $px = $p->x;
        $py = $p->y;
        $pz = $p->z;
        $plocation = $p->getPosition(new Vector3($x, $y, $z));
        $blocation = $blocktouched->getPosition(new Vector3($x, $y, $z));
        
        /////////////////////////////////////////////////////////////////
        
        $b->getLocation()
        
      }
    }
  }
}
