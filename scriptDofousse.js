
$(document).ready(function () {

    $(window).scroll(function () {
        // console.log($(window).scrollTop())
        if ($(window).scrollTop() > 99) {
            $('.navbar').addClass('sticky-top');
            $('.navbar-brand img').attr('src', 'Templates/oeuflogo2.png');
            $('.navmid').css("width", "50px");
            $('.navbar-brand img').addClass('OeufBrand');
            $('.triangle').css('display', 'none');

        }
        if ($(window).scrollTop() < 99) {
            $('.navbar').removeClass('sticky-top');
            $('.navbar-brand img').attr('src', 'Templates/Dofus_Logo.png');
            $('.navmid').css("width", "160px");
            $('.navbar-brand img').removeClass('OeufBrand');
            $('.triangle').css('display', 'initial');
        }
    });



    $(".fb").click(function () {
        window.open('https://facebook.com');
    });

    $("#Brouille").mouseover(function () {
        $("#Brouille").removeClass("AnkamaGris");
    });

    $("#Brouille").mouseout(function () {
        $("#Brouille").addClass("AnkamaGris");
    });

    $(".nav-item").mouseover(function () {
        var a = ($(this).index());
        $(".nav-item .roulant").eq(a).text("accessible_forward");
    });

    $(".nav-item").mouseleave(function () {
        var a = ($(this).index());
        $(".nav-item .roulant").eq(a).text("accessible");
    });



    $('.terminscription').click(function () {

        var Compte = $("#Compte").val();
        var Mdp = $("#Mdp").val();
        var ConfirmMdp = $("#ConfirmMdp").val();
        var Mail = $("#Mail").val();
        var naissance = $("#naissance").val();


        if (Compte.length <= 5) {
            console.log(Compte);
            $("#Compte")[0].setCustomValidity("Votre nom de compte doit faire au moins 6 caractères");
        }
        else if (Mdp.length <= 5) {
            console.log(Mdp);
            $("#Mdp")[0].setCustomValidity("Votre mot de passe doit faire au moins 6 caractères");
        }
        else if (ConfirmMdp != Mdp) {
            $("#ConfirmMdp")[0].setCustomValidity("La confirmation est différente de votre mot de passe");
        }
        else if (Mail.indexOf("@") == -1) {
            $("#Mail")[0].setCustomValidity("L'adresse mail est invalide")
        }
        else if (naissance == "") {
            $("#naissance")[0].setCustomValidity("La date de naissance est invalide")
        }
        else {
            $('form').submit();
        }
        // alert( "Handler for .submit() called." ); 
    });

});
