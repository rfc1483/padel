<?php

namespace Padel\LeagueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class StageType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options) 
    {
        $builder->add('number');
        $builder->add('startDate');
        $builder->add('finishDate');
        $builder->add('year');
        $builder->add('status');
    }
}