<?php

$GLOBALS['TL_DCA']['tl_form_field']['fields']['enveloppeClass'] = $GLOBALS['TL_DCA']['tl_form_field']['fields']['class'];
$GLOBALS['TL_DCA']['tl_form_field']['fields']['enveloppeClass']['label'] = &$GLOBALS['TL_LANG']['tl_form_field']['enveloppeClass'];

// Add palettes
if (is_array($GLOBALS['TL_DCA']['tl_form_field']['palettes']))
{
    // Field type efgLookupSelect
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupSelect'] = str_replace(',class;', ',class,enveloppeClass;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupSelect']);

    // Field type efgLookupCheckbox
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupCheckbox'] = str_replace(',class;', ',class,enveloppeClass;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupCheckbox']);
    
    // Field type efgLookupRadio
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupRadio'] = str_replace(',class;', ',class,enveloppeClass;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupRadio']);

    // Field type efgImageSelect
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgImageSelect'] = str_replace(',class;', ',class,enveloppeClass;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgImageSelect']);

    // Field type efgFormPaginator
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgFormPaginator'] = str_replace(',class;', ',class,enveloppeClass;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgFormPaginator']);
}