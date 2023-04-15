<?php
  require '../b-components/server/server.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <?php include('components/style.php'); ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include('components/navbar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
        <?php include('components/to-do.php'); ?>
          <!-- To do section tab ends -->
        
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php include('components/sidebar.php'); ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
        <h1 class="text-primary mb-3">Departments</h1>
          <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Employees</button>
            </div>
<!-- ------------------------------------------------------------------------------------------- -->
           
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Input Record</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Add Employee to Department</h4>
                            <form id="add-employee-department" onsubmit="return false;" class="form-sample">  
                                
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control employee-id" onfocusout="verifyID(document.getElementsByClassName('employee-id')[0].value)" />
                                    </div>
                                    </div>
                                </div>
                                <hr />
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Fullname</label>
                                      <div class="col-sm-9">
                                        <input class="form-control employee-name" name="employee_name" readonly/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Department</label>
                                    <div class="col-sm-9">
                                      <select name="assigned_department" class="form-control">
                                      <?php
                                      $query = $server->prepare('SELECT * FROM departments');
                                      $query->execute(); $result = $query->get_result();
                                      if($result->num_rows < 1)
                                      {
                                        echo '<option>No Department data in record</option>';
                                      }else{ ?>
                                        <option>~~~Select~~~</option>
                                      <?php
                                          while($data = $result->fetch_assoc()):
                                      ?>
                                      <option value="<?=$data['id']?>"><?=strtoupper($data['name'])?></option>
                                      <?php endwhile; } ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add-employee-btn" onclick="$('#add-employee-data').submit()">Submit</button>
                </div>
                </div>
              </div>
            </div>
<!-- --------------------------------------------------------------------------------------------- -->
                          <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Department</h4>
                                    <form id="add-department" onsubmit="return false;" class="form-sample">
                                        
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="department" class="form-control dept-name" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                          <button type="submit" class="btn btn-primary mb-2 add-department-btn">Submit</button>
                                        </div>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
<!-- ------------------------------------------------------------------------------------------ -->
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View Employee Data</h4>
                  <div class="table-responsive">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <!-- <th>
                            User
                          </th> -->
                          <th>
                            S/N
                          </th>
                          <th>
                            Name
                          </th>
                         
                          <!-- <th></th>
                          <th></th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $query = $server->prepare('SELECT * FROM departments');
                          $query->execute(); $result = $query->get_result();
                          if($result->num_rows < 1)
                          {
                            echo '<strong class="text-danger">No Department Record in System</strong><p></p>';
                          }else{
                            while($data = $result->fetch_assoc())
                            { ?>
                              <tr>
                              <!-- <td class="py-1">
                                <img src="../images/faces/face1.jpg" alt="image"/>
                              </td> -->
                              <td>
                                <?php echo $data['recordID']; ?>
                              </td>
                              <td>
                                <?php echo $data['name']; ?>
                              </td>
                              
                              <!-- <td>
                                <button class="btn btn-primary">Edit</button>
                              </td>
                              <td>
                                <button class="btn btn-danger">Delete</button>
                              </td> -->
                            </tr>
                      <?php }
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.  Plateau State Board of Internal Revenue. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <?php include('components/script.php'); ?>

  <script>
    function verifyID(_e_id){
      let e_id = {'verify_eID' : _e_id}
      $.ajax({
        url : '../transport/department-data.php',
        method : 'POST',
        data : e_id,
        success : function(r){
          console.log(r)
          document.getElementsByClassName('employee-name')[0].value = r;
        }
      })
    }
  </script>
  <!-- End custom js for this page-->
</body>

</html>
