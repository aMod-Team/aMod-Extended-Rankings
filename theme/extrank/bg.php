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
<h3>Battleground Rankings</h3><br>
<div style="text-align:left; overflow:auto;">
	<form action="" method="get" id="mySelectClass">
		<input type="hidden" id="module" name="module" value="earank" />
		<input type="hidden" id="action" name="action" value="bg" />
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
			<option value="0" <?php if($myTypeSort == 0) echo "selected"; ?>>Week Points</option>
			<option value="1" <?php if($myTypeSort == 1) echo "selected"; ?>>Gold Medals</option>
			<option value="2" <?php if($myTypeSort == 2) echo "selected"; ?>>Silver Medals</option>
			<option value="3" <?php if($myTypeSort == 3) echo "selected"; ?>>Bronze Medals</option>
			<option value="4" <?php if($myTypeSort == 4) echo "selected"; ?>>Offensive</option>
			<option value="5" <?php if($myTypeSort == 5) echo "selected"; ?>>Game Wins</option>
			<option value="6" <?php if($myTypeSort == 6) echo "selected"; ?>>Game Tie</option>
			<option value="7" <?php if($myTypeSort == 7) echo "selected"; ?>>Game Lost</option>
			<option value="8" <?php if($myTypeSort == 8) echo "selected"; ?>>Leader Game Wins</option>
			<option value="9" <?php if($myTypeSort == 9) echo "selected"; ?>>Leader Game Tie</option>
			<option value="10" <?php if($myTypeSort == 10) echo "selected"; ?>>Leader Game Lost</option>
			<option value="11" <?php if($myTypeSort == 11) echo "selected"; ?>>Kill Counter</option>
			<option value="12" <?php if($myTypeSort == 12) echo "selected"; ?>>Die Counter</option>
			<option value="13" <?php if($myTypeSort == 13) echo "selected"; ?>>Deserted Games</option>
			<option value="14" <?php if($myTypeSort == 14) echo "selected"; ?>>CTF - Flags Taken</option>
			<option value="15" <?php if($myTypeSort == 15) echo "selected"; ?>>CTF - Flags Captured</option>
			<option value="16" <?php if($myTypeSort == 16) echo "selected"; ?>>CTF - Flags Droped</option>
			<option value="17" <?php if($myTypeSort == 17) echo "selected"; ?>>CTF - Game Wins</option>
			<option value="18" <?php if($myTypeSort == 18) echo "selected"; ?>>CTF - Game Tie</option>
			<option value="19" <?php if($myTypeSort == 19) echo "selected"; ?>>CTF - Game Lost</option>
			<option value="20" <?php if($myTypeSort == 20) echo "selected"; ?>>TDM - Kill Counter</option>
			<option value="21" <?php if($myTypeSort == 21) echo "selected"; ?>>TDM - Die Counter</option>
			<option value="22" <?php if($myTypeSort == 22) echo "selected"; ?>>TDM - Game Wins</option>
			<option value="23" <?php if($myTypeSort == 23) echo "selected"; ?>>TDM - Game Tie</option>
			<option value="24" <?php if($myTypeSort == 24) echo "selected"; ?>>TDM - Game Lost</option>
			<option value="25" <?php if($myTypeSort == 25) echo "selected"; ?>>SC - Stone Stole</option>
			<option value="26" <?php if($myTypeSort == 26) echo "selected"; ?>>SC - Stone Captured</option>
			<option value="27" <?php if($myTypeSort == 27) echo "selected"; ?>>SC - Stone Droped</option>
			<option value="28" <?php if($myTypeSort == 28) echo "selected"; ?>>SC - Game Wins</option>
			<option value="29" <?php if($myTypeSort == 29) echo "selected"; ?>>SC - Game Tie</option>
			<option value="30" <?php if($myTypeSort == 30) echo "selected"; ?>>SC - Game Lost</option>
			<option value="31" <?php if($myTypeSort == 31) echo "selected"; ?>>EOS - Flags Captured</option>
			<option value="32" <?php if($myTypeSort == 32) echo "selected"; ?>>EOS - Bases Captured</option>
			<option value="33" <?php if($myTypeSort == 33) echo "selected"; ?>>EOS - Game Wins</option>
			<option value="34" <?php if($myTypeSort == 34) echo "selected"; ?>>EOS - Game Tie</option>
			<option value="35" <?php if($myTypeSort == 35) echo "selected"; ?>>EOS - Game Lost</option>
			<option value="36" <?php if($myTypeSort == 36) echo "selected"; ?>>BOSS - Guardian Damage</option>
			<option value="37" <?php if($myTypeSort == 37) echo "selected"; ?>>BOSS - Guardian Killed</option>
			<option value="38" <?php if($myTypeSort == 38) echo "selected"; ?>>BOSS - Flags Captured</option>
			<option value="39" <?php if($myTypeSort == 39) echo "selected"; ?>>BOSS - Game Wins</option>
			<option value="40" <?php if($myTypeSort == 40) echo "selected"; ?>>BOSS - Game Tie</option>
			<option value="41" <?php if($myTypeSort == 41) echo "selected"; ?>>BOSS - Game Lost</option>
			<option value="42" <?php if($myTypeSort == 42) echo "selected"; ?>>TI - Skulls Taken</option>
			<option value="43" <?php if($myTypeSort == 43) echo "selected"; ?>>TI - Game Wins</option>
			<option value="44" <?php if($myTypeSort == 44) echo "selected"; ?>>TI - Game Tie</option>
			<option value="45" <?php if($myTypeSort == 45) echo "selected"; ?>>TI - Game Lost</option>
			<option value="46" <?php if($myTypeSort == 46) echo "selected"; ?>>CON - Emperium Kills</option>
			<option value="47" <?php if($myTypeSort == 47) echo "selected"; ?>>CON - Barricade Kills</option>
			<option value="48" <?php if($myTypeSort == 48) echo "selected"; ?>>CON - Guarian Stone Kills</option>
			<option value="49" <?php if($myTypeSort == 49) echo "selected"; ?>>CON - Game Wins</option>
			<option value="50" <?php if($myTypeSort == 50) echo "selected"; ?>>CON - Game Lost</option>
			<option value="51" <?php if($myTypeSort == 51) echo "selected"; ?>>Best Damage</option>
			<option value="52" <?php if($myTypeSort == 52) echo "selected"; ?>>Total Damage Done</option>
			<option value="53" <?php if($myTypeSort == 53) echo "selected"; ?>>Total Damage Received</option>
			<option value="54" <?php if($myTypeSort == 54) echo "selected"; ?>>Good Support Skills</option>
			<option value="55" <?php if($myTypeSort == 55) echo "selected"; ?>>Wrong Support Skills</option>
			<option value="56" <?php if($myTypeSort == 56) echo "selected"; ?>>Total Good Healing</option>
			<option value="57" <?php if($myTypeSort == 57) echo "selected"; ?>>Total Wrong Healing</option>
			<option value="58" <?php if($myTypeSort == 58) echo "selected"; ?>>HP Potions Used</option>
			<option value="59" <?php if($myTypeSort == 59) echo "selected"; ?>>SP Potions Used</option>
			<option value="60" <?php if($myTypeSort == 60) echo "selected"; ?>>Yellow Gems Used</option>
			<option value="61" <?php if($myTypeSort == 61) echo "selected"; ?>>Red Gems Used</option>
			<option value="62" <?php if($myTypeSort == 62) echo "selected"; ?>>Blue Gems Used</option>
			<option value="63" <?php if($myTypeSort == 63) echo "selected"; ?>>Zeny Used</option>
			<option value="64" <?php if($myTypeSort == 64) echo "selected"; ?>>Arrows Used</option>
			<option value="65" <?php if($myTypeSort == 65) echo "selected"; ?>>Acid Demonstration Casted</option>
			<option value="66" <?php if($myTypeSort == 66) echo "selected"; ?>>Enchanted Deadly Poison Casted</option>
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

	<table width="100%" cellpadding="0" cellspacing="0"  border="0">
		<tr>
			<th style="width:20px; padding:3px;" rowspan="2">
				<?php if($playerLadder->gname <> ""){ ?>
					<img src="<?php echo $this->emblem($playerLadder->guild_id) ?>" />
				<?php }else{ ?>
					<img src="<?php echo $this->themePath('img/noGuild.png'); ?>">
				<?php } ?>
			</th>
			<th align="left" style="padding:3px;"><span style="font-size:15px; font-weight:bold;"><?php echo $playerLadder->name; ?></span></th>
			<th align="right" style="width:100px; padding:3px;"><span style="font-size:15px; font-weight:bold;"><?php echo $count; ?></span></th>							
		</tr>
		<tr>
			<th align="left" style="padding:3px;">
				<?php if($playerLadder->gname <> ""){ ?>
					<?php echo $playerLadder->gname; ?>
				<?php }else{ ?>g.php
					-- no Guild --
				<?php } ?>
			</th>
			<th align="right" style="width:100px; padding:3px;"></th>

		</tr>
		<tr>
			<td colspan="3">
				<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
					<tr>
						<td align="center" style="padding:0;" style="width:100px;" valign="top">

							<?php if ($job=$this->jobClassText($playerLadder->class)): ?>
								<?php echo htmlspecialchars($job) ?>
							<?php else: ?>
								<span class="not-applicable">Unknown</span>
							<?php endif ?>
							<?php echo "<BR>" . $playerLadder->max_hp . " / " . $playerLadder->max_sp . "<BR>"; ?>
							<a href="?module=earank&action=bprofile&cid=<?php echo $playerLadder->char_id; ?>"></a><BR><BR><BR>
							

							Week Score<br>
							<?php echo $playerLadder->points ?><br><br><br>
							
							<br /><?php echo $Rank[$result] ?><br />
							Elo. Rank<br />
							<?php echo $playerLadder->score ?><br><br><br>

							Medals<br />
							<font size="1" color="#FFC300"><b><?php echo $playerLadder->bg_gold ?></b></font> | <font size="1" color="#00BFFF"><b><?php echo $playerLadder->bg_silver ?></b></font> | <font size="1" color="#A0522D"><b><?php echo $playerLadder->bg_bronze ?></b></font>
						</td>
						<td style="padding:0;">
							<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
								<tr>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="6" style="color:#FFFFFF; background-color:#f8a459">Game Results</th>
											</tr>
											<tr>

												<td><strong>Won</strong><br /><?php echo $playerLadder->win; ?></td>

												<td><strong>Tie</strong><br /><?php echo $playerLadder->tie; ?></td>

												<td><strong>Lost</strong><br /><?php echo $playerLadder->lost; ?></td>
											</tr>
										</table>
									</td>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="6" style="color:#FFFFFF; background-color:#f8a459">As Team Leader</th>
											</tr>
											<tr>

												<td><strong>Won</strong><br /><?php echo $playerLadder->leader_win; ?></td>

												<td><strong>Tie</strong><br /><?php echo $playerLadder->leader_tie; ?></td>

												<td><strong>Lost</strong><br /><?php echo $playerLadder->leader_lost; ?></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="6" style="color:#FFFFFF; background-color:#f8a459">General Standings</th>
											</tr>
											<tr>

												<td><strong>Kill</strong><br /><?php echo $playerLadder->kill_count; ?></td>

												<td><strong>Death</strong><br /><?php echo $playerLadder->death_count; ?></td>

												<td><strong>Quits</strong><br /><?php echo $playerLadder->deserter; ?></td>
											</tr>
										</table>
									</td>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="6" style="color:#FFFFFF; background-color:#f8a459">Damage</th>
											</tr>
											<tr>

												<td><strong>Top</strong><br /><?php echo $playerLadder->top_damage; ?></td>

												<td><strong>Done</strong><br /><?php echo $playerLadder->damage_done; ?></td>

												<td><strong>Recv</strong><br /><?php echo $playerLadder->damage_received; ?></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="6" style="color:#FFFFFF; background-color:#f8a459">Tierra EoS</th>
											</tr>
											<tr>

												<td><strong>Flags</strong><br /><?php echo $playerLadder->eos_flags; ?></td>

												<td><strong>Bases</strong><br /><?php echo $playerLadder->eos_bases; ?></td>

												<td><strong>Results</strong><br />
													<font color="#4169E1"><b>W</b></font> <?php echo $playerLadder->eos_wins; ?> <font color="#4169E1"><b>T</b></font> <?php echo $playerLadder->eos_tie; ?> <font color="#4169E1"><b>L</b></font> <?php echo $playerLadder->eos_lost; ?> 
												</td>
											</tr>
										</table>
									</td>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">Tierra TI</th>
											</tr>
											<tr>

												<td><strong>Skulls</strong><br /><?php echo $playerLadder->skulls; ?></td>

												<td><strong>Results</strong><br />
												<font color="#4169E1"><b>W</b></font> <?php echo $playerLadder->ti_wins; ?> <font color="#4169E1"><b>T</b></font> <?php echo $playerLadder->ti_tie; ?> <font color="#4169E1"><b>L</b></font> <?php echo $playerLadder->ti_lost; ?> 
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding:2px;" colspan="2">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="8" style="color:#FFFFFF; background-color:#f8a459">Tierra Bossnia</th>
											</tr>
											<tr>

												<td><strong>Boss Damage</strong><br /><?php echo $playerLadder->boss_damage; ?></td>

												<td><strong>Boss Killed</strong><br /><?php echo $playerLadder->boss_killed; ?></td>

												<td><strong>Flags</strong><br /><?php echo $playerLadder->boss_flags; ?></td>

												<td><strong>Results</strong><br />
												<font color="#4169E1"><b>W</b></font> <?php echo $playerLadder->boss_wins; ?> <font color="#4169E1"><b>T</b></font> <?php echo $playerLadder->boss_tie; ?> <font color="#4169E1"><b>L</b></font> <?php echo $playerLadder->boss_lost; ?> 
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="6" style="color:#FFFFFF; background-color:#f8a459">Flavius TDM</th>
											</tr>
											<tr>

												<td><strong>Kill</strong><br /><?php echo $playerLadder->td_kills; ?></td>

												<td><strong>Deaths</strong><br /><?php echo $playerLadder->td_deaths; ?></td>

												<td><strong>Results</strong><br />
													<font color="#4169E1"><b>W</b></font> <?php echo $playerLadder->td_wins; ?> <font color="#4169E1"><b>T</b></font> <?php echo $playerLadder->td_tie; ?> <font color="#4169E1"><b>L</b></font> <?php echo $playerLadder->td_lost; ?> 
												</td>
											</tr>
										</table>
									</td>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">Flavius CTF</th>
											</tr>
											<tr>

												<td><strong>Flags</strong><br />
												<font color="#4169E1"><b>T</b></font> <?php echo $playerLadder->ctf_taken; ?> <font color="#4169E1"><b>C</b></font> <?php echo $playerLadder->ctf_captured; ?> <font color="#4169E1"><b>D</b></font> <?php echo $playerLadder->ctf_droped; ?> 
												</td>

												<td><strong>Results</strong><br />
												<font color="#4169E1"><b>W</b></font> <?php echo $playerLadder->ctf_wins; ?> <font color="#4169E1"><b>T</b></font> <?php echo $playerLadder->ctf_tie; ?> <font color="#4169E1"><b>L</b></font> <?php echo $playerLadder->ctf_lost; ?> 
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding:2px;" colspan="2">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="8" style="color:#FFFFFF; background-color:#f8a459">Flavius Stone Control</th>
											</tr>
											<tr>

												<td><strong>Stole</strong><br /><?php echo $playerLadder->sc_stole; ?></td>

												<td><strong>Capture</strong><br /><?php echo $playerLadder->sc_captured; ?></td>

												<td><strong>Droped</strong><br /><?php echo $playerLadder->sc_droped; ?></td>

												<td><strong>Results</strong><br />
												<font color="#4169E1"><b>W</b></font> <?php echo $playerLadder->sc_wins; ?> <font color="#4169E1"><b>T</b></font> <?php echo $playerLadder->sc_tie; ?> <font color="#4169E1"><b>L</b></font> <?php echo $playerLadder->sc_lost; ?> 
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding:2px;" colspan="2">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="8" style="color:#FFFFFF; background-color:#f8a459">Castle Conquest</th>
											</tr>
											<tr>

												<td><strong>Emperium</strong><br /><?php echo $playerLadder->emperium_kill; ?></td>

												<td><strong>Barricade</strong><br /><?php echo $playerLadder->barricade_kill; ?></td>

												<td><strong>G.Stone</strong><br /><?php echo $playerLadder->gstone_kill; ?></td>

												<td><strong>Results</strong><br />
												<font color="#4169E1"><b>W</b></font> <?php echo $playerLadder->cq_wins; ?> <font color="#4169E1"><b>T</b></font> <?php echo $playerLadder->cq_tie ?> <font color="#4169E1"><b>L</b></font> <?php echo $playerLadder->cq_lost; ?> 
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="padding:2px;">
										<table width="100%" cellpadding="0" cellspacing="0"  border="0" style="margin-bottom:0;">
											<tr>
												<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">Skill Support</th>
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
												<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">Total Healing</th>
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
												<th colspan="10" style="color:#FFFFFF; background-color:#f8a459">Usable Items</th>
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
