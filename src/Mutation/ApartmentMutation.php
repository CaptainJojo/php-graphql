<?php

namespace App\Mutation;

use App\Entity\Apartment;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\MutationInterface;

class ApartmentMutation implements MutationInterface, AliasedInterface
{

    public function createApartment($name)
    {
        $ap = new Apartment();
        $ap->setId(1);
        $ap->setName($name);

        return $ap;
    }

    /**
     * {@inheritdoc}
     */
    public static function getAliases()
    {
        return ['createApartment' => 'create_apartment'];
    }
}
