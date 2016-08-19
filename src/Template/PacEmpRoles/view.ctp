<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pac Emp Role'), ['action' => 'edit', $pacEmpRole->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pac Emp Role'), ['action' => 'delete', $pacEmpRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacEmpRole->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pac Emp Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pac Emp Role'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacEmpRoles view large-9 medium-8 columns content">
    <h3><?= h($pacEmpRole->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($pacEmpRole->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Role Status') ?></th>
            <td><?= h($pacEmpRole->role_status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pacEmpRole->id) ?></td>
        </tr>
    </table>
</div>
