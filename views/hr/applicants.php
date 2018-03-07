        <div class="content" ng-controller="hrApplicantsController">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Applicants</h4>
                                <p class="category">A comprehensive list of all applicants</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>#</th>
                                    	<th>Full Name</th>
                                        <th>NIN</th>
                                    	<th>Phone Number</th>
                                    	<th>Email</th>
                                    	<th>Current Addr</th>
                                        <th>Permanent Addr</th>
                                        <th>Process Status</th>
                                    </thead>
                                    <tbody>
                                         <tr dir-paginate="applicant in applicants | filter:q | filter: applicantsSearch |  itemsPerPage: pageSize" current-page="currentPage" ng-cloak>
                                        	<td>{{index +1}}</td>
                                        	<td>{{applicant.fname}} {{applicant.sname}} {{applicant.mname}}</td>
                                            <td>{{applicant.nin}}</td> 
                                        	<td>{{applicant.phone}}</td>
                                        	<td>{{applicant.email}}</td>
                                        	<td>{{applicant.curStreet}}, {{applicant.curAddress}}</td>
                                            <td>{{applicant.permStreet}}, {{applicant.permAddress}}</td>
                                            <td><span class="btn label-default label-xs">Completed</span></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>