<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
==================== */
defined('COT_CODE') or die('Wrong URL.');

require cot_langfile('pretty_date');

function cot_pretty_date($timestamp, $uc_first = true, $std_Fmt = 'j M G:i')
{
	global $sys, $cfg, $L;

	if (preg_match('/[^\d]/', $timestamp))
	{
		$timestamp = cot_date2stamp($timestamp,'auto');
	}
	if (!$timestamp) return;
	$gap = $sys['now'] - $timestamp;
	if ($gap < 0)
	{
		$string = $L['pd_after'] . cot_build_timegap($sys['now'], $timestamp, 1);
	}
	elseif ($gap < 60)
	{
		$string = $L['JustNow'];
	}
	else
	{
		if ($cfg['plugin']['pretty_date']['fixdate'])
		{
			$string = cot_date($std_fmt, $timestamp);
		}
		else
		{
			$string = cot_build_timegap($timestamp, null, 1, 0, null) . ' ' . $L['Ago'];
		}
	}

	$string = mb_strtolower($string);
	if ($uc_first) $string = mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
	return $string;
}

