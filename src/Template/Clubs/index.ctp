<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Club[]|\Cake\Collection\CollectionInterface $clubs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Club'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rencontres'), ['controller' => 'Rencontres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rencontre'), ['controller' => 'Rencontres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clubs index large-9 medium-8 columns content">
    <h3><?= __('Clubs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libelle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clubs as $club): ?>
            <tr>
                <td><?= $this->Number->format($club->id) ?></td>
                <td><?= h($club->libelle) ?></td>
                <td><?= h($club->adresse) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $club->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $club->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $club->id], ['confirm' => __('Are you sure you want to delete # {0}?', $club->id)]) ?>
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
