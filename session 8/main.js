window.addEventListener('load', main);

/*Globals*/
var min = 30;
var sec = 0;
var timerInterval;

/*Driver function*/
function main(){
	setInterval(timeFun, 1000); // the current time
	
	/*Timer initial values*/
	var timerSpan = document.getElementById('timer');
	timerSpan.innerHTML = min +" : 0"+ sec;

	var startBtn = document.getElementById('startBtn'); // start exam button 
	var qBlock = document.getElementById('qBlock'); // questions block Container
	startBtn.addEventListener('click', function(){ // click event for start exam button
		startBtn.style.display = 'none'; // hide start button
		qBlock.style.display = 'block'; //	display the questions
		timerInterval = setInterval(timerFun, 1000);	// set the timer of the exam
	});

	var endBtn = document.getElementById('endBtn'); // end exam button
	endBtn.addEventListener('click', endExam); // click event for end exam button

	var upBtn = document.getElementById('upToTopBtn'); // up button
	window.addEventListener('scroll', function(){ // event happens when scrolled
		if(window.pageYOffset > 200){ // page offest -> page coordinates
			upBtn.style.display = 'inline-block'; // show the button when scrolled down > 200px
		}
		else{
			upBtn.style.display = 'none'; //hide the button if scrolled up
		}
	});
	upBtn.addEventListener('click', function (){ // click event for up button
		window.scrollTo(0, 0); // up to the top of the page
	});

	var helpBtn = document.getElementById('helpBtn');
	helpBtn.addEventListener('click', function (){
		window.open('help.html', 'Helper', 'width=400,height=500');
	});
}

function timeFun(){ // Interval function
	var timeSpan = document.getElementById('time'); // current time container
	var date = new Date(); // get current date
	date = date.toLocaleString(); // transfer the date to string
	date = date.split(' '); // date - array of substrings
	date = date[1]; // get the time in 12 hours system
	timeSpan.innerHTML = date; // write the time in html element
}

function timerFun(){ // Interval function
	var timerSpan = document.getElementById('timer'); // timer container
	if(min > 0 && min <= 10){ // turn the integer number to digital number | 00:00
		if(sec > 0 && sec <= 10){
			sec--;
			timerSpan.innerHTML = "0"+ min +" : 0"+ sec;
		}
		else if(sec > 10){
			sec--;
			timerSpan.innerHTML = "0"+ min +" : "+ sec;
		}
		else{ // if sec == 0
			sec = 59; // turn sec into 59 in a new minute
			min--; // decrement
			timerSpan.innerHTML = "0"+ min +" : "+ sec;
		}
	}
	else if(min > 10){
		if(sec > 0 && sec <= 10){
			sec--;
			timerSpan.innerHTML = min +" : 0"+ sec;
		}
		else if(sec > 10){
			sec--;
			timerSpan.innerHTML = min +" : "+ sec;
		}
		else{
			sec = 59;
			min--;
			timerSpan.innerHTML = min +" : "+ sec;
		}
	}
	else{
		if(sec > 0 && sec <= 10){
			sec--;
			timerSpan.innerHTML = "0"+ min +" : 0"+ sec;
		}
		else if(sec > 10){
			sec--;
			timerSpan.innerHTML = "0"+ min +" : "+ sec;
		}
		else{
			endExam();
		}
	}
}

function endExam(){ // repeated code
	var q = document.getElementsByClassName('radio'); // call all radio buttons
	var arr = new Array(); // declaring array as a container of the result of the exam
	var len = q.length;    // len variable (technical reasons) with number of radio buttons assigned to it
	for(i = 0; i < len; i++){ // loop storing the selected answers values
		if(q[i].checked){
			arr.push(q[i].value);
		}
	}
	var ans = new Array(1,1,1,1,1); // answers - whatever the answers :)
	len = ans.length;
	var counter = 0;
	for(var i = 0; i < len; i++){ // loop for counting the correct answers
		if(arr[i] == ans[i])
			counter++;
	}
	alert('You answered '+ counter +' of '+ len +' correctly'); // alert for the result
	clearInterval(timerInterval);  // clear interval 
	alert('Your exam is terminated - End exam');
	location.reload(); // reload the page
}