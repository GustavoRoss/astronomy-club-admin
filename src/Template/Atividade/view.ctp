<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atividade $atividade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Atividade'), ['action' => 'edit', $atividade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Atividade'), ['action' => 'delete', $atividade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atividade->id)]) ?> </li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="atividade view large-9 medium-8 columns content">
    <h3><?= h($atividade->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= h($atividade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($atividade->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data do evento') ?></th>
            <td><?= h($atividade->dataevento) ?></td>
        </tr>
    </table>
</div>
