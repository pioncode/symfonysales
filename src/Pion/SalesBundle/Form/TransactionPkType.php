<?php

namespace Pion\SalesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TransactionPkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('client')
            ->add('ordnum')
            ->add('currency')
            ->add('stand')
            ->add('invdate')
            ->add('paydate')
            ->add('refund')
            ->add('balance')
            ->add('payflag')
            ->add('cheqnum')
            ->add('inamount')
            ->add('tmpamt')
            ->add('tmpdate')
            ->add('gross')
            ->add('nettotal')
            ->add('discount')
            ->add('prod1')
            ->add('prod2')
            ->add('prod3')
            ->add('prod4')
            ->add('prod5')
            ->add('prod6')
            ->add('tdesc1')
            ->add('tdesc2')
            ->add('tdesc3')
            ->add('tdesc4')
            ->add('tdesc5')
            ->add('tdesc6')
            ->add('quant1')
            ->add('quant2')
            ->add('quant3')
            ->add('quant4')
            ->add('quant5')
            ->add('quant6')
            ->add('val1')
            ->add('val2')
            ->add('val3')
            ->add('val4')
            ->add('val5')
            ->add('val6')
            ->add('comm')
            ->add('comment1')
            ->add('coma2')
            ->add('comb3')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pion\SalesBundle\Entity\TransactionPk'
        ));
    }

    public function getName()
    {
        return 'pion_salesbundle_transactionpktype';
    }
}
