<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cart Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Cart Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="cartedit.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cart Edit</h3>
            </div>
            <?php
            
            if(isset($_GET['id_user'])):
                $getCart1 = $cart->getCart1($_GET['id_user'],$_GET['id_product']);
                foreach($getCart1 as $value1):
            ?>
            
            <div class="card-body">
              <div class="form-group">
                <label for="inputClientCompany">User id</label>
                <input type="text" id="inputClientCompany" class="form-control"  name='id_user' value = "<?php echo $value1['id_user']?>" active>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Username</label>
                <input type="text" id="inputClientCompany" class="form-control" name='id_product' value = "<?php echo $value1['id_product']?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Password</label>
                <input type="text" id="inputClientCompany" class="form-control" name='pty' value = "<?php echo $value1['pty']?>">
              </div>
            </div>
            <!-- /.card-body -->
            <?php 
                endforeach;
            endif; 
            ?>
          </div>
          <!-- /.card -->
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Submit" name = "submit" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.php" ?>
