<?php
if (!defined('FLUX_ROOT')) exit;
$title = 'Battle Ground Ranking';

$SortType = array(
		"`char_bg`.`points`",
		"`char_bg`.`rank_points`",
		"`char`.`bg_gold`",
		"`char`.`bg_silver`",
		"`char`.`bg_bronze`",
		"`char_bg`.`score`",

		"`char_bg`.`win`",
		"`char_bg`.`tie`",
		"`char_bg`.`lost`",
		"`char_bg`.`leader_win`",
		"`char_bg`.`leader_tie`",
		"`char_bg`.`leader_lost`",

		"`char_bg`.`kill_count`",
		"`char_bg`.`death_count`",
		"`char_bg`.`deserter`",

		"`char_bg`.`ctf_taken`",
		"`char_bg`.`ctf_captured`",
		"`char_bg`.`ctf_droped`",
		"`char_bg`.`ctf_wins`",
		"`char_bg`.`ctf_tie`",
		"`char_bg`.`ctf_lost`",

		"`char_bg`.`td_kills`",
		"`char_bg`.`td_deaths`",
		"`char_bg`.`td_wins`",
		"`char_bg`.`td_tie`",
		"`char_bg`.`td_lost`",

		"`char_bg`.`sc_stole`",
		"`char_bg`.`sc_captured`",
		"`char_bg`.`sc_droped`",
		"`char_bg`.`sc_wins`",
		"`char_bg`.`sc_tie`",
		"`char_bg`.`sc_lost`",

		"`char_bg`.`eos_flags`",
		"`char_bg`.`eos_bases`",
		"`char_bg`.`eos_wins`",
		"`char_bg`.`eos_tie`",
		"`char_bg`.`eos_lost`",

		"`char_bg`.`boss_damage`",
		"`char_bg`.`boss_killed`",
		"`char_bg`.`boss_flags`",
		"`char_bg`.`boss_wins`",
		"`char_bg`.`boss_tie`",
		"`char_bg`.`boss_lost`",

		"`char_bg`.`skulls`",
		"`char_bg`.`ti_wins`",
		"`char_bg`.`ti_tie`",
		"`char_bg`.`ti_lost`",

		"`char_bg`.`emperium_kill`",
		"`char_bg`.`barricade_kill`",
		"`char_bg`.`gstone_kill`",
		"`char_bg`.`cq_wins`",
		"`char_bg`.`cq_lost`",

		"`char_bg`.`top_damage`",
		"`char_bg`.`damage_done`",
		"`char_bg`.`damage_received`",
		"`char_bg`.`support_skills_used`",
		"`char_bg`.`wrong_support_skills_used`",
		"`char_bg`.`healing_done`",
		"`char_bg`.`wrong_healing_done`",
		"`char_bg`.`hp_heal_potions`",
		"`char_bg`.`sp_heal_potions`",
		"`char_bg`.`yellow_gemstones`",
		"`char_bg`.`red_gemstones`",
		"`char_bg`.`blue_gemstones`",
		"`char_bg`.`zeny_used`",
		"`char_bg`.`ammo_used`",
		"`char_bg`.`acid_demostration`",
		"`char_bg`.`poison_bottles`",
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
			`char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`playtime`, `char`.`max_hp`, `char`.`max_sp`, `char`.`str`, `char`.`int`, `char`.`vit`, `char`.`dex`, `char`.`agi`, `char`.`luk`, `char`.`bg_gold`, `char`.`bg_silver`, `char`.`bg_bronze`,
			`login`.`sex`,
			`guild`.`name` AS `gname`, `guild`.`guild_id`, `guild`.`emblem_data`,
			`char_bg`.*
		FROM
			`char` JOIN `char_bg` ON `char_bg`.`char_id` = `char`.`char_id` JOIN `login` ON `login`.`account_id` = `char`.`account_id` LEFT JOIN `guild` ON `guild`.`guild_id` = `char`.`guild_id`
		WHERE
			`char_bg`.`char_id` > '0' AND `login`.`level` < '1' AND `login`.`state` = '0' ";
			
if($myClass != "All"){
	$sql .= "AND `char`.`class` = '" . $myClass . "' ";
}

$sql .= "ORDER BY " . $SortType[$myTypeSort] . " " .  $mySort;
			
$sql .= " LIMIT 0, 20";

$sth  = $server->connection->getStatement($sql);
$sth->execute($bind);
$playerLadder = $sth->fetchAll();


?>
