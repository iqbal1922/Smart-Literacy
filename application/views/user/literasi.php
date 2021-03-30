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
                              window.location.href="<?php echo site_url(); ?>SiswaClient/ulasan/";
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
                    <div>Time left = <span id="timer"></span></div>
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

                   <?php if (is_array($buku)) : ?>
                            <?php $i=0; foreach ($buku as $rows) : ?>
                            <h2 class="title-a" style="color:#85a657">Buku <?php echo $rows['nama_buku']; ?></h2>
                            <tr>
                                <iframe src="<?php echo base_url('file_buku/' . $rows['file_pdf']) ?>" width="1110" height="1110" ></iframe>
                            </tr>
                            <?php endforeach ; ?>
<?php endif ; ?>
                            
                           <a class='btn btn-success'href="<?php echo site_url(); ?>SiswaClient/Ulasan/">
                      <i class="fa fa-book"></i>
                      <span >
                          Tulis Ulasan
                      </span>
                      </a>
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