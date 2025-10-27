// var = $('#teks')

$(document).ready(function() {
    // alert('halo')

    // $('#hide').click(function() {
    //     $('#teks').hide()
    // })

    // $('#show').click(function() {
    //     $('#teks').show()
    // })

    // $('#toggle').click(function() {
    //     $('#teks').toggle()
    // })

    // $('#start').click(function() {
    //     $('#box').animate({
    //         left: '200px',
    //         height: '250px',
    //         width: '250px',
    //     }, 2000)
    //     .slideUp(1000)
    //     .slideDown(1000)
    //     .fadeOut(1000)
    //     .fadeIn(1000)
    // })

    // $('#btn1').click(function() {
    //     alert("Text : " + $('#test').
    //     text())
    // })

    // $('#btn2').click(function() {
    //     alert("HTML : " + $('#test').
    //     html())
    // })

    // $('#btn3').click(function() {
    //     let isi = $('#InputTxt').
    //     val()
    //     alert("Value : " + isi) 
    // })

    // $('#btn4').click(function() {
    //     $('#InputTxt').attr("type", "password")
    // })

    $('#btn').click(function() {
        $.getJSON('data.json', function(data){
            let hasil= 
            `
            <ul>
            <li>Nama : ${data.nama}</li>
            <li>Prodi : ${data.prodi}</li>
            </ul>
            `
            $('#isi').html(hasil)
        })
    })

})