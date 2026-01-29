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
    <div id="wynykiwszystkie">
        <span id="wyng">Wynik gracz:0</span> 
        <span id="wynk">Wynik komputer:0</span> 
        <span id="ogloszenie"></span>
    </div>
   <!-- /// //-------------------------------------------------------------- -->
 <script>
        var obrazki = document.getElementsByTagName("img");
        var obrazkiKomp = document.getElementById("komputer");
        var przycisk = document.getElementById("losuj");   
        var wbr 
        var los 
        var wyn=0
        var wynk=0
        let wyng = document.getElementById("wyng")
        let wynikK = document.getElementById("wynk")
        let ogloszenie=document.getElementById("ogloszenie")

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

                 switch(wbr){
                case 0:
                    if(los==wbr){
                        console.log("remis!!!!!")
                    }else
                    if(los==2){ 
                        wyn++ 
                    }else 
                    wynk++
                   
                    break;
                case 1:
                   if(los==wbr){
                        console.log("remis!!!!!")
                    }
                    else
                if(los==0){
                        wyn++
                    }else{
                        wynk++
                    }
                    break;
                case 2:
                 if(los==wbr){
                        console.log("remis!!!!!")
                    }else
                    if(los==1){
                        wyn++
                    }  else{
                        wynk++
                    }
                    break;
                
                }
             console.log(wyn)
             console.log(wynk)
               wyng.innerHTML=wyn
            wynikK.innerHTML = wynk
             if(wyn==10){
                console.log("wygrał uzytkownik ")
                wyn=0;
                wynk=0;
                alert("wygrał uzytkownik ")
             }
             if(wynk==10){
                console.log("wygrał komputer")
                wyn=0;
                wynk=0;
               alert("wygrał komputer")
             }
            
            }
             console.log(wbr+" "+ los)
            wyng.innerHTML=wyn
            wynikK.innerHTML = wynk 

             
  </script>


</body>
 
</html>
