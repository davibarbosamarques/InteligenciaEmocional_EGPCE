$(".st1").click(function(){
    $(".profile").prop("checked", true);
});
$(".st2").click(function(){
    $(".settings").prop("checked", true);
});
$(".st3").click(function(){
    $(".posts").prop("checked", true);
});
$(".st4").click(function(){
    $(".books").prop("checked", true);
});

$(".st5").click(function(){
    $(".quinto").prop("checked", true);
});
$(".st6").click(function(){
    $(".sexto").prop("checked", true);
});
$(".st7").click(function(){
    $(".setimo").prop("checked", true);
});
$(".st8").click(function(){
    $(".oitavo").prop("checked", true);
});
$(".st9").click(function(){
    $(".nono").prop("checked", true);
});

// TOOLTIP 

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))