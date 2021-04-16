<?php

namespace Join;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;

class Join extends PluginBase implements Listener{
            public function onEnable(){
                    $this->getLogger()->info(§aPlugin Ativado!)};
                    public function onDisable(){
                        $this->getLogger()->info(§4Plugin Desativado!)};
}