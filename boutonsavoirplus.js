const readMoreBtn = document.querySelector('.boutonSP');
const text = document.querySelector('.txt1');


readMoreBtn.addEventListener("click", (e) => {
    text.classList.toggle("SP");
    if (readMoreBtn.innerText === "En Savoir Plus") {
      readMoreBtn.innerText = "Lire Moins";
    } else {
      readMoreBtn.innerText = "En Savoir Plus";
    }
  });



const readMoreBtn2 = document.querySelector('.boutonSP2');
const text2 = document.querySelector('.txt2');

readMoreBtn2.addEventListener("click", (e) => {
    text2.classList.toggle("SP2");
    if (readMoreBtn2.innerText === "En Savoir Plus") {
      readMoreBtn2.innerText = "Lire Moins";
    } else {
      readMoreBtn2.innerText = "En Savoir Plus";
    }
  });
