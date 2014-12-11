<?php
$options = \__::getOptions( 
	array(
		'sc_phone', 'sc_email', 
		'sc_address', 'cd_abn', 
		'cd_registered_builder_number', 'cd_registered_electrical_contractor',
		'cd_accreditations', 'cd_first_logo',
		'cd_first_logo_url', 'cd_second_logo',
		'cd_second_logo_url'
	) 
);
extract($options);
?>
		<footer id="footer" style="background-image: url(<?php echo TDU; ?>/images/bg-footer.jpg);">
			<div class="center-wrap cf">
				<div class="column">
					<h4>Contact Us</h4>
					<strong>Address:</strong><br>
					<address><?php echo $sc_address; ?></address>
					<strong>P</strong> <?php echo $sc_phone; ?> <br>
					<strong>E</strong> <a href="mailto:<?php echo $sc_email; ?>"><?php echo $sc_email; ?></a>
				</div>
				<div class="column">
					<h4>Company Details</h4>
					<strong>ABN:</strong> <?php echo $cd_abn; ?><br>
					<strong>Registered Builder</strong><br>
					<strong>Number:</strong> <?php echo $cd_registered_builder_number; ?><br>
					<strong>Registered Electrical</strong><br>
					<strong>Contractor</strong> <?php echo $cd_registered_electrical_contractor; ?>
				</div>
				<div class="column last">
					<h4>Accreditations</h4>
					<?php echo $cd_accreditations; ?>
				</div>
				<div class="column-logos">
					<div class="logo">
						<a href="<?php echo $cd_first_logo_url; ?>"><img src="<?php echo $cd_first_logo; ?>" alt="First logo"></a>
					</div>
					<div class="logo">
						<a href="<?php echo $cd_second_logo_url; ?>"><img src="<?php echo $cd_second_logo; ?>" alt="Second logo"></a>
					</div>
				</div>
			</div>
		</footer>
	</div>
<?php wp_footer(); ?>
</body>
</html>
