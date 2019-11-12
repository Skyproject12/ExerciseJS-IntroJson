// let mahasiswa = {
//     // mahasiswa berupa object
//     nama: "Sandika Galih",
//     nim: "030403024",
//     email: "sandikagalih@unpas.ac.id"
// } 
// // menampilkan object di console log 
// //console.log(mahasiswa); 

// // megubah object ke json
// console.log(JSON.stringify(mahasiswa));

let xhr = new XMLHttpRequest(); 
xhr.onreadystatechange= function(){  
    // check request status 
    if(xhr.readyState==4 && xhr.status==200){
        // call response text and tampung in the mahasiswa variable  
        let mahasiswa= JSON.parse(this.responseText);  
        // execution in console
        console.log(mahasiswa);
    }
} 
// to get file json use js
xhr.open('GET','coba.json', true); 
xhr.send();