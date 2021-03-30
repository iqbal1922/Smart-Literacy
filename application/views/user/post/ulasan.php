<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Literasi</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <script>
              document.getElementById('timer').innerHTML =
                0 + ":" + 05;
              startTimer();
              function startTimer() {
                var presentTime = document.getElementById('timer').innerHTML;
                var timeArray = presentTime.split(/[:]+/);
                var m = timeArray[0];
                var s = checkSecond((timeArray[1] - 1));
                if(s==59){m=m-1}
                //if(m<0){alert('timer completed')}
                document.getElementById('timer').innerHTML =
                  m + ":" + s;
                setTimeout(startTimer, 1000);
              }
              function checkSecond(sec) {
                if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
                if (sec < 0) {
                              window.location.href="<?php echo site_url(); ?>SiswaClient/berhasil/";
                            }
              
                return sec;
              }
              </script>
              

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Literasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Simple table with project listing with progress and editing options</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th>Literasi 15 Menit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>                        
                          <td class="project_progress">

                            <form action="<?php echo site_url('SiswaClient/ulasan_process');?>" class="needs-validation" method="POST" enctype="multipart/form-data">
 
                              <td height="27"><div align="left"><strong><?php echo "Tanggal : ".date("d-M-y");?></strong></div></td>
                                
                              <div class="w3-row-padding">
                                     <div class="w3-half">
                                             <input class="w3-input w3-border" type="text" placeholder="Judul" name="judul" style="width:200px;hight:100px" id="judul">
                                     </div>
                                 </div>
                                 <br>
                                 <div class="w3-padding">
                                         <textarea name="keterangan"style="width:640px;height:200px" id="keterangan"  placeholder="Keterangan"></textarea>
                                 </div>
                                 <button type="button" class="w3-button w3-block w3-teal w3-section w3-padding" data-toggle="modal" data-target="#myModal" style="margin-left:15px;width:640px;height:40px">
                                                             Kirim
                                                         </button>
                                                         <!-- The Modal -->
                                                         <div class="modal fade" id="myModal">
                                                             <div class="modal-dialog">
                                                                 <div class="modal-content">
                             
                                                                     <!-- Modal body -->
                                                                     <div class="modal-body">
                                                                         <p>Apa anda yakin ingin menambah data ini ?</p>
                                                                     </div>
                             
                                                                     <!-- Modal footer -->
                                                                     <div class="modal-footer">
                                                                         <button type="submit" class="btn btn-primary">Kirim</button>
                                                                         <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                                                     </div>
                             
                                                                 </div>
                                                             </div>
                                                         </div>
                                     <!-- <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit" >Kirim Komentar</button> -->
                                 </div>
                                 </form>
                          </td>
                        


                          
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>