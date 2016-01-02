<?php

namespace SAOjoin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class SAOjoin extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
	public function JoinEvent(PlayerJoinEvent $ev) {
		$player = $ev->getPlayer();
		if ($player->isop())$ev->setJoinMessage("GM [" . $player->getName() . "] 님께서 SAO 데이터베이스에 로그인하셨습니다 ");
	}
	public function QuitEvent(PlayerQuitEvent $ev) {
		$player = $ev->getPlayer();
		if ($player->isop())$ev->setQuitMessage("GM [" . $player->getName() . "] 님께서 SAO 데이테베이솔부터 로그아웃 하셨습니다 ");
	}
}
?>
