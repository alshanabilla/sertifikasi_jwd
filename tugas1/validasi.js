function cekform(){
    foto = document.getElementById('foto');

    if(foto.value==''){
        alert('foto tidak boleh kosong');
        foto.focus();
        return false;
    }
    nama_lengkap= document.getElementById('nama_lengkap');
    if(nama_lengkap.value==''){
        alert('nama lengkap tidak boleh kosong');
        nama_lengkap.focus();
        return false;
    }else if (nama_lengkap.value.length <= 3){
        alert('nama lengkap minimal 3 karakter');
        nama_lengkap.focus();
        return false;
    }

    nama_panggilan= document.getElementById('nama_panggilan');
    if(nama_panggilan.value==''){
        alert('nama panggilan tidak boleh kosong');
        nama_panggilan.focus();
        return false;
    }else if (nama_panggilan.value.length <= 3){
        alert('nama panggilan minimal 3 karakter');
        nama_panggilan.focus();
        return false;
    }

    tempat_lahir= document.getElementById('tempat_lahir');
    if(tempat_lahir.value==''){
        alert('tempat_lahir tidak boleh kosong');
        tempat_lahir.focus();
        return false;
    }

    var tanggal_lahir= document.getElementById('tgl_lahir').value;
    if(tanggal_lahir === ""){
		alert("tanggal lahir tidak boleh kosong");
    }else{
		var today = new Date();
		var tgl_lahir = new Date(tanggal_lahir);
		var year = 0;
		if (today.getMonth() < tgl_lahir.getMonth()) {
			year = 1;
		} else if ((today.getMonth() == tgl_lahir.getMonth()) && today.getDate() < tgl_lahir.getDate()) {
			year = 1;
		}
		var age = today.getFullYear() - tgl_lahir.getFullYear() - year;
 
		if(age < 0){
			age = 0;
		}
		document.getElementById('usia').innerHTML = age;
	}


    
    jenis_kelamin = document.getElementsById('jenis_kelamin');
    if (!jenis_kelamin.value){
        alert("silahkan pilih jenis kelamin");
        jenis_kelamin.focus();
        return false;
    }
    
    kota = document.getElementsById('kota');
    if(kota.value==''){
        alert("silahkan pilih kota tinggal");
        kota.focus();
        return false;
    }  

    email = document.getElementsById('email');
    if (email.value==''){
        alert("email tidak boleh kosong");
        email.focus();
        return false;
    }

    nohp = document.getElementsById('nohp');
    if(nohp.value==''){
        alert('no hp tidak boleh kosong');
        nohp.focus();
        return false;
    }else if (nohp.value.length <= 4){
        alert('no hp minimal 4 karakter');
        nohp.focus();
        return false;
    }
    
    medsos = document.getElementsById('medsos');
    if (medsos.value =''){
        alert('silahkan pilih sosial media yang anda gunakan');
        medsos.focus();
        return false;
    }

    

   
    
   
    
    


    
    
   
    
      
    
    
    
    
    
   
    


}