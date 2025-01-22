function logoutask(){
    if (confirm('Anda pasti untuk log keluar ?')){
        return true;
    } else {
        return false;
    }
}

function deletebuttonask(){
    if (confirm('Anda pasti untuk memadam data ini ?')){
        return true;
    } else {
        return false;
    }
}

$(document).ready(function() {
    $('.select2').select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    });
});

$(document).ready(function() {
    $('.datepicker').datepicker({
        orientation: 'bottom',
        format: "dd/mm/yyyy",
        autoclose: true
    }).each(function() {
        var height = $(this).data('height') ? $(this).data('height') : '38px';
        $(this).css('height', height);
    });
});