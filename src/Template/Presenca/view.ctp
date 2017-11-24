<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presenca $presenca
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Presença'), ['action' => 'edit', $presenca->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Presença'), ['action' => 'delete', $presenca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $presenca->id)]) ?> </li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="presenca view large-9 medium-8 columns content">
    <h3><?= h($presenca->idreg) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($presenca->idreg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID da Atividade') ?></th>
            <td><?= h($presenca->idatividade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricula') ?></th>
            <td><?= h($presenca->matricula) ?></td>
        </tr>
    </table>
</div>
