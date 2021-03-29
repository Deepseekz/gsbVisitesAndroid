<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rencontre[]|\Cake\Collection\CollectionInterface $rencontres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rencontre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Joueurs'), ['controller' => 'Joueurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Joueur'), ['controller' => 'Joueurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rencontres index large-9 medium-8 columns content">
    <h3><?= __('Rencontres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lieu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dateRencontre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('club_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rencontres as $rencontre): ?>
            <tr>
                <td><?= $this->Number->format($rencontre->id) ?></td>
                <td><?= h($rencontre->lieu) ?></td>
                <td><?= h($rencontre->dateRencontre) ?></td>
                <td><?= $rencontre->has('equipe') ? $this->Html->link($rencontre->equipe->id, ['controller' => 'Equipes', 'action' => 'view', $rencontre->equipe->id]) : '' ?></td>
                <td><?= $rencontre->has('club') ? $this->Html->link($rencontre->club->id, ['controller' => 'Clubs', 'action' => 'view', $rencontre->club->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rencontre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rencontre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rencontre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rencontre->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
