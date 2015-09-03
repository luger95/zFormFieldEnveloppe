<?php

$GLOBALS['TL_DCA']['tl_form_field']['fields']['envelopeClass'] = $GLOBALS['TL_DCA']['tl_form_field']['fields']['class'];
$GLOBALS['TL_DCA']['tl_form_field']['fields']['envelopebeginning'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['envelopebeginning'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'textarea',
    'eval' => array('mandatory' => FALSE,'allowHtml'=>TRUE,'preserveTags'=>TRUE,'tl_class'=>'clr','rows'=>5,'cols'=>4),
    'sql' => "text NULL"
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['envelopeend'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['envelopeend'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'textarea',
    'eval' => array('mandatory' => FALSE,'allowHtml'=>TRUE,'preserveTags'=>TRUE,'tl_class'=>'clr','rows'=>5,'cols'=>4),
    'sql' => "text NULL"
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['envelopeClass']['label'] = &$GLOBALS['TL_LANG']['tl_form_field']['envelopeClass'];

// Add palettes
if (is_array($GLOBALS['TL_DCA']['tl_form_field']['palettes']))
{
    // Field type efgLookupSelect
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupSelect'] = str_replace(',class;', ',class,envelopeClass;{envelopehtml_legende},envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupSelect']);

    // Field type efgLookupCheckbox
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupCheckbox'] = str_replace(',class;', ',class,envelopeClass;{envelopehtml_legende},envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupCheckbox']);
    
    // Field type efgLookupRadio
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupRadio'] = str_replace(',class;', ',class,envelopeClass;{envelopehtml_legende},envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgLookupRadio']);

    // Field type efgImageSelect
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgImageSelect'] = str_replace(',class;', ',class,envelopeClass;{envelopehtml_legende},envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgImageSelect']);

    // Field type efgFormPaginator
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgFormPaginator'] = str_replace(',class;', ',class,envelopeClass;{envelopehtml_legende},envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['efgFormPaginator']);

    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['headline'] = str_replace(',customTpl', ',customTpl,envelopeClass;{envelopehtml_legende},envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['headline']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['explanation'] = str_replace(',customTpl', ',customTpl,envelopeClass;{envelopehtml_legende},envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['explanation']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['fieldsetfsStart'] = str_replace(',class;', ',class,envelopeClass;{envelopehtml_legende},envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['fieldsetfsStart']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['fieldsetfsStop'] = str_replace(',customTpl', ',customTpl,envelopeClass;{envelopehtml_legende},envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['fieldsetfsStop']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['html'] = str_replace(',customTpl', ',customTpl,envelopeClass;{envelopehtml_legende},envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['html']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['text'] = str_replace(',class,value,minlength,maxlength,accesskey,tabindex;', ',class,value,minlength,maxlength,accesskey,tabindex;{envelopehtml_legende},envelopeClass,envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['text']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['password'] = str_replace(',class,value,minlength,maxlength,accesskey,tabindex;', ',class,value,minlength,maxlength,accesskey,tabindex;{envelopehtml_legende},envelopeClass,envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['password']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['textarea'] = str_replace(',class,value,minlength,maxlength,accesskey,tabindex;', ',class,value,minlength,maxlength,accesskey,tabindex;{envelopehtml_legende},envelopeClass,envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['textarea']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['select'] = str_replace(',class,accesskey,tabindex;', ',class,accesskey,tabindex;{envelopehtml_legende},envelopeClass,envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['select']['palettes']['efgFormPaginator']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['radio'] = str_replace(',class;', ',class;{envelopehtml_legende},envelopeClass,envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['radio']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox'] = str_replace(',class;', ',class;{envelopehtml_legende},envelopeClass,envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['upload'] = str_replace(',class,accesskey,tabindex,fSize;', ',class,accesskey,tabindex,fSize;{envelopehtml_legende},envelopeClass,envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['upload']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['captcha'] = str_replace(',class,accesskey,tabindex;', ',class,accesskey,tabindex;{envelopehtml_legende},envelopeClass,envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['captcha']);
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['submit'] = str_replace(',class,accesskey,tabindex;', ',class,accesskey,tabindex;{envelopehtml_legende},envelopeClass,envelopebeginning,envelopeend;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['submit']);
}