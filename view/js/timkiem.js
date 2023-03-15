const search = () =>{
 const searchbox = document.getElementById("search-item").value.toUpperCase();
 const sitem = document.getElementById("main")
 const product = document.querySelectorAll(".bg-image")
 const name = sitem.getElementsByTagName("p") 

 for (var i=0 ; i < name.length; i++){
    let match = product[i].getElementsByTagName('p')[0];

    if (match){
        let textvalue = match.textContent || match.innerHTML

        if (textvalue.toUpperCase().indexOf(searchbox) > -1){
            product[i].style.display = "";
        }else {
            product[i].style.display ="none";
        }
    }
 }
}