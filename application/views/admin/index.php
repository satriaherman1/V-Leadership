

<link rel="stylesheet" href="<?= base_url('assets/css/admin/index.css');?>">
    </head>
      <body>
          
      <div class="row">
        <div class="col-md-2 col-sm-12 fixed-top" id="sidebar-content" >
            <div id="sidebar ">
                <div class="side-header">
                    <span class="close text-white" onclick="close()">x</span>
                    <img src="<?= base_url('assets/resources/home/icon-app.png') ?> " class=" mr-2 header-img" width="40px"  height="40px" alt="" srcset="">

                    
                    <h6 class ="header-name mt-5">V-Leadership</h6>

                    <div style="clear: both;"></div>
                    <hr style="height: .3px; background: #4D4D98;">
                </div>

                <div class="side-content" style="position: relative;">
                    <ul class="list-group " style="width: 100%; position: absolute;">
                        <li class="list-group-item mini-side-content side-menu">core</li>
                        <li class="list-group-item  active side-menu mt-2" style="font-size: 17px;     background: #10106B; border: 0;  border-right: 8px solid #2323EE;">
                           <a href="<?= base_url('admin') ?>" class="text-white"> <i class="fas fa-columns ml-4 mr-3 "></i> <span class="side-menu"> Dashboard</span></a> </li>
                        <li class="list-group-item side-menu dash-menu" style="font-size: 17px;"><a href="<?= base_url('admin/daftar_kandidat') ?>"><i class="fas fa-address-card ml-4 mr-3"></i><span class="side-menu"> Kandidat</span> </a>   </li>
                        <li class="list-group-item side-menu dash-menu" style="font-size: 17px;"> <a href="<?= base_url('admin/lihat_hasil') ?>"> <i class="fas fa-chart-pie ml-4 mr-3"></i><span class="side-menu"> Lihat Hasil</span> </a> </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- main content -->

        <div class="col content-main" >

            <nav class="nav " style="float: right ;">
                <div id="menu-toggler" class="ml-4" >
                    <div class="menubar"></div>
                    <div class="menubar"></div>
                    <div class="menubar"></div>
                </div>
               
                <div class="content">
                    <a href="<?= base_url('admin/logout') ?>" class="nav-link">Logout</a>
                </div>
            </nav>
           <div class="main-content ">
                <!-- top navigation -->

            <div style="clear: both;"></div>

            <!-- content dashboard -->

            <h2 class="" style="margin-top: 70px;">Dashboard</h2>
            <p class="desc">Your performance below</p>

            <!-- card -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card ml-2 mt-3 p-4 mx-auto" style="width: 90%; border-left:10px solid #2323EE;">
                            <div class="clearfix">
                                <div class="card-icon text-center" style="float: left; ">
                                    <i class="fas fa-user img-card"  style="background-color: #2323EE;"></i>
                                </div>

                                <div class="card-desc" style="float: left;">
                                    <h2 class="card-title mt-2 ml-4 sudah" >209</h2>
                                    <p class="card-text ml-4 ">Sudah Memilih</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="card ml-2 mt-3 p-4 mx-auto" style="width: 90%; border-left: 10px solid  #04B1B1;">
                            <div class="clearfix">
                                <div class="card-icon text-center" style="float: left; ">
                                    <i class="fas fa-thumbs-up img-card"  style="background-color: #04B1B1;"></i>
                                </div>

                                <div class="card-desc" style="float: left;">
                                    <h2 class="card-title mt-2 ml-4 masih" style="">100</h2>
                                    <p class="card-text ml-4" >Belum Memilih</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card ml-2 mt-3 p-4 mx-auto" style="width: 90%; border-left: 10px solid  #F1B104;">
                            <div class="clearfix">
                                <div class="card-icon text-center" style="float: left; ">
                                    <i class="fas fa-comments img-card"  style="background-color: #F1B104;"></i>
                                </div>

                                <div class="card-desc" style="float: left;">
                                    <h2 class="card-title mt-2 ml-4 jumlah" >  </h2>
                                    <p class="card-text ml-4" >Jumlah Pemilih</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
    
                </div>
            </div>

            <!-- table content -->
            <h2 class="mt-5">Top Active Users</h2>
            <p class="desc">Top user from your websites viewers</p>
