<?php
/**
 * Plugin Name: GitCard
 * Plugin URI: https://github.com/niqingyang/wp-gitcard
 * Description: 在你的文章中插入Git仓库卡片
 * Version: 1.0.0
 * Author: 戴兜、niqingyang
 * Author URI: https://acme.top
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * @package CGB
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define('GITCARDS_FILE', __FILE__);
define('GITCARDS_VERSION', '1.0.0');
define('GITCARDS_URL', plugins_url('', __FILE__));
define('GITCARDS_PATH', dirname(__FILE__));
define('GITCARDS_ADMIN_URL', admin_url());


require_once GITCARDS_PATH . '/src/init.php';
