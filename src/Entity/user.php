<?php
// src/Entity/User.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    // Добавьте свойства для пользователя, такие как имя, email, пароль и т.д.

    // Методы, необходимые для интерфейса UserInterface, такие как getUsername(), getPassword(), getRoles(), и т.д.
}
