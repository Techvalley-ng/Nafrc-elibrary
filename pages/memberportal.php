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
                                    <a href="#!/memberportal"><i class="fa fa-home fa-2x" aria-hidden="true" ></i></a>
                                </div>
                                <div class="col text-center"><h4>E - Library Portal</h4></div>
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
                            <h5 class="text-center font-weight-bold">Books Catalog</h5>
                            <!--Tab-->
                                <div ng-repeat="section in librarysectiondata">
                               <a href="/#!/memberportal/{{section.id}}">
                                <div class="left-side-tab text-nowrap">
                                    <div class="row">
                                        <div class="col">{{section.section}}</div>
                                        <div class="col text-right text-xl-right font-weight-bold"><i class="fa fa-book" aria-hidden="true"></i>
                                        {{section.totalbooks}}
                                        </div>                               
                                    </div>
                                </div>
                                </a>
                                </div>
                                
                            
                            
                            <!--tab end-->
                            <a href="/#!/onlinebooks">
                             <div class="left-side-tab text-nowrap">
                                ONLINE BOOKS
                            </div>
                            </a>
                            <a href="/#!/internet">
                            <div class="left-side-tab text-nowrap">
                                INTERNET BROWSING
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-9">
                         <table class="table table-hover">
                          <thead>
                            <tr class="table-primary">
                              <th scope="col">#</th>
                              <th scope="col">Book Title</th>
                              <th scope="col">Author</th>
                              <th scope="col">Year</th>
                              <th scope="col">Edition</th>
                              <th scope="col">Category</th>
                                
                            </tr>
                          </thead>
                          <tbody>
                              <tr ng-repeat="book in booksdata">
                                  <th scope="row">{{$index+1}}</th>
                                  <td>{{book.booktitle}}</td>
                                  <td>{{book.bookauthor}}</td>
                                  <td>{{book.year}}</td>
                                  <td>{{book.edition}}</td>
                                  <td>{{book.bookcategor}}</td>
                                  <td>
                                <a href="/#!/pdfviwer/{{book.bookurl}}">    
                                <input type="submit" style="cursor:pointer"class="btn btn-danger" name="viewbook" value="Read Book"/>
                                 </a></td>
                            </tr>
                         
                          </tbody>
                         </table>
                        
                    </div>
                </div>    
                
            </div>
        </div>
    </div>
    
    
    
    
</div>