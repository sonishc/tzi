<!DOCTYPE html>
<html>
  <head>
    <title>Хілла</title>
  <!-- Bootstrap -->
    <meta name="lab 1-4 tzi" content="">
    <meta name="Serhii Onishchuk" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <script src="js/jquery-1.12.2.js"></script>
    
    <script src="js/Chart.js"></script>

    
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/normalize.css">
    
  </head>
  <body>
   <script>
        var toUp = "ALLIED CIPHER MACHINES USED IN WWII INCLUDED THE BRITISH TYPEX AND THE AMERICAN SIGABA; BOTH WERE ELECTROMECHANICAL ROTOR DESIGNS SIMILAR IN SPIRIT TO THE ENIGMA, ALBEIT WITH MAJOR IMPROVEMENTS. NEITHER IS KNOWN TO HAVE BEEN BROKEN BY ANYONE DURING THE WAR. THE POLES USED THE LACIDA MACHINE, BUT ITS SECURITY WAS FOUND TO BE LESS THAN INTENDED BY POLISH ARMY CRYPTOGRAPHERS IN THE UK,AND ITS USE WAS DISCONTINUED. US TROOPS IN THE FIELD USED THE M- AND THE STILL LESS SECUREM- FAMILY MACHINES. BRITISH SOE AGENTS INITIALLY USED 'POEM CIPHERS' MEMORIZED POEMS WERE THE ENCRYPTION-DECRYPTION KEYS, BUT LATER IN THE WAR, THEY BEGAN TO SWITC";
        toUp = toUp.toUpperCase(toUp);
        console.log(toUp);
        var sttr = toUp;

       
       
       var currentkey = 20; //key my shifr
		
        function convertKey(sttr) {
            var o_text = sttr;
            var o_letters = o_text.split("");
            var alphabet = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',' ','.',',',';','-','\''];
            var c_text="", _x = "";
            for (x in o_letters) {
                if (currentkey > 0) {
                    _x = alphabet[(alphabet.indexOf(o_letters[x]) + currentkey) % alphabet.length]
                } else {
                    _x = alphabet[(alphabet.indexOf(o_letters[x]) + (32 - currentkey)) % alphabet.length]
                }
                c_text = c_text + _x;
            }
            console.log(c_text);
            return c_text;
        }


       function count_char(str){
                count = str.length;
                alphabet = [" ","'",",","-",".",";","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
                alphabet1 = [" ","'",",","-",".",";","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
                alphabet3 = [" ","'",",","-",".",";","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
                alphabet2 = [" ","E","A","T","S","I","N","O","R","C","D","H","L","U","Y","P","F","M","B","G","W",",","K","V",".","-","'","Z","X","Q","J",";"];
                var dres = 0;
                var arr = []; // Частотний аналіз 1 букви
                var arr2 = []; // Частотний аналіз 1 букви посортований
                var arr22 = []; //test words alphabet
                var myArray = []; // Частотний аналіз біграм числа
                var myArrayS = []; // Масив біграм відсортованих
                var myArraySAl1 = []; // Масив біграм ключі
                var myArraySAl = []; // Масив біграм значення
           
                var myArrayT = []; // Частотний аналіз Триграм числа
                var myArrayST = []; // Масив Триграм відсортованих
                var myArraySAl1T = []; // Масив триграм ключі
                var myArraySAlT = []; // Масив триграм значення
           
                //Створюємо біграми
                for (j=0; j<31; j++){
                    for (k=0; k<31; k++){
                       // for (w=0; w<31; w++){//
                var count1 = 0;
                var pos1 = sttr.indexOf(alphabet[k]+alphabet1[j]);//+alphabet3[w]
                while ( pos1 != -1 ) {
                   count1++;
                   pos1 = sttr.indexOf(alphabet[k]+alphabet1[j],pos1+1); //+alphabet3[w]
                   var newmas = alphabet[k]+alphabet1[j];//+alphabet3[w]
                    
                   myArray[newmas] = count1; //Створює новий масив біграм
                    
                   } myArrayS.push(count1); myArrayS.sort(sortNumber); myArrayS.splice(15, 1); 
                     //}
                   }
                   }
                  //Кінець створення біграм
           
                  //Створюємо Триграми
                  for (j=0; j<31; j++){
                      for (k=0; k<31; k++){
                                for (w=0; w<31; w++){
                        var count1 = 0;
                        var pos1 = sttr.indexOf(alphabet[k]+alphabet1[j]+alphabet3[w]);//
                        while ( pos1 != -1 ) {
                           count1++;
                           pos1 = sttr.indexOf(alphabet[k]+alphabet1[j]+alphabet3[w],pos1+1); //
                           var newmas = alphabet[k]+alphabet1[j]+alphabet3[w];//!!!

                           myArrayT[newmas] = count1; //Створює новий масив біграм

                           } myArrayST.push(count1); myArrayST.sort(sortNumber); myArrayST.splice(15, 1); 
                             }
                           }
                           }
                    //Кінець створення біграм
           
                    //Перевірка масивів в консолі
                        // console.log(myArray);
                        // console.log(myArrayS);
                        // console.log(myArrayS.length);
           
                       //Перевірка масивів в консолі
                        // console.log(myArrayT);
                        // console.log(myArrayST);
                        // console.log(myArrayST.length);
           
           
                   //Створюємо Два масива значень та біграм
                       for (val in myArray){
                            for(var i=0; i<=myArrayS.length; i++){
                            if(myArray[val] == myArrayS[i]){ 
                                myArraySAl.push(myArrayS[i]);
                                myArraySAl1.push(val);
                            break;                  
                            }}}
           
                   //Створюємо Два масива значень та триграм
                       for (val in myArrayT){
                            for(var i=0; i<=myArrayST.length; i++){
                            if(myArrayT[val] == myArrayST[i]){ 
                                myArraySAlT.push(myArrayST[i]);
                                myArraySAl1T.push(val);
                            break;                  
                            }}}
           
                                
           
           

          
    
           
            //console.log(myArraySAl1T);      
            //console.log(myArraySAlT);      
                   
            
            
            
                for (j=0; j<=31; j++){
                    var res = 0;
                for(i=0; i < count; i++){
                    if(str.charAt(i) == alphabet[j]){
                        continue
                    }
                    res++;
                }
                    res = count - res;

                 // document.write("Кількість (" + alphabet[j] + ") " + res + "</br>");
                 
                    
                   arr.push(res);
                   arr2.push(res);
                   arr2.sort(sortNumber);
                    
                    } 
                   //arr22.push(alphabet[j]);
                   
                 //  console.log(arr22);
                  
                    
                console.log(arr);   
           
                for(val in arr){
                   // alert(alphabet[val]+' '+val+'='+arr[val]);
                    arr22[val]=alphabet[val];
                        }
        var alphasort = [];   
                      
                 for(j=0; j<=arr2.length; j++){
                    for(i=0; i<=arr.length; i++){
                   //alert (arr2[j]+"="+arr[i]);
                    // alert(arr[val]+' '+val+'='+arr22[val]);
                        
                     if(arr2[j]==arr[i]){
                         
                     alphasort.push(arr22[i]);
                         
                         }}}
                 var  resultAl = [];

                 for(i=0; i<=alphasort.length; i++){
                        if(resultAl.join('').search(alphasort[i]) == '-1') {
                            resultAl.push(alphasort[i]);
                        }
                    }

           
           //console.log(alphasort);
           //console.log(resultAl);
           //console.log(arr2);
           //console.log(arr22);
           
   
           
           
          
           function sortNumber(a, b)
                {
                return b - a; 
                }
           
       
       //start-gisto
       var randomScalingFactor = function(){ return Math.round(Math.random()*800)};
           
	   var barChartData = { 
		labels : arr22,
		datasets : [
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
                data : arr
			}
		]

	};
       
        var barChartData2 = {
		labels : resultAl,
		datasets : [
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
                data : arr2
			}
		]

	};
        var barChartData3 = {
		labels : myArraySAl1,
		datasets : [
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
                data : myArraySAl
			}
		]

	};
        var barChartData4 = {
		labels : myArraySAl1T,
		datasets : [
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
                data : myArraySAlT
			}
		]

	};
        

	   window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");//1
		var ctx2 = document.getElementById("canvas2").getContext("2d");
        var ctx3 = document.getElementById("canvas2gram").getContext("2d");
        var ctx4 = document.getElementById("canvas3gram").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {//1
			responsive : true
		});
        window.myBar = new Chart(ctx2).Bar(barChartData2, {
			responsive : true
		});
         window.myBar = new Chart(ctx3).Bar(barChartData3, {
			responsive : true
		}); 
         window.myBar = new Chart(ctx4).Bar(barChartData4, {
			responsive : true
		});
	}
       }
       //end-gisto

      </script>
    <div class="container-fluid" style="background-color:#F8F8FF;">
    <blockquote>
      <p>В тексті використовується алфавіт, що складається з англійських великих літер та шести розділових знаків.</p>
       </blockquote>
      <table class="table table-bordered" style="font-size:14px; background-color:#CAE1FF; border: solid white;">
      <tr>
    <td> </td>
    <td>‘</td>
    <td>,</td>
    <td>-</td>
    <td>.</td>
    <td>;</td>
    <td>A</td>
    <td>B</td>
    <td>C</td>
    <td>D</td>
    <td>E</td>
    <td>F</td>
    <td>G</td>
    <td>H</td>
    <td>I</td>
    <td>J</td>
    <td>K</td>
    <td>L</td>
    <td>M</td>
    <td>N</td>
    <td>O</td>
    <td>P</td>
    <td>Q</td>
    <td>R</td>
    <td>S</td>
    <td>T</td>
    <td>U</td>
    <td>V</td>
    <td>W</td>
    <td>X</td>
    <td>Y</td>
    <td>Z</td>
    </tr>
          <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td>0</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>
        <td>11</td>
        <td>12</td>
        <td>13</td>
        <td>14</td>
        <td>15</td>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        <td>19</td>
        <td>20</td>
        <td>21</td>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
          </tr>
      </table>
      <p>
   
    <div class="row">
     <div class="col-md-5" style="background-color:#EE2C2C; ">
     <ol style="font-family:Georgia; font-size:17px; color:#F8F8FF">
      <li><a href="index.html" style="color:#F8F8FF">Приклад тексту для статистичного аналізу</a></li>
      <li><a href="cezar.html" style="color:#F8F8FF" onclick="cezar()">Код Цезаря</a></li>
      <li><a href="normreplase.html" style="color:#F8F8FF">Простої заміни</a></li>
      <li><a href="viginer.html" style="color:#F8F8FF">Віженера</a></li>
      <li><a href="hilla.html" style="color:#F8F8FF">Хілла</a></li>
      <li><a href="feistel.html" style="color:#F8F8FF">Фейстель</a></li>
      <li><a href="RSAp.php" style="color:#F8F8FF">RSA</a></li>
      <li><a href="desWork.html" style="color:#F8F8FF">DES</a></li>
     </ol>
     <div class="row">
        
         <div class="col-md-12" style="color:white"><script>count_char(sttr);</script></div>
         <div style="width: 100%;  background-color:white; color:black; text-align:center; font-style:italic;">
         Частотний аналіз кожної букви <a class="btn btn-primary" href="cezar_C.html">Подивитись гістограми розшифрованого</a>
			<canvas id="canvas" height="450" width="600"></canvas>
		</div>
   
        <div style="width: 100%; background-color:white; color:black; text-align:center; font-style:italic;">
        Частотний аналіз кожної букви посортований
			<canvas id="canvas2" height="450" width="600"></canvas>
		</div>
       
        <div style="width: 100%; background-color:white; color:black; text-align:center; font-style:italic;">
		Частотний аналіз біграм у тексті
			<canvas id="canvas2gram" height="450" width="600"></canvas>
		</div>
		
		<div style="width: 100%; background-color:white; color:black; text-align:center; font-style:italic;">
		Частотний аналіз Триграм у тексті
			<canvas id="canvas3gram" height="450" width="600"></canvas>
		</div>
    
     </div>
     </div>
     <div class="col-md-7" style="background-color:	#FFFFF0;">
     
