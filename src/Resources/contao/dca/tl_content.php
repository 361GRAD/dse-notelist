<?php

/**
 * 361GRAD - Element Buttons
 *
 * @package   dse-elements-bundle
 * @author    Markus Häfner <markus@361.de>
 * @copyright 2018 361GRAD
 * @license   http://www.361.de proprietary
 */

// Element palettes
$GLOBALS['TL_DCA']['tl_content']['palettes']['dse_notelist_button'] =
    '{type_legend},type,headline;' .
    '{buttonone_legend},dse_notelist_button;';

// Element fields
$GLOBALS['TL_DCA']['tl_content']['fields']['dse_notelist_button'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['dse_notelist_button'],
    'inputType' => 'pageTree',
    'eval'      => [
        'mandatory' => true,
        'fieldType' => 'radio',
        'tl_class' => 'w50 autoheight wizard clr'
    ],
    'sql' => "int(10) unsigend NOT NULL default '0'"
];