function recherche(){
    var xhr=getXMLHttpRequest();
    obj = document.getElementById("div_recherche");
    var produit=document.getElementById("search").value;
   if(produit!="")

   {xhr.open("GET","recherche_produit.php?p="+produit,true);
    xhr.send();
    xhr.onreadystatechange=function(){
                                        
    if(xhr.readyState == 4 && xhr.status == 200)
            {obj.innerHTML =xhr.responseText;}
        }                          
    }
                        }

 