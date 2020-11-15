
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="<?= base_url('assets/css/admin/daftar_kandidat.css');?>">


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
                            <a href="<?= base_url('admin') ?>" ><i class="fas fa-columns ml-4 mr-3 "></i> <span class="side-menu"> Dashboard</span></a> </li>
                            <li class="list-group-item side-menu dash-menu" style="font-size: 17px;     background: #10106B; border: 0;  border-right: 8px solid #2323EE;"> <a href="<?= base_url('admin/daftar_kandidat') ?>" class="text-white"><i class="fas fa-address-card ml-4 mr-3"></i> <span class="side-menu"> Kandidat</span> </a>   </li>
                            <li class="list-group-item side-menu dash-menu" style="font-size: 17px;"> <a href=" <?= base_url('admin/lihat_hasil') ?>"> <i class="fas fa-chart-pie ml-4 mr-3"></i><span class="side-menu"> Lihat Hasil</span> </a> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
    
            <!-- main content -->
    
            <div class="col  content-main" >
    
                <nav class="nav " style="float: right ; z-index:1;">
                    <div id="menu-toggler" class="ml-4" >
                        <div class="menubar"></div>
                        <div class="menubar"></div>
                        <div class="menubar"></div>
                    </div>
                   
                    <div class="content">
                        <a href="<?= base_url('admin/logout') ?>" style="z-index: 90;" class="nav-link">Logout</a>
                    </div>
                </nav>
               <div class="main-content ">
                    <!-- top navigation -->
    
                <div style="clear: both;"></div>
    
                <!-- content dashboard -->
    
                <h2 class="" style="margin-top: 70px;">Daftar Kandidat</h2>
                <p class="desc">Dibawah ini adalah daftar kandidat</p>
    
                <!-- card -->
    
                <div class="container">
                <div class="content-container ">
                        

                        <?php if( $this->session->flashdata('flash') ) :?>
                            <div class="alert alert-success" role="alert" style="width: 80%;">
                               data  <?= $this->session->flashdata('flash');?>
                            </div>
                        <?php endif;?>
                        <!-- card component -->
                        <div class="table_container mt-5 mb-5" style="background:#fff;  width:100%; padding : 50px; position:relative; overflow-x:scroll;">
                            <table id="daftar_kandidat" class="table table-striped table-bordered " >
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Visi & Misi</th>
                                        <th>Foto</th>
                                        <th>opsi</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach($ketua_1 as $daftar):?>
                                    <tr>
                                        <td><?= $daftar['nama'];?></td>
                                        <td><?= $daftar['kelas'];?></td>
                                        <td><?= $daftar['visi'];?></td>
                                        <td> <img src="<?= base_url()?>assets/resources/kandidat/<?= $daftar['foto']; ?>" alt="" srcset="" width="80px" height="100px">  </td>
                                        <th> <a href=" <?= base_url(); ?>admin/edit_ketua_1/<?= $daftar['id']; ?>" class="btn btn-primary"><i class="fas fa-edit text-white "></i></a><a href="<?= base_url(); ?>admin/hapus_ketua_1/<?= $daftar['id'];?>" class="mt-3 btn btn-danger"onclick="confirm('apkah yakin ingin dihapus?')"><i class="fas fa-trash-alt text-white "></i></a></th>
                                    </tr>
                                <?php endforeach; ?>
                                    
                                </tbody>
                        
                                
                            </table>

                            <a href="<?= base_url(); ?>/admin/tambah_ketua_1" class="btn btn-primary mt-4" id="tambah">Tambah Kandidat</a>
                        </div>

                        <!-- ketua 2 -->

                     
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
          
          
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
            
            <script>
                $(document).ready(function(){
                    $('#daftar_kandidat').DataTable({
                        responsive : true
                    }).columns.adjust()
                    

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
                })

                

      
            </script>
            <script src="<?= base_url('assets/js/admin/daftar_kandidat.js'); ?>">

