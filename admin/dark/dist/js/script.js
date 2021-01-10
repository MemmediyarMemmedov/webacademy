function PortfolioStatus(id) {
    $.ajax({
        url: "../settings/code/portfolio-ajax.php",
        data: { Status: true, id: id },
        method: "POST",

        success: function(data) {
            console.log(data);
        },

        error: function(x, sts) {
            console.log("Error...");
        },
    });
}

function PortfolioRedakte(id) {
    $.ajax({

        url: '../settings/code/portfolio-ajax.php',
        data: { Edit: true, id: id },
        method: 'POST',

        success: function(data) {
            data = JSON.parse(data);
            let kateqoriyalar = ['Veb Layihələr', 'SEO', 'Mobil Layihələr'];
            document.getElementById('redakteid').value = data.id;
            document.getElementById('oldimg').src = "../../" + data.sekil;
            document.getElementById('redakteadi').value = data.adi;
            document.getElementById('redakteinfo').value = data.info;
            document.getElementById('redaktelink').value = data.link;
            document.getElementById('redaktesekil').src = "../../" + data.sekil;
            let slc = ""
            for (let i = 0; i < kateqoriyalar.length; i++) {

                slc += `<option ${kateqoriyalar[i]==data.kateqoriya ? 'selected':"" }>${kateqoriyalar[i]}</option>`

            }
            document.getElementById('redaktekateqoriya').innerHTML = slc

        },



        error: function(x, sts) {
            console.log("ERROR..")
        }
    });
}




function ServiceView(id) {
    $.ajax({
        url: "../settings/code/service-ajax.php",
        data: { ServiceView: true, id: id },
        method: "POST",

        success: function(data) {
            let newdata = JSON.parse(data);
            document.getElementById('img').innerHTML = `<img src="../../${newdata.sekil}" width="75" height="50" />`;
            document.getElementById('icon').innerHTML = `<img src="../../${newdata.icon}" width="75" height="50" />`;

            document.getElementById('title').innerHTML = newdata.basliq;
            document.getElementById('context').innerHTML = newdata.aciqlama;

        },

        error: function(x, sts) {
            console.log("Error...");
        },
    });
}

function ServiceSil(id, img) {
    swal({
        title: "Xəbərdarlıq",
        text: "İnformasiyanın silinməsindən əminsinizmi?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr", "Bəli"],
    })


    .then((willDelete) => {
        if (willDelete) {

            $.ajax({
                url: "../settings/code/service-ajax.php",
                data: { ServiceSil: true, id: id, img: img },
                method: "POST",

                success: function(data) {
                    console.log(data);
                    swal({
                        title: "Əla!",
                        text: "İnformasiya silindi!",
                        icon: "success",

                    });
                    location.href = 'services.php'
                },
                error: function(x, sts) {
                    console.log("Error...");
                },
            });
        } else {
            swal('imtina edildi')
        }
    });


}



function TrainingView(id) {
    $.ajax({
        url: "../settings/code/training-ajax.php",
        data: { TrainingView: true, id: id },
        method: "POST",

        success: function(data) {
            let newdata = JSON.parse(data);
            document.getElementById('img').innerHTML = `<img src="../../${newdata.sekil}" width="75" height="50" />`;
            document.getElementById('adi').innerHTML = newdata.adi;
            document.getElementById('mezmun').innerHTML = newdata.mezmun;
            document.getElementById('mezmun1').innerHTML = newdata.mezmun1;
            document.getElementById('qiymet').innerHTML = newdata.qiymet;
            document.getElementById('vaxt').innerHTML = newdata.vaxt;
            document.getElementById('kateqori').innerHTML = newdata.kateqoriya;



        },

        error: function(x, sts) {
            console.log("Error...");
        },
    });
}

