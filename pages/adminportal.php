<!--top bar-->
        <div class="container-fluid">
            <div class="row">
                <img src="/image/topbar.jpg" class="img-fluid" alt="Responsive image">
            </div>
        </div>   
     <!--end of the top bar-->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!--************************** TOP BAR ****************************-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-top-bar">
                            <div class="row">
                                <div class="col">
                                    <a href="#!/adminportal"><i class="fa fa-home fa-2x" aria-hidden="true" ></i></a>
                                </div>
                                <div class="col text-center">Admin Portal : Dashboard</div>
                                <div class="col text-right">
                                    <a href="#/login"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i> Log-Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--************************** END OF TOP BAR *********************--> 
                
                <div class="row">
                    <div class="col-3">
                        <div class="left-side">
                           <a href="#!/adminportal">
                            <div class="left-side-tab text-nowrap">
                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                                &nbsp;Dashboard
                                </div>
                            </a>  
                            <a href="#!/workshopbooks">
                            <div class="left-side-tab text-nowrap">
                            <i class="fa fa-building" aria-hidden="true"></i>
                                &nbsp;Workshops Books
                                </div>
                            </a>    
                            <a href="#!/addnewbook">    
                            <div class="left-side-tab text-nowrap">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                &nbsp;Add New Book
                                </div>
                            </a>    
                            <a href="#!/booklist">    
                            <div class="left-side-tab text-nowrap">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                &nbsp;List of Books
                                </div>
                            </a>  
                        </div>
                    </div>
                    
                    <div class="col-9">
                        <table class="table table-hover">
                          <thead>
                            <tr class="table-primary">
                              <th scope="col">#</th>
                              <th scope="col">Category</th>
                              <th scope="col">Total</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                              <tr ng-repeat="category in bookscategory">
                                  <th scope="row">{{$index+1}}</th>
                                  <td>{{category.name}}</td>
                                  <td>{{category.totalbooks}}</td>
                                </tr>
                          </tbody>
                         </table>
                        
                    </div>
                    
                </div>    
                
            </div>
        </div>
    </div>
    
    
    
    
</div>