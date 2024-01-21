<?php

// src/Form/UserRegistrationFormType.php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserRegistrationFormType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('username')
->add('email')
->add('plainPassword', RepeatedType::class, [
'type' => PasswordType::class,
'first_options' => ['label' => 'Password'],
'second_options' => ['label' => 'Repeat Password'],
])
->add('signup', SubmitType::class, ['label' => 'Register']);
}

public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults([
'data_class' => User::class,
]);
}
}
