<br />
<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php 
$Rank = array(
		"Civilian",
		"Private",
		"Corporal",
		"Sergeant",
		"Master<br>Sergeant",
		"Sergeant<br>Major",
		"Knight",
		"Knight<br>Lieutenant",
		"Knight<br>Captain",
		"Knight<br>Champion",
		"Lieutenant<br>Commander",
		"Commander",
		"Marshal",
		"Field Marshal",
		"Grand Marshal",
	);
	
?>
<h3>War of Emperium Ranking</h3><br>
<div style="text-align:left; overflow:auto;">
	<form action="" method="get" id="mySelectClass">
		<input type="hidden" id="module" name="module" value="earank" />
		<input type="hidden" id="action" name="action" value="woe" />
		<select name="myClass" id="myClass" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
			<option value="All">All Jobs</option>
			<?php
			for ($i = 1; $i < 26; $i++) {
				if ($i != 13 && $i != 21 && $i != 22 && $i != 26)
					$mySelect = "";
					if($myClass == $i) $mySelect = "selected";
					echo "<option value=\"$i\" $mySelect>" . $job=$this->jobClassText($i) . "</option>";
			}
			for ($i = 4001; $i < 4050; $i++) {
				if ($i != 4014 && $i != 4022 && $i != 4036 && $i != 4044 && $i != 4048)
					$mySelect = "";
					if($myClass == $i) $mySelect = "selected";
					echo "<option value=\"$i\" $mySelect>" . $job=$this->jobClassText($i) . "</option>";
			} ?>
		</select>
		<select name="myTypeSort" id="myTypeSort" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
			<option selected value="0">Ofensiva</option>
			<option value="1" <?php if($myTypeSort == 1) echo "selected"; ?>>Kills</option>
			<option value="2" <?php if($myTypeSort == 2) echo "selected"; ?>>Deaths</option>
			<option value="3" <?php if($myTypeSort == 3) echo "selected"; ?>>Best Damage</option>
			<option value="4" <?php if($myTypeSort == 4) echo "selected"; ?>>Total Damage Done</option>
			<option value="5" <?php if($myTypeSort == 5) echo "selected"; ?>>Total Damage Received</option>
			<option value="6" <?php if($myTypeSort == 6) echo "selected"; ?>>Emperium Damage</option>
			<option value="7" <?php if($myTypeSort == 7) echo "selected"; ?>>Barricade Damage</option>
			<option value="8" <?php if($myTypeSort == 8) echo "selected"; ?>>Guardian Stone Damage</option>
			<option value="9" <?php if($myTypeSort == 9) echo "selected"; ?>>Guardian Damage</option>
			<option value="10" <?php if($myTypeSort == 10) echo "selected"; ?>>Emperium Kills</option>
			<option value="11" <?php if($myTypeSort == 11) echo "selected"; ?>>Barricade Kills</option>
			<option value="12" <?php if($myTypeSort == 12) echo "selected"; ?>>Guardian Stone Kills</option>
			<option value="13" <?php if($myTypeSort == 13) echo "selected"; ?>>Guardian Kills</option>
			<option value="14" <?php if($myTypeSort == 14) echo "selected"; ?>>Good Support Skills</option>
			<option value="15" <?php if($myTypeSort == 15) echo "selected"; ?>>Wrong Support Skills</option>
			<option value="16" <?php if($myTypeSort == 16) echo "selected"; ?>>Total Good Healing</option>
			<option value="17" <?php if($myTypeSort == 17) echo "selected"; ?>>Total Wrong Healing</option>
			<option value="18" <?php if($myTypeSort == 18) echo "selected"; ?>>HP Potions Used</option>
			<option value="19" <?php if($myTypeSort == 19) echo "selected"; ?>>SP Potions Used</option>
			<option value="20" <?php if($myTypeSort == 20) echo "selected"; ?>>Yellow Gems Used</option>
			<option value="21" <?php if($myTypeSort == 21) echo "selected"; ?>>Red Gems Used</option>
			<option value="22" <?php if($myTypeSort == 22) echo "selected"; ?>>Blue Gems Used</option>
			<option value="23" <?php if($myTypeSort == 23) echo "selected"; ?>>Zeny Used</option>
			<option value="24" <?php if($myTypeSort == 24) echo "selected"; ?>>Arrows Used</option>
			<option value="25" <?php if($myTypeSort == 25) echo "selected"; ?>>Acid Demonstration Casted</option>
			<option value="26" <?php if($myTypeSort == 26) echo "selected"; ?>>Enchanted Deadly Poison Casted</option>
		</select>
		<select name="mySort" id="mySort" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
			<option value="DESC" <?php if($myTypeSort == "DESC") echo "selected"; ?>>Descending</option>
			<option value="ASC" <?php if($myTypeSort == "ASC") echo "selected"; ?>>Ascending</option>
		</select>
		<input type="submit" name="Submit" value="Submit" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
	</form>
	
</div>

