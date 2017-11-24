<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->element('sidenav')?>
<div class="presenca form large-9 medium-8 columns content">
    <?= $this->Form->create($presenca) ?>
    <fieldset>
        <legend><?= __('Nova Presenca') ?></legend>
        <?php
            echo $this->Form->control('idatividade', ['label' => 'ID da Atividade']);
            echo $this->Form->control('matricula', ['label' => 'Matrícula' ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
