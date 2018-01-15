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

class CertificationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('titre_certification', TextType::class, ['label' => 'Nom de la certification'])
            ->add('contenu_certification', TextareaType::class, ['label' => 'Description de la certification'])
            ->add('date_certification', TextType::class, ['label' => 'Date de la certification']);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titreCertification')->add('contenuCertification')->add('dateCertification');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('titre_certification')->add('contenu_certification')->add('date_certification');
    }
}