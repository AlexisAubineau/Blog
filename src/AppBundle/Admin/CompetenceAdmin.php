<?php
/**
 * Created by PhpStorm.
 * User: skewrad
 * Date: 15/01/18
 * Time: 19:35
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CompetenceAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('titre_competence', TextType::class, ['label' => 'Nom de la compétence'])
            ->add('niveau_competence', TextType::class, ['label' => 'Niveau de la compétence']);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titreCompetence')->add('niveauCompetence');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('titre_competence')->add('niveau_competence');
    }

}