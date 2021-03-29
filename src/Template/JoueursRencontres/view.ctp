<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JoueursRencontre $joueursRencontre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Joueurs Rencontre'), ['action' => 'edit', $joueursRencontre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Joueurs Rencontre'), ['action' => 'delete', $joueursRencontre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $joueursRencontre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Joueurs Rencontres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Joueurs Rencontre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Joueurs'), ['controller' => 'Joueurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Joueur'), ['controller' => 'Joueurs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rencontres'), ['controller' => 'Rencontres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rencontre'), ['controller' => 'Rencontres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="joueursRencontres view large-9 medium-8 columns content">
    <h3><?= h($joueursRencontre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Joueur') ?></th>
            <td><?= $joueursRencontre->has('joueur') ? $this->Html->link($joueursRencontre->joueur->Label, ['controller' => 'Joueurs', 'action' => 'view', $joueursRencontre->joueur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rencontre') ?></th>
            <td><?= $joueursRencontre->has('rencontre') ? $this->Html->link($joueursRencontre->rencontre->Label, ['controller' => 'Rencontres', 'action' => 'view', $joueursRencontre->rencontre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($joueursRencontre->id) ?></td>
        </tr>
    </table>
</div>
