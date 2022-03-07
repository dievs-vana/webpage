const tab_btn = document.querySelectorAll('.tab-btn');
const tab_ctn = document.querySelectorAll('.tab-ctn');


const showPan = (indx, clrCde) =>{
    tab_btn.forEach(element => {
        element.style.backgroundColor = "";
        element.style.color = "";
    });
    tab_btn[indx].style.backgroundColor = clrCde;
    tab_btn[indx].style.color="#fff";

    tab_ctn.forEach(element => {
        element.style.display="none";
    });

    tab_ctn[indx].style.display="block";
    tab_ctn[indx].style.backgroundColor = clrCde;
    tab_ctn[indx].style.color="#fff";
}

showPan(0,'#1abc9c');


(function () {
    let year_satart = 1998;
    let year_end = (new Date).getFullYear(); // current year
    let year_selected = 1998;

    let option = '';
    option = '<option>Year</option>'; // first option

    for (let i = year_satart; i <= year_end; i++) {
        let selected = (i === year_selected ? ' selected' : '');
        option += '<option value="' + i + '"' + selected + '>' + i + '</option>';
    }

    document.getElementById("year").innerHTML = option;
})();
