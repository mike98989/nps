        
        <div class="content" ng-controller="hrApplicantsController">
            <div class="container-fluid" ng-init="get_applicants('completed')">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Completed Applicants</h4>
                                <p class="category">A comprehensive list of all completed applicants</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>#</th>
                                    	<th>Full Name</th>
                                        <th>NIN</th>
                                    	<th>Edu Qualification</th>
                                    	<th>Certifications</th>
                                    	<th>Work Experience</th>
                                        <th>Documents</th>
                                       
                                    </thead>
                                    <tbody>
                                         <tr dir-paginate="applicant in applicants | filter:q | filter: applicantsSearch |  itemsPerPage: pageSize" current-page="currentPage" ng-cloak ng-init="get_applicants_other_details(applicant.recruit_id)" ng-controller="hrApplicantsController as hrAppCtrl">
                                        	<td>{{$index +1}}</td>
                                        	<td style="font-weight:bold"><a href="http://{{dirlocation}}hr/applicants?id={{applicant.id}}" style="color:inherit">{{applicant.fname}} {{applicant.sname}} {{applicant.mname}}</a></td>
                                            <td>{{applicant.nin}}</td> 
                                        	<td>{{applicants_educational_details.length}}</td>
                                        	<td>{{applicants_professional_details.length}}</td>
                                        	<td>{{work_experience.length}}</td>
                                            <td></td>
                                            
                                        </tr>
                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    

                    
                </div>
            </div>

        </div>
       