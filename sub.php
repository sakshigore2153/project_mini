<div class="content-wrapper">
    <section class="content">
        <div class=""> 
            <div class="row" > 
                <div class="col-md-12">
                <div class="box box-info">
                    
                    <span id="error_message"></span>    
                    
                                   
                    <div class="box-header with-border">
                        <h3 class="box-title">Subject</span></h3>
                    </div>
                    
                                       <form action="https://rkmm.rayaterp.in/index.php/registration_student/update_registration_subject" method="post">
                    <div class="form-body" >
                        <div class="container" >
                            
                            <div class="row" style="margin-top:2%;"> 
                                <div class="col-md-5">
                                    
                                    <!--1. Compulsory Subject odd sem -->
                                                                        

                                    <label for="exampleInputEmail1">Compulsory Subject (Semester-1 Group-A)<br><div style='color:red'>Choose any 4</div>                                    </label> 
                                    <input type="hidden" name="crt" id="crt" value="4">
                                                                        <div>Note: Please Select All Subject form below list</div>

                                     <div class="box-body table-responsive" style="margin-bottom: 20px">
                                      <table  id="education" class="table table-bordered table-striped table-hover">
                                        <thead style="background:linear-gradient(to right, #667eea 0%, #764ba2 100%); color:#fff">
                                            <tr>
                                                <th>#</th>
                                                <th>Name of the Subject</th>
                                                <th>Subject Code</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                    <tr>
                                                                                        <td><input type="checkbox" name="compulsory_subject_sem_1[]1"  id="4" value="1"  class="1" checked onclick="return false"></td>
                                            <td>Compulsory English </td>
                                            <td>11011</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="compulsory_subject_sem_1[]1"  id="4" value="2"  class="2" checked onclick="return false"></td>
                                            <td>Marathi </td>
                                            <td>11021 A</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="compulsory_subject_sem_1[]1"  id="4" value="3"  class="3" checked onclick="return false"></td>
                                            <td>Physical Education </td>
                                            <td>---</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="compulsory_subject_sem_1[]1"  id="4" value="4"  class="4" checked onclick="return false"></td>
                                            <td>Democracy , Elections , Governance </td>
                                            <td>---</td>
                                        </tr>
                                           
                                        </tbody>
                                      </table>
                                    </div> 
                                  
                            <input type="hidden" value="1" id="chkid" name="chkid">

                             <!-- 2. Optional Subject odd sem -->    
                                                             <label for="exampleInputEmail1">Optional Subject (Semester-1 Group-B1)<br><div style='color:red'>Choose any 1</div>                                </label> 


                                                                        <div>Note: Please Select Any One Subject form below list</div>

                                     <div class="box-body table-responsive" style="margin-bottom: 20px">
                                  <table  id="education" class="table table-bordered table-striped table-hover">
                                    <thead style="background:linear-gradient(to right, #667eea 0%, #764ba2 100%); color:#fff">
                                        <tr>
                                            <th>#</th>
                                            <th>Name of the Subject</th>
                                            <th>Subject Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]1" id="1" value="6"  class="1"></td>
                                            <td>Hindi </td>
                                            <td>11091 B</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]1" id="1" value="8"  class="2"></td>
                                            <td>Optional English </td>
                                            <td>11331</td>
                                        </tr>
                                          
                                    </tbody>
                                  </table>
                                </div> 
                                                                <label for="exampleInputEmail1">Optional Subject (Semester-1 Group-B2)<br><div style='color:red'>Choose any 1</div>                                </label> 


                                                                        <div>Note: Please Select Any One Subject form below list</div>

                                     <div class="box-body table-responsive" style="margin-bottom: 20px">
                                  <table  id="education" class="table table-bordered table-striped table-hover">
                                    <thead style="background:linear-gradient(to right, #667eea 0%, #764ba2 100%); color:#fff">
                                        <tr>
                                            <th>#</th>
                                            <th>Name of the Subject</th>
                                            <th>Subject Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]2" id="1" value="9"  class="1"></td>
                                            <td>Geography </td>
                                            <td>---</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]2" id="1" value="11"  class="2"></td>
                                            <td>Political Science</td>
                                            <td>0</td>
                                        </tr>
                                          
                                    </tbody>
                                  </table>
                                </div> 
                                                                <label for="exampleInputEmail1">Optional Subject (Semester-1 Group-B3)<br><div style='color:red'>Choose any 1</div>                                </label> 


                                                                        <div>Note: Please Select Any One Subject form below list</div>

                                     <div class="box-body table-responsive" style="margin-bottom: 20px">
                                  <table  id="education" class="table table-bordered table-striped table-hover">
                                    <thead style="background:linear-gradient(to right, #667eea 0%, #764ba2 100%); color:#fff">
                                        <tr>
                                            <th>#</th>
                                            <th>Name of the Subject</th>
                                            <th>Subject Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]3" id="1" value="12"  class="1"></td>
                                            <td>Economics </td>
                                            <td>11151</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]3" id="1" value="13"  class="2"></td>
                                            <td>Psychology </td>
                                            <td>11221</td>
                                        </tr>
                                          
                                    </tbody>
                                  </table>
                                </div> 
                                                                <label for="exampleInputEmail1">Optional Subject (Semester-1 Group-B4)<br><div style='color:red'>Choose any 1</div>                                </label> 


                                                                        <div>Note: Please Select Any One Subject form below list</div>

                                     <div class="box-body table-responsive" style="margin-bottom: 20px">
                                  <table  id="education" class="table table-bordered table-striped table-hover">
                                    <thead style="background:linear-gradient(to right, #667eea 0%, #764ba2 100%); color:#fff">
                                        <tr>
                                            <th>#</th>
                                            <th>Name of the Subject</th>
                                            <th>Subject Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]4" id="1" value="14"  class="1"></td>
                                            <td>Sociology </td>
                                            <td>11371</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]4" id="1" value="15"  class="2"></td>
                                            <td>History</td>
                                            <td>0</td>
                                        </tr>
                                          
                                    </tbody>
                                  </table>
                                </div> 
                                                                <label for="exampleInputEmail1">Optional Subject (Semester-1 Group-Skill Based Course)<br><div style='color:red'>Choose any 1</div>                                </label> 


                                                                        <div>Note: Please Select Any One Skill Based Course form below list</div>

                                     <div class="box-body table-responsive" style="margin-bottom: 20px">
                                  <table  id="education" class="table table-bordered table-striped table-hover">
                                    <thead style="background:linear-gradient(to right, #667eea 0%, #764ba2 100%); color:#fff">
                                        <tr>
                                            <th>#</th>
                                            <th>Name of the Subject</th>
                                            <th>Subject Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]5" id="1" value="26"  class="1"></td>
                                            <td>Certificate Course in Flower Making & immutation Jewellery </td>
                                            <td>---</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]5" id="1" value="28"  class="2"></td>
                                            <td>Certificate Course in Soft Toys & Mural art </td>
                                            <td>---</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]5" id="1" value="134"  class="3"></td>
                                            <td>Certificate Course in Research Methodology</td>
                                            <td>---</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]5" id="1" value="795"  class="4"></td>
                                            <td>Certificate Course in Beauty Care</td>
                                            <td>-</td>
                                        </tr>
                                                                                <tr>
                                                                                        <td><input type="checkbox" name="optional_subject_sem_1[]5" id="1" value="800"  class="5"></td>
                                            <td>Certificate Course in Fashion Designing</td>
                                            <td>00</td>
                                        </tr>
                                          
                                    </tbody>
                                  </table>
                                </div> 
                                  
                            </div>
                            <input type="hidden" value="5" id="chkid1" name="chkid1">

                                
                            
                            <div class="col-md-6">

                                <!--3. Compulsory Subject even sem -->  
                                  
