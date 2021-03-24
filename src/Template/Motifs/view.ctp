<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motif $motif
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Motif'), ['action' => 'edit', $motif->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Motif'), ['action' => 'delete', $motif->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motif->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Motifs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motif'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visites'), ['controller' => 'Visites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visite'), ['controller' => 'Visites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="motifs view large-9 medium-8 columns content">
    <h3><?= h($motif->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($motif->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($motif->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdVisites') ?></th>
            <td><?= $this->Number->format($motif->idVisites) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Visites') ?></h4>
        <?php if (!empty($motif->visites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('DateVisite') ?></th>
                <th scope="col"><?= __('Commentaire') ?></th>
                <th scope="col"><?= __('Practicien Id') ?></th>
                <th scope="col"><?= __('Motif Id') ?></th>
                <th scope="col"><?= __('Visiteur Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($motif->visites as $visites): ?>
            <tr>
                <td><?= h($visites->id) ?></td>
                <td><?= h($visites->dateVisite) ?></td>
                <td><?= h($visites->commentaire) ?></td>
                <td><?= h($visites->practicien_id) ?></td>
                <td><?= h($visites->motif_id) ?></td>
                <td><?= h($visites->visiteur_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Visites', 'action' => 'view', $visites->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Visites', 'action' => 'edit', $visites->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Visites', 'action' => 'delete', $visites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visites->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
