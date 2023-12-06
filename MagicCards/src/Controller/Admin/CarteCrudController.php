<?php

namespace App\Controller\Admin;

use App\Entity\Carte;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use App\Entity\Paquet;


class CarteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Carte::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('Nom'),
            AssociationField::new('paquet')
        ];
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
