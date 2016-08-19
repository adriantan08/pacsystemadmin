<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pac Emp Role'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacEmpRoles index large-9 medium-8 columns content">
    <h3><?= __('Pac Emp Roles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('role_status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacEmpRoles as $pacEmpRole): ?>
            <tr>
                <td><?= $this->Number->format($pacEmpRole->id) ?></td>
                <td><?= h($pacEmpRole->name) ?></td>
                <td><?= h($pacEmpRole->role_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pacEmpRole->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pacEmpRole->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pacEmpRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacEmpRole->id)]) ?>
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