function TrainingSil(id, img) {
    swal({
        title: "Xəbərdarlıq",
        text: "İnformasiyanın silinməsindən əminsinizmi?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr", "Bəli"],
    })


    .then((willDelete) => {
        if (willDelete) {

            $.ajax({
                url: "../settings/code/training-ajax.php",
                data: { TrainingSil: true, id: id, img: img },
                method: "POST",

                success: function(data) {
                    console.log(data);
                    swal({
                        title: "Əla!",
                        text: "İnformasiya silindi!",
                        icon: "success",

                    });
                    location.href = 'training.php'
                },
                error: function(x, sts) {
                    console.log("Error...");
                },
            });
        } else {
            swal('imtina edildi')
        }
    });


}

function qeydiyyatSil(id) {
    swal({
        title: "Xəbərdarlıq",
        text: "İnformasiyanın silinməsindən əminsinizmi?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr", "Bəli"],
    })


    .then((willDelete) => {
        if (willDelete) {

            $.ajax({
                url: "../settings/code/training-ajax.php",
                data: { qeydiyyatSil: true, id: id },
                method: "POST",

                success: function(data) {
                    console.log(data);
                    swal({
                        title: "Əla!",
                        text: "İnformasiya silindi!",
                        icon: "success",

                    });
                    location.href = 'qeydiyyat.php'
                },
                error: function(x, sts) {
                    console.log("Error...");
                },
            });
        } else {
            swal('imtina edildi')
        }
    });


}

function BlogStatus(id) {
    $.ajax({
        url: "../settings/code/blog-ajax.php",
        data: { Status: true, id: id },
        method: "POST",

        success: function(data) {
            swal("OK, Ugurla tamamlandi ")
        },

        error: function(x, sts) {
            console.log("Error...");
        },
    });
}

function BlogView(id) {
    $.ajax({
        url: "../settings/code/blog-ajax.php",
        data: { BlogView: true, id: id },
        method: "POST",

        success: function(data) {
            let newdata = JSON.parse(data);
            document.getElementById('img').innerHTML = `<img src="../../${newdata.sekil}" width="75" height="50" />`;
            document.getElementById('title').innerHTML = newdata.basliq;
            document.getElementById('context').innerHTML = newdata.mezmun;
            document.getElementById('readcount').innerHTML = newdata.oxunmasayi;

        },

        error: function(x, sts) {
            console.log("Error...");
        },
    });
}

function BlogSil(id, img) {
    swal({
        title: "Xəbərdarlıq",
        text: "İnformasiyanın silinməsindən əminsinizmi?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr", "Bəli"],
    })


    .then((willDelete) => {
        if (willDelete) {

            $.ajax({
                url: "../settings/code/blog-ajax.php",
                data: { Sil: true, id: id, img: img },
                method: "POST",

                success: function(data) {
                    console.log(data);
                    swal({
                        title: "Əla!",
                        text: "İnformasiya silindi!",
                        icon: "success",

                    });
                    location.href = 'blogs.php'
                },
                error: function(x, sts) {
                    console.log("Error...");
                },
            });
        } else {
            swal('imtina edildi')
        }
    });


}

function PortfolioSil(id, img) {
    swal({
        title: "Xəbərdarlıq",
        text: "İnformasiyanın silinməsindən əminsinizmi?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr", "Bəli"],
    })


    .then((willDelete) => {
        if (willDelete) {

            $.ajax({
                url: "../settings/code/portfolio-ajax.php",
                data: { Sil: true, id: id, img: img },
                method: "POST",

                success: function(data) {
                    console.log(data);
                    swal({
                        title: "Əla!",
                        text: "İnformasiya silindi!",
                        icon: "success",

                    });
                    location.href = 'portfolio.php'
                },
                error: function(x, sts) {
                    console.log("Error...");
                },
            });
        } else {
            swal('imtina edildi')
        }
    });


}






onload = function() {
    Status();
}
onload = function() {
    Status();
}

function UrlParam() {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get("status");
}

function Status() {
    if (UrlParam() == "ok") {
        swal("Əla!", "Əməliyyat uğurla icra edildi!", "success");
    }

    if (UrlParam() == "no") {
        swal("Təəssüf!", "Əməliyyat icra edilmədi!", "error");
    }

    if (UrlParam() != null) {
        setTimeout(Yonlendir, 2000);
    }
}

function Yonlendir() {
    location.href = location.protocol + '//' + location.host + location.pathname;
}