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

class RealisationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->add('titre_realisation',TextType::class,['label'=>'Titre de la réalisation'])
            ->add('contenu_realisation',TextareaType::class,['label'=>'Description de la réalisation'])
            ->add('url_realisation',TextType::class,['label'=>'lien du répertoire'])
            ->add('date_realisation',TextType::class,['label'=>'Date de la fin de la réalisation']);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titreRealisation')->add('contenuRealisation')->add('urlRealisation')->add('dateRealisation');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('titre_realisation')->add('contenu_realisation')->add('url_realisation')->add('date_realisation');
    }

}