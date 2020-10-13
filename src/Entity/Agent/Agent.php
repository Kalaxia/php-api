<?php

namespace App\Entity\Agent;

abstract class Agent
{
    protected $id;

    protected $player;

    protected $system;

    const ROLE_PRIEST = 'priest';
    const ROLE_DIGNITARY = 'dignitary';
    const ROLE_MERCHANT = 'merchant';

    public abstract function getRole(): string;
}