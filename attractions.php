<?php
	
	echo '<ul>';

	foreach($manege as $item){
		echo '<li><span class="items">'.$item.'</span><button type="button">Reserver</button></li>';
	}
	
	echo '</ul>';