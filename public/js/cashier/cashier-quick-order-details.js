function finishedFunction() {

    if (confirm("Do you want to finished order?  click ok")) {
      alert("Order finished successfull");
      
      }
    
  }






const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}


function calc2(){
     var subTotal=document.getElementById("total-amount").value;
     var paidAmount=document.getElementById("paid-amount").value;
     var balance=parseFloat(paidAmount)-parseFloat(subTotal);
     if (document.getElementById("paid-amount").value=="") {
        document.getElementById("balance").value=0;
     }
     if (!isNaN(balance)){
     document.getElementById("balance").value=balance;
    }
}


function calc3(){
     var subTotal=document.getElementById("left-amount").value;
     var paidAmount=document.getElementById("paid-amount").value;
     var balance=parseFloat(paidAmount)-parseFloat(subTotal);
     if (document.getElementById("paid-amount").value=="") {
        document.getElementById("balance").value=0;
     }
     if (!isNaN(balance)){
     document.getElementById("balance").value=balance;
    }
}