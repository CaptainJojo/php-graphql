<?php

namespace App\Resolver;

use App\Entity\Apartment;
use App\Entity\Person;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class ApartmentResolver implements ResolverInterface, AliasedInterface
{
    public function resolve(Argument $args)
    {
        $ap = new Apartment();
        $ap->setId(1);
        $ap->setName('test');

        $p = new Person();
        $p->setId(1);
        $p->setWho('test');

        $ap->setPerson($p);


        return $ap;
    }

    /**
     * {@inheritdoc}
     */
    public static function getAliases()
    {
        return [
            'resolve' => 'Apartment'
        ];
    }
}
