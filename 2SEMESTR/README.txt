<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <div>
        <img src="kamien1.PNG">
        <img src="papier1.png">
        <img src="nozyce1.PNG">
    </div>
    <br>
    <button id="losuj">Następna runda</button>
    <br>
    <img id="komputer">
   <!-- /// //-------------------------------------------------------------- -->
 <script>
        var obrazki = document.getElementsByTagName("img");
        var obrazkiKomp = document.getElementById("komputer");
        var przycisk = document.getElementById("losuj");   
        var wbr 
        var los 

        // Gracz 
            for(let i=0; i<obrazki.length; i++){
                obrazki[i].onclick=function(){
                    for(let h=0;h<obrazki.length;h++){
                        obrazki[h].style.outline=""
                    }
                    this.style.outline ="5px solid green"
                    wbr = i
                    
                }
            }
            przycisk.onclick=function(){
                var obrazkiK = ["kamien2.png","papier2.png","nozyce2.png"];
                 los = Math.floor(Math.random()*obrazkiK.length);
                obrazkiKomp.src = obrazkiK[los];
                 console.log(wbr+" "+ los)

            }
             console.log(wbr+" "+ los)
  </script>


</body>
 
</html>
