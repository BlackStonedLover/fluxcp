<?php
if (!defined('FLUX_ROOT')) exit;
$adminMenuItems = $this->getAdminMenuItems();
?>

<?php if (!empty($adminMenuItems)): ?>
<table id="admin_sidebar">
	<tr>
		<td><img src="<?php echo $this->themePath('img/sidebar_admin_complete_top.gif') ?>" /></td>
	</tr>
	<?php foreach ($adminMenuItems as $menuItem): ?>
	<tr>
		<td class="menuitem">
			<a href="<?php echo $this->url($menuItem['module'], $menuItem['action']) ?>"<?php
				if ($menuItem['module'] == 'account' && $menuItem['action'] == 'logout')
					echo ' onclick="return confirm(\'Are you sure you want to logout?\')"' ?>>
				<span><?php echo htmlspecialchars($menuItem['name']) ?></span>
			</a>
		</td>
	</tr>
	<?php endforeach ?>
	<tr>
		<td><img src="<?php echo $this->themePath('img/sidebar_admin_complete_bottom.gif') ?>" /></td>
	</tr>
</table>
<?php endif ?>

<table id="sidebar">
	<tr>
		<td><img src="<?php echo $this->themePath('img/sidebar_complete_top.gif') ?>" /></td>
	</tr>
	<?php foreach ($this->getMenuItems() as $menuItem): ?>
	<tr>
		<td class="menuitem">
			<a href="<?php echo $this->url($menuItem['module'], $menuItem['action']) ?>"<?php
				if ($menuItem['module'] == 'account' && $menuItem['action'] == 'logout')
					echo ' onclick="return confirm(\'Are you sure you want to logout?\')"' ?>>
				<span><?php echo htmlspecialchars($menuItem['name']) ?></span>
			</a>
		</td>
	</tr>
	<?php endforeach ?>
	<tr>
		<td><img src="<?php echo $this->themePath('img/sidebar_complete_bottom.gif') ?>" /></td>
	</tr>
</table>