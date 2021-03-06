<?php

namespace CoderDojo\WebsiteBundle\Form\Type;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Url;

/**
 * Class RegistrationFormType
 * @codeCoverageIgnore
 */
class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->remove('username');
        $builder->remove('email');
        $builder->remove('plainPassword');

        $builder->add('firstName', null, [
            'label'       => 'Voornaam',
            'constraints' => [
                new NotBlank(),
            ],
        ]);

        $builder->add('lastName', null, [
            'label' => 'Achternaam',
            'constraints' => [
                new NotBlank(),
            ],
        ]);

        $builder->add('phone', null, [
            'label' => 'Telefoon',
            'constraints' => [
                new NotBlank(),
                new Length([
                    "min" => 10,
                    "max" => 10
                ])
            ]
        ]);

        $builder->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'));
        $builder->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
            'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
            'options' => array('translation_domain' => 'FOSUserBundle'),
            'first_options' => array('label' => 'form.password'),
            'second_options' => array('label' => 'form.password_confirmation'),
            'invalid_message' => 'fos_user.password.mismatch',
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'coderdojo_user_registration';
    }
}
