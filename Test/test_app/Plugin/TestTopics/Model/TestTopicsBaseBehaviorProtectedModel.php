<?php
/**
 * TopicsBaseBehavior::_saveTopicReadable()テスト用Model
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppModel', 'Model');

/**
 * TopicsBaseBehavior::_saveTopicReadable()テスト用Model
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Topics\Test\test_app\Plugin\TestTopics\Model
 */
class TestTopicsBaseBehaviorProtectedModel extends AppModel {

/**
 * 使用ビヘイビア
 *
 * @var array
 */
	public $actsAs = array(
		'Topics.TopicsBase'
	);

}