<!-- 
            <div class="table">
                <table class="table mt-5 bg-white mx-auto" style="width: 90%;">
                    <thead class="thead-light" >
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Satria</td>
                            <td>muhammadsatriaherman@gmail.com</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
    
                        <tr>
                            <td>1</td>
                            <td>Satria</td>
                            <td>muhammadsatriaherman@gmail.com</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
    
                        <tr>
                            <td>1</td>
                            <td>Satria</td>
                            <td>muhammadsatriaherman@gmail.com</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                    </tbody>
                </table>
            </div> -->

            <div class="row mt-5">
                <div class="col-md-6 mt-3">
                    <div class="chart1 mx-auto p-4" style="width: 100%; background:#fff; ">
                        <canvas id="doughnutChart"></canvas>
                    </div>  
                </div>

                <div class="col-md-6 mt-3">
                    <div class="chart1 p-4" style="width: 100%; background:#fff; ">
                        <canvas id="line"></canvas>
                    </div>  
                </div>
            </div>


           </div>
        </div>
    </div>

      </body>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
         

            <script src="<?= base_url('assets/js/admin/index.js'); ?>"></script>



            <script>

        window.onload = function(){
           
            function get_pemilih(){
                var xhr = new XMLHttpRequest();
                var el = document.querySelector('.sudah')
                var el2 = document.querySelector('.masih')
                var el3 = document.querySelector('.jumlah')
                //             url : "",
                var url = '<?= base_url('admin/showPemilih'); ?>';
                xhr.open("GET" , url , true);
                xhr.send()
                xhr.onload = function(){
                    if(this.readyState == 4 && this.status == 200){
                        var i;

                        var obj = this.response
                        pemilih = JSON.parse(obj)

                        for( i=0 ; i < pemilih['sudah_memilih'].length ; i++ ){
                            el.innerHTML = `  <h3 class="card-title" style=" font-weight:bold;">${pemilih['sudah_memilih'][0]['jumlah']} </h3>`
                            el2.innerHTML = `<h3 class="card-title" style=" font-weight:bold;">`+ (pemilih['pemilih'][0]['jumlah'] - pemilih['sudah_memilih'][0]['jumlah']) +`</h3>`
                            el3.innerHTML = `  <h3 class="card-title" style=" font-weight:bold;">${pemilih['pemilih'][0]['jumlah']} </h3> `
                            console.log(pemilih)
                        }
                        
                    }
                }
            }

            setInterval(  function(){
                get_pemilih()

            }, 2000 )

          


               
               //chart
               function chart1(){
               var ctxD = document.getElementById("doughnutChart").getContext('2d');
               var myLineChart = new Chart(ctxD, {
               type: 'pie',
               data: {
               labels: [<?php foreach($ketua1 as $daftar): ?>
                "<?= $daftar['nama']?>",

               <?php endforeach;?>],
               datasets: [{
               data: [<?php foreach($ketua1 as $daftar): ?>
                "<?= $daftar['jumlah']?>",

               <?php endforeach;?>],
               backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1"],
               hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5"]
               }]
               },
               options: {
               responsive: true,
             
               legend : {
                   position : 'right',
                   labels : {
                       boxWidth : 18,
                       padding  : 20,
                       fontSize : 16
                      
                   }
               }
               }
               })
           
               }

            //    chart bar

            function chart2(){
                   var ctxL = document.getElementById("line").getContext('2d');
                   var myLineChart = new Chart(ctxL, {
                       type: 'bar',
                       data: {
                         labels: [<?php foreach($ketua1 as $daftar): ?>
                                    "<?= $daftar['nama']?>",

                                <?php endforeach;?>],
                         datasets: [
                           {
                             label: ["jumlah"],
                             data: [ <?php foreach($ketua1 as $daftar): ?>
                                    "<?= $daftar['jumlah']?>",

                                <?php endforeach;?> ],
                             backgroundColor: ['#AD35BA', '	#00BFFF' , '#F4A460' , '#778899'],
                             borderColor: [
                               '#AD35BA',
                             ],
                             borderWidth: 2,
                             pointBorderColor: "#fff",
                             pointBackgroundColor: "rgba(173, 53, 186, 0.1)",
                           }
                         ]
                       },
                       options: {
                         responsive: true,
                         scales : {
                             yAxes : [{
                                 ticks : {
                                     min : 0
                                 }
                             }]
                         }
                       }
                     });
               
                   }
           
              
           
                   chart1();
                   chart2();
                }

                // $(document).ready(function(){
                //     function show_pemilih(){
                //         $.ajax({
                //             type : 'ajax',
                //             async : true,
                //             dataType: 'json',
                //             success: function (data){
                //                 console.log(data);
                //             }
                //         })
                //     }

                //     show_pemilih();
                // })

                // toggle button

                var toggler = document.querySelector('#menu-toggler')
                var element = document.querySelector('#sidebar-content')
                var btn = document.querySelector('.close')
                var side = document.querySelector('.side-menu')
                var header = document.querySelector('.header-name')

                toggler.addEventListener('click' ,function(){
                    element.style.display = 'inline'
                    element.style.position = 'fixed'
                    element.style.marginLeft = "0px"
                    
                    element.style.width = '70%'
                    
                    side.style.display =' inline-block'
                    header.style.visibility = 'visible'
                    btn.style.visibility ='visible'
                })
                
            
                btn.addEventListener('click' , function(){
                    element.style.display = 'none'
                })



            </script>