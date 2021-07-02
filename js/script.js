'use strict'
function send(event, php) {
    console.log("Отправка запроса");
    event.preventDefault();
    var req = new XMLHttpRequest();
    req.open("POST", php, true);
    req.send(new FormData(event.target));
    // $.fancybox.close({
    //   src: "#hidden"
    // });
  }
document.querySelector('.cards').addEventListener('click', (e)=> {
    e.target.closest('.card-btn') && openModal();
})

function openModal(){
    $.fancybox.open({
		src: '#hidden',
		type: 'inline'
	});
}
$("#form").validate();
