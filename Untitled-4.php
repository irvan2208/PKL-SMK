<HTML>
<BODY>
<CENTER><H3>Latihan Objek Document</H3><hr>
Membuka Web Page dengan Perintah Window.Location.href
</CENTER>
<SCRIPT LANGUAGE="Javascript">
function konek1()
{
  if(document.pilihan.pilih.options[0].selected)
   {
    window.location.href="latobjekradio.HTML";
   }
  else if (document.pilihan.pilih.options[1].selected)
   {
    window.location.href="latobjekselect.HTML";
   }
  else if (document.pilihan.pilih.options[2].selected)  
   {
    window.location.href="latobjekteksarea.HTML";
   } 
return true;   
} 
function konek2()
{
 var pilihint;
 var pilihstr;
 pilihint=document.pilihan.pilih.selectedIndex;
 pilihstr=document.pilihan.pilih.options[pilihint].text;
 document.pilihan.pilihteks.value=" Go To " + pilihstr + "!" ;
}
</SCRIPT>
<CENTER>
<FORM NAME="pilihan">
<B>MENU PILIHAN DENGAN TOMBOL</B>
<P><SELECT NAME="pilih" ONCHANGE="konek2()" MULTIPLE SIZE="3">
        <OPTION>Latihan Objek Radio</OPTION>
        <OPTION>Latihan Objek Select</OPTION>
        <OPTION>Latihan Objek Teks Area</OPTION>
   </SELECT>
 </P>
<P><BR>
<INPUT TYPE="button" name="pilihteks" value"" size="40" maxlength="40">
</P>
<P>
<INPUT TYPE="button" NAME="Gobutton" VALUE="Goo!!" ONCLICK="konek1()">
</P>    
</FORM></CENTER>
</BODY>
</HTML>