<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\CustomAlerts;

use Piwik\Common;
use Piwik\Site;
use Piwik\Updater;
use Piwik\Updates;

/**
 */
class Updates_0_0_6 extends Updates
{
    static function getSql()
    {
        return array(
            "ALTER TABLE `" . Common::prefixTable('alert_log') . "` ADD `ts_last_sent` timestamp NULL DEFAULT NULL AFTER `ts_triggered` " => 1060
        );
    }

    static function update()
    {
        Updater::updateDatabase(__FILE__, self::getSql());
    }
}
