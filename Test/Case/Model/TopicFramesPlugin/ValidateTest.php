<?php
/**
 * TopicFramesPlugin::validate()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsValidateTest', 'NetCommons.TestSuite');
App::uses('TopicFramesPluginFixture', 'Topics.Test/Fixture');

/**
 * TopicFramesPlugin::validate()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Topics\Test\Case\Model\TopicFramesPlugin
 */
class TopicFramesPluginValidateTest extends NetCommonsValidateTest {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.categories.category',
		'plugin.categories.category_order',
		'plugin.topics.topic',
		'plugin.topics.topic_frame_setting',
		'plugin.topics.topic_frames_block',
		'plugin.topics.topic_frames_plugin',
		'plugin.topics.topic_frames_room',
		'plugin.topics.topic_readable',
		'plugin.topics.topic_user_status',
		'plugin.workflow.workflow_comment',
	);

/**
 * Plugin name
 *
 * @var string
 */
	public $plugin = 'topics';

/**
 * Model name
 *
 * @var string
 */
	protected $_modelName = 'TopicFramesPlugin';

/**
 * Method name
 *
 * @var string
 */
	protected $_methodName = 'validates';

/**
 * ValidationErrorのDataProvider
 *
 * ### 戻り値
 *  - data 登録データ
 *  - field フィールド名
 *  - value セットする値
 *  - message エラーメッセージ
 *  - overwrite 上書きするデータ(省略可)
 *
 * @return array テストデータ
 */
	public function dataProviderValidationError() {
		$data['TopicFramesPlugin'] = (new TopicFramesPluginFixture())->records[0];

		return array(
			// * frame_key
			array('data' => $data, 'field' => 'frame_key', 'value' => '',
				'message' => __d('net_commons', 'Invalid request.')),
			// * plugin_key
			array('data' => $data, 'field' => 'plugin_key', 'value' => '',
				'message' => __d('net_commons', 'Invalid request.')),
		);
	}

}
