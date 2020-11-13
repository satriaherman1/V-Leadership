window.onload = function(){
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
