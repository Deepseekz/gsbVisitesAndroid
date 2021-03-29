<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Club $club
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Club'), ['action' => 'edit', $club->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Club'), ['action' => 'delete', $club->id], ['confirm' => __('Are you sure you want to delete # {0}?', $club->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rencontres'), ['controller' => 'Rencontres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rencontre'), ['controller' => 'Rencontres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clubs view large-9 medium-8 columns content">
    <h3><?= h($club->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($club->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($club->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($club->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Rencontres') ?></h4>
        <?php if (!empty($club->rencontres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lieu') ?></th>
                <th scope="col"><?= __('DateRencontre') ?></th>
                <th scope="col"><?= __('Equipe Id') ?></th>
                <th scope="col"><?= __('Club Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($club->rencontres as $rencontres): ?>
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
