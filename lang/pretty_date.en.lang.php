<?php
/**
 * Localization file for Pretty date
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2015
 * @license Distributed under BSD license.
*/

defined('COT_CODE') or die('Wrong URL');

$L['plu_title'] = 'Pretty date';

$L['info_desc'] ='Format date to user friendly format';

$L['cfg_fixdate_params'] =  '-off-,Minute,Hour,Day,Week,Month,Year';
$L['cfg_fixdate'] ='Fallback range';
$L['cfg_fixdate_hint'] ='Date will be formatted common way ('.cot_date('j M G:i').'), if date is older than range specified';

$L['cfg_formatdate'] =  'Can enter your option on the standard format';
$L['cfg_formatdate_hint'] =  'For example, <b>d.m.Y H:i:s</b> — display <b>'.cot_date('d.m.Y H:i:s').'</b>';

$L['pd_after'] = 'after ';

$adminhelp1 = '';