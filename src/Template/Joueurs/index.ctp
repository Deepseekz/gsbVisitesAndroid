<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Joueur[]|\Cake\Collection\CollectionInterface $joueurs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Joueur'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rencontres'), ['controller' => 'Rencontres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rencontre'), ['controller' => 'Rencontres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="joueurs index large-9 medium-8 columns content">
    <h3><?= __('Joueurs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('licence') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($joueurs as $joueur): ?>
            <tr>
                <td><?= $this->Number->format($joueur->id) ?></td>
                <td><?= h($joueur->nom) ?></td>
                <td><?= h($joueur->prenom) ?></td>
                <td><?= h($joueur->licence) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $joueur->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $joueur->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $joueur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $joueur->id)]) ?>
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
