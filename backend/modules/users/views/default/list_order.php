<?php if (isset($listAll) && $listAll != NULL) { ?>
	<?php
	$stt = 0;
	foreach ($listAll as $user) {
		?>
		<tr class="item <?php
		if ($stt % 2 == 0) {
			echo 'even';
		} else {
			echo 'odd';
		}
		?> clickable" data-href="<?= Yii::$app->homeUrl.'users/detail/index/'.$user['member_id'] ?>">
			<td class="group"><span class="icon-group"></span></td>
			<td class="id"><?php echo $user['pos_member_cd']; ?><br>ID:<?php echo $user['member_id']; ?></td>
			<td class="name"><span class="icon-<?php
				if ($user['gender'] == 1) {
					echo 'male';
				} else {
					echo 'female';
				}
				?>"></span><?php echo $user['user_name']; ?><br><span class="kana"><?php echo $user['user_kana']; ?></span></td>
			<td class="category"><?php echo $user['membertype_name']; ?><br>標準:<?php echo $user['timelimit_atday']; ?>分</td>
			<td clasa="status"><?php echo $user['status']; ?>.本会員</td>
			<td class="tel"><?php echo $user['user_tel']; ?></td>
			<td class="address"><?php echo $user['addr_1'].' '.$user['addr_2'].' '.$user['addr_3']; ?></td>
		</tr>
		<?php
		$stt++;
	}
}
?>