<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Joueur $joueur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Joueur'), ['action' => 'edit', $joueur->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Joueur'), ['action' => 'delete', $joueur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $joueur->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Joueurs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Joueur'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rencontres'), ['controller' => 'Rencontres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rencontre'), ['controller' => 'Rencontres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="joueurs view large-9 medium-8 columns content">
    <h3><?= h($joueur->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($joueur->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($joueur->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Licence') ?></th>
            <td><?= h($joueur->licence) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($joueur->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Rencontres') ?></h4>
        <?php if (!empty($joueur->rencontres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lieu') ?></th>
                <th scope="col"><?= __('DateRencontre') ?></th>
                <th scope="col"><?= __('Equipe Id') ?></th>
                <th scope="col"><?= __('Club Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($joueur->rencontres as $rencontres): ?>
            <tr>
                <td><?= h($rencontres->id) ?></td>
                <td><?= h($rencontres->lieu) ?></td>
                <td><?= h($rencontres->dateRencontre) ?></td>
                <td><?= h($rencontres->equipe_id) ?></td>
                <td><?= h($rencontres->club_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rencontres', 'action' => 'view', $rencontres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rencontres', 'action' => 'edit', $rencontres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rencontres', 'action' => 'delete', $rencontres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rencontres->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
