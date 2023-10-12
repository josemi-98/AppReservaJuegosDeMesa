<?php

namespace App\Controller\Admin;

use App\Entity\Eventos;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Intl\Timezones;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class EventosCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Eventos::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
          //  IdField::new('id'),
            TextField::new('nombre'),
            TextEditorField::new('descripcion'),
            DateTimeField::new('fecha_inicio'),
            AssociationField::new('invitacion'),
        ];
    }
    
}
