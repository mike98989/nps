        <div class="content" ng-controller="hrDashboardController" ng-cloak>
            <div class="container-fluid">
                <div class="row">
                    <a href="<?php echo URL;?>hr/applicants">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>All Applicants</p>
                                            {{counter[0].applicants}}
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Total applicants
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="<?php echo URL;?>hr/completed">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-files"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Completed Forms</p>
                                            {{counter[0].completed}}
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Completed application forms
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="<?php echo URL;?>hr/eligible">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-check"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Eligible Applicants</p>
                                            {{counter[0].eligible}}
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> Verified by the admin
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="<?php echo URL;?>hr/accepted">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-thumb-up"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Accepted Applicants</p>
                                            {{counter[0].accepted}}
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Accepted for interview
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
     
                <div class="row" style="display:nne">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Total Recruitment Statistics</h4>
                                <p class="category">Total Recruitment Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <a href="<?php echo URL;?>hr/accepted" style="color:inherit">
                                        <i class="fa fa-circle text-info"></i> Accepted </a>
                                        <a href="<?php echo URL;?>hr/denied" style="color:inherit">
                                        <i class="fa fa-circle text-danger"></i> Denied</a>
                                        <a href="<?php echo URL;?>hr/unverified" style="color:inherit">
                                        <i class="fa fa-circle text-warning"></i> Unverified</a>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-timer"></i>Record as at <?php echo date('d/m/Y H:i:s A');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Positions Statistics</h4>
                                <p class="category">Positions applied for</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences2" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <a href="<?php echo URL;?>hr/sorting?category=3&status=completed" style="color:inherit">
                                        <i class="fa fa-circle text-info"></i> Assistant Cadre</a>
                                        <a href="<?php echo URL;?>hr/sorting?category=1&status=completed" style="color:inherit">
                                        <i class="fa fa-circle text-danger"></i> Superintendent Cadre</a>
                                        <a href="<?php echo URL;?>hr/sorting?category=2&status=completed" style="color:inherit">
                                        <i class="fa fa-circle text-warning"></i> Inspectorate Cadre</a>

                                        <i class="fa fa-circle text-primary" style="color:#35C69F"></i> Uncertain</a>
                                    </div>
                                    <hr> 
                                    <div class="stats">
                                        <i class="ti-timer"></i>Record as at <?php echo date('d/m/Y H:i:s A');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


   