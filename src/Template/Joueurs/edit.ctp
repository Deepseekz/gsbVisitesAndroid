<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Joueur $joueur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $joueur->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $joueur->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Joueurs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rencontres'), ['controller' => 'Rencontres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rencontre'), ['controller' => 'Rencontres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="joueurs form large-9 medium-8 columns content">
    <?= $this->Form->create($joueur) ?>
    <fieldset>
        <legend><?= __('Edit Joueur') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('licence');
            echo $this->Form->control('rencontres._ids', ['options' => $rencontres]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
