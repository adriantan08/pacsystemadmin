<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pac Emp Roles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pacEmpRoles form large-9 medium-8 columns content">
    <?= $this->Form->create($pacEmpRole) ?>
    <fieldset>
        <legend><?= __('Add Pac Emp Role') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('role_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
