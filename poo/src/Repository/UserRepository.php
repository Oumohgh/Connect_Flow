<?php 


class UserRepository extends Database implements Repository{

    
    public function findAll(): array {
        return [];
    }

    public function create(User $user): bool  {
        $stmt = $this->connexion->prepare("INSERT INTO users VALUES (?, ?, ?, ?, ?)");
        return $stmt->excecute($user->toArray());
    }

}