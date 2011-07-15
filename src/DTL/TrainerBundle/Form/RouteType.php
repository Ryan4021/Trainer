<?php

namespace DTL\TrainerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use DTL\TrainerBundle\Document\Route;

class RouteType extends AbstractType
{
    public function getName()
    {
        return 'route';
    }

    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('activity');
        $builder->add('measuredBy', 'choice', array(
            'choices' => Route::getMeasuredByChoices(),
        ));
        $builder->add('title');
        $builder->add('description');
        $builder->add('distance', 'distance');
        $builder->add('time', 'stopwatch');
        $builder->add('labels', 'csv');
    }
}
