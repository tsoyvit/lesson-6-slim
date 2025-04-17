<?php

namespace App;

class Validator
{
//    public function validate(array $user): array
//    {
//        $errors = [];
//
//        if (empty($user['name'])) {
//            $errors['name'] = 'Имя не может быть пустым';
//        }
//
//        if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
//            $errors['email'] = 'Некорректный email';
//        }
//
//        if (strlen($user['password'] ?? '') < 6) {
//            $errors['password'] = 'Пароль должен быть не менее 6 символов';
//        }
//
//        if ($user['password'] !== $user['passwordConfirmation']) {
//            $errors['passwordConfirmation'] = 'Пароли не совпадают';
//        }
//
//        if (empty($user['city'])) {
//            $errors['city'] = 'Выберите город';
//        }
//
//        return $errors;
//    }

//================================================
    public function validate(array $user)
    {
        $errors = [];

        if (empty($user['name'])) {
            $errors['name'] = 'Имя не может быть пустым';
        }

        if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Некорректный email';
        }

        return $errors;
    }

//                 lesson 15
//================================================

//    private $paid;
//    private $title;
//
//    public function validate(array $course)
//    {
//
//        // BEGIN (write your solution here)
//        $errors = [];
//        if (empty($course['paid'])) {
//            $errors['paid'] = "Can't be blank";
//        }
//        if (empty($course['title'])) {
//            $errors['title'] = "Can't be blank";
//        }
//        return $errors;
//        // END
//    }

}
