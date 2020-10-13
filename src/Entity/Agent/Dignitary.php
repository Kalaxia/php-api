<?php

namespace App\Entity\Agent;

class Dignitary extends Agent
{
    protected $influence;

    public function getRole(): string
    {
        return self::ROLE_DIGNITARY;
    }
}