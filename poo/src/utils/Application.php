<?php 


class Application {
    public static $users = [];
    public static function setUser(User $user) {
        array_push(self::$users , $user);
    }

    public static function getUsers() {
        return self::$users;
    }
}