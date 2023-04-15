<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HR Management | Leave Requests</title>
  <?php include('components/style.php'); ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include('components/navbar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
        <?php include('components/to-do.php'); ?>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php include('components/sidebar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <h1 class="text-primary mb-3">Employee Evaluation</h1>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <div id="detailedReports" class="carousel detailed-report-carousel position-static pt-2">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <p class="card-title">Detailed Reports</p>
                              <h1 class="text-info">Mike Daniel</h1>
                              <h4 class="font-weight-500 mb-xl-4 text-primary">Age: 35</h3>
                              <h4 class="font-weight-500 mb-xl-4 text-primary">Work Period: 4 years</h3>
                              <h4 class="font-weight-500 mb-xl-4 text-primary">Position: Senior Auditor</h3>
                              <h4 class="font-weight-500 mb-xl-4 text-primary">Department: Audit</h3>
                            </div>  
                            </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-5 border-right">
                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                    <img src="../images/samples/1280x768/2.jpg" height="250" width="250" alt="user" style="margin-left:25%;border-radius:50%">
                                </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="north-america-chart"></canvas>
                                <div id="north-america-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <div id="detailedReports" class="carousel detailed-report-carousel position-static pt-2">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <p class="card-title">Detailed Reports</p>
                              <h1 class="text-info">Joseph Madong</h1>
                              <h4 class="font-weight-500 mb-xl-4 text-primary">Age: 32</h3>
                              <h4 class="font-weight-500 mb-xl-4 text-primary">Work Period: 5 years</h3>
                              <h4 class="font-weight-500 mb-xl-4 text-primary">Position: Junior Analyst</h3>
                              <h4 class="font-weight-500 mb-xl-4 text-primary">Department: Finance</h3>
                            </div>  
                            </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-5 border-right">
                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                    <img src="../images/samples/1280x768/5.jpg" height="250" width="250" alt="user" style="margin-left:25%;border-radius:50%">
                                </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="south-america-chart"></canvas>
                                <div id="south-america-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
  <?php include('components/script.php'); ?>

 
</body>

</html>
