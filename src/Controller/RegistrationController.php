<?php

// src/Controller/RegistrationController.php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
/**
* @Route("/signup", name="signup")
*/
public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
{
// Создание формы для регистрации пользователя
$user = new User();
$form = $this->createForm(UserRegistrationFormType::class, $user);

// Обработка запроса
$form->handleRequest($request);
if ($form->isSubmitted() && $form->isValid()) {
// Хеширование пароля перед сохранением в базу данных
$user->setPassword(
$passwordEncoder->encodePassword(
$user,
$form->get('plainPassword')->getData()
)
);

// Сохранение пользователя в базу данных
$entityManager = $this->getDoctrine()->getManager();
$entityManager->persist($user);
$entityManager->flush();

// Редирект пользователя на страницу входа или другую страницу после успешной регистрации
return $this->redirectToRoute('login');
}

return $this->render('registration/signup.html.twig', [
'registrationForm' => $form->createView(),
]);
}
}
