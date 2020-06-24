		<div class="tabla_datos_nav" style="margin-top:10px;">
			<nav class ="number-table" aria-label="Page navigation example">
			  <ul class="pagination">


			    <?php $page =  intval($_GET["num_page"]); ?>
			    

			    <li class="page-item <?php echo ($page <= 1) ? "disabled":"";  ?>" >
			    	<a class="page-link" href=index.php?num_page=<?php echo ($page > 1) ? $page-1:$page; ?>>
			    	Anterior
			    	</a>
			    </li>
			    
			    <?php for ($i=1; $i <= $total_paginas ; $i++): ?>
					<li class="page-item <?php echo ($i == $page) ? "active":"";  ?>">
						<a class="page-link" href=index.php?num_page=<?php echo $i ?>>
							<?php echo $i; ?>
						</a>
					</li>		
				<?php endfor ?>


			    <li class="page-item <?php echo ($page == $total_paginas) ? "disabled":"";  ?>">
			    	<a class="page-link" href=index.php?num_page=<?php echo ($page < $total_paginas) ? $page+1:$page; ?>>
			    	Siguiente
			    	</a>
			    </li>
			  </ul>
			</nav>				
		</div>