        <div class="content" ng-controller="hrApplicantsController" style="padding-top:7px">
            <div class="container-fluid" ng-init="get_applicants(type='eligible',category='<?php echo $_GET['category'];?>',state='<?php echo $_GET['state'];?>',age='<?php echo $_GET['age'];?>',search_name='<?php echo $_GET['search_name'];?>'); get_positions(); get_all_states()">
                <div class="row">
                     <?php if(!isset($_GET['id'])){?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                              
                              <h4 class="title" style="color:#799A4D;text-align:center">All Eligible Applicants</h4>
                                <p class="category" style="color:#A2CD6A;text-align: center">A comprehensive list of all eligible applicants</p>
                              <hr>

                              <form method="get" action="<?php $_SERVER['PHP_SELF'];?>">
                                <div class="col-lg-12">
                                <div class="col-lg-3">
                                <div class="entry input-group col-xs-12" style="margin-bottom:7px;padding:0">
                          <span class="input-group-btn"> <button class="btn btn-default btn-sm btn-add" type="button">State </button> </span>
                         <select name="state" class="form-control" style="border:1px solid #ccc;font-size:12px" ng-model="state" ng-init="state = <?php echo $_GET['state'];?>">
                          <option value="">--FILTER BY STATE--</option>
                          <option value="{{state.state}}" ng-repeat="state in states">{{state.state}}</option>
                         
                          </select>
                          </div>    
                            </div>
                            
                            <div class="col-lg-3">
                              <div class="entry input-group col-xs-12" style="margin-bottom:7px;padding:0">
                          <span class="input-group-btn"> <button class="btn btn-default btn-sm btn-add" type="button">Age</button> </span>
                         <select name="age" class="form-control" style="border:1px solid #ccc;font-size:12px" ng-model="age" ng-init="age = <?php echo $_GET['age'];?>">
                          <option value="">--FILTER BY AGE--</option>
                          <option value=">@30">Age Greater Than 30</option>
                          <option value="<@30">Age Equal To Or Less Than 30</option>
                          </select>
                          </div>    
                        </div>

                        <div class="col-lg-3">
                              <div class="entry input-group col-xs-12" style="border-radius:3px;padding:0">
                          <span class="input-group-btn"> <button class="btn btn-default btn-sm btn-add" type="button">Category </button> </span>
                         <select name="category" class="form-control" style="border:1px solid #ccc;font-size:12px" ng-model="category" ng-init="<?php echo $_GET['category'];?>">
                          <option value="">--CATEGORY--</option>

                          <option value="{{position.id}}" ng-repeat="position in positions">{{position.title}}</option>
                          
                          </select>
                          </div>    
                        </div>

                        <div class="col-lg-2">
                        <input type="text" name="search_name" value="<?php echo $_GET['search_name'];?>" class="form-control" placeholder="Search Name"  style="border:1px solid #ccc">
                        </div>

                        <div class="col-lg-1">
                              <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
                            </div>
                        </div>
                            
                          </form>
                            </div>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped table-condensed table-bordered"> 
                                    <thead style="text-align: center;font-size:11px;font-weight: bold">
                                        <th style="font-weight: bold">#</th>
                                    	<th style="font-weight: bold">Full Name</th>
                                        <th style="font-weight: bold">Age</th>
                                        <th style="font-weight: bold">Origin State</th>
                                        <th style="font-weight: bold">NIN</th>
                                        <th style="font-weight: bold;width:150px">Applied Category</th>
                                        <th style="font-weight: bold;width:250px">Applied Position</th>
                                    	<th style="font-weight: bold;text-align:center">Edu Qualification</th>
                                    	<th style="font-weight: bold;text-align:center">Certifications</th>
                                    	<th style="font-weight: bold;text-align:center">Work Experience</th>
                                        <th style="font-weight: bold;width:250px">Documents</th>
                                        <th></th>
                                       
                                    </thead>
                                    <tbody>
                                        <tr class="loader" style="text-align:center">
                                          <td colspan="11"><img src="{{completeUrlLocation}}public/images/loader.gif" style="width:40px;">
                                          </td>
                                          </tr>  
                                         <tr dir-paginate="applicant in applicants |  itemsPerPage: pageSize" current-page="currentPage" ng-cloak  ng-init="get_applicants_other_details(applicant.recruit_id)" ng-controller="hrApplicantsController as hrCtrler">
                                        	<td>{{$index +1}}</td>
                                        	<td style="font-weight:bold"><a href="{{completeUrlLocation}}hr/eligible?id={{applicant.recruit_id}}" style="color:inherit">{{applicant.fname}} {{applicant.sname}} {{applicant.mname}}</a>
                                            </td>
                                            <td>{{applicant.age}}</td> 
                                            <th>{{applicant.permState}}</th>
                                            <td>{{applicant.nin}}</td>
                                            <td style="font-weight:bold">{{applicant.title}}</td>  
                                            <td style="font-weight:bold">{{applicant.sub_title}}</td> 
                                        	<td style="text-align: center;cursor: pointer;text-decoration: underline;font-weight:bold" ng-click="open_edu(applicant.fname+' '+ applicant.sname,applicants_educational_details)">{{applicants_educational_details.length}}
<!-- EDU QUALIFICATIONS MODAL WINDOW -->
<div  class="modal fade" id="edu_qualification_Window_Modal_{{applicant.recruit_id}}" tabindex="10" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-lg-12" style="float:none;margin:auto;padding:0 10px">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
        <h5 class="modal-title" id="" style="text-align:center"><strong>{{applicant_name}}'s</strong><br/>Educational Qualification(s) </h5>

      </div>
     
       <div class="modal-body" style="padding:5px;text-align:center">
         <table  class="table table-responsive table-bordered" style="display:nne;font-size:13px !important">
        
        <tr style="font-weight:bold">
        <td>#</td>
        <td>Start Date</td>
        <td>End Date</td>
        <td>Institution/School</td>
        <td>Type</td>
        <td>Course of Study</td>
        <td>Grade</td>
        <td>City/Country</td>
        </tr>    
        <tr ng-repeat="edu in edu_details">
        <td ng-bind="$index +1" style="font-weight: bold"></td>    
        <td>{{edu.startdate}}</td>
        <td>{{edu.enddate}}</td>
        <td ng-bind="edu.institution"></td>  
        <td>{{edu.type}}</td>  
        <td>{{edu.course_of_study}}</td>  
        <td>{{edu.classification}}</td>  
        <td>{{edu.city}}/{{edu.country}}</td>  
        </tr>    
        </table>
          
       </div>
  </div>
</div>
</div>




<!-- CERTIFICATIONS MODAL WINDOW -->
<div  class="modal fade" id="pro_certification_Window_Modal_{{applicant.recruit_id}}" tabindex="10" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-lg-12" style="float:none;margin:auto;padding:0 10px">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
        <h5 class="modal-title" id="" style="text-align:center"><strong>{{applicant_name}}'s</strong><br/>Professional Certification(s) </h5>

      </div>
     
       <div class="modal-body" style="padding:5px;text-align:center">
        
         <table class="table table-responsive table-bordered">
                <tr style="font-weight:bold">
                <td>#</td>
                  <td>Start Date</td>
                  <td>End Date</td>
                  <td>Institution</td>
                  <td>Certification</td>
                  <td>City/Country</td>
                  
                </tr>

              <tr ng-repeat="pro in pro_cert_details">
              <td>{{$index +1}}</td>
              <td>{{pro.startdate}}</td>
                <td>{{pro.enddate}}</td>
              <td>{{pro.institution}}</td>
              <td>{{pro.certificate_title}}</td>
              <td>{{pro.city}}/{{pro.country}}</td>
              
              </tr>
          </table>
              
          
       </div>
  </div>
</div>
</div>


<!-- CERTIFICATIONS MODAL WINDOW -->
<div  class="modal fade" id="work_experience_Window_Modal_{{applicant.recruit_id}}" tabindex="10" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-lg-12" style="float:none;margin:auto;padding:0 10px">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
        <h5 class="modal-title" id="" style="text-align:center"><strong>{{applicant_name}}'s</strong><br/>Work Experience(s) </h5>

      </div>
     
       <div class="modal-body" style="padding:5px;text-align:center">
        
         <table class="table table-responsive table-bordered">
                <tr style="font-weight:bold">
                <td>#</td>
                  <td>Start date</td>
                  <td>End date</td>
                  <td>Organization</td>
                  <td>Role</td>  
                </tr>

              <tr ng-repeat="experience in work_exp_details">
              <td>{{$index +1}}</td>
              <td>{{experience.startdate}}</td>
              <td>{{experience.enddate}}</td>
              <td>{{experience.organization}}</td>
              <td>{{experience.role}}</td>
              
              </tr>
          </table>
              
          
       </div>
  </div>
</div>
</div>





                                            </td>
                                        	<td style="text-align:center;cursor: pointer;text-decoration: underline;font-weight:bold" ng-click="pro_cert(applicant.fname+' '+ applicant.sname,applicants_professional_details)">{{applicants_professional_details.length}}</td>
                                        	<td style="text-align:center;cursor: pointer;text-decoration: underline;font-weight:bold" ng-click="work_exp(applicant.fname+' '+ applicant.sname,work_experience)">{{work_experience.length}}</td>
                                            <td style="text-align:center">
                                             
<a  ng-repeat="attach in attachments" href="{{completeUrlLocation}}prison_cms_files/{{attach.path}}">
                                                <span class="label label-success" style="float:left;margin:3px;"><img ng-src="{{completeUrlLocation}}public/images/{{attach.file_type}}_icon.png" style="width:20px;margin-right:3px">{{attach.title}}</span>
                                            </a>   
                                            </td>
                                            <td style="width:40px"><div style="font-size:12px">
                                                <button class="btn btn-xs btn-success" ng-show="applicant.accepted==1">Accepted <i class="fa fa-check"></i>
                                            </button>
                                            <button class="btn btn-xs btn-danger" ng-show="applicant.denied==1"> Denied <i class="fa fa-times"></i></button>
                                                
                                            </div>
                                            </td>
                                        

                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    
                    <?php }?>


                    <?php if(isset($_GET['id'])){?>
                    <div class="col-md-12" ng-init="get_applicants_other_details(<?php echo $details['id'];?>)">
                        <div class="card">
                            <div class="content">
                                 <div class="row" style="padding-right:10px;margin-bottom:15px">
                                    <div class="col-lg-3">
                                        <?php if($next_applicant['next']!=''){?>
                        <a href="<?php echo URL.'hr/eligible?id='.$next_applicant['next'];?>" class="btn btn-warning btn-sm pull-left">Previous <i class="fa fa-arrow-left"></i></a>
                        <?php }?>

                    </div>

                    
                    <div class="col-lg-3 pull-right">
                        <?php if($next_applicant['prev']!=''){?>
                        <a href="<?php echo URL.'hr/eligible?id='.$next_applicant['prev'];?>" class="btn btn-warning btn-sm pull-right">Next <i class="fa fa-arrow-right"></i></a>
                        <?php }?>
                    </div>
                        
                    </div>
                    <hr>
                            <div class="row">    
                            <h4 style="margin:5px;text-align:center"><span style="color:#A2CD6A">Category:</span> 
                    <br/><?php echo $details['title'];?> <br/><span style="color:#A2CD6A">Applied Position:</span>
                     <br/><?php echo $details['sub_title'];?>
                     <div style="color:#8A3925;font-size:14px;font-style: italic;padding:7px 0;">
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
                            <div style="text-align: center">
                            <?php if($details['accepted']=='0'){?>    
                            <a href="<?php echo URL.'hr/eligible?id='.$details['recruit_id'].'&&approval=1';?>" class="btn btn-success-outline btn-md">
                            Accept Applicant   
                            </a> 
                            <?php }else{?>
                            <button class="btn btn-success btn-md">
                            Accepted <i class="fa fa-check"></i>    
                            </button> 
                            <?php }?>
                            <?php if($details['denied']=='0'){?>    
                            <a href="<?php echo URL.'hr/eligible?id='.$details['recruit_id'].'&&approval=0';?>" class="btn btn-danger-outline btn-md">
                            Deny Applicant   
                            </a> 
                            <?php }else{?>
                            <button class="btn btn-danger btn-md">
                            Denied <i class="fa fa-times"></i>    
                            </button> 
                            <?php }?>
                            </div>   
                              <div class="header">
                            <h4 class="title">Educational Qualification</h4>
                            </div>   
                            <table class="table table-responsive table-bordered" style="display:nne;font-size:12px !important">
                            <tr style="font-weight:bold">
                            <td>#</td>
                            <td>Start Date</td>
                            <td>End Date</td>
                            <td>Institution/School</td>
                            <td>Type</td>
                            <td>Course of Study</td>
                            <td>Grade</td>
                            <td>City/Country</td>
                            </tr>    
                            <tr ng-repeat="edu in applicants_educational_details">
                            <td>{{$index +1}}</td>    
                            <td>{{edu.startdate}}</td>
                            <td>{{edu.enddate}}</td>
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
                            <td>Start Date</td>
                            <td>End Date</td>
                            <td>Institution/School</td>                         
                            <td>Certificate</td>                        
                            <td>City/Country</td>
                            </tr>    
                            <tr ng-repeat="pro in applicants_professional_details">
                            <td>{{$index +1}}</td>    
                            <td>{{pro.startdate}}</td>
                             <td>{{pro.enddate}}</td>
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




       