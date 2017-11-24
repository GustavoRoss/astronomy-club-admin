<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Membro $membro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar membro'), ['action' => 'edit', $membro->matricula]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar mebro'), ['action' => 'delete', $membro->matricula], ['confirm' => __('Are you sure you want to delete # {0}?', $membro->matricula)]) ?> </li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index'])?></li>
    </ul>
</nav>
<div class="membro view large-9 medium-8 columns content">
    <h3><?= h($membro->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Matricula') ?></th>
            <td><?= h($membro->matricula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($membro->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade Uf') ?></th>
            <td><?= h($membro->cidade_uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datanasc') ?></th>
            <td><?= h($membro->datanasc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($membro->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($membro->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emailresp1') ?></th>
            <td><?= h($membro->emailresp1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emailresp2') ?></th>
            <td><?= h($membro->emailresp2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($membro->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funcao') ?></th>
            <td><?= h($membro->funcao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Insignia') ?></th>
            <td><?= h($membro->insignia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($membro->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nomeresp1') ?></th>
            <td><?= h($membro->nomeresp1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nomeresp2') ?></th>
            <td><?= h($membro->nomeresp2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($membro->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teleresp1') ?></th>
            <td><?= h($membro->teleresp1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teleresp2') ?></th>
            <td><?= h($membro->teleresp2) ?></td>
        </tr>
    </table>
</div>
