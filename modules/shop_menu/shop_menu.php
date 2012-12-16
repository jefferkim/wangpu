<div class="box J_TBox" <?php echo $_MODULE_TOOLBAR ?>>
	<div class="shop-menu"> 
	     <?
			for ($i = 0; $i < 4; $i++) {
				echo '<a target="_blank" href="'. $_MODULE['menu_link_' . $i] .'"><img height="130" src="'. $_MODULE['menu_img_' . $i] .'"/></a>';
			}
		?>
	</div>
</div>