function divCreate(src, name, chap){
	document.write('<div class="container">')
	document.write('<img src="imgs/' + src + '">');
	document.write('<h2>' + name + '</h2>');
	document.write('<span>' + chap + '</span><br>');
	document.write('<button onclick="fn1('+ chap +')">Chapters Number</button>');
	document.write('<button onclick="fn2()">Delete</button>');
	document.write('</div>');
}

var n = 4;

var books=[
	{
		src : 'book.jpg',
		name: 'HP',
		chap: '7'
	},
	{
		src : 'book.jpg',
		name: 'Book',
		chap: '2'
	},
	{
		src : 'book.jpg',
		name: 'book',
		chap: '5'
	},
	{
		src : 'book.jpg',
		name: 'JavaScript',
		chap: '15'
	}
];

function fn1(chap){
	alert(chap);
}



books.forEach(
		function (e){
			divCreate(e.src, e.name, e.chap);
		}
);