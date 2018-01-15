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

class MeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('Adresse',TextType::class,['label'=>'Adresse'])
                   ->add('Code_postal', TextType::class,['label'=>'Code Postal'])
                   ->add('Ville', TextType::class,['label'=>'Ville'])
                   ->add('Numero', TextType::class,['label'=>'Numéro de Téléphone'])
                   ->add('Adresse_mail', TextType::class,['label'=>'Adresse mail'])
                   ->add('Description', TextareaType::class,['label'=>'Description']);
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('adresse')->add('codePostal')->add('ville')->add('numero')->add('adresseMail')->add('description');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('Adresse')->add('Code_postal')->add('Ville')->add('Numero')->add('Adresse_mail')->add('Description');
    }
}