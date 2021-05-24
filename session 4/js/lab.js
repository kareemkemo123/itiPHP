function lab1(){
    var imgName = prompt("Enter the name of IMG + its extension : ");
    var index = imgName.indexOf('.');
    while(index <= 0){
        imgName = prompt("Enter the name of IMG + its extension [Not Valid] : ");
    }
    var color = prompt("Enter your color : ");
    document.write('<img height="100px" src="imgs/' + imgName + '" style="color:' + color + ';border: 2px solid ' + color + ';" >');
    document.write('<p style="color:' + color + ';">kfasejfpiowaejfopawjefioewfoasje</p>');
}

function lab2(){
    var arr = new Array();
    var str = prompt("Enter arr");
    arr = str.split(",");
    document.write('<table border="1">');
    document.write('<tr><th>Values</th></tr>');
    var sum = 0;
    for(i = 0; i < arr.length; i++){
        document.write('<tr><td>' + arr[i] + '</td></tr>');
        sum += parseInt(arr[i]);
    }
    document.write('</table>');
    document.write("<span>result = </span>" + sum);
   /***********************Another Solution******************************
   var arr = new Array();
   var str = prompt("Enter arr");
   var arrLen = str.length - str.length / 2;
   var c = 0;
   for(i = 0; i < str.length; i+=2){
       arr[i/2] = parseInt(str[i]);
       c++;
   }
   document.write(arr);
   document.write('<table border="1">');
   document.write('<tr><th>Values</th></tr>');
   var sum = 0;
   for(i = 0; i < c; i++){
       document.write('<tr><td>' + arr[i] + '</td></tr>');
       sum += arr[i];
   }
   document.write('</table>');
   document.write("<span>result = </span>" + sum);*/
}

function lab3() {
    var arr = new Array();
    i = 0;
    arr[i] = parseInt(prompt('Enter array['+ i +'] : '));
    i++;
    flag = 0;
    while(true){
        arr[i] = parseInt(prompt('Enter array['+ i +'] : '));
        for(j = i - 1; j >= 0; j--){
            if (arr[i] === arr[j]){
                flag = 1;
                break;
            }
        }
        if(flag){
            document.write('<table border="1">');
            document.write('<tr><th>Values</th></tr>');
            for(k = 0; k < arr.length; k++){
                document.write('<tr><td>' + arr[k] + '</td></tr>');
            }
            document.write('</table>');
            document.write('<span>repeated row number : ' + arr[i] + '</span>');
            document.write('<br>');
            document.write('<span>row number : ' + i + '</span>');
            break;
        }
        i++;
    }
}

function lab4(){
    document.write(parseInt(Math.random() * 10));
}

function lab5(){
    var date = new Date();
    var day = date.getDay();
    day = (day + 1) % 7;
    var d;
    switch(day){
        case 0: d = 'Sat'     ; break;
        case 1: d = 'Sun'     ; break;
        case 2: d = 'Mon'     ; break;
        case 3: d = 'Tues'    ; break;
        case 4: d = 'Wed'     ; break;
        case 5: d = 'Thur'    ; break;
        case 6: d = 'Fri'     ; break;
        default:
        document.write("ERROR");
        break;
    }
    document.write(date + "<br>" + d);
}

function lab6(){
    var name = prompt('Enter your name : ', 'my name');
    while(!isNaN(parseInt(name))){
        name = prompt('Enter your name [Please enter a STRING] : ', '[Invalid Input]');
    }

    var phNum = prompt('Enter your phone number : ', 'xxx-xxxxxxxx');;
    while(true){
        n = phNum.length;
        if(n != 11 || isNaN(parseInt(phNum)) || isNaN(parseInt(phNum[n - 1]))){
            phNum = prompt('Enter your phone number [Enter 11 number and don\'t iclude characters] : ', 'xxx-xxxxxxxx');
            continue;
        }
        else if (phNum.substring(0, 3) != "012" &&phNum.substring(0, 3) != "010" &&phNum.substring(0, 3) != "011" &&phNum.substring(0, 3) != "015"){
            phNum = prompt('Enter your phone number [Please Enter VALID phone number] : ', 'xxx-xxxxxxxx');
            continue;
        }
        else{
            document.write("<h1>Welcome, " + name + "</h1>");
            break;
        }
    }
}

function lab7(){
    var fName = prompt("Enter your fullname, please");
    var lettersNum = 0;
    for(i in fName){
        if(fName[i] != ' ')
            lettersNum++;
    }
    var words = fName.split(' ');
    var wordsNum = words.length;
    alert("Number of letters is : " + lettersNum + "\nNumber of words is : " + wordsNum);
}

function lab8(){
    var arr = new Array();
    var input = prompt("Enter 0 to cancel,\n Enter 1 for PUSHING or 2 for POPING");
    while(input != 0){
        if(parseInt(input) == 1){
            var p = prompt("Enter string");
            arr.push(p);
        }
        else if(parseInt(input) == 2){
            alert(arr.pop());
        }
        input = prompt("Enter 0 to cancel,\n Enter 1 for PUSHING or 2 for POPING");
    }
    document.write("<h1>Ended</h1>");
}

function lab9(){
    var arr = new Array();
    var input = prompt("Enter 0 to cancel,\n Enter 1 for PUSHING or 2 for POPING");
    front = 0;
    while(input != 0){
        if(parseInt(input) == 1){
            var p = parseInt(prompt("Enter number"));
            arr.push(p);
        }
        else if(parseInt(input) == 2){
            alert(arr[front]);
            front++;
        }
        input = prompt("Enter 0 to cancel,\n Enter 1 for PUSHING or 2 for POPING");
    }
    document.write("<h1>Ended</h1>");
}

function lab10(){
    var arr = new Array(2);
    for(i = 0; i < 2; i++){
        arr[i] = new Array(3);
    }
    for(i = 0, c = 0; i < 2; i++, c+=2){
        for(j = 0; j < 3; j++){
            arr[i][j] = i + j + c + 1;
        }
    }
    
    document.write('<table class="yellow" border="1">');
    document.write('<tr>');
    for(i = 0; i < 3; i++){
        document.write('<th>ST' + (i+1) + '</th>');
    }
    document.write('</tr>');
    for(i = 0; i < 2; i++){
        document.write('<tr>');
        var sum = 0;
        for(j = 0; j < 3; j++){
            document.write('<td>' + arr[i][j] + '</td>');
            sum += arr[i][j];
        }
        document.write('<td>' + sum + '</td>');
        document.write('</tr>');
    }
}