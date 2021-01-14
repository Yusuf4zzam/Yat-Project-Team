var box = document.getElementsByTagName("h4");

for(var i = 0; i < box.length; i++) {
    
    box[i].addEventListener("click", function() {
        
        this.parentElement.classList.toggle("active");

    });
}

