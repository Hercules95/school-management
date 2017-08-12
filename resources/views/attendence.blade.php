@include('header')
@include('nav')


<div id="body-container" ng-app="attendance" ng-controller="attend" ng-cloak>
<div class="page-title clearfix">
<div class="pull-left">
<h1>Attendance</h1>
<small class="subtitle">Attendance-List
</small>
</div>
<div align="right">
  <?php echo date("Y/m/d");?>
</div>

</div>
 <!-- FORM START -->
 <div class="conter-wrapper">
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title" align="center">Attendance
</h3>
</div>
<div class="conter-wrapper">
<section class="content">
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                
                <div class="col-md-4">
                              <div class="form-group">
                                           <label>Select Class</label>
                                            <select class="form-control" ng-model="classId" ng-options="item.id as item.name for item in class" ng-change="getClassStudents()">
                                            </select>
                                        </div>
</div>
 <div class="col-md-4">
<div class="form-group">
                                            <label>Select Section</label>
                                            <select class="form-control" ng-model="sectionId"
                                            ng-options="item.id as item.name for item in section"
                                            ng-change="getStudents()">
                                            </select>
                                        </div>
</div>

</div>
             
                <tr>
                  <th>Student Name</th>
                  <th>Class</th>
                  <th>Section</th>
                  <th>Attendance</th>
                </tr>
                </thead>
                <tbody>
            
                 <tr ng-repeat="(x,p) in student track by $index">
               
                <!-- <td><input readonly class="form-control" ng-model="p.firstname" required></td> -->
                  <td ng-bind="studentName[$index] = p.firstname">@{{p.firstname}}</td>
                  <td >@{{p.class_id}}</td>
                  <td >@{{p.name}}</td>

               
                
                   <td><select class="form-control" ng-change="addAttendance($index)" ng-model="present[$index]">
                                                <option value="Present">Present</option>
                                                <option value="Absent">Absent</option>
                                            </select></td>
                  </tr>
                  
              
            
                </tbody>
              </table>
            </div>
           
            </tr>
            <!-- /.box-body -->
      </div>
  </section>
  </div>


</div>
</div>
</div>
</div >
 <!-- FORM END -->
<div id="footer-wrap" class="footer">
Copyright © 2017 Senior Developer Noman Hussain Usmani
<label class = "pull-right">Futher Detail</label>
<br>
<span class="pull-right" style="font-size:40px;">
<a href="https://www.facebook.com/noman.hussain.395"><i  class="fa fa-facebook-square"></i></a>
<a href="https://twitter.com/Nomanhussain45_"><i  class="fa fa-twitter"></i></a>
</span>
</div>
</div>
</div>
<script src="/js/vendor.js" type="text/javascript"></script>
<script src="/vendor/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="/js/app.js" type="text/javascript"></script>
<script src="/angular.min.js"></script>
<script src="/controllers/attendance.js"></script>


</body>

<!-- Mirrored from dashy.strapui.com/laravel/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 18:40:11 GMT -->
</html>




