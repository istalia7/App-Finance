<?php

namespace App\Controller\Admin;

use App\Entity\Depense;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DepenseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Depense::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            DateField::new('date'),
            TextField::new('motif'),
            NumberField::new('montant')->setDecimalSeparator(','),
            AssociationField::new('necessite')->setRequired(true)->setFormTypeOption('choice_label', 'description')
        ];
    }
}
