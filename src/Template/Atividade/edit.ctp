<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->element('sidenav')?>
<div class="atividade form large-9 medium-8 columns content">
    <?= $this->Form->create($atividade) ?>
    <fieldset>
        <legend><?= __('Editar Atividade') ?></legend>
        <?php
            echo $this->Form->control('nome', ['label' => 'Nome']);
            echo $this->Form->control('dataevento', ['label' => 'Data do Evento']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
