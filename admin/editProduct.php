<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Product Edit</li>
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
              <h3 class="card-title">Product Edit</h3>
            </div>
            <?php
            if(isset($_GET['id'])):
                $getAllProductsId = $product->getAllProductsId($_GET['id']);
                foreach($getAllProductsId as $value1):
            ?>
            <div class="card-body">
            <div class="form-group">
                <label for="inputClientCompany">Id</label>
                <input type="text" id="inputClientCompany" class="form-control" name='id' value = "<?php echo $value1['id']?>" active>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Name</label>
                <input type="text" id="inputClientCompany" class="form-control" name='name' value = "<?php echo $value1['name']?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Manu name</label>
                <select id="inputStatus" class="form-control custom-select" name='manu_id'>
                  
                  <?php
                    foreach($getAllManufacture as $value2):
                        if($value1['manu_id'] == $value2['manu_id']){
                            echo "<option value=". $value2['manu_id']." selected disabled >". $value2['manu_name'] ."</option>";
                        }else echo "<option value=". $value2['manu_id'].">". $value2['manu_name'] ."</option>";
                    endforeach;  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Type name</label>
                <select id="inputStatus" class="form-control custom-select" name='type_id'>
                  
                  <?php
                    foreach($getAllProtype as $value2):
                        if($value1['manu_id'] == $value2['manu_id']){
                            echo "<option value=". $value2['type_id'] ."  selected disabled >". $value2['type_name'] ."</option>";
                        }else echo "<option value=". $value2['type_id'] .">". $value2['type_name'] ."</option>";
                    endforeach; 
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Price</label>
                <input type="text" id="inputProjectLeader" class="form-control" name='price' value = "<?php echo $value1['price']?>">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Image</label>
                <input type="file" name="image" id="image" class='form-control' value = "<?php echo $value1['image'] ?>" preview image before upload >
                <img style="width:50px" src="../img/<?php echo $value1['image'] ?>" alt="" srcset="">
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" name='description' rows="4"><?php echo $value1['description']?></textarea>
              
              
              <div class="form-group">
                <label for="inputStatus">Feature</label>
                <select id="inputStatus" class="form-control custom-select" name='feature'>
                  
                  <?php if($value1['feature'] == 0 && $value1['feature'] != 1){
                            echo "<option value = '0' selected disabled >0</option>";
                            echo "<option value = '1' >1</option>";
                        }else if($value1['feature'] != 0 && $value1['feature'] == 1) {
                            echo "<option value = '0' >0</option>";
                            echo "<option value = '1' selected disabled >1</option>";
                        }
                        
                    ?>
                  
                  </select>
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
