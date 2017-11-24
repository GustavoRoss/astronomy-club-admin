<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insignium $insignium
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Insígnia'), ['action' => 'edit', $insignium->nome]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Insígnia'), ['action' => 'delete', $insignium->nome], ['confirm' => __('Are you sure you want to delete # {0}?', $insignium->nome)]) ?> </li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="insignia view large-9 medium-8 columns content">
    <h3><?= h($insignium->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($insignium->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade Máxima') ?></th>
            <td><?= $this->Number->format($insignium->qtdmax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade Mínima') ?></th>
            <td><?= $this->Number->format($insignium->qtdmin) ?></td>
        </tr>
    </table>
</div>
