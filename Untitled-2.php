<HTML>
<BODY>
<H3>Latihan Objek Window</H3><hr>
<SCRIPT LANGUAGE="Javascript">
window.status="Welcome";
window.alert=("Selamat Datang");
angka=window.prompt("Inputkan Angka ?",0);
document.write("Angka vaforit anda adalah =<strong>" +angka+ "</strong><br>");
tampung=window.confirm("jenis kelamin anda Pria ?");
if(tampung)
 {
  document.write("Boleh Kenalan donk");
  }
else
 { 
  document.write("Ok dech");
  }
window.close();      
</SCRIPT>
</BODY>
</HTML>