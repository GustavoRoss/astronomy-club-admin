<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presenca[]|\Cake\Collection\CollectionInterface $presenca
 */
?>
<?= $this->element('sidenav')?>
<div class="presenca index large-9 medium-8 columns content">
    <h3><?= __('Presenca') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idreg', 'ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idatividade', 'ID da Atividade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula', 'Matrícula') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($presenca as $presenca): ?>
            <tr>
                <td><?= $this->Number->format($presenca->idreg) ?></td>
                <td><?= h($presenca->idatividade) ?></td>
                <td><?= h($presenca->matricula) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $presenca->idreg]) ?>
               </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('footer')?>
</div>
