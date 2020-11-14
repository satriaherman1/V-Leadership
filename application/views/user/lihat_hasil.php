<div class="top-bar shadow justify-content-left fixed-top text-body" style=" width: 100% ; height: 90px;  background: #fff; ">
                <div class="container">
                    <div class="atas">
                    
                    <div class="navigation mr-4">
                        <span class="hamburger-menu mt-1"></span>
                        <span class="hamburger-menu " style="margin-top: 5px;"></span>
                        <span class="hamburger-menu " style="margin-top: 5px;"></span>
                    
                    </div>

                    <div class="image" ></div>    <h5 class="ml-2 my-auto" > V-Leadership</h5> </div>
                    <div class="nav" style="margin-top: -46px; ml-auto;">
                            <a href="<?= base_url() ?>" class="nav-el-1 navigation-element nav-1" >Home</a>
                            <a href="<?= base_url('admin') ?>" class="navigation-element nav-1" >Login Admin</a>


                        <div class="nav-el">


                           
                            <div class="pemisah mt-4"></div>

                            <div class="brand mt-4">
                                <img src="<?= base_url() ?>assets/resources/home/icon-app.png" style="float: left; display:block; margin-left:30px;" width="30px" height="30px" alt="" class="brand">
                                <div class="brand-name mt-1 ml-2 font-weight-bold" style="float: left;">V-Leadership</div>
                                <span class="close" style="cursor: pointer;">x</span>
                                <div style="clear: both;"></div>

                                <hr style="width: 83%; height: .6px; background: #dbdbdb;" class="mx-auto">
                            </div>
                            <a href="<?=  base_url()?>" class="nav-el-1 navigation-element " > <i class="fas fa-home  mr-2" style="margin-left: 35px;"></i>Home</a>
                            <a href="<?= base_url('admin') ?>" class="navigation-element " > <i class="fas fa-user-cog mr-2" style="margin-left: 35px;"></i>Login Admin</a>

                        </div>

                    </div>

                </div>
                
            </div>

            <div class="container" style="margin-top: 120px;">
                <div class="row">
                    <?php foreach($ketua_1 as $daftar): ?>

                        <div class="col">
                            <div class="card mx-auto mt-5" style="width: 19rem">
                                <div class="img" bg-image="<?= base_url();?>assets/resources/kandidat/<?= $daftar['foto'] ?>" style="width:100%; height:300px;"></div>
                                <h2 class=" text-info card-title text-center my-3"><?= $daftar['nama']?></h2>
                                
                                <h1 class="text-center my-4 jumlah"><?= $daftar['jumlah']?></h1>
                            </div>
                        </div>
                
                    <?php endforeach;?>
                </div>
            </div>


            <style>
                .image{
                    height: 30px;
                    width: 30px;
                    background-image: url('<?= base_url(); ?>assets/resources/home/icon-app.png');
                    background-position: center center;
                    background-size: cover;
                    margin-bottom: auto;
                  
                   
                }

                .atas{
                  margin-bottom: auto;
                  margin-top: auto ;
                  display: flex;
                }


                .navigation{
                    visibility: hidden;
                }

                .hamburger-menu{
                    height: 4px;
                    width: 30px;
                    display: block;
                    background: #000;
                    border-radius: 12px;
                    
                }


                /* navigation element */

                .nav-el{
                    display: none;
                }

                .pemisah{
                    display: none;
                }

                .close{
                    display: none;
                }

                .nav-el-1{
                    margin-left: auto !important;
                }

                .navigation-element{
                    color: #595959;
                    padding: 20px 30px;
                    transition: .3s;
                    
                }

                .navigation-element:hover{
                    background: #ededed;
                    transition: .3s;
                    text-decoration: none;
                    color: #000;
                    
                }

                .container{
                    padding: 30px;
             
                }

                .nav::before{
                    content: '';
                    position: absolute;
                    height: 100%;
                    width: 100%;
                    background-color: #000;
                    z-index: 1;
                    left:100%;
                    opacity: .3;
                }


                @media screen and ( max-width: 768px){
                    .nav-1{
                        display: none;
                    }

                    .pemisah{
                        display: inline;
                    }

                    .close{
                        display: inline;
                        position: absolute;
                        top: 48px;
                        right: 15px;
                        
                    }

                    .nav-el{
                        margin-top: 40px;
                        display: flex;
                        flex-direction: column;
                        width: 100%;
                        position: relative;
                    }

                    .nav-el-1{
                        margin-top: 50px;
                    }

                    .navigation{
                        visibility: visible;
                        cursor: pointer;
                    }

                    .nav{
                        position: fixed;
                        top: 0;
                        left: -1000px ;
                        height: 120%;
                        width: 60%;
                        background: #fff;
                        z-index: 9;
                        transition: .5s;
                     
                        box-shadow: 1px 1px 15px #919191;
                    }

                    .navigation-element{
                        z-index: 100;
                        color: #454545;
                        padding: 20px 0px 20px 0px;
                        width: 100%;
                        height: 50px;
                        line-height: 10px;
                        text-align: left;
                        margin-top: 30px;
                        margin-left: 0px !important;
                        

                    }
                }
                

            </style>

            <script>
                var navigation = document.querySelector('.navigation')
                    var nav = document.querySelector('.nav')
                    var close = document.querySelector('.close')

                    navigation.addEventListener('click' , function(){
                        nav.style.left ="0px"
                        
                    })

                    close.addEventListener('click' , function(){
                        nav.style.left = "-1000px";
                    })


                    // render image

                    const render_image = () =>{
                        let image = document.querySelectorAll('.img')
                        image.forEach(img => {
                            let bg_img = img.getAttribute('bg-image');
                            img.style.backgroundImage = `url('${bg_img}')`;
                            img.style.backgroundSize = 'cover';
                            
                        })
                    }

                    render_image();


                    // ajax for jumlah

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

                                
                                
                                console.log(pemilih[i]['jumlah'])
                                
                            }
                             
                            
                  
                        
                    
                }
            }

         
                }

                setInterval(  function(){
                 get_pemilih()

            }, 2000 )

                
            </script>