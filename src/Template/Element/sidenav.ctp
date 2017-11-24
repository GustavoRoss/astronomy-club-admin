<?php
/**
 * Created by Gustavo.
 * User: gustavo
 * Date: 9/18/17
 * Time: 11:01 AM
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <img src="/img/image.jpeg" alt="">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <label><strong>SEÇÃO DE MEMBROS</strong></label>
        <li><?= $this->Html->link(__('Novo membro'), ['controller' => 'Membro', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar membros'), ['controller' => 'Membro', 'action' => 'index']) ?></li>
        <label><strong>SEÇÃO DE ATIVIDADES</strong></label>
        <li><?= $this->Html->link(__('Nova atividade'), ['controller' => 'Atividade', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar atividades'), ['controller' => 'Atividade', 'action' => 'index']) ?></li>
        <label><strong>SEÇÃO DE INSIGNIAS</strong></label>
        <li><?= $this->Html->link(__('Nova insígnia'), ['controller' => 'Insignia', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar insígnias'), ['controller' => 'Insignia', 'action' => 'index']) ?></li>
        <label><strong>SEÇÃO DE PRESENCAS</strong></label>
        <li><?= $this->Html->link(__('Nova presença'), ['controller' => 'Presenca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar presenças'), ['controller' => 'Presenca', 'action' => 'index']) ?></li>  
    </ul>
</nav>

