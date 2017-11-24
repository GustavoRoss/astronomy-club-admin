<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insignium[]|\Cake\Collection\CollectionInterface $insignia
 */
?>
<?= $this->element('sidenav')?>
<div class="insignia index large-9 medium-8 columns content">
    <h3><?= __('Insignia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qtdmax', 'Quantidade Máxima') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qtdmin', 'Quantidade Mínima') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($insignia as $insignium): ?>
            <tr>
                <td><?= h($insignium->nome) ?></td>
                <td><?= $this->Number->format($insignium->qtdmax) ?></td>
                <td><?= $this->Number->format($insignium->qtdmin) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $insignium->nome]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('footer') ?>
</div>
