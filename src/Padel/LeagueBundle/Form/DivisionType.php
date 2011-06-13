<?php

namespace Padel\LeagueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DivisionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options) 
    {
        $builder->add('level');
    }
}