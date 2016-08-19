<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pac Employee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pac Emp Roles'), ['controller' => 'PacEmpRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pac Emp Role'), ['controller' => 'PacEmpRoles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacEmployees index large-9 medium-8 columns content">
    <h3><?= __('Pac Employees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('emp_firstname') ?></th>
                <th><?= $this->Paginator->sort('emp_lastname') ?></th>
                
                <th><?= $this->Paginator->sort('emp_role_id') ?></th>
                <th><?= $this->Paginator->sort('emp_status') ?></th>
                
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacEmployees as $pacEmployee): ?>
            <tr>
                <td><?= $this->Number->format($pacEmployee->id) ?></td>
                <td><?= h($pacEmployee->emp_firstname) ?></td>
                <td><?= h($pacEmployee->emp_lastname) ?></td>
                
                <td><?= $pacEmployee->has('pac_emp_role') ? $this->Html->link($pacEmployee->pac_emp_role->name, ['controller' => 'PacEmpRoles', 'action' => 'view', $pacEmployee->pac_emp_role->id]) : '' ?></td>
                <td><?= h($pacEmployee->emp_status) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pacEmployee->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pacEmployee->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pacEmployee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacEmployee->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
