const navigation = document.getElementById('side-nav');
document.querySelector('.toggle').onclick =function(){
    this.classList.toggle('active');
    navigation.classList.toggle('active');
}