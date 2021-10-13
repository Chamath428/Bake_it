
  var sr = document.getElementById("sale-repo");
  var tsr = document.getElementById("total-sale-repo-aftr");
  var isr = document.getElementById("item-sale-repo-aftr");

var stsrd = document.getElementById("drop-down-list-daily-id");
var stsrw = document.getElementById("drop-down-list-weekly-id");
var stsrm = document.getElementById("drop-down-list-monthly-id");
var stsro = document.getElementById("drop-down-list-outlet-id");

var sisrd = document.getElementById("drop-down-list-daily-item-id");
var sisrw = document.getElementById("drop-down-list-weekly-item-id");
var sisrm = document.getElementById("drop-down-list-monthly-item-id");
var sisro = document.getElementById("drop-down-list-outlet-item-id");

var styd = document.getElementById("daily-btn");
var styw = document.getElementById("weekly-btn");
var stym = document.getElementById("monthly-btn");
var styo = document.getElementById("outlet-btn");


function selectTotalSaleRepoDaily(){
  
  stsrd.style.display = "flex";
  stsrw.style.display = "none";
  stsrm.style.display = "none";
  stsro.style.display = "none";

  sisrd.style.display = "flex";
  sisrw.style.display = "none";
  sisrm.style.display = "none";
  sisro.style.display = "none";
}
function selectTotalSaleRepoWeekly(){
  
  
  stsrd.style.display = "none";
  stsrw.style.display = "flex";
  stsrm.style.display = "none";
  stsro.style.display = "none";

  sisrw.style.display = "flex";
  sisrd.style.display = "none";
  sisrm.style.display = "none";
  sisro.style.display = "none";


}
function selectTotalSaleRepoMonthly(){
  
  stsrd.style.display = "none";
  stsrw.style.display = "none";
  stsrm.style.display = "flex";
  stsro.style.display = "none";

  sisrw.style.display = "none";
  sisrd.style.display = "none";
  sisrm.style.display = "flex";
  sisro.style.display = "none";

}
function selectTotalSaleRepoOutlet(){
  
  stsrd.style.display = "none";
  stsrw.style.display = "none";
  stsrm.style.display = "none";
  stsro.style.display = "flex";

  sisrw.style.display = "none";
  sisrd.style.display = "none";
  sisrm.style.display = "none";
  sisro.style.display = "flex";
}


