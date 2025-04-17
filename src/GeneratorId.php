<?php

namespace App;

class GeneratorId
{
    public function generateId()
    {
        $fileName = __DIR__ . '/files/users.json';

        if (!file_exists($fileName)) {
            return 1;
        }

        $lines = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $maxId = 0;

        foreach ($lines as $line) {
            $user = json_decode($line, true);
            if ($user && isset($user['id']) && $user['id'] > $maxId) {
                $maxId = $user['id'];
            }
        }

        return $maxId + 1;

    }

}
