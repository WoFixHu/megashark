<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Showtime[]|\Cake\Collection\CollectionInterface $showtimes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Showtime'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="showtimes index large-9 medium-8 columns content">
    <h3><?= __('Showtimes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('room_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($showtimes as $showtime): ?>
            <tr>
                <td><?= $this->Number->format($showtime->id) ?></td>
                <td><?= $showtime->has('movie') ? $this->Html->link($showtime->movie->name, ['controller' => 'Movies', 'action' => 'view', $showtime->movie->id]) : '' ?></td>
                <td><?= $showtime->has('room') ? $this->Html->link($showtime->room->name, ['controller' => 'Rooms', 'action' => 'view', $showtime->room->id]) : '' ?></td>
                <td><?= h($showtime->start) ?></td>
                <td><?= h($showtime->end) ?></td>
                <td><?= h($showtime->created) ?></td>
                <td><?= h($showtime->modified) ?></td>                
            </tr>
            <?php endforeach; ?>
        <tbody/>
            <div class="showtimes index large-9 medium-8 columns content">
                <table cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('Monday') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Tuesday') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Wednesday') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Thursday') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Friday') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Saturday') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Sunday') ?></th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Titanic</td>
                            <td></td>
                            <td>Avatar</td>
                            <td>Albator</td>
                            <td>World War Z</td>
                            <td></td>                
                        </tr>
                    </tbody>
                </table>
            </div>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>


