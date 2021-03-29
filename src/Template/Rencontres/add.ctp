<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rencontre $rencontre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rencontres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Joueurs'), ['controller' => 'Joueurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Joueur'), ['controller' => 'Joueurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rencontres form large-9 medium-8 columns content">
    <?= $this->Form->create($rencontre) ?>
    <fieldset>
        <legend><?= __('Add Rencontre') ?></legend>
        <?php
            echo $this->Form->control('lieu');
            echo $this->Form->control('dateRencontre', ['empty' => true]);
            echo $this->Form->control('equipe_id', ['options' => $equipes, 'empty' => true]);
            echo $this->Form->control('club_id', ['options' => $clubs, 'empty' => true]);
            echo $this->Form->control('joueurs._ids', ['options' => $joueurs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
