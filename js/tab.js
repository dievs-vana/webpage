const tab_btn = document.querySelectorAll('.tab-btn');
const tab_ctn = document.querySelectorAll('.tab-ctn');


const showPan = (indx, clrCde) =>{
    tab_btn.forEach(element => {
        element.style.backgroundColor = "";
        element.style.color = "";
    });
    // tab_btn[indx].style.backgroundColor = clrCde;
    //    tab_btn[indx].style.color="#fff";

    tab_ctn.forEach(element => {
        element.style.display="none";
    });

    tab_ctn[indx].style.display="block";
    // tab_ctn[indx].style.backgroundColor = clrCde;
//    tab_ctn[indx].style.color="#fff";
}

showPan(0,'#1abc9c');


