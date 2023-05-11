

const question = document.querySelectorAll('.faq');

question.forEach(faq => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");
    })
})

const inputs = document.querySelectorAll(".input");

function focusFunc() {
let parent = this.parentNode;
parent.classList.add("focus");
}

function blurFunc() {
let parent = this.parentNode;
if (this.value == "") {
  parent.classList.remove("focus");
}
}

inputs.forEach((input) => {
input.addEventListener("focus", focusFunc);
input.addEventListener("blur", blurFunc);
});


var tab_lists = document.querySelectorAll(".tabs_list ul li");
var tab_items = document.querySelectorAll(".tab_item"); 

tab_lists.forEach(function(list){
list.addEventListener("click", function(){
  var tab_data = list.getAttribute("data-tc");
  
  tab_lists.forEach(function(list){
    list.classList.remove("active");
  });
  list.classList.add("active");
  
  tab_items.forEach(function(item){
    var tab_class = item.getAttribute("class").split(" ");
    if(tab_class.includes(tab_data)){
      item.style.display = "block";
    }
    else{
      item.style.display = "none";
    }
    
  })
  
})
})



