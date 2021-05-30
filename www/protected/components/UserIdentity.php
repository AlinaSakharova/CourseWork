<?php
class UserIdentity extends CUserIdentity
{
    private $_id;
 
    public function authenticate()
    {
        $record = User::model()->findByAttributes(array('email' => $this->username));
        if ($record === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($record->password !== md5($this->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->setState('title', $record->username);
            $this->setState('__name', $record->username);
            //$this->setState('role', $record->role);
            $this->setState('uid', $record->id);
            $this->setState("__id", $record->id);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId()
    {
        return $this->_id;
    }
}