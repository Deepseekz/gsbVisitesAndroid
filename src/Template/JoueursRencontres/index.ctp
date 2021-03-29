<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JoueursRencontre[]|\Cake\Collection\CollectionInterface $joueursRencontres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Joueurs Rencontre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Joueurs'), ['controller' => 'Joueurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Joueur'), ['controller' => 'Joueurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rencontres'), ['controller' => 'Rencontres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rencontre'), ['controller' => 'Rencontres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="joueursRencontres index large-9 medium-8 columns content">
    <h3><?= __('Joueurs Rencontres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('joueur_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rencontre_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($joueursRencontres as $joueursRencontre): ?>
            <tr>
                <td><?= $this->Number->format($joueursRencontre->id) ?></td>
                <td><?= $joueursRencontre->has('joueur') ? $this->Html->link($joueursRencontre->joueur->Label, ['controller' => 'Joueurs', 'action' => 'view', $joueursRencontre->joueur->id]) : '' ?></td>
                <td><?= $joueursRencontre->has('rencontre') ? $this->Html->link($joueursRencontre->rencontre->Label, ['controller' => 'Rencontres', 'action' => 'view', $joueursRencontre->rencontre->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $joueursRencontre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $joueursRencontre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $joueursRencontre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $joueursRencontre->id)]) ?>
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
