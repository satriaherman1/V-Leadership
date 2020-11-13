

<link rel="stylesheet" href="<?= base_url('assets/css/admin/lihat_hasil.css');?>">


    </head>
        <body>

        <div class="row">
            <div class="col-md-2 fixed-top" id="sidebar-content" >
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
                            <li class="list-group-item   side-menu dash-menu" >
                                <i class="fas fa-columns ml-4 mr-2 "></i> <a href="<?= base_url('admin') ?>" > <span class="side-menu"> Dashboard</span></a> </li>
                            <li class="list-group-item side-menu dash-menu" style="font-size: 17px;    "> <a href="<?= base_url('admin/daftar_kandidat') ?>" > <i class="fas fa-chart-pie ml-4 mr-2"></i> <span class="side-menu"> Statistic</span> </a>   </li>
                            <li class="list-group-item side-menu dash-menu" style="font-size: 17px;  background: #10106B; border: 0;  border-right: 8px solid #2323EE; " > <a class="text-white" href="  <?= base_url('admin/lihat_hasil') ?>"> <i class="fas fa-address-card ml-4 mr-2"></i><span class="side-menu"> Lihat Hasil</span> </a> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
    
            <!-- main content -->
    
            <div class="col content-main">
    
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
    
                <h2 class="ml-3" style="margin-top: 70px;">Hasil Sementara</h2>
                <p class="ml-3 desc">Dibawah ini adalah daftar kandidat</p>
    
                <!-- card -->
    
                <div class="container">
                <div class="content-container" style="margin-top: 120px; margin-left: 0px;">



    <!-- card -->
                <div class="row">
                        <?php foreach($ketua_1 as $daftar): ?>
                    <div class="col " style="padding: 0 !important;" >

                        <div class="card mx-auto mt-3 mb-3" style="min-width:19rem; max-width:19rem; position: relative;">
                            <div class="img" bg-image="<?= base_url();?>assets/resources/kandidat/<?= $daftar['foto'] ?>" style="width:100%; height:300px;"></div>
                            <div class="card-body">
                                <h4 class="card-title text-center text-info p-2" ><?= $daftar['nama'] ?></h4>
                            
                                <p class="card-text "><h1 class="text-center jumlah">hi</h1></p>
                                <a href="<?= base_url(); ?>admin/detail_kandidat_1/<?= $daftar['id'] ?>" class="btn detail btn-success" style="width: 100%; ">Lihat Detail</a>
                            </div>

                        </div>



                    </div>
                        <?php endforeach;?>
                </div>

    <!-- card 2 -->







</div>
</div>
</div>
                </div>
            </div>
        </div>

        <style>
            .content-main{
                margin-left: 17%;
            }

            @media screen and (max-width:768px){
                .content-main{
                    margin-left: 0;
                }
            }
        </style>


        </body>
         

            <script>
            window.onload = function(){
                    
                    var toggler = document.querySelector('#menu-toggler')
                    var element = document.querySelector('#sidebar-content')
                    var btn = document.querySelector('.close')
                    var side = document.querySelector('.side-menu')
                    var header = document.querySelector('.header-name')
                
                    toggler.addEventListener('click' ,function(){
                        element.style.display = 'inline'
                        element.style.position = 'fixed'
                        element.style.marginLeft = "0"
                        element.style.width = '70%'
                        element.style.transition = 'all ease out .3s'
                        side.style.display =' inline-block'
                        header.style.visibility = 'visible'
                        
                        btn.style.visibility ='visible'
                    })
                    
                
                    btn.addEventListener('click' , function(){
                        element.style.display = 'none'
                    })


                    // ajax

                    const render_image = () =>{
                        let image = document.querySelectorAll('.img')
                        image.forEach(img => {
                            let bg_img = img.getAttribute('bg-image');
                            img.style.backgroundImage = `url('${bg_img}')`;
                            img.style.backgroundSize = 'cover';
                            
                        })
                    }

                    render_image();


                  
            var el = document.querySelectorAll('.jumlah')
            function get_pemilih(){
                var xhr = new XMLHttpRequest();
                // var el2 = document.querySelector('.masih')
                //             url : "",
                var url = '<?= base_url('admin/showHasil'); ?>';
                xhr.open("GET" , url , true);
                xhr.send()
                xhr.onload = function(){
                    if(this.readyState == 4 && this.status == 200){
                        // var i;
                         var obj = this.response
                         pemilih = JSON.parse(obj)
                        // console.log(pemilih.length)


                      
                            //  console.log(pemilih[i]['jumlah'])

                            
                            var i;

                            for(i=0; i < pemilih.length ; i++){
                                el.forEach((element) => element.innerHTML = `<h1 class="text-center ">${pemilih[i]['jumlah']}</h1>`)

                                
                                el.innerHTML = '0'
                                console.log(pemilih[i]['jumlah'])
                                
                            }
                             
                            
                  
                        
                    
                }
            }

         
                }
            setInterval(  function(){
                 get_pemilih()

            }, 2000 )

                }

                
            </script>