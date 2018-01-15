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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DiplomeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('titre_diplome', TextType::class, ['label' => 'Nom du diplome'])
            ->add('contenu_diplome', TextareaType::class, ['label' => 'Description du diplome'])
            ->add('ecole_diplome', TextType::class, ['label' => 'Ecole'])
            ->add('date_diplome', TextType::class, ['label' => 'Date du diplome']);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titreDiplome')->add('contenuDiplome')->add('ecoleDiplome')->add('dateDiplome');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('titre_diplome')->add('contenu_diplome')->add('ecole_diplome')->add('date_diplome');
    }

}