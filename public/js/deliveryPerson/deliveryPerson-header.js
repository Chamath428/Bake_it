function leftBakeIt() {
    if(document.getElementById("bakeId").style.marginLeft=="17%"){
        document.getElementById("bakeId").style.marginLeft = "0";
    }
    else {document.getElementById("bakeId").style.marginLeft = "17%";}
  }

const selectElement = (element) => document.querySelector(element);

selectElement('.toggle').addEventListener('click',() => {
    selectElement('.navigation').classList.toggle('active');
    selectElement('.bgg').classList.toggle('active');
});
