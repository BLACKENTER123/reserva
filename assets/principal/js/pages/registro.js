const frm = document.querySelector('#form');
const check = document.querySelector('#condiciones');

document.addEventListener('DOMContentLoaded', function () {
    frm.addEventListener('submit', function (e) {
        e.preventDefault();
            const http = new XMLHttpRequest();
            const url = base_url + 'registro/crear';

            http.open("POST", url, true);

            http.send(new FormData(frm));

            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    alertSW(res.msg, res.tipo);
                    if (res.tipo == 'success') {
                        frm.reset();
                        //Mandar a otra ruta
                    }
                }
            };
    });
})