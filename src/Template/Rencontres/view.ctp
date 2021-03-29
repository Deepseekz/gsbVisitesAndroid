<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rencontre $rencontre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rencontre'), ['action' => 'edit', $rencontre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rencontre'), ['action' => 'delete', $rencontre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rencontre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rencontres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rencontre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Joueurs'), ['controller' => 'Joueurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Joueur'), ['controller' => 'Joueurs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rencontres view large-9 medium-8 columns content">
    <h3><?= h($rencontre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lieu') ?></th>
            <td><?= h($rencontre->lieu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equipe') ?></th>
            <td><?= $rencontre->has('equipe') ? $this->Html->link($rencontre->equipe->id, ['controller' => 'Equipes', 'action' => 'view', $rencontre->equipe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Club') ?></th>
            <td><?= $rencontre->has('club') ? $this->Html->link($rencontre->club->id, ['controller' => 'Clubs', 'action' => 'view', $rencontre->club->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rencontre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateRencontre') ?></th>
            <td><?= h($rencontre->dateRencontre) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Joueurs') ?></h4>
        <?php if (!empty($rencontre->joueurs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Prenom') ?></th>
                <th scope="col"><?= __('Licence') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($rencontre->joueurs as $joueurs): ?>
            <tr>
                <td><?= h($joueurs->id) ?></td>
                <td><?= h($joueurs->nom) ?></td>
                <td><?= h($joueurs->prenom) ?></td>
                <td><?= h($joueurs->licence) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Joueurs', 'action' => 'view', $joueurs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Joueurs', 'action' => 'edit', $joueurs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Joueurs', 'action' => 'delete', $joueurs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $joueurs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
