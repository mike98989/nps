        <div class="content" ng-controller="hrApplicantsController" style="padding-top:7px">
            <div class="container-fluid">
                <div class="row">

                  <?php if(!isset($_GET['status'])){?>
                    <div class="col-md-12" ng-init="get_positions(); get_all_states(); get_all_related_tables()">
                        <div class="card">
                            <div class="header">
                              
                              <h4 class="title" style="color:#799A4D;text-align:center">COMPLEX SEARCH/SORTING OF DATA
                                <p class="category" style="color:#A2CD6A;text-align: center">Create a comprehensive sorted list</p>
                              <hr>
                            </div>
                            <div class="content">
                              <form method="get" action="<?php $_SERVER['PHP_SELF'];?>">

                                <div class="col-lg-12">
                                  <fieldset>
                                    <legend>Basic Search Criteria</legend>
                                <div class="col-lg-3">
                                <div class="entry input-group col-xs-12" style="margin-bottom:7px;padding:0">
                          <span class="input-group-btn"> <button class="btn btn-default btn-sm btn-add" type="button">State </button> </span>
                         <select name="state" class="form-control" style="border:1px solid #ccc;font-size:12px">
                          <option value="">--FILTER BY STATE--</option>
                          <option value="{{state.state}}" ng-repeat="state in states">{{state.state}}</option>
                         
                          </select>
                          </div>    
                            </div>
                            
                            <div class="col-lg-3">
                              <div class="entry input-group col-xs-12" style="margin-bottom:7px;padding:0">
                          <span class="input-group-btn"> <button class="btn btn-default btn-sm btn-add" type="button">Age</button> </span>
                         <select name="age" class="form-control" style="border:1px solid #ccc;font-size:12px">
                          <option value="">--FILTER BY AGE--</option>
                          <option value=">@30">Age Greater Than 30</option>
                          <option value="<@30">Age Equal To Or Less Than 30</option>
                          </select>
                          </div>    
                        </div>

                        <div class="col-lg-3">
                              <div class="entry input-group col-xs-12" style="border-radius:3px;padding:0">
                          <span class="input-group-btn"> <button class="btn btn-default btn-sm btn-add" type="button">Category </button> </span>
                         <select name="category" class="form-control" style="border:1px solid #ccc;font-size:12px">
                          <option value="">--CATEGORY--</option>

                          <option value="{{position.id}}" ng-repeat="position in positions">{{position.title}}</option>
                          
                          </select>
                          </div>    
                        </div>

                        <div class="col-lg-3">
                       <div class="entry input-group col-xs-12" style="border-radius:3px;padding:0">
                          <span class="input-group-btn"> <button class="btn btn-default btn-sm btn-add" type="button">Status </button> </span>
                         <select name="status" class="form-control" style="border:1px solid #ccc;font-size:12px">
                          <option value="completed">Completed</option>
                          <option value="eligible">Eligible</option>
                          <option value="accepted">Accepted</option>
                          <option value="denied">Denied</option>
                          </select>
                          </div>    
                        </div>

                        </fieldset>
                        </div>

                        <div class="col-lg-12">
                                <div class="col-lg-12">
                                  <fieldset>
                                    <legend>Search by Qualification</legend>
                                    <div class="row">
                                    <div class="col-lg-6">
                                  <div class="col-lg-6">
                                  <label>Educational Qualification</label>
                                  <select name="edu_qualification" class="form-control" style="border:1px solid #ccc;font-size:12px">
                          <option value="">--QUALIFICATIONS--</option>

                          <option value="{{degree.degree}}" ng-repeat="degree in type_of_degree">{{degree.degree}}</option>
                          
                          </select>
                        </div>
                        <div class="col-lg-6">
                          <div class="col-lg-6">
                        <label>Start Year</label>
                        <input type="text" class="form-control" name="edu_start_year"> 
                        </div> 
                        <div class="col-lg-6">
                        <label>End Year</label>
                        <input type="text" class="form-control" name="edu_end_year"> 
                        </div> 
                        </div>
                      </div>
                        <div class="col-lg-3">
                                  <label>Grade</label>
                                  <select name="edu_classification" class="form-control" style="border:1px solid #ccc;font-size:12px">
                          <option value="">--Grade--</option>

                          <option value="{{classification.classification}}" ng-repeat="classification in classifications">{{classification.classification}}</option>
                          
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 pull-right">
                           <button type="submit" class="btn btn-success pull-right" style="bottom:0;"><i class="fa fa-search"></i> Search</button>
                          <button type="button" class="btn btn-warning pull-right" style="bottom:0;margin-right:10px"><i class="fa fa-print"></i> Print</button>
                         
                        </div>
                      </div>
                          </fieldset>
                                </div>

            </div>
            </form>
            </div>
            <div style="clear:both"></div>
            </div>

            </div>
            <?php }?>
            <?php if(isset($_GET['status'])){
            if(isset($_GET['category'])){  
            if($_GET['category']=='1'){
            $category = "Category = Superintendent Cadre,";  
            }elseif($_GET['category']=='2'){
              $category = "Category = Inspectorate Cadre,";
            }elseif($_GET['category']=='3'){
              $category="Category = Assistant Cadre,";
            }  
            }
            if(isset($_GET['state'])){
            if($_GET['state']!=''){   
            $state = " State=".$_GET['state'].","; 
            } 
            }
            if(isset($_GET['age'])){ 
            if($_GET['age']!=''){ 
            $explode = explode('@',$_GET['age']);  
            $age = " AGE ".$explode[0].$explode[1].","; 
            } 
            }

            if(isset($_GET['status'])){ 
            if($_GET['status']!=''){  
            $status = " Applicants =  ".$_GET['status'].","; 
            } 
            }

            if(isset($_GET['edu_qualification'])){ 
            if($_GET['edu_qualification']!=''){  
            $edu_qualification = " Educational Qualification =  ".$_GET['edu_qualification'].","; 
            } 
            }

            if(isset($_GET['edu_start_year'])){ 
            if($_GET['edu_start_year']!=''){  
            $edu_start_year = " Start Year =  ".$_GET['edu_start_year'].","; 
            } 
            }

            if(isset($_GET['edu_end_year'])){ 
            if($_GET['edu_end_year']!=''){  
            $edu_end_year = " End Year =  ".$_GET['edu_end_year'].","; 
            } 
            }

            if(isset($_GET['edu_classification'])){ 
            if($_GET['edu_classification']!=''){  
            $edu_classification = " Classification =  ".$_GET['edu_classification'].","; 
            } 
            }

            ?>
            <div class="col-md-12" ng-init="get_search_result_applicants(type='<?php echo $_GET['status'];?>',category='<?php echo $_GET['category'];?>',state='<?php echo $_GET['state'];?>',age='<?php echo $_GET['age'];?>',edu_qualification='<?php echo $_GET['edu_qualification'];?>',edu_start_year='<?php echo $_GET['edu_start_year'];?>',edu_end_year='<?php echo $_GET['edu_end_year'];?>',edu_classification='<?php echo $_GET['edu_classification'];?>');">
                        <div class="card">
                            <div class="header">
                              <button type="button" class="btn btn-warning pull-right" ng-click="print(type='<?php echo $_GET['status'];?>',category='<?php echo $_GET['category'];?>',state='<?php echo $_GET['state'];?>',age='<?php echo $_GET['age'];?>',edu_qualification='<?php echo $_GET['edu_qualification'];?>',edu_start_year='<?php echo $_GET['edu_start_year'];?>',edu_end_year='<?php echo $_GET['edu_end_year'];?>',edu_classification='<?php echo $_GET['edu_classification'];?>')" style="bottom:0;margin-right:10px"><i class="fa fa-print"></i> Print</button>
                              <h3 class="title" style="color:#799A4D;text-align:center">SEARCH RESULT</h3>
                              <h4 style="text-align:center;margin:0;"> CRITERIA (<?php echo $category.$state.$age.$status.$edu_qualification.$edu_start_year.$edu_end_year.$edu_classification;?>)
                                
                              </h4>


                              <hr>
                            </div>
                  <div class="content" style="padding-top:0">
                     <div class="content table-responsive table-full-width">
                                <table class="table table-striped table-condensed table-bordered"> 
                                    <thead style="text-align: center;font-size:11px;font-weight: bold">
                                        <th style="font-weight: bold">#</th>
                                      <th style="font-weight: bold">Full Name</th>
                                        <th style="font-weight: bold">Age</th>
                                        <th style="font-weight: bold">Perm. State</th>
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

                                         <tr dir-paginate="applicant in applicants | itemsPerPage: pageSize" current-page="currentPage" ng-cloak  ng-init="get_applicants_other_details(applicant.recruit_id)" ng-controller="hrApplicantsController as hrCtrler">
                                          <td>{{($index +1) + (currentPage-1) * pageSize}}</td>
                                          <td style="font-weight:bold"><a href="{{completeUrlLocation}}hr/applicants?id={{applicant.recruit_id}}" style="color:inherit">{{applicant.fname}} {{applicant.sname}} {{applicant.mname}}</a>
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
        
         <table  class="table table-responsive table-bordered" style="display:nne;font-size:12px !important">
        
        <tr style="font-weight:bold">
        <td>#</td>
        <td width="30px">Dates</td>
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
                                            <td style="width:60px"><div style="font-size:12px">
                                                <i class="fa fa-check fa-2x" ng-show="applicant.verified==2" style="color:#A2CD6A"></i>
                                                <i class="fa fa-times fa-2x" ng-show="applicant.verified==1" style="color:#f30"></i>
                                                <span ng-show="applicant.verified=='2'">Eligible</span>
                                                <span ng-show="applicant.verified=='1'">Not Eligible</span>
                                            </div>
                                            </td>
                                        

                                        </tr>
                                    </tbody>
                                </table>

              <dir-pagination-controls boundary-links="true" template-url="" style="float:right"></dir-pagination-controls>

                            </div>
                  </div>
                
              </div>
            </div>
            <?php }?>
                
                </div>


            </div>



            



        </div>




       