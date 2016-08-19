<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pacEmpRole->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pacEmpRole->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pac Emp Roles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pacEmpRoles form large-9 medium-8 columns content">
    <?= $this->Form->create($pacEmpRole) ?>
    <fieldset>
        <legend><?= __('Edit Pac Emp Role') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('role_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
