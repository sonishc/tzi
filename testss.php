<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents</title>
</head>
<body>
    <script>
    
     
        
    var L0 = 0;
    var R0 = 11;
    var k = 8; //k=15 фініш  //k8
    var d = 1 ;
    
    var f = (k * L0) % 32;
    var R0 = R0 ^ f;
    var L1 = R0;
    var R1 = L0;
        
    document.write("<h1>d = " + d + " k = " + k + " L1 = " + L1 + "R1 ="  + R1 + "</h1><br>");
            
    
//    d = 2	k = 9	L2 = 4	R2 = 31
//    d = 3	k = 10	L3 = 23	R3 = 4
//    d = 4	k = 11	L4 = 25	R4 = 23
//     d = 5	k = 12	L5 = 27	R5 = 25
//    d = 6	k = 13	L6 = 6	R6 = 27
//    d = 7	k = 14	L7 = 15	R7 = 6
    
//    d = 8
//    k = 15
//    f = (15 * 15) % 32 = 1
//    L8 = L7 = 15
//    R8 = R7 ^ f = 6^1=7

    
    </script>
</body>
</html>