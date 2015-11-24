<?php
if (!defined('FLUX_ROOT')) exit;
$title = 'War of Emperium Ranking';

	function playtime($time)
	{
		$days = intval($time / 86400);
		$time -= $days * 86400;

		$hour = intval($time / 3600);
		$time -= $hour * 3600;

		$minute = intval($time / 60);
		$time -= $minute * 60;

		$second = $time;

		$days = $days > 0 ? $days : 0;
		$hour = $hour > 0 ? $hour : 0;
		$minute = $minute > 0 ? $minute : 0;
		$second = $second > 0 ? $second : 0;

		return sprintf("%d days, %02d:%02d:%02d", $days, $hour, $minute, $second);
	}

$SortType = array(
		"`char_wstats`.`score`",
		"`char_wstats`.`kill_count`",
		"`char_wstats`.`death_count`",
		"`char_wstats`.`top_damage`",
		"`char_wstats`.`damage_done`",
		"`char_wstats`.`damage_received`",
		"`char_wstats`.`emperium_damage`",
		"`char_wstats`.`barricade_damage`",
		"`char_wstats`.`gstone_damage`",
		"`char_wstats`.`guardian_damage`",
		"`char_wstats`.`emperium_kill`",
		"`char_wstats`.`barricade_kill`",
		"`char_wstats`.`gstone_kill`",
		"`char_wstats`.`guardian_kill`",
		"`char_wstats`.`support_skills_used`",
		"`char_wstats`.`wrong_support_skills_used`",
		"`char_wstats`.`healing_done`",
		"`char_wstats`.`wrong_healing_done`",
		"`char_wstats`.`hp_heal_potions`",
		"`char_wstats`.`sp_heal_potions`",
		"`char_wstats`.`yellow_gemstones`",
		"`char_wstats`.`red_gemstones`",
		"`char_wstats`.`blue_gemstones`",
		"`char_wstats`.`zeny_used`",
		"`char_wstats`.`ammo_used`",
		"`char_wstats`.`acid_demostration`",
		"`char_wstats`.`poison_bottles`",
);


if (!isset($_GET['myClass'])){
	$myClass = "All";
}else{
	$myClass = $_GET['myClass'];
}

if (!isset($_GET['myTypeSort'])){
	$myTypeSort = "0";
}else{
	$myTypeSort = $_GET['myTypeSort'];
}

if (!isset($_GET['mySort'])){
	$mySort = "DESC";
}else{
	$mySort = $_GET['mySort'];
}


$bind = array();
$sql  = "SELECT
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`, `char`.`char_id`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`, `guild`.`emblem_len`,
			`char_wstats`.`score`, `char_wstats`.`kill_count`, `char_wstats`.`death_count`,
			`char_wstats`.`top_damage`, `char_wstats`.`damage_done`, `char_wstats`.`damage_received`,
			`char_wstats`.`emperium_damage`, `char_wstats`.`guardian_damage`, `char_wstats`.`barricade_damage`, `char_wstats`.`gstone_damage`,
			`char_wstats`.`emperium_kill`, `char_wstats`.`guardian_kill`, `char_wstats`.`barricade_kill`, `char_wstats`.`gstone_kill`,
			`char_wstats`.`sp_heal_potions`, `char_wstats`.`hp_heal_potions`, `char_wstats`.`yellow_gemstones`, `char_wstats`.`red_gemstones`, `char_wstats`.`blue_gemstones`,
			`char_wstats`.`poison_bottles`, `char_wstats`.`acid_demostration`, `char_wstats`.`acid_demostration_fail`, `char_wstats`.`support_skills_used`, `char_wstats`.`healing_done`, `char_wstats`.`ammo_used`,
			`char_wstats`.`wrong_support_skills_used`, `char_wstats`.`wrong_healing_done`, `char_wstats`.`sp_used`, `char_wstats`.`zeny_used`, `char_wstats`.`spiritb_used`
		FROM
			`char` JOIN `char_wstats` ON `char_wstats`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_wstats`.`char_id` > '0' AND `login`.`level` < '1' AND `login`.`state` = '0' ";
			
if($myClass != "All"){
	$sql .= "AND `char`.`class` = '" . $myClass . "' ";
}

$sql .= "ORDER BY " . $SortType[$myTypeSort] . " " .  $mySort;
			
$sql .= " LIMIT 0, 20";
if($myClass == "catj0bclass")
Print_r($server->connection);
$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);
$playerLadder = $sth->fetchAll();

?>
