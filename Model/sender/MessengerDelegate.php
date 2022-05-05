<?php

class MessengerDelegate implements MessengerInterface
{

    private $messenger;

    /**
     * @param integer $type
     */

    public function __construct(int $type)
    {
        $this->messenger = $this->getMessengerByType($type);
    }


    /**
     * @param integer $type
     * @return MessengerInterface
     */


    private function getMessengerByType(int $type):? MessengerInterface
    {
        $sender = null;
        switch ($type) {
            case Sender::TYPE_MESSAGE_EMAIL:
                $sender = new EmailMessengers();
                break;
            case Sender::TYPE_MESSAGE_SMS:
                $sender = new SMSlMessengers();
                break;
            case Sender::TYPE_MESSAGE_TELEGRAM:
                $sender = new TelegramlMessengers();
                break;
        }
        return $sender;
    }

    public function sendMessage(int $user_id, string $message): bool
    {
        return $this->messenger->sendMessage($user_id, $message);
    }
}