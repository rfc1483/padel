<?php

namespace Padel\LeagueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LeagueType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options) 
    {
        $builder->add('name');
        $builder->add('status');
        $builder->add('year');
    }
}