<?php

class MessengerController
{

    public function actionSendMessage()
    {
        if (!empty($_POST['type']) && !empty($_POST['message'] && !empty($_POST['user_id']))) {
            $messenger = new MessengerDelegate($_POST['type']);
            if ($messenger) {
                if ($messenger->sendMessage($_POST['user_id'], $_POST['message'])) {
                    $sender = new Sender();
                    $sender->saveSenderMessage($_POST['user_id'], $_POST['type'], $_POST['message']);
                }
            }
        }
    }


}