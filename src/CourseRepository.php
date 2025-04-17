<?php

namespace App;

use Exception;

class CourseRepository
{
    public function __construct()
    {
        session_start();
    }

    public function all(): array
    {
        return array_values($_SESSION);
    }

    /**
     * @throws Exception
     */
    public function find(int $id)
    {
        if (!isset($_SESSION[$id])) {
            throw new Exception("Wrong course id: {$id}");
        }

        return $_SESSION[$id];
    }

    /**
     * @throws Exception
     */
    public function save(array $item): void
    {
        if (empty($item['title']) || $item['paid'] === '') {
            $json = json_encode($item);
            throw new Exception("Wrong data: {$json}");
        }
        $item['id'] = uniqid();
        $_SESSION[$item['id']] = $item;
    }
}
