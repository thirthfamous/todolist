<!DOCTYPE html>
<html>
  <head>
    <title>My To Do List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet">
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="<?php echo site_url('todo/index') ?>">My To Do List</a></h1>
	              </div>
	           </div>
	           
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?php echo site_url('todo/index') ?>"><i class="glyphicon glyphicon-home"></i> My To Do List</a></li>
                    <li><a href="<?php echo site_url('todo/insert') ?>"><i class="glyphicon glyphicon-pencil"></i>New To-Do</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<?php echo $this->session->flashdata('status'); ?>
		  	<div class="content-box-large">
				<table class="table table-hover">
					<tr>
						<th>No</th>
						<th>Aktifitas</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
					<?php $no = 1; ?>
					<?php foreach ($todo as $td): ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $td->nama_todo ?></td>
						<td><?php echo ($td->status == 1) ? 'Sudah Dilakukan' : 'Belum Dilakukan'; ?></td>
						<td><?php if ($td->status == 0): ?>
							<a href="<?php echo site_url('todo/selesai/'.$td->id_todo.'') ?>" class="btn btn-xs btn-success">Selesai</a>
						<?php else : ?>
							<a href="<?php echo site_url('todo/undo/'.$td->id_todo.'') ?>" class="btn btn-xs btn-success">Undo</a>
						<?php endif ?>
						 <a href="<?php echo site_url('todo/hapus/'.$td->id_todo.'') ?>" class="btn btn-xs btn-danger">Hapus</a></td>
					</tr>	
					<?php endforeach ?>
					
				</table>
		  	</div>
		  </div>
		</div>
    </div>

  <!--   <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>