<?php


class Watchlist
{

      public array $games = [];


      public function addGame($game)
      {
            $this->games[] = $game;
      }

}