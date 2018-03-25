<?php

namespace Dse\NotelistBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Dse\NotelistBundle\DseNotelistBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
//                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}