<?php

class TelegramlMessengers implements MessengerInterface
{


    public function sendMessage(int $user_id, string $message): bool
    {
        return true;
    }
}