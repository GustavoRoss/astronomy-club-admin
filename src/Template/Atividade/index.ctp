<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atividade[]|\Cake\Collection\CollectionInterface $atividade
 */
?>
<?= $this->element('sidenav')?>
<div class="atividade index large-9 medium-8 columns content">
    <h3><?= __('Atividade') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', 'ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataevento', 'Data do evento') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atividade as $atividade): ?>
            <tr>
                <td><?= h($atividade->id) ?></td>
                <td><?= h($atividade->nome) ?></td>                
                <td><?= h($atividade->dataevento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $atividade->id]) ?>
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
