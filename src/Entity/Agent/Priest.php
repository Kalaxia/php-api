<?php

namespace App\Entity\Agent;

class Priest extends Agent
{
    protected $cult;

    protected $faith;

    public function getRole(): string
    {
        return self::ROLE_PRIEST;
    }
}