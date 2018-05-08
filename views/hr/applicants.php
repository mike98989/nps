        
        <div class="content" ng-controller="hrApplicantsController" ng-init="get_applicants_other_details(<?php echo $details['id'];?>)">
            <div class="container-fluid" ng-init="get_applicants('applicants')">
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
                                        	<td style="font-weight:bold"><a href="#" style="color:inherit">{{applicant.fname}} {{applicant.sname}} {{applicant.mname}}</a></td>
                                            <td>{{applicant.nin}}</td> 
                                        	<td>{{applicant.phone}}</td>
                                        	<td>{{applicant.email}}</td>
                                        	<td>{{applicant.curAddress}}</td>
                                            <td>{{applicant.permAddress}}</td>
                                            <td>
                                            <span class="btn btn-success btn-xs" ng-if="applicant.completed=='1'"">Completed</span>
                                            <span class="btn btn-danger btn-xs" ng-if="applicant.completed=='0'"">Incomplete</span></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                                <dir-pagination-controls boundary-links="true" template-url="" style="float:right"></dir-pagination-controls>

                            </div>
                        </div>
                    </div>
                    <?php }?>

                    <?php if(isset($_GET['id'])){?>
                    <div class="col-md-12">

                        <div class="card">

                           
                            <div class="content">
                                 <div class="row" style="padding-right:10px;margin-bottom:15px">
                                    <div class="col-lg-3">
                                        <?php if($next_applicant['next']!=''){?>
                        <a href="<?php echo URL.'hr/applicants?id='.$next_applicant['next'];?>" class="btn btn-warning btn-sm pull-left">Previous <i class="fa fa-arrow-left"></i></a>
                        <?php }?>

                    </div>

                    
                            <div class="col-lg-6" style="text-align:center">
                                
                            <a href="<?php echo URL.'hr/applicants?id='.$_GET['id'].'&status=1';?>" class="btn btn-sm <?php if($details['verified']=='1'){echo "btn-danger";}else{echo "btn-danger-outline";}?>">Not Eligible</a>
                <a href="<?php echo URL.'hr/applicants?id='.$_GET['id'].'&status=2';?>" class="btn btn-sm <?php if($details['verified']=='2'){echo "btn-success";}else{echo "btn-success-outline";}?>" style="margin-right:10px">Eligible</a>
                
                    </div>
                    
                    <div class="col-lg-3">
                        <?php if($next_applicant['prev']!=''){?>
                        <a href="<?php echo URL.'hr/applicants?id='.$next_applicant['prev'];?>" class="btn btn-warning btn-sm pull-right">Next <i class="fa fa-arrow-right"></i></a>
                        <?php }?>
                    </div>
                        
                    </div>
                    <hr>
                            <div class="row">    
                            <h4 style="margin:5px;text-align:center"><span style="color:#A2CD6A">Category:</span> 
                    <br/><?php echo $details['title'];?> <br/><span style="color:#A2CD6A">Applied Position:</span>
                     <br/><?php echo $details['sub_title'];?>
                     <div style="color:#8A3925;font-size:13px;font-style: italic;padding:7px 0;">
                        <span style="color:#000">Hint:</span> <?php echo $details['hint'];?></div>
                        <?php if($details['age']>30){?>
                        <div style="color:#f30;text-decoration: underline;text-align:center;padding:10px 0">
                            This applicant is above 30 years of age
                        </div>
                        <?php }?>
                                </h4>
                                <hr>
                            <div class="col-lg-5">
                                <div style="text-align:center">
                                <img ng-repeat="attachment in attachments | filter:{ title: 'Passport Photograph' }" ng-src="{{completeUrlLocation}}prison_cms_files/{{attachment.path}}" style="width:30%;margin:0 auto;float:none">
                            </div>
                                 <div class="header">
                                <h4 class="title" style="text-align: center"><?php echo $details['fname'].' '.$details['sname'].' '.$details['mname'];?></h4>
                            </div>
                            <table class="table table-striped no-border" style="border:none !important;font-size:12px;display:nne">
                            <tr>
                            <td style="font-weight:bold">First Name</td>
                            <td><?php echo $details['fname'];?></td>
                            <td style="font-weight:bold">Surname</td>
                            <td><?php echo $details['sname'];?></td>
                            </tr>
                            <tr>
                            <td style="font-weight:bold">Middle Name</td>
                            <td><?php echo $details['mname'];?></td>
                            <td style="font-weight:bold">D.O.B</td>
                            <td><?php echo $details['dob'];?> <strong>(<?php echo $details['age'];?> years)</strong></td>
                            </tr>
                            <tr>
                            <td style="font-weight:bold">Gender</td>
                            <td><?php echo $details['gender'];?></td>
                            <td style="font-weight:bold">Height</td>
                            <td><?php echo $details['height'];?></td>
                            </tr>
                            <tr>
                            <td style="font-weight:bold">Email</td>
                            <td><?php echo $details['email'];?></td>
                            <td style="font-weight:bold">Phone</td>
                            <td><?php echo $details['phone'];?></td>
                            </tr>
                            <tr>
                            <td style="font-weight:bold">Nationality</td>
                            <td><?php echo $details['nationality'];?></td>
                            <td style="font-weight:bold">Perm Address</td>
                            <td><?php echo $details['permStreet'].', '.$details['permAddress'];?></td>
                            </tr>

                            <tr>
                            <td style="font-weight:bold">Perm LGA</td>
                            <td><?php echo $details['permLga'];?></td>
                            <td style="font-weight:bold">Perm State</td>
                            <td><?php echo $details['permState'];?></td>
                            </tr>

                            <tr>
                            <td style="font-weight:bold">Current LGA</td>
                            <td><?php echo $details['curLga'];?></td>
                            <td style="font-weight:bold">Current Address</td>
                            <td><?php echo $details['curStreet'].', '.$details['curAddress'];?></td>
                            </tr>

                            <tr>
                            <td style="font-weight:bold">Current State</td>
                            <td><?php echo $details['curState'];?></td>
                            <td style="font-weight:bold">NIN</td>
                            <td><?php echo $details['nin'];?></td>
                            </tr>
 
                            </table>   
                            <hr>
                            <div class="visible-lg">
                            <div class="header" style="text-align:center">
                            <h4 class="title">Attachments</h4>
                            </div> 
                            <table class="table table-responsive table-bordered" style="display:nne;font-size:12px !important">
                                <tr style="font-weight:bold">
                            <td>#</td>
                            <td>Type</td>
                            <td>Doc. Title</td>
                            </tr>  
                            <tr ng-repeat="attach in attachments">
                            <td>{{$index +1}}</td>
                            <td><img ng-src="{{completeUrlLocation}}public/images/{{attach.file_type}}_icon.png" style="width:20px;"></td>
                            <td><a href="{{completeUrlLocation}}prison_cms_files/{{attach.path}}" style="text-decoration: underline;color:#000">{{attach.title}}</a></td>
                            </tr>  
                            </table>
                            </div>
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
                            <td>Certificate</td>                        
                            <td>City/Country</td>
                            </tr>    
                            <tr ng-repeat="pro in applicants_professional_details">
                            <td>{{$index +1}}</td>    
                            <td>{{pro.startdate}} - {{pro.enddate}}</td>
                            <td>{{pro.institution}}</td>                              
                            <td>{{pro.certificate_title}}</td>     
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


                            <div class="hidden-lg">
                            <div class="header">
                            <h4 class="title">Credentials</h4>
                            </div> 
                            <table class="table table-responsive table-bordered hidden-lg" style="display:nne;font-size:12px !important">
                                <tr style="font-weight:bold">
                            <td>#</td>
                            <td>Type</td>
                            <td>Doc. Title</td>
                            </tr>  
                            <tr ng-repeat="attach in attachments" ng-init="{{ext=attach.path.split('.').pop()}}">
                            <td>{{$index +1}}</td>
                            <td><img ng-src="{{completeUrlLocation}}public/images/{{ext}}_icon.png" style="width:20px;"></td>
                            <td><a href="{{completeUrlLocation}}prison_cms_files/{{attach.path}}" style="text-decoration: underline;color:#000">{{attach.title}}</a></td>
                            </tr>  
                            </table>
                            </div>        
                            
                            </div> 
                            
                             </div>
                           
                           <div class="row" style="padding:10px">
                                    <a href="<?php echo URL.'hr/applicants?id='.$_GET['id'].'&status=1';?>" class="btn btn-sm pull-right <?php if($details['verified']=='1'){echo "btn-danger";}else{echo "btn-danger-outline";}?>">Not Eligible</a>
                        <a href="<?php echo URL.'hr/applicants?id='.$_GET['id'].'&status=2';?>" class="btn btn-sm pull-right <?php if($details['verified']=='2'){echo "btn-success";}else{echo "btn-success-outline";}?>" style="margin-right:10px">Eligible</a></div>
                            </div>

                             
                        </div>


                    </div>


                    <?php }?>



                </div>
            </div>

        </div>
       