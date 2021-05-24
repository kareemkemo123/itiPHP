var profile = document.getElementById("profile");
var shareBtn = document.getElementById('share');
var createPost = document.getElementById('createPost');

/*****************/

shareBtn.addEventListener('click', shareBtnFunction);



/*****************/
function shareBtnFunction(){

	var div = document.createElement("div");
	var para = document.createElement("p");
	var hr = document.createElement("hr");
	var createCommentArea = document.createElement("textarea");
	var sendBtn = document.createElement("input");
	var node = document.createTextNode(createPost.value);
	var div2 = document.createElement("div");
	div.setAttribute('id', 'commentsBlock');
	div2.setAttribute('id', 'commentBlock');

	createCommentArea.setAttribute('id', 'Comment');

	sendBtn.setAttribute('type', 'submit');
	sendBtn.setAttribute('value', 'Send');
	sendBtn.setAttribute('id', 'sendBB');
	createCommentArea.classList.add('sendB');

	div.appendChild(hr);
	para.appendChild(node);
	div.appendChild(para);
	div.appendChild(div2);
	div2.appendChild(createCommentArea);
	div2.appendChild(sendBtn);
	profile.appendChild(div);

	var sendBtn = document.getElementById('sendBB');
	sendBtn.addEventListener('click', sendBtnFunction);
}




function sendBtnFunction(){
	var commentDynamicBlock = document.getElementById('commentBlock');
	var div = document.createElement("div");
	div.classList.add("Commented");
	var para0 = document.createElement("p");
	var container = document.getElementById("commentsBlock");
	var commentArea = document.getElementById('Comment');
	var node0 = document.createTextNode(commentArea.value);
	para0.appendChild(node0);
	div.appendChild(para0);
	container.insertBefore(div, commentDynamicBlock);
}