<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Protype Edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Protype Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="addtype.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Protype Edit</h3>
            </div>
            <?php
            if (isset($_GET['type_id'])) :
              $getProtypeById = $protype->getProtypeById($_GET['type_id']);
              foreach ($getProtypeById as $value1) :
            ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputClientCompany">Type_name</label>
                    <input type="text" id="inputClientCompany" class="form-control" name='type_name' value="<?php echo $value1['type_name'] ?>">
                  </div>

                </div>
                <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    <?php
              endforeach;
            endif;
    ?>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Submit" name="submit" class="btn btn-success float-right">
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.php" ?>