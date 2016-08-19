<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pac Employees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pac Emp Roles'), ['controller' => 'PacEmpRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pac Emp Role'), ['controller' => 'PacEmpRoles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacEmployees form large-9 medium-8 columns content">
    <?= $this->Form->create($pacEmployee) ?>
    <fieldset>
        <legend><?= __('Add Pac Employee') ?></legend>
        <?php
            echo $this->Form->input('emp_firstname');
            echo $this->Form->input('emp_lastname');
            echo $this->Form->input('emp_email');
            echo $this->Form->input('emp_role_id', ['options' => $pacEmpRoles]);
            echo $this->Form->input('emp_status');
            echo $this->Form->input('emp_username');
            echo $this->Form->input('emp_password',array('type' => 'password'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
