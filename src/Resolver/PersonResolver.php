<?php

namespace App\Resolver;

use App\Entity\Person;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class PersonResolver implements ResolverInterface, AliasedInterface
{
    public function resolve(Argument $args)
    {
        $ap = new Person();
        $ap->setId(1);
        $ap->setWho('test');
        return $ap;
    }

    /**
     * {@inheritdoc}
     */
    public static function getAliases()
    {
        return [
            'resolve' => 'Person'
        ];
    }
}
