
			<p class="rel">Pesquisas Relacionadas com a sua busca: <b><?php echo $q; ?></b></p>
		
			
			<br><?php
			
			$search = mysqli_query($conn,"SELECT * FROM keywords where name LIKE '%$q%'");
			$rows=mysqli_fetch_assoc($search);

			for($i=0;$i<1;$i++) {
			   $mark=explode(',', $rows['words']);//what will do here
			   foreach($mark as $out) {
				 echo '
						<div class="related col-6">
							<a href="?q='.$q.''.$out.'">'.$q.' '.$out.'</a>
							</div>
				';
			   }
			}
			/*for($i=0;$i<10;$i++)
			{
				echo '
						<div class="related">
							Title search
							</div>
				';
			}*/
		?>
		<br>
<br><br>