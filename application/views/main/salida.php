	  <!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
      <br>
      <!-- Main content -->
      <section class="content">


															<div style='height:20px;'></div>  
																<div style="padding: 10px">
																<?php echo $output; ?>
																</div>
																<?php foreach($js_files as $file): ?>
																		<script src="<?php echo $file; ?>"></script>
																<?php endforeach; ?>
																</div>

      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

