<?php

namespace app\models;

use Yii;
use yii\db\Migration;

class User extends \yii\db\Migration
{
    const ROLE_USER = 1;
    const ROLE_MODER = 5;
    const ROLE_ADMIN = 10;

    public static function roles()
    {
        return [
            self::ROLE_USER => Yii::t('app', 'User'),
            self::ROLE_ADMIN => Yii::t('app', 'Admin'),
            self::ROLE_MODER => Yii::t('app', 'Moder'),
        ];
    }

    /**
     * Название роли
     * @param int $id
     * @return mixed|null
     */
    public function getRoleName($id)
    {
        $list = self::roles();
        return $list[$id] ?? null;
    }

    public function isAdmin()
    {
        return ($this->role == self::ROLE_ADMIN);
    }

    public function isModer()
    {
        return ($this->role == self::ROLE_MODER);
    }

    public function isUser()
    {
        return ($this->role == self::ROLE_USER);
    }
}
