

var sisrd = document.getElementById("drop-down-list-daily-item-id");
var sisrw = document.getElementById("drop-down-list-weekly-item-id");
var sisrm = document.getElementById("drop-down-list-monthly-item-id");
var sisro = document.getElementById("drop-down-list-outlet-item-id");

function selectTotalSaleRepoDaily(){

  sisrd.style.display = "flex";
  sisrw.style.display = "none";
  sisrm.style.display = "none";
  sisro.style.display = "none";
}
function selectTotalSaleRepoWeekly(){


  sisrw.style.display = "flex";
  sisrd.style.display = "none";
  sisrm.style.display = "none";
  sisro.style.display = "none";


}
function selectTotalSaleRepoMonthly(){
  sisrw.style.display = "none";
  sisrd.style.display = "none";
  sisrm.style.display = "flex";
  sisro.style.display = "none";

}
function selectTotalSaleRepoOutlet(){


  sisrw.style.display = "none";
  sisrd.style.display = "none";
  sisrm.style.display = "none";
  sisro.style.display = "flex";
}