<?php include "haeder.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 2%">
                            Id
                      </th>
                      <th style="width: 5%" >
                            Name
                      </th>
                      <th style="width: 5%" >
                            Manu name
                      </th>
                      <th style="width: 5%" class="text-center">
                            Type name
                      </th>
                      <th style="width: 15%" class="text-center">
                            Price
                      </th>
                      <th>
                            Image
                      </th>
                      <th style="width: 30%" class="text-center">
                            Description
                      </th>
                      <th style="width: 8%" class="text-center">
                            Feature
                      </th>
                      <th style="width: 20%" class="text-center">
                      Status
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php 
                  $getAllProducts = $product->getAllProducts();

                  //$perPage = 10; 										
                  //$page = isset($_GET['page'])?$_GET['page']:1;	
                  //$total = count($getAllProducts); 					
                  //$url = $_SERVER['PHP_SELF'];		

                  //$get10AllProducts = $product->get10AllProducts($page, $perPage);

                  foreach($getAllProducts as $value):
                  ?>
                  <tr>
                      <td>
                        <?php echo $value['id'] ?>
                      </td>
                      <td>
                        <?php echo $value['name'] ?>
                      </td>
                      <td class="project_progress">
                        <?php echo $value['manu_name'] ?>
                      </td>
                      <td class="project_state">
                      <?php echo $value['type_name'] ?>
                      </td>
                      <td class="project_state">
                      <?php echo number_format($value['price']) ?> VND
                      </td>
                      <td>
                          <img style="width:50px" src="../img/<?php echo $value['image'] ?>" alt="" srcset="">
                      </td>
                      <td>
                      
                      <?php echo substr($value['description'],0,50);?>
                      <a href='#' name="sanpham">...</a></p>
                      </td>
                      <td class="project_progress">
                      <?php 
                      if($value['feature'] == 1 ){
                        echo "Nổi Bật";
                      } 
                      ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  
                  <?php endforeach; ?>
                  
              </tbody>
              
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.html" ?>