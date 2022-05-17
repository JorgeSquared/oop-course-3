<?php

class RebelShip extends Ship
{
    public function getFavoriteJedi()
    {
        $coolJedis = ['Yoda', 'Obi Kenobi'];
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }
}