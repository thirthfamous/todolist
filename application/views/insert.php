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

		  	<div class="content-box-large">
				<form method="post" action="<?php echo site_url('todo/add') ?>">
					<div class="row">
						<div class="col-md-6">
							<h3>Tambah To Do</h3>
							<div class="form-group">
								<input class="form-control" placeholder="To Do" type="text" name="todo">
							</div>
							<div class="form-group">
								<button class="btn btn-primary" type="submit">Tambah</button>
							</div>
						</div>
					</div>
				</form>
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