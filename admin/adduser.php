<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">User Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="useradd.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">User Add</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputClientCompany">Username</label>
                <input type="text" id="inputClientCompany" class="form-control" name='username'>
              </div>
              <div class="form-group">
                <label for="inputStatus">Password</label>
                <input type="text" id="inputClientCompany" class="form-control" name='password'>
              </div>
              <div class="form-group">
                <label for="inputStatus">Role Id</label>
                <select id="inputStatus" class="form-control custom-select" name='rolt_id'>
                  <option selected disabled>Feature</option>
                  <option value = "0" >0</option>
                  <option value = "1" >1</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Full Name</label>
                <input type="text" id="inputClientCompany" class="form-control" name='fullname'>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Address</label>
                <input type="text" id="inputClientCompany" class="form-control" name='address'>
              </div>
              <div class="form-group">
                <label for="inputDescription">Email</label>
                <input type="text" id="inputClientCompany" class="form-control" name='email'>
              
              
              <div class="form-group">
                <label for="inputStatus">Phone</label>
                <input type="text" id="inputClientCompany" class="form-control" name='phone'>
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