Starting Plaintext: <br>
 ALLIED CIPHER MACHINES USED IN WWII INCLUDED THE BRITISH TYPEX AND THE AMERICAN SIGABA; BOTH WERE
 ELECTROMECHANICAL ROTOR DESIGNS SIMILAR IN SPIRIT TO THE ENIGMA, ALBEIT WITH MAJOR IMPROVEMENTS.
 NEITHER IS KNOWN TO HAVE BEEN BROKEN BY ANYONE DURING THE WAR. THE POLES USED THE LACIDA MACHINE,
 BUT ITS SECURITY WAS FOUND TO BE LESS THAN INTENDED BY POLISH ARMY CRYPTOGRAPHERS IN THE UK,
 AND ITS USE WAS DISCONTINUED. US TROOPS IN THE FIELD USED THE M- AND THE STILL LESS SECURE
 M- FAMILY MACHINES. BRITISH SOE AGENTS INITIALLY USED 'POEM CIPHERS' MEMORIZED POEMS WERE 
 THE ENCRYPTION-DECRYPTION KEYS, BUT LATER IN THE WAR, THEY BEGAN TO SWITC
 --- 
<br><br>
Ciphertext:<br><br>
158KcrkcQR/m7ohiXsJ2g5MMvf17gc7/ogo3WYcBunfh3zclOhoLEIeuanGmKrwLUST9TattMe14
oXRA583g/MaEDcCwv6gZxjrgnT1Y9tYEhd0g2JJOCCJwISjXi6x3nsSCqNwYQszG4Ic4QxwVNSyc
TlO4SBzm/LXRt7AesuOnFOntSwRrAGI0AEEh3MeRterk9NYtp3xWxnQ5XCGtkRlN8Vh7BH3RUHjr
wU0BZnobcTzPO1DavckaIrd/tzAvVaF8nEvNi0mKJwBz7+dUXCZ1H7ehGaCb0VyxT9tJi+iGTeV6
H8evtExHDByr6+k+Xg2cko7PLZBr85Zg3yDj1a83A==lZd7/tUA0HvWFbEZJTlXciQgV80DFcgWn
/x1ogSGjlCtleccO+z+CnMPaAS+sYxcMuJ+aYGihEueDLxnu5DHnL/uBq9Ho0brjxIwyv34HI8H6
1E037tJ7y4CVbsLB8Zl0si5vaOsgReW2B3J9ca1+XcFWlDUf0pccxu6fj4BZ0CjrmQGDZW4f0Y9F
96ZIsihhcHYj/l5vpycVjR+4y/Gi88XIChVwCnENN4ciAQkM9TNf9cl+2bYuVq98oBbI8HuXYImQ
LpCmwGmJ26BblHO9i+HWEqG8GX3nkQosqCx5f7SCPZvq4gSS+WQfoof7M+g724ZdLOrYuBDafiQr
4uUs0hZIy11/9f4xHNs0ExOnY3tzyHbR9rRKKo/Z7Ty4cUk8gJR75tM36l0PIaTAQ0TLpEFOpYc0
o2IPoNpUygY08cdR3u5yHuvkOM4FXFEEpVGs8kJOuW5Gq9WnWO/ffAztb/xnfqwFbbnCqmTbWscQ
IloiNp989FtL+L3GQ7nocTVPds7apqimp5hr/tz83/zhcoWfJt7ZsQUG3YslZkC8DiKGWmYTL1p2
PGJm8q7ciqoBHjF8eGGKMh3fGTMaxAz53bpa208ubtgfoSdrg9vqfrm7aCp9rzWRO9rRSRVpb1ED
SV/DhVi4jW2Q6rhx99/baim1VRInhQl3zkHnQDywn5QVJa2ZIRpMgUJnLYH1CzultmfYHaZ/17kv
LQsNBLIi3vLq6BDUm0pRrNXSnofYJeppuPgS5iW2jeUUuE0HY7LZBrgawGRPfaaFXwsL7XpDDGpn
Go7sZPA7BZJ6UZbC6FbSq01vXZixjCdWuMJXRlGPhKohktkn5OnN8z7vSx407IIREz48Dmohanp3
oc19xo=


