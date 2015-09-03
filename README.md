# zFormFieldEnveloppe
Permet de personnaliser l'enveloppe HTML d'un champ de formulaire pour contao.
Le module est utilisable avec EFG


# Utilisation
Pour utiliser les deux champs d'enveloppe, éditer vos fichiers modèle html.
Par exemple dans le fichier form_widget.html5 :






<?= $this->envelopebeginning?>
< div class="<?= $this->enveloppe['class']?><?php endif;?> <?= $this->enveloppeClass?>">
  <?= $this->generateLabel() ?>
  <?= $this->generateWithError() ?>
< /div>
<?= $this->envelopeend?>

