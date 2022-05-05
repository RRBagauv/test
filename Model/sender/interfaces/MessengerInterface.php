<?php

interface MessengerInterface
{

    /**
     * @param int $user_id
     * @param string $message
     *
     * @return boolean
     */

    public function sendMessage(int $user_id, string $message):bool;


}