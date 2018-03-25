<?php

/**
 * 361GRAD Element Buttons easer
 *
 * @package   dse-elements-bundle
 * @author    Chris Kirchmaier <chris@361.de>
 * @copyright 2016 361GRAD
 * @license   http://www.361.de proprietary
 */

namespace Dse\NotelistBundle\Element;

use Contao\BackendTemplate;
use Contao\FrontendTemplate;
use Contao\ContentElement;
use Contao\PageModel;
use Contao\FilesModel;
use Contao\StringUtil;

/**
 * Class ContentDseButtonsTeaser
 *
 * @package Dse\ElementsBundle\Elements
 */
class ContentDseNotelist extends ContentElement
{
    /**
     * Template name.
     *
     * @var string The template
     */
    protected $strTemplate = 'ce_dse_notelist';


    /**
     * Display a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . $GLOBALS['TL_LANG']['CTE']['dse_notelist'][1] . ' ###';

            return $objTemplate->parse();
        }

        return parent::generate();
    }


    /**
     * Generate the module
     *
     * @return void
     */
    protected function compile()
    {
        $GLOBALS['TL_CSS'][] = 'bundles/dsenotelist/scss/dse-notelist.scss|static';

        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/dsenotelist/js/dse-notelist.jquery-functions.js|static';
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/dsenotelist/js/dse-notelist.js|static';
    }
}
