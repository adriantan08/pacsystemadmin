<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pac Employee'), ['action' => 'edit', $pacEmployee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pac Employee'), ['action' => 'delete', $pacEmployee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacEmployee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pac Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pac Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pac Emp Roles'), ['controller' => 'PacEmpRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pac Emp Role'), ['controller' => 'PacEmpRoles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacEmployees view large-9 medium-8 columns content">
    
    <table class="vertical-table">
        <tr>
            <th><?= __('Emp Firstname') ?></th>
            <td><?= h($pacEmployee->emp_firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Emp Lastname') ?></th>
            <td><?= h($pacEmployee->emp_lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Emp Email') ?></th>
            <td><?= h($pacEmployee->emp_email) ?></td>
        </tr>
        <tr>
            <th><?= __('Pac Emp Role') ?></th>
            <td><?= $pacEmployee->has('pac_emp_role') ? $this->Html->link($pacEmployee->pac_emp_role->name, ['controller' => 'PacEmpRoles', 'action' => 'view', $pacEmployee->pac_emp_role->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Emp Status') ?></th>
            <td><?= h($pacEmployee->emp_status) ?></td>
        </tr>
        <tr>
            <th><?= __('Emp Username') ?></th>
            <td><?= h($pacEmployee->emp_username) ?></td>
        </tr>
       
        
    </table>
</div>
