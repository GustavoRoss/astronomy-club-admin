<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->element('sidenav')?>
<div class="membro form large-9 medium-8 columns content">
    <?= $this->Form->create($membro) ?>
    <fieldset>
        <legend><?= __('Editar Membro') ?></legend>
        <div class="column medium-3">
            <?= $this->Form->control('matricula', [
                'label' => 'Matrícula',
                'type' => 'text']) ?>
            </div>
            <div class="column medium-9">
                <?= $this->Form->control('nome', ['label' => 'Nome']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('insignia', ['label' => 'Insígnia']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('datanasc', ['label' => 'Data de Nascimento']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('nomeresp1', ['label' => 'Nome(responsável)']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('nomeresp2', ['label' => 'Nome(outro responsável)']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('email', ['label' => 'Email']); ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('funcao', ['label' => 'Função']) ?>
            </div>
            <div class="column medium-12">
                <?= $this->Form->control('descricao', [
                    'label' => 'Descrição',
                    'type' => 'textarea'
                ]) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('telefone', ['label' => 'Telefone']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('teleresp1', ['label' => 'Telefone(responsável)']) ?>                
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('teleresp2', ['label' => 'Telefone(outro responsáel)']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('emailresp1', ['label' => 'Primeiro email(responsável)']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('emailresp2', ['label' => 'Segundo email(responsável)']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('cep', ['label' => 'CEP']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('cidade_uf', ['label' => 'Cidade']) ?>
            </div>
            <div class="column medium-6">
                <?= $this->Form->control('endereco', ['label' => 'Endereço']) ?>
            </div>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
