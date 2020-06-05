function chk_control(id,buttonID) {

    if (document.getElementById(id).checked==false){
      document.getElementById(id).checked=true; 
        document.getElementById(buttonID).style.background='#4AE085'
    }else{
       document.getElementById(id).checked=false;   
         document.getElementById(buttonID).style.background='#f8f9fa'
       
    }
   
}


function updateTextInput(val,id) {
          document.getElementById(id).textContent=val; 
        }