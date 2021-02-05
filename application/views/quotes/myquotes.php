<h1>My quotes</h1>

<ul>
<?php foreach($carResults as $row) :?>
	<li>
		<p>
			<a href="<?=site_url("quotes/carInsurance/{$row->id}");?>">
				Vehicle: <?=$row->vehicleYear?> <?=$row->vehicleMake?>
			</a>
		</p>

		<p>Insuree: <?=$row->firstName?> <?=$row->lastName?></p>
	</li>
<?php endforeach; ?>
</ul>
