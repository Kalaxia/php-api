<?php

namespace App\Entity\Agent;

class Merchant extends Agent
{
    protected $holdings;

    public function getRole(): string
    {
        return self::ROLE_MERCHANT;
    }
}