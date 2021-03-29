<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JoueursRencontre $joueursRencontre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Joueurs Rencontres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Joueurs'), ['controller' => 'Joueurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Joueur'), ['controller' => 'Joueurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rencontres'), ['controller' => 'Rencontres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rencontre'), ['controller' => 'Rencontres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="joueursRencontres form large-9 medium-8 columns content">
    <?= $this->Form->create($joueursRencontre) ?>
    <fieldset>
        <legend><?= __('Add Joueurs Rencontre') ?></legend>
        <?php
            echo $this->Form->control('joueur_id', ['options' => $joueurs, 'empty' => true]);
            echo $this->Form->control('rencontre_id', ['options' => $rencontres, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
