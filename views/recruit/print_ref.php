<div class="col-md-12">

                        <div class="card" ng-controller="recruitRegistrationController">                           
                            <div class="content">
                   
                            <div class="" style=""> 
                            <div style="text-align:center">   
                            <h4 style="margin:5px;text-align:center"><span style="color:#A2CD6A">Category:</span> 
                    <br/><?php echo $details['title'];?> <br/><span style="color:#A2CD6A">Applied Position:</span>
                     <br/><?php echo $details['sub_title'];?>
                     <div style="color:#8A3925;font-size:13px;font-style: italic;padding:7px 0;">
                        <span style="color:#000">Hint:</span> <?php echo $details['hint'];?></div>
                        <span style="color:#A2CD6A">Reference:</span>
                        <br/><?php echo $details['reference'];?> 
                        </h4>
                    </div>
                                <hr>
                                <div style="text-align:center">
                                <img src="<?php echo URL.'prison_cms_files/'.$passport['path'];?>" style="width:20%;margin:10px auto;float:none">
                            </div>
							</div>

							<div class="row" style="padding-top:10px">
							<div class="col-lg-5" style="">
                                
                                 <div class="header">
                                <h4 class="title" style="text-align: center"><?php echo $details['fname'].' '.$details['sname'].' '.$details['mname'];?></h4>
                            </div>
                            <table class="table table-striped no-border" style="border:none !important;font-size:14px;display:nne">
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
                            <td><?php echo $details['permAddress'];?></td>
                            </tr>

                            <tr>
                            <td style="font-weight:bold">State Of Origin</td>
                            <td><?php echo $details['permState'];?></td>
                            <td style="font-weight:bold">LGA Of Origin</td>
                            <td><?php echo $details['permLga'];?></td>
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
                     
                            </div> 


                            <div class="col-lg-7" style="padding:5px 20px" ng-init="get_applicants_other_details(<?php echo $details['id'];?>)">
                               
                              <div class="header">
                            <h4 class="title">Educational Qualification</h4>
                            </div>   
                            <table class="table table-responsive table-bordered" style="display:nne;width:100%;font-size:12px !important">
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
                            <table class="table table-responsive table-bordered" style="display:nne;width:100%;font-size:12px !important">
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
                            <table class="table table-responsive table-bordered" style="display:nne;width:100%;font-size:12px !important">
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
                             
                            
                             </div>
                           
                           
                            </div>

                             
                        


                    </div>

<script>
  setTimeout(function(){ 
    window.print();window.close(); 
    
  }, 10000);
  </script>