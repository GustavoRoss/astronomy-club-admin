<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->element('sidenav')?>
<div class="insignia form large-9 medium-8 columns content">
    <?= $this->Form->create($insignium) ?>
    <fieldset>
        <legend><?= __('Adicionar Insígnia') ?></legend>
        <?php
            echo $this->Form->control('nome', ['label' => 'Nome', 'type' => 'text']);                    
            echo $this->Form->control('qtdmax', ['label' => 'Quantidade Máxima']);
            echo $this->Form->control('qtdmin', ['label' => 'Quantidade Mínima']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