<?php $count = 0;
	foreach ($playerLadder as $playerLadder){ 
	$count++;
	$result = intval($playerLadder->score / 270);
	if( $result > 14 )
		$result = 14;
	if( $result == 0)
		$result = 1;
?>

<div style="width:515px; overflow:auto;">

	<table width="100%" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<th style="width:20px; padding:3px;" rowspan="2">
				<img src="<?php echo $this->emblem($playerLadder->guild_id) ?>" />
			</th>
			<th align="left" style="padding:3px;"><span style="font-size:15px; font-weight:bold;"><?php echo $playerLadder->name; ?></span></th>
			<th align="right" style="width:100px; padding:3px;"><span style="font-size:15px; font-weight:bold;"><?php echo $count; ?></span></th>							
		</tr>
		<tr>
			<th align="left" style="padding:3px;"><?php echo $playerLadder->gname; ?></th>
			<th align="right" style="width:100px; padding:3px;"><font color="#FFC300"><?php echo playtime($playerLadder->playtime); ?></font></th>
		</tr>
		<tr>
			<td colspan="3">
				<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:0;">
					<tr>
						<td align="center" style="padding:0;" style="width:100px;">
							<?php if ($job=$this->jobClassText($playerLadder->class)): ?>
								<?php echo htmlspecialchars($job) ?>
							<?php else: ?>
								<span class="not-applicable">Unknown</span>
							<?php endif ?>
							<?php echo "<BR>" . $playerLadder->max_hp . " / " . $playerLadder->max_sp . "<BR>"; ?>
						<BR><BR><BR>
							<br /><?php echo $Rank[$result] ?>
						</td>
						<td style="padding:0;">
							<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:0;">
								<tr>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="6" style="color:#FFFFFF; background-color:#000">General Statistics</th>
											</tr>
											<tr>

												<td><strong>Score</strong><br /><?php echo $playerLadder->score; ?></td>

												<td><strong>Kill</strong><br /><?php echo $playerLadder->kill_count; ?></td>

												<td><strong>Death</strong><br /><?php echo $playerLadder->death_count; ?></td>
											</tr>
										</table>
									</td>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="6" style="color:#FFFFFF; background-color:#000">Damage VS Player</th>
											</tr>
											<tr>

												<td><strong>Score</strong><br /><?php echo $playerLadder->top_damage; ?></td>

												<td><strong>Kill</strong><br /><?php echo $playerLadder->damage_done; ?></td>

												<td><strong>Death</strong><br /><?php echo $playerLadder->damage_received; ?></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="4" style="color:#FFFFFF; background-color:#000">Damage vs Estructures</th>
											</tr>
											<tr>

												<td><strong>Emperium</strong><br /><?php echo $playerLadder->emperium_damage; ?></td>

												<td><strong>Barricade</strong><br /><?php echo $playerLadder->barricade_damage; ?></td>
											</tr>
											<tr>

												<td><strong>G.Stone</strong><br /><?php echo $playerLadder->gstone_damage; ?></td>

												<td><strong>Guardian</strong><br /><?php echo $playerLadder->guardian_damage; ?></td>
											</tr>
										</table>
									</td>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="4" style="color:#FFFFFF; background-color:#000">Estructure Eliminated</th>
											</tr>
											<tr>

												<td><strong>Emperium</strong><br /><?php echo $playerLadder->emperium_kill; ?></td>

												<td><strong>Barricade</strong><br /><?php echo $playerLadder->barricade_kill; ?></td>
											</tr>
											<tr>

												<td><strong>G.Stone</strong><br /><?php echo $playerLadder->gstone_kill; ?></td>

												<td><strong>Guardian</strong><br /><?php echo $playerLadder->guardian_kill; ?></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="4" style="color:#FFFFFF; background-color:#000">Skill Support</th>
											</tr>
											<tr>

												<td><strong>Correct</strong><br /><?php echo $playerLadder->support_skills_used; ?></td>

												<td><strong>Error</strong><br /><?php echo $playerLadder->wrong_support_skills_used; ?></td>
											</tr>
										</table>
									</td>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="4" style="color:#FFFFFF; background-color:#000">Total Healing</th>
											</tr>
											<tr>

												<td><strong>Correct</strong><br /><?php echo $playerLadder->healing_done; ?></td>

												<td><strong>Error</strong><br /><?php echo $playerLadder->wrong_healing_done; ?></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding:2px;" colspan="2">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="10" style="color:#FFFFFF; background-color:#000">Items Consumed</th>
											</tr>
											<tr>

												<td><strong>HP</strong><br /><?php echo $playerLadder->hp_heal_potions; ?></td>

												<td><strong>SP</strong><br /><?php echo $playerLadder->sp_heal_potions; ?></td>

												<td><strong>Gems</strong><br /><?php echo $playerLadder->yellow_gemstones; ?></td>

												<td><strong>Gems</strong><br /><?php echo $playerLadder->red_gemstones; ?></td>

												<td><strong>Gems</strong><br /><?php echo $playerLadder->blue_gemstones; ?></td>
											</tr>
											<tr>

												<td colspan="3"><strong>Total Zeny</strong><br /><?php echo $playerLadder->zeny_used; ?></td>

												<td><strong>Arrow</strong><br /><?php echo $playerLadder->ammo_used; ?></td>

												<td><strong>Bottle</strong><br /><?php echo $playerLadder->acid_demostration; ?></td>

												<td><strong>Bottle</strong><br /><?php echo $playerLadder->poison_bottles; ?></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
<?php } ?>
