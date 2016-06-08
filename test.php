<!DOCTYPE html>
<html>
    <head>
        <title>Practical Cryptography</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <link href="/static/core/img/favicon.png" rel="icon" type="image/png" />

        
        <link rel="stylesheet" href="/static/core/css/style.css" />
        <link rel="stylesheet" href="/static/amazon/css/style.css" />
        <link rel="stylesheet" href="/static/core/css/prototip.css" />
        

        
        <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js" type="text/javascript"></script>
        <script src="/static/core/js/prototip.js" type="text/javascript"></script>
        <!--[if IE]>
        <script src="/static/core/js/excanvas.js" type="text/javascript"></script>
        <![endif]-->
        <script src="/static/core/js/flotr-0.2.0-alpha.js" type="text/javascript"></script>
        <!--[if lt IE 8]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
        <![endif]-->
        
    </head>

    <body id="ciphers">
  
    <h1>Hill Cipher</h1>
    
<script type="text/javascript"> 
function Encrypt(){
    plaintext = document.getElementById("p").value.toLowerCase().replace(/[^a-z]/g, "");  
    k = document.getElementById("k").value.toLowerCase().replace(/[^0-9 ]/g, "");
    keys = k.split(" "); 
    // do some error checking
    if(plaintext.length < 1){ alert("please enter some plaintext (letters and numbers only)"); return; }    
    if(plaintext.length % 2 == 1){ plaintext = plaintext + "x"; }    
    if(keys.length != 4){ alert("key should consist of 4 integers"); return; }
    for(i=0;i<4;i++) keys[i] = keys[i]%26;
    ciphertext="";
    for(i=0; i<plaintext.length; i+=2){ 
      ciphertext += String.fromCharCode((keys[0]*(plaintext.charCodeAt(i)-97) + keys[1]*(plaintext.charCodeAt(i+1)-97))%26 + 97); 
      ciphertext += String.fromCharCode((keys[2]*(plaintext.charCodeAt(i)-97) + keys[3]*(plaintext.charCodeAt(i+1)-97))%26 + 97); 
    } 
    document.getElementById("c").value = ciphertext; 
} 
 
function Decrypt(){ 
    ciphertext = document.getElementById("c").value.toLowerCase().replace(/[^a-z]/g, "");  
    k = document.getElementById("k").value.toLowerCase().replace(/[^0-9 ]/g, ""); 
    keys = k.split(" "); 
    // do some error checking 
    if(ciphertext.length < 1){ alert("please enter some ciphertext (letters only, numbers should be spelled)"); return; }    
    if(ciphertext.length % 2 == 1){ alert("ciphertext is not divisible by 2 (wrong algorithm?)"); return; }
    if(keys.length != 4){ alert("key should consist of 4 integers"); return; }
    for(i=0;i<4;i++) keys[i] = keys[i]%26;
    // calc inv matrix
    det = keys[0]*keys[3] - keys[1]*keys[2];
    det = ((det%26)+26)%26;
    di=0;
    for(i=0;i<26;i++){ if((det*i)%26 == 1) di = i; }
    if(di == 0){alert("could not invert, try different key"); return; }
    ikeys = new Array(4);
    ikeys[0] = (di*keys[3])%26; ikeys[1] = (-1*di*keys[1])%26;
    ikeys[2] = (-1*di*keys[2])%26; ikeys[3] = di*keys[0];
    for(i=0;i<4;i++){ if(ikeys[i] < 0) ikeys[i] += 26; }
    plaintext="";
    for(i=0; i<ciphertext.length; i+=2){ 
      plaintext += String.fromCharCode((ikeys[0]*(ciphertext.charCodeAt(i)-97) + ikeys[1]*(ciphertext.charCodeAt(i+1)-97))%26 + 97); 
      plaintext += String.fromCharCode((ikeys[2]*(ciphertext.charCodeAt(i)-97) + ikeys[3]*(ciphertext.charCodeAt(i+1)-97))%26 + 97); 
    } 
    document.getElementById("p").value = plaintext; 
} 
</script> 

<h2>Шифр хілла</h2> 
<p>Це реалізація JavaScript Hill Cipher.</p>

<p>"Ключ" повинен бути введений у вигляді 4 чисел, наприклад <tt> 3 4 19 11 </tt>. Ці цифри будуть формувати ключ (верхній ряд, нижній ряд).</p>

Відкритий текст<br> 
<textarea id="p" name="p" rows="8" cols="100">ALLIED CIPHER MACHINES USED IN WWII INCLUDED THE BRITISH TYPEX AND THE AMERICAN SIGABA; BOTH WERE ELECTROMECHANICAL ROTOR DESIGNS SIMILAR IN SPIRIT TO THE ENIGMA, ALBEIT WITH MAJOR IMPROVEMENTS. NEITHER IS KNOWN TO HAVE BEEN BROKEN BY ANYONE DURING THE WAR. THE POLES USED THE LACIDA MACHINE, BUT ITS SECURITY WAS FOUND TO BE LESS THAN INTENDED BY POLISH ARMY CRYPTOGRAPHERS IN THE UK, AND ITS USE WAS DISCONTINUED. US TROOPS IN THE FIELD USED THE M- AND THE STILL LESS SECURE M- FAMILY MACHINES. BRITISH SOE AGENTS INITIALLY USED 'POEM CIPHERS' MEMORIZED POEMS WERE THE ENCRYPTION-DECRYPTION KEYS, BUT LATER IN THE WAR, THEY BEGAN TO SWITC</textarea> 
<p> key = <input id="k" name="k" size="11" value="5 17 4 15" type="text"></p> 
<p><input name="e" value="v Encrypt v" onclick="Encrypt()" type="button"> 
<input name="d" value="^ Decrypt ^" onclick="Decrypt()" type="button"></p> 
<p>Зашифрований текст<br><textarea id="c" name="c" rows="8" cols="100"></textarea> </p> 
 


<noscript>Please enable JavaScript to view the comments powered by Disqus.</noscript>


    </body>
</html>
