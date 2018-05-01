        <div class="content" ng-controller="hrApplicantsController" style="padding-top:7px">
            <div class="container-fluid" ng-init="get_applicants(type='denied',category='<?php echo $_GET['category'];?>',state='<?php echo $_GET['state'];?>',age='<?php echo $_GET['age'];?>',search_name='<?php echo $_GET['search_name'];?>'); get_positions(); get_all_states()">
                <div class="row">
                     <?php if(!isset($_GET['id'])){?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                              
                              <h4 class="title" style="color:#799A4D;text-align:center">All Denied Applicants</h4>
                                <p class="category" style="color:#A2CD6A;text-align: center">A comprehensive list of all denied applicants</p>
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
                                         <tr ng-controller="hrApplicantsController as hrCtrler" dir-paginate="applicant in applicants | itemsPerPage: pageSize" current-page="currentPage" ng-cloak  ng-init="get_applicants_other_details(applicant.recruit_id)">
                                        	<td>{{$index +1}}</td>
                                        	<td style="font-weight:bold"><a href="{{completeUrlLocation}}hr/eligible?id={{applicant.recruit_id}}" style="color:inherit">{{applicant.fname}} {{applicant.sname}} {{applicant.mname}}</a>
                                            </td>
                                            <td>{{applicant.age}}</td> 
                                            <td>{{applicant.permState}}</td>
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
        <td>Dates</td>
        <td>Institution/School</td>
        <td>Type</td>
        <td>Course of Study</td>
        <td>Grade</td>
        <td>City/Country</td>
        </tr>    
        <tr ng-repeat="edu in edu_details">
        <td ng-bind="$index +1" style="font-weight: bold"></td>    
        <td>{{edu.startdate}} - {{edu.enddate}}</td>
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
                  <td>Dates</td>
                  <td>Institution</td>
                  <td>Certification</td>
                  <td>City/Country</td>
                  
                </tr>

              <tr ng-repeat="pro in pro_cert_details">
              <td>{{$index +1}}</td>
              <td>{{pro.startdate}} - {{pro.enddate}}</td>
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

                </div>


            </div>



            



        </div>




       