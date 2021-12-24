<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manufactures Edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manufactures Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="manufactureedit.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Manufactures Edit</h3>
            </div>
            <?php
            if (isset($_GET['manu_id'])) :
              $getManuByID = $manufacture->getManuByID($_GET['manu_id']);
              foreach ($getManuByID as $value1) :
            ?>
                <div class="card-body">
                  <div class="form-group">
                  <label for="inputClientCompany">Id</label>
                  <input type="text" id="inputClientCompany" class="form-control"  name='manu_id' value = "<?php echo $value1['manu_id']?>" active>
                </div>
                  <div class="form-group">
                    <label for="inputClientCompany">Manu_name</label>
                    <input type="text" id="inputClientCompany" class="form-control" name='manu_name' value="<?php echo $value1['manu_name'] ?>">
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