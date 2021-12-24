<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">User Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="useredit.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">User Edit</h3>
            </div>
            <?php
            
            if(isset($_GET['id'])):
                $getUserById = $user->getUserById($_GET['id']);
                foreach($getUserById as $value1):
            ?>
            
            <div class="card-body">
              <div class="form-group">
                <label for="inputClientCompany">User id</label>
                <input type="text" id="inputClientCompany" class="form-control"  name='user_id' value = "<?php echo $value1['user_id']?>" active>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Username</label>
                <input type="text" id="inputClientCompany" class="form-control" name='username' value = "<?php echo $value1['username']?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Password</label>
                <input type="text" id="inputClientCompany" class="form-control" name='password' value = "<?php echo $value1['password']?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Role id</label>
                <select id="inputStatus" class="form-control custom-select" name='role_id'>
                  
                  <?php if($value1['role_id'] == 0 && $value1['role_id'] != 1){
                            echo "<option value = '0' selected disabled >0</option>";
                            echo "<option value = '1' >1</option>";
                        }else if($value1['role_id'] != 0 && $value1['role_id'] == 1) {
                            echo "<option value = '0' >0</option>";
                            echo "<option value = '1' selected disabled >1</option>";
                        }  
                    ?>
                  </select>
              </div>
              
              <div class="form-group">
                <label for="inputClientCompany">Fullname</label>
                <input type="text" id="inputClientCompany" class="form-control" name='fullname' value = "<?php echo $value1['fullname']?>">
              </div>
              
              <div class="form-group">
                <label for="inputClientCompany">Address</label>
                <input type="text" id="inputClientCompany" class="form-control" name='address' value = "<?php echo $value1['address']?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Email</label>
                <input type="text" id="inputClientCompany" class="form-control" name='email' value = "<?php echo $value1['email']?>">
              </div>
              
              <div class="form-group">
                <label for="inputClientCompany">Phone</label>
                <input type="text" id="inputClientCompany" class="form-control" name='phone' value = "<?php echo $value1['phone']?>">
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
