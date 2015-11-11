<?php
/**
 * Localization file for Pretty date
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2015
 * @license Distributed under BSD license.
*/

defined('COT_CODE') or die('Wrong URL');

$L['plu_title'] = 'Pretty date';

$L['info_desc'] ='Форматирует дату в удобное представление';
$L['info_notes'] ='Отображает дату в удобном для восприятия виде. Пример: «15 минут назад»';

$L['cfg_fixdate_params'] =  '-нет-,Минута,Час,День,Неделя,Месяц,Год';
$L['cfg_fixdate'] ='Порог отключения форматирования';
$L['cfg_fixdate_hint'] ='Будет отображено стандартное форматирование ('.cot_date('j M G:i').'), если с момента даты прошло более указанного времени';

$L['pd_after'] = 'через ';

$adminhelp1 = '';