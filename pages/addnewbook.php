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
                                <div class="col text-center">Admin Portal : Add New Book</div>
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
                        <form class="container-fluid bg-dark text-light" method="POST" action="/pages/processnewbook.php" id="newbook" enctype="multipart/form-data">
                         <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="col-form-label" >BOOK CATEGORY</label>
                                    <select class="custom-select form-control" required name="bookcategor">
                                      <option selected value="">select book type</option>
                                      <option ng-repeat="category in bookscategory" value="{{category.name}}">{{category.name}}</option>
                                    </select>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label class="col-form-label" >SELECT WORKSHOP / SECTION </label>
                                     <select class="custom-select form-control" required name="section">
                                      <option selected value="">select book type</option>
                                     
                                      <option ng-repeat="section in librarysectiondata" value="{{section.id}}">{{section.section}}</option>
                                    
                                    </select>
                                  </div>
                                
                                <div class="form-group">
                                    <label class="col-form-label" >BOOK TITLE</label>
                                    <input type="text" class="form-control" placeholder="book tilte" required name="booktitle">
                                </div>
                                
                            </div>
                            <div class="col">
                                
                                <div class="form-group">
                                    <label class="col-form-label" >BOOK AUTHOR</label>
                                    <input type="text" class="form-control" placeholder="book author" required name="bookauthor">
                                  </div>
                                  
                                 <div class="form-group">
                                    <label class="col-form-label" >YEAR</label>
                                    <input type="text" class="form-control" placeholder="book Year" required name="year">
                                  </div>  
                                  
                                <div class="form-group">
                                    <label class="col-form-label" >EDITION</label>
                                    <input type="text" class="form-control" placeholder="book Edition" required name="edition">
                                  </div>    
                                
                            </div>
                         </div>
                         <div class="row">
                             <div class="col">
                                 <div class="form-group">
                                    <label class="col-form-label" >Brows location</label>
                                    <input type="file" class="form-control" name="book" required accept="application/pdf">
                                  </div> 
                             </div>
                         </div>
                         <div class="row">
                             <div class="col">
                                 <div class="alert alert-success alert-dismissible fade" role="alert">
                                  You have success fully added a new book!
                                  
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                             </div>
                             <div class="col">
                                 <div class="row">
                                     <div class="col"><button type="submit" class="btn btn-primary form-control">Add New Book</button></div>
                                     <div class="col"><button type="reset" class="btn btn-primary form-control">Reset</button></div>
                                 </div>
                                 <br>
                             </div>
                             <br>
                         </div>
                        </form>
                        <br>
                    </div>
                </div>    
                
            </div>
        </div>
    </div>
    
    
    
    
</div>