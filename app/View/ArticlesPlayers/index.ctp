<div class="articlesPlayers index">
	<h2><?php echo __('Articles Players'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('article_id'); ?></th>
			<th><?php echo $this->Paginator->sort('player_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($articlesPlayers as $articlesPlayer): ?>
	<tr>
		<td><?php echo h($articlesPlayer['ArticlesPlayer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($articlesPlayer['Article']['title'], array('controller' => 'articles', 'action' => 'view', $articlesPlayer['Article']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($articlesPlayer['Player']['id'], array('controller' => 'players', 'action' => 'view', $articlesPlayer['Player']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $articlesPlayer['ArticlesPlayer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $articlesPlayer['ArticlesPlayer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $articlesPlayer['ArticlesPlayer']['id']), array(), __('Are you sure you want to delete # %s?', $articlesPlayer['ArticlesPlayer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Articles Player'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>