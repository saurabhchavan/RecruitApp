// var options = {

// host:'api.github.com',

// path: '/users/' + username+ '/repos',

// method: 'GET',

// headers: {'User-Agent':'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)'}

// };
// function postdata(){
    var request = new XMLHttpRequest();
    request.open('get','https://api.github.com/users/funchal')
    request.send();
 var requ;
   request.onload=function(){
    if(request.readyState === request.DONE){
      if(request.status ===200)
      {
         requ= JSON.stringify(request.response);
        console.log(request.response);   
      }
    }
    //console.log(requ.gravatar_id);
      
   }
//    console.log(request.response+'test');
   // }

   /* Hello, World! program in node.js */
console.log("Hello, World!")