<?php
/**
 * 新着表示itemエレメント
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>

<article class="topic-row-outer">
	<div class="clearfix">
		<div class="pull-left topic-title">
			<a href="<?php echo $item['Topic']['url']; ?>" ng-click="link($event)">
				<?php echo h($item['Topic']['display_title']); ?>
			</a>
		</div>

		<div class="pull-left topic-status" ng-show="<?php echo (bool)$item['Topic']['display_status']; ?>">
			<?php echo $item['Topic']['display_status']; ?>
		</div>

		<?php if ($topicFrameSetting['display_plugin_name']) : ?>
			<div class="pull-left topic-plugin-name">
				<span class="label label-default">
					<?php echo h($item['Plugin']['display_name']); ?>
				</span>
			</div>
		<?php endif; ?>

		<?php if ($topicFrameSetting['display_created']) : ?>
			<div class="pull-left topic-datetime">
				<?php echo h($item['Topic']['display_publish_start']); ?>
			</div>
		<?php endif; ?>

		<?php if ($topicFrameSetting['display_room_name']) : ?>
			<div class="pull-left topic-room-name">
				<?php echo h($item['RoomsLanguage']['display_name']); ?>
			</div>
		<?php endif; ?>

		<?php if ($topicFrameSetting['display_category_name']) : ?>
			<?php if ($item['CategoriesLanguage']['name']) : ?>
				<div class="pull-left topic-category-name">
					<?php echo h($item['CategoriesLanguage']['display_name']); ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ($topicFrameSetting['display_created_user']) : ?>
			<div class="pull-left topic-handle-name">
				<?php echo $item['TrackableCreator']['avatar']; ?>
				<a ng-click="showUser($event, <?php echo $item['TrackableCreator']['id']; ?>)" ng-controller="Users.controller" href="#">
					<?php echo h($item['TrackableCreator']['handlename']); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>

	<?php if ($topicFrameSetting['display_summary']) : ?>
		<div class="text-muted topic-summary">
			<?php echo h($item['Topic']['display_summary']); ?>
		</div>
	<?php endif; ?>
</article>
