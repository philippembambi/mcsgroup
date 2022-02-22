var town_field = document.getElementById("town");
var phone_field = document.getElementById("phonecode");

town_field.addEventListener('selectionchange', function (e) {
    alert("Hello");
});

var mes_ami_facebook = [];
var ami;

mes_ami_facebook.forEach(ami => {

});


function getCookie() {
  return localStorage.getItem("ItemSaved");
}


function setCookie() {

    if((localStorage.getItem("ItemSaved")) == true){

        localStorage.setItem("ItemSaved", "0");

        var item =  localStorage.getItem("ItemSaved");
        var intItem = parseInt(item);
        intItem = intItem + 1;
        localStorage.setItem("ItemSaved", intItem);

        alert(intItem);
    }
    else{
        var item =  localStorage.getItem("ItemSaved");
        var intItem = parseInt(item);
        intItem = intItem + 1;
        localStorage.setItem("ItemSaved", intItem);
        alert(intItem);
    }

}

