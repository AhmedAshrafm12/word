$('.get').click(function(e){
    e.preventDefault();
    $('.link').toggleClass('hid');
})
$('.del').click(function(){
    $(this).parent().fadeOut();
})
alert("اضغط على get link لتستخرج رابط تستقبل عليه الرسائ من الاخرين");