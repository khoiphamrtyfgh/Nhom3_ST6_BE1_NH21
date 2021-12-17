<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Product Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="addduct.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Product Add</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputClientCompany">Name</label>
                <input type="text" id="inputClientCompany" class="form-control" name='name'>
              </div>
              <div class="form-group">
                <label for="inputStatus">Manu name</label>
                <select id="inputStatus" class="form-control custom-select" name='manu_id'>
                  <option selected disabled>Select one</option>
                  <?php
                    foreach($getAllManufacture as $value):
                  ?>
                  <option value="<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></option>
                    <?php 
                    endforeach;  
                    ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Type name</label>
                <select id="inputStatus" class="form-control custom-select" name='type_id'>
                  <option selected disabled>Select one</option>
                  <?php
                    foreach($getAllProtype as $value):
                  ?>
                  <option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>

                  <?php
                    endforeach; 
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Price</label>
                <input type="text" id="inputProjectLeader" class="form-control" name='price'>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Image</label>
                <input type="file" name="image" id="image" class='form-control'>
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="summernote" class="form-control" name='description' rows="4"></textarea>
              
              
              <div class="form-group">
                <label for="inputStatus">Feature</label>
                <select id="inputStatus" class="form-control custom-select" name='feature'>
                  <option selected disabled>Feature</option>
                  <option value = "0" >0</option>
                  <option value = "1" >1</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Time</label>
                <input type="datetime-local" name="time" class='form-control'>
              </div>
              
            </div>
            <!-- /.card-body -->
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
