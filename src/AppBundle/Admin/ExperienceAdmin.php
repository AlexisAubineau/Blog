<?php
/**
 * Created by PhpStorm.
 * User: skewrad
 * Date: 15/01/18
 * Time: 19:36
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ExperienceAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('titre_experience', TextType::class, ['label' => 'Nom de lentreprise'])
            ->add('contenu_experience', TextareaType::class, ['label' => 'Description de lentreprise'])
            ->add('date_experience', TextType::class, ['label' => 'Date de lexperience']);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titreExperience')->add('contenuExperience')->add('dateExperience');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('titre_experience')->add('contenu_experience')->add('date_experience');
    }

}