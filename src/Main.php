<?php

declare(strict_types=1);

namespace Jqke207\JoinMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
class Main extends PluginBase implements Listener{

public function onEnable(): void {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("JoinMessage Plugin Enabled");
    $this->saveDefaultConfig();
}
public function onPlayerJoin(PlayerJoinEvent $event) {
$player = $event->getPlayer();
$name = $player->getName();
$messageFromConfig = $this->getConfig()->get("join-message", "Welcome to my server! [PS: Set a join message in config.yml]");
$player->sendMessage($name . " " . $messageFromConfig,);
}
}