@extends('layouts.welcome')
@section('content')
      <div class="d-sm-flex align-items-center justify-content-between mb-2">
         <h4 class="a_dash">Admin Dashboard</h4>
      </div>

      <div id="crypto-stats-3" class="row">
         
         <div class="col-xl-4 col-lg-6 col-6"> 
            <div class="card pull-up">
               <div class="card-content">
                  <a href="/homes">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <h6 class="info">counts</h6><br>
                                 <h5>Homes</h5>
                              </div>
                              <div>
                                 <i class="icon-user info font-large-2 float-right"></i>
                              </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                           <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>

         <div class="col-xl-4 col-lg-6 col-6"> 
            <div class="card pull-up">
               <div class="card-content">
                  <a href="/undercons">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <h6 class="warning">counts</h6> 
                                 <br>
                                 <h5>Under Construction</h5>
                              </div>
                              <div>
                                 <i class="icon-home warning font-large-2 float-right"></i>
                              </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                           <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>

         <div class="col-xl-4 col-lg-6 col-6"> 
            <div class="card pull-up">
               <div class="card-content">
                  <a href="/availsold">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <h6 class="success">counts</h6><br><h5>Available/Sold</h5>
                              </div>
                              <div>
                                 <i class="icon-home success font-large-2 float-right"></i>
                              </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                           <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>

         <div class="col-xl-4 col-lg-6 col-6"> 
            <div class="card pull-up">
               <div class="card-content">
                  <a href=" ">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <h6 class="danger">counts</h6><br><h5>Enquiry</h5>
                              </div>
                              <div>
                                 <i class="icon-home danger font-large-2 float-right"></i>
                              </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                           <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-6"> 
            <div class="card pull-up">
               <div class="card-content">
                  <a href=" ">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <h6 class="success">counts</h6><br><h5>Selling Requests</h5>
                              </div>
                              <div>
                                 <i class="icon-home success font-large-2 float-right"></i>
                              </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                           <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-6"> 
            <div class="card pull-up">
               <div class="card-content">
                  <a href=" ">
                     <div class="card-body">
                        <div class="media d-flex">
                              <div class="media-body text-left">
                                 <h6 class="danger">counts</h6><br><h5>Lending Requests</h5>
                              </div>
                              <div>
                                 <i class="icon-home danger font-large-2 float-right"></i>
                              </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                           <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>   
   @endsection