<br><br>Decrypted Back into Plaintext<br><br>

 ALLIED CIPHER MACHINES USED IN WWII INCLUDED THE BRITISH TYPEX AND THE AMERICAN SIGABA; BOTH WERE
 ELECTROMECHANICAL ROTOR DESIGNS SIMILAR IN SPIRIT TO THE ENIGMA, ALBEIT WITH MAJOR IMPROVEMENTS.
 NEITHER IS KNOWN TO HAVE BEEN BROKEN BY ANYONE DURING THE WAR. THE POLES USED THE LACIDA MACHINE,
 BUT ITS SECURITY WAS FOUND TO BE LESS THAN INTENDED BY POLISH ARMY CRYPTOGRAPHERS IN THE UK,
 AND ITS USE WAS DISCONTINUED. US TROOPS IN THE FIELD USED THE M- AND THE STILL LESS SECURE
 M- FAMILY MACHINES. BRITISH SOE AGENTS INITIALLY USED 'POEM CIPHERS' MEMORIZED POEMS WERE 
 THE ENCRYPTION-DECRYPTION KEYS, BUT LATER IN THE WAR, THEY BEGAN TO SWITC
 


<noscript>Please enable JavaScript to view the comments powered by Disqus.</noscript>
    
    
</div>
   
    </div>
    </div>
    
  </body>
</html>
