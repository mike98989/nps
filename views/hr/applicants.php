        
        <div class="content" ng-controller="hrApplicantsController" ng-init="get_applicants_other_details(<?php echo $details['id'];?>)">
            <div class="container-fluid">
                <div class="row">
                    <?php if(!isset($_GET['id'])){?>
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
                                        	<td>{{$index +1}}</td>
                                        	<td style="font-weight:bold"><a href="http://{{dirlocation}}hr/applicants?id={{applicant.id}}" style="color:inherit">{{applicant.fname}} {{applicant.sname}} {{applicant.mname}}</a></td>
                                            <td>{{applicant.nin}}</td> 
                                        	<td>{{applicant.phone}}</td>
                                        	<td>{{applicant.email}}</td>
                                        	<td>{{applicant.curStreet}}, {{applicant.curAddress}}</td>
                                            <td>{{applicant.permStreet}}, {{applicant.permAddress}}</td>
                                            <td>
                                            <span class="btn btn-success btn-xs" ng-if="applicant.completed=='1'"">Completed</span>
                                            <span class="btn btn-danger btn-xs" ng-if="applicant.completed=='0'"">Incomplete</span></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <?php }?>

                    <?php if(isset($_GET['id'])){?>
                    <div class="col-md-12">
                        <div class="card">

                           
                            <div class="content">
                            <div class="row">    
                            <div class="col-lg-5">
                                <div style="text-align:center">
                                <img ng-repeat="attachment in attachments | filter:{ title: 'Passport Photograph' }" ng-src="http://{{dirlocation}}public/{{attachment.path}}" style="width:30%;margin:0 auto;float:none">
                            </div>
                                 <div class="header">
                                <h4 class="title"><?php echo $details['fname'].' '.$details['sname'];?> Details</h4>
                            </div>
                            <table class="table table-striped no-border" style="border:none !important;font-size:12px;display:nne">
                            <tr>
                            <td>First Name</td>
                            <td><?php echo $details['fname'];?></td>
                            <td>Surname</td>
                            <td><?php echo $details['sname'];?></td>
                            </tr>
                            <tr>
                            <td>Gender</td>
                            <td><?php echo $details['gender'];?></td>
                            <td>D.O.B</td>
                            <td><?php echo $details['dob'];?></td>
                            </tr>
                            <tr>
                            <td>NIN</td>
                            <td><?php echo $details['nin'];?></td>
                            <td>Height</td>
                            <td><?php echo $details['height'];?></td>
                            </tr>
                            <tr>
                            <td>Email</td>
                            <td><?php echo $details['email'];?></td>
                            <td>Phone</td>
                            <td><?php echo $details['phone'];?></td>
                            </tr>
                            <tr>
                            <td>Nationality</td>
                            <td><?php echo $details['nationality'];?></td>
                            <td>Perm Address</td>
                            <td><?php echo $details['permStreet'].', '.$details['permAddress'];?></td>
                            </tr>

                            <tr>
                            <td>Perm LGA</td>
                            <td><?php echo $details['permLga'];?></td>
                            <td>Perm State</td>
                            <td><?php echo $details['permState'];?></td>
                            </tr>

                            <tr>
                            <td>Current LGA</td>
                            <td><?php echo $details['curLga'];?></td>
                            <td>Current Address</td>
                            <td><?php echo $details['curStreet'].', '.$details['curAddress'];?></td>
                            </tr>

                            <tr>
                            <td>Current State</td>
                            <td><?php echo $details['curState'];?></td>
                            <td></td>
                            <td></td>
                            </tr>
 
                            </table>  
                            
                            
                            </div> 


                            <div class="col-lg-7" style="padding:5px 20px">
                              <div class="header">
                            <h4 class="title">Educational Qualification</h4>
                            </div>   
                            <table class="table table-responsive table-bordered" style="display:nne;font-size:12px !important">
                            <tr style="font-weight:bold">
                            <td>#</td>
                            <td>Dates</td>
                            <td>Institution/School</td>
                            <td>Type</td>
                            <td>Course of Study</td>
                            <td>Grade</td>
                            <td>City/Country</td>
                            </tr>    
                            <tr ng-repeat="edu in applicants_educational_details">
                            <td>{{$index +1}}</td>    
                            <td>{{edu.startdate}} - {{edu.enddate}}</td>
                            <td>{{edu.institution}}</td>  
                            <td>{{edu.type}}</td>  
                            <td>{{edu.course_of_study}}</td>  
                            <td>{{edu.classification}}</td>  
                            <td>{{edu.city}}/{{edu.country}}</td>    
                            </tr>    
                            <table>
                            <hr>    
                            <div class="header">
                            <h4 class="title" style="">Professional Certifications</h4>
                            </div>   
                            <table class="table table-responsive table-bordered" style="display:nne;font-size:12px !important">
                            <tr style="font-weight:bold">
                            <td>#</td>
                            <td>Dates</td>
                            <td>Institution/School</td>                         
                            <td>Course of Study</td>                        
                            <td>City/Country</td>
                            </tr>    
                            <tr ng-repeat="pro in applicants_professional_details">
                            <td>{{$index +1}}</td>    
                            <td>{{pro.startdate}} - {{pro.enddate}}</td>
                            <td>{{pro.institution}}</td>                              
                            <td>{{pro.fos}}</td>     
                            <td>{{pro.city}}/{{pro.country}}</td>    
                            </tr>    
                            <table>    

                            <hr>    
                            <div class="header">
                            <h4 class="title" style="">Work Experience</h4>
                            </div>   
                            <table class="table table-responsive table-bordered" style="display:nne;font-size:12px !important">
                            <tr style="font-weight:bold">
                            <td>#</td>
                            <td>Start Date</td>
                            <td>End Date</td>                         
                            <td>Organization</td>                        
                            <td>Role</td>
                            </tr>    
                            <tr ng-repeat="work in work_experience">
                            <td>{{$index +1}}</td>    
                            <td>{{work.startdate}}</td>
                            <td>{{work.enddate}}</td>                              
                            <td>{{work.organization}}</td>     
                            <td>{{work.role}}</td>    
                            </tr>    
                            <table>        
                            
                            </div> 
                            
                             </div>
                           
                            </div>

                             
                        </div>
                    </div>


                    <?php }?>



                </div>
            </div>

        </div>
       