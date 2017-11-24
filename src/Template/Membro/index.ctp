<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Membro[]|\Cake\Collection\CollectionInterface $membro
 */
?>
<?= $this->element('sidenav')?>
<div class="membro index large-9 medium-8 columns content">
    <h3><?= __('Membros') ?></h3>
    <form action="/membro/search" method="get">
        <input type="text" name="q" placeholder="Buscar por nome ou matricula...">
        <button>Buscar</button>
    </form>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Foto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula', 'Matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($membros as $key => $membro): ?>
            <tr> 
                <?php if($membro->getHasImage()) :?>  
                    <td><?php echo '<img weight="50px" height="50px" src="/img/bart.jpg" />'; ?></td>                        
                <?php else : ?>   
                    <?php foreach($imagens as $imagem) : ?>
                            <?php if($membro->matricula === $imagem->getName()) : ?> 
                                <td><?php echo '<img weight="50px" height="50px" src="data:image/gif;base64,' . $imagem->getBase64Code() . '" />'; ?></td>
                                <?php break; ?>
                            <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>                    
                <td><?= h($membro->matricula) ?></td>
                <td><?= h($membro->nome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $membro->matricula]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php if(count($membros) < 1) : ?>
        <h1 class="alert-box"><?= count($membros) ?> membros(s) encontrado(s).</h1>
    <?php endif; ?>
 <?= $this->element('footer') ?>
</div>
