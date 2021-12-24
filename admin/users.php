<?php
include "header.php"
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
          <h3 class="card-title">User</h3>

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
                      <th style="width: 2%"class="text-center">
                           User Id
                      </th>
                      <th style="width: 5%" class="text-center">
                      Username
                      </th>
                      <th style="width: 20%"class="text-center" >
                      Password
                      </th>
                      <th style="width: 5%" class="text-center">
                      Role_id
                      </th>
                      <th style="width: 15%" class="text-center">
                      Fullname
                      </th>
                      <th style="width: 15%" class="text-center">
                      Address
                      </th>
                      <th style="width: 15%" class="text-center">
                      Email
                      </th>
                      <th style="width: 30%" class="text-center">
                      Phone
                      </th>
                      <th style="width: 20%" class="text-center">
                      Status
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php 
                  $getAllUser = $user->getAllUser();
                  foreach($getAllUser as $value):
                  ?>
                  <tr>
                      <td>
                        <?php echo $value['user_id'] ?>
                      </td>
                      <td>
                        <?php echo $value['username'] ?>
                      </td>
                      <td>
                        <?php echo $value['password'] ?>
                      </td>
                      <td >
                      <?php echo $value['role_id'] ?>
                      </td>
                      <td >
                      <?php echo $value['fullname'] ?>
                      </td>
                      <td >
                      <?php echo $value['address'] ?>
                      </td>
                      <td >
                      <?php echo $value['email'] ?>
                      </td>
                      <td >
                      <?php echo $value['phone'] ?>
                      </td>
 
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="edituser.php?id=<?php echo $value['user_id'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="deluser.php?id=<?php echo $value['user_id'] ?>">
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
 <?php
 include "footer.php";
 ?>

