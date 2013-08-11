<?php

/**
 * Description of TraType
 * The form class
 *
 * @author rory
 */
namespace Pion\SalesBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TraType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('invdate','date')
                ->add('invnum','integer')
                ->add('client','integer')
                ->add('save','submit');
    }
    public function getName()
    {
        return 'client';
    }
}

?>
