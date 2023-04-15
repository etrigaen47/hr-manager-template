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
        <h1 class="text-primary mb-3">Employee Bio-Data</h1>
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
                                    <h4 class="card-title">Add Employee Data</h4>
                                    <form id="add-employee-data" onsubmit="return false;" class="forms-sample">
                                        <p class="card-description">
                                        Personal info
                                        </p>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="firstname" class="form-control add-employee-data" placeholder="first name" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="lastname" class="form-control add-employee-data" placeholder="last name" />
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                          <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input class="form-control add-employee-data" name="email" placeholder="email" />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Gender</label>
                                            <div class="col-sm-9">
                                                <select name="gender" class="form-control add-employee-data" lang="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                                            <div class="col-sm-9">
                                                <input class="form-control add-employee-data" name="dob" placeholder="dd/mm/yyyy" />
                                            </div>
                                          </div>
                                        </div>
                                        </div>
                                        <p class="card-description">
                                        Address
                                        </p>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Home Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="home" class="form-control add-employee-data" placeholder="home address" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">City</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="city" class="form-control add-employee-data" placeholder="city" />
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">State</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="state" class="form-control add-employee-data" placeholder="state" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Postcode</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="postcode" class="form-control add-employee-data" placeholder="postcode" />
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Country</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="country" class="form-control add-employee-data" placeholder="country" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">File upload</label>
                                                <input type="file" name="p_image" class="file-upload-default">
                                                <div class="input-group col-sm-9">
                                                    <input type="text" name="p_image" id="profileImage" class="form-control file-upload-info add-employee-data" placeholder="profile image">
                                                    <span class="input-group-append">
                                                      <button class="file-upload-browse btn btn-primary" type="button" style="height:46px;">Upload</button>
                                                    </span>
                                                </div>
                                            </div> -->
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
                            Full name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            DoB
                          </th>
                          <th>
                            Home
                          </th>
                          <th>
                            City
                          </th>
                          <th>
                            State
                          </th>
                          <th>
                            Postcode
                          </th>
                          <th>
                            Country
                          </th>
                          <th>
                            Image
                          </th>
                          <!-- <th></th>
                          <th></th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Joseph Madong
                          </td>
                          <td>
                            makari@mail.org
                          </td>
                          <td>
                            30/12/1971
                          </td>
                          <td>
                            No. 16 ring road, makera
                          </td>
                          <td>
                            Hakut
                          </td>
                          <td>
                            Plateau
                          </td>
                          <td>
                            378423
                          </td>
                          <td>
                            Nigeria
                          </td>
                          <td class="py-1">
                            <img src="../images/faces/face1.jpg" alt="image"/>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Micheal Hassan
                          </td>
                          <td>
                            hassan12@gmail.org
                          </td>
                          <td>
                            05/12/1993
                          </td>
                          <td>
                            No. 18 ring road, hasashi
                          </td>
                          <td>
                            Hakut
                          </td>
                          <td>
                            Nassarawa
                          </td>
                          <td>
                            73943
                          </td>
                          <td>
                            Nigeria
                          </td>
                          <td class="py-1">
                            <img src="../images/faces/face2.jpg" alt="image"/>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Yashim Kinzam
                          </td>
                          <td>
                            yasahim25@mail.org
                          </td>
                          <td>
                            24/04/1989
                          </td>
                          <td>
                            No. 8 hazami close, kerara
                          </td>
                          <td>
                            Naraguta
                          </td>
                          <td>
                            Kogi
                          </td>
                          <td>
                            348032
                          </td>
                          <td>
                            Nigeria
                          </td>
                          <td class="py-1">
                            <img src="../images/faces/face3.jpg" alt="image"/>
                          </td>
                        </tr>
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
  <!-- End custom js for this page-->
</body>

</html>
