<?php

/**
 * @property int $user_id
 * @property int $type
 * @property string $message
 */


class Sender extends Model
{

    private string $tableName = 'sent_messages';

    const TYPE_MESSAGE_TELEGRAM = 0;
    const TYPE_MESSAGE_EMAIL = 0;
    const TYPE_MESSAGE_SMS = 0;

    public function saveSenderMessage($user_id, $type, $message)
    {
        $request = $this->db->db->prepare('INSERT INTO ' . $this->tableName . '(user_id, type, message) values (:user_id, :type, :message)');
        $request->execute(['user_id' => $user_id, 'type' => $type, 'message' => $message]);
    }


}