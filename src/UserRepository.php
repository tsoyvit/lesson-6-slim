<?php

namespace App;
class UserRepository
{
    private string $fileName;

    public function __construct()
    {
        $this->fileName = __DIR__ . '/files/users.json';
    }
    public function saveToFile(array $userData): void
    {
        $id = new GeneratorId();
        if (!isset($userData['id'])) {
            $userData['id'] = $id->generateId();
        }
        $json = json_encode($userData) . PHP_EOL;
        file_put_contents($this->fileName, $json, FILE_APPEND);
    }

    public function getUserById($userId): ?array
    {
        $lines = file($this->fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            $user = json_decode($line, true);
            if ($user && $user['id'] === $userId) {
                return $user;
            }
        }

        return null;
    }

    public  function getAllUsers(): array
    {
        $users = [];
        $lines = file($this->fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            $users[] = json_decode($line, true);
        }
        return $users;
    }

}

