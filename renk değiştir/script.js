// JavaScript Document
 function renkDegistir(){
 var renkler=["red","SeaGreen","blue","yellow","pink","orange","lightblue","aquamarine"];
 var rastgele;
 var i;
 for(i=0; i<8; i++){
 rastgele=Math.floor(Math.random() * 8); 
 document.getElementsByTagName("div")[i].style.backgroundColor=renkler[rastgele];
   }
 }
