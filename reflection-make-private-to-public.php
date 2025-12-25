<?php
class User {
    private $email = 'example@example.com';
    public function getEmail() {
        return $this->email;
    }
}

$user = new User();
$ref = new ReflectionClass(User::class);
$prop = $ref->getProperty('email');
$prop->setValue($user, 'john@example.com');

echo $user->getEmail();