<!--                              <input type="text" value="0" id="chkid1" name="chkid1">
 --> 

                                 <!-- 4. Optional Subject even sem -->  
                                    
                            </div>
                              <div class="col-md-5">    
                                    <label for="exampleInputEmail1">Short Term Course</label> <span class="required">*</span> 
                                     <div class="box-body table-responsive">
                                      <table  id="education" class="table table-bordered table-striped table-hover">
                                        <thead style="background:linear-gradient(to right, #667eea 0%, #764ba2 100%); color:#fff">
                                            <tr>
                                                <th>#</th>
                                                <th>Name of the Subject</th>
                                                <th>Subject Code</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              
                                        </tbody>
                                      </table>
                                    </div> 
                                    </div>
                                    <input type="hidden" name="compulsory_subject_sem_2[]"  value="">
                                    <input type="hidden" name="optional_subject_sem_2[]"  value="">
                                    <input type="hidden" name="shortterm_subject_sem_1[]" value="">
                                </div>    
                        </div>
                            
                        <div class="row" style="margin-top:2%"> 
                            <div class="col-md-2"><a href="https://rkmm.rayaterp.in/index.php/registration_student" class="btn btn-block btn-default btn-flat">Back</a></div>
                            <div class="col-md-7"></div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-block btn-success btn-flat">Submit</button> 
                            </div>
                        </div>  
                        <br>
                      </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
          
        
        </div>       
    </section>  
</div>
<!-- WORKING FOR CHECKBOX DISABLE ENABLE OPTION FOR COMPULSORY SUBJECT SUBMIT BY DHANASHRI -->