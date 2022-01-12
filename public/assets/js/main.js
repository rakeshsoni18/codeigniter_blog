console.log('Page Loaded at ' +new Date())

$('.showOrHide').click(function(e){
    var target = e.currentTarget
    $(target).hasClass('show')?hidePassword($(target)):showPassword($(target))
})
function hidePassword(e){
    e.removeClass('show').addClass('hide')
    e.removeClass('fa-eye').addClass('fa-eye-slash')
    $('.password').attr('type','password')
}
function showPassword(e){
    e.removeClass('hide').addClass('show')
    e.removeClass('fa-eye-slash').addClass('fa-eye')
    $('.password').attr('type','text')
}