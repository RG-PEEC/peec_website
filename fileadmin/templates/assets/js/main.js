$(document).ready(function () {

    /*$(".navbar-toggler-icon").on("click", function (e) {
        console.log("we are here");
    })*/

    function menuOpen() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += "responsive";
        } else {
            x.className = "topnav";
        }
    }

    let currID = "";
    $(".member-popup").hide();
    $(".triangle-up").hide();

    // Beim Starten
    if($(window).width() >= 1080) {
        console.log($(window).width());
        console.log("SHOW DESKTOP TEAM");
        $(".desktop-team").show();
        $(".mobile-team").hide();
    } else {
        console.log($(window).width());
        console.log("SHOW MOBILE TEAM");
        $(".mobile-team").show();
        $(".desktop-team").hide();
    }

    // Beim Fenstergröße ändern
    $(window).resize(function () {
        if($(window).width() >= 1080) {
            // console.log($(window).width());
            // console.log("SHOW DESKTOP TEAM");
            $(".desktop-team").show();
            $(".mobile-team").hide();
        } else {
            // console.log($(window).width());
            // console.log("SHOW MOBILE TEAM");
            $(".mobile-team").show();
            $(".desktop-team").hide();
        }
    });

    $(".former-member").on("click",(e)=>{
       $(e.currentTarget.nextElementSibling).toggle();
       if(e.currentTarget.innerText =="Show Members"){
           e.currentTarget.innerText = "Hide Members";
       }else if(e.currentTarget.innerText =="Hide Members"){
            e.currentTarget.innerText = "Show Members";
        } else if(e.currentTarget.innerText =="Mitglieder anzeigen"){
           e.currentTarget.innerText = "Mitglieder verbergen";
       }else if(e.currentTarget.innerText =="Mitglieder verbergen"){
           e.currentTarget.innerText = "Mitglieder anzeigen";
       }
    });

    $(".member").on("click", (e) => {
        let clickedID = e.currentTarget.id;
        console.log(e.currentTarget.id);

        $(".member-popup").hide();
        $(".triangle-up").hide();

        // console.log($("#" + clickedID + " > .triangle-up"));
        // console.log($("#popup-" + clickedID));
        $("#" + clickedID + " > .triangle-up").show();
        $("#popup-" + clickedID).show();
        $("#popup-" + clickedID + "-mobile").show();

        if(clickedID == currID) {
            $(".member-popup").hide();
            $(".triangle-up").hide();
            currID = "";
            return;
        }
        currID = clickedID;
    });

    $(".close-popup").on("click", function() {
        $(".member-popup").hide();
        $(".triangle-up").hide();
        currID = "";
    })
});