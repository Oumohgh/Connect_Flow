<?php

class UserService
{
    private final $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function createUser($firstname, $lastname, $email, $username, $password): void
    {
        $this->checkEmptyText([$firstname, $lastname, $email, $username, $password]);


        $this->checkIfNotExist($username, $email);
        //TODO 
        // Check username if exist


        $this->userRepository->create(new User($firstname, $lastname, $email, $username, $password));
        // Application::setUser(
        //     new User($firstname, $lastname, $email, $username, $password)
        // );
    }

    public function updateUserByUsername($username, $firstname, $lastname, $email, $password) {
        $index = $this->getUserByUsername($username);
        if ($index != -1) {
            $user = Application::$users[$index];

            $user->setFirstname($firstname) || $user->getFirstname();
            $user->setLastname($lastname)  || $user->getLastname();
            $user->setEmail($email) || $user->getEmail();
            $user->setPassword($password) || $user->getPassword();

            Application::$users[$index] = $user; 
        }
    }

    public function getUserByUsername($username) {
        foreach (Application::getUsers() as $key => $value) {
            if ($value->getUsername() == $username) return $key;
        } 

        return -1;
    }

    private function checkEmptyText(array $data)
    {
        foreach ($data as $key => $value) {
            if (empty($value))
                throw new InputEmptyException("Input is empty");
        }
    }

    private function checkIfNotExist($username , $email): bool {
        foreach(Application::getUsers() as $user) {
            if ($user->getEmail() == $email) throw new Exception("Email exist in database");

            if ($user->getUsername() == $username) throw new Exception("Username exist in database");
        }
        return true;
    }





}