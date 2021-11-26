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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Product Add</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Id</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Name</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputStatus">Manu name</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Manu name</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Type name</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Type name</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Price</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              <div class="form-group">
                <label for="inputProjectLeader">Price</label>
                <input type="text" id="inputProjectLeader" class="form-control">
                <input type="file" name="fileToUpload" id="fileToUpload">
              </div>
              
              <div class="form-group">
                <label for="inputStatus">Feature</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Feature</option>
                  <option>0</option>
                  <option>1</option>

                </select>
              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Submit" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.php" ?>
