# zFormFieldEnveloppe
Permet de personnaliser l'enveloppe HTML d'un champ de formulaire pour contao.
Le module est utilisable avec EFG


# Utilisation
Pour utiliser les deux champs d'enveloppe, éditer vos fichiers modèle html.
Par exemple dans le fichier form_widget.html5 :

<?php if (!$this->tableless): ?>
  <tr class="<?= $this->rowClass ?>">
    <td class="col_0 col_first"><?= $this->generateLabel() ?></td>
    <td class="col_1 col_last"><?= $this->generateWithError() ?></td>
  </tr>
<?php else:?>

<?= $this->envelopebeginning?>
<div  class="input<?php if($this->dependentActive === '1'):?> <?= $this->enveloppe['class']?><?php endif;?> <?= $this->enveloppeClass?>" data-idInput="ctrl_<?= $this->id ?>" id="input_<?= $this->id ?>" <?php if($this->dependentActive === '1'):?> data-conditional='<?= $this->enveloppe['conditional'];?>'<?php endif;?>>
  <?= $this->generateLabel() ?>
  <?= $this->generateWithError() ?>
</div>
<?= $this->envelopeend?>
<?php endif; ?